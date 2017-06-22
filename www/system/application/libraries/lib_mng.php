<?php

/**
 * Описание файла: Общий помощьник для контроллеров
 * @author KNARS
 * @copyright 20.5.2017 12:36
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class lib_mng {
    
    /**
     * Добавление информации об объекте в базу
     */
    function add ($name, $title = '') {
        
        $CI = &get_instance();
        
        $md = 'mdl_'.$name;
        
        $CI->load->model($md); // Загрузка модели
        
        if ($CI->{$md}->add() !== FALSE) {
            
            // Делаем редирект на список ссылок
            redirect ('admin/'.$name.'s');
            
        } else {
            
            // Иначе, показываем форму добавления
            $CI->lib_view->admin_page($name.'/add', array(), $title);
            
        }
        
    }
    
    /**
     * Отображение информации об объекте
     */
    function show ($name, $id, $title = '') {
        
        $CI = &get_instance();
        
        $md = 'mdl_'.$name;
        
        $CI->load->model($md); // Загрузка модели
        
        $data = $CI->{$md}->get($id);
        
        if (empty($data)) {
            die('Такой записи нет в базе');
        }
        
        $CI->lib_view->admin_page($name.'/view', $data, $title);
        
    }
    
    /**
     * Редактирование информации об объекте
     */
    function edit ($name, $id, $title = '') {
        
        $CI = &get_instance();
        
        $md = 'mdl_'.$name;
        
        $CI->load->model($md); // Загрузка модели
        
        // Загружаем данные для этого объекта
        $data = $CI->{$md}->get($id);
        
        if ($CI->{$md}->edit($id) !== FALSE) {
            
            // Делаем редирект на список ссылок
            redirect ('admin/'.$name.'s');
            
        } else {
            
            // Иначе, показываем форму редактирования
            $CI->lib_view->admin_page($name.'/edit', $data, $title);
            
        }
        
    }
    
    /**
     * Удаление информации об объекте из базы
     */
    function del ($name, $id) {
        
        $CI = &get_instance();
        
        $md = 'mdl_'.$name;
        
        $CI->load->model($md); // Загрузка модели
        
        $CI->{$md}->del($id);
        
        // Делаем редирект на список ссылок
        redirect ('admin/'.$name.'s');
        
    }
    
}

?>
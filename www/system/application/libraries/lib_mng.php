<?php

/**
 * Описание файла: Общий помощьник для контроллеров
 * @author KNARS
 * @copyright 20.5.2017 12:36
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class lib_mng {
    
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
    
}

?>
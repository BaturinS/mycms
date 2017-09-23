<?php

/**
 * Описание файла: Контроллер "Страницы"
 * @author KNARS
 * @copyright 10.8.2017 03:09
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Pages extends Controller {
    
    var $iname = 'page';
        
    /**
     * Конструктор
     */
    function Pages () {
        
        parent::Controller();
        
        $mdl_name = 'mdl_'.$this->iname; // Имя модели
        
        $this->load->model($mdl_name); // Загружаем модель        
        
    }
    
    /**
     * Список страниц
     */
    function index ($page_num = 0) {
        
        $this->lib_mng->show_index($this->iname, 'Список страниц', $page_num);
    }
    
    /**
     * Добавление новой страницы
     */
    function add () {
        
        $this->lib_mng->add($this->iname, 'Добавление новой страницы');
        
    }
    
    /**
     * Просмотр страницы
     */
    function show ($id) {
        
        $this->lib_mng->show($this->iname, $id, 'Просмотр страницы');
        
    }
     
    /**
     * Редактирование страницы
     */
    function edit ($id) {
        
        $this->lib_mng->edit($this->iname, $id, 'Изменение страницы');
        
    }
     
    /**
     * Удаление страницы
     */
    function del ($id) {
        
        $this->lib_mng->del($this->iname, $id);
        
    }
     
    /**
     * Сортировка
     */
    function sort ($field) {
        
        $this->lib_mng->set_sort($this->iname, $field);
        
    }
      
    /**
     * Поиск
     */
    function search () {
        $this->lib_mng->do_search($this->iname);
    }
	
}

?>
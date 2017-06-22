<?php

/**
 * Описание файла: Контроллер "Ссылки"
 * @author KNARS
 * @copyright 25.5.2017 22:43
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Links extends Controller {
    
    var $iname = 'link';
        
    // Конструктор
    function Links () {
        
        parent::Controller();
        
        $mdl_name = 'mdl_'.$this->iname; // Имя модели
        
        $this->load->model($mdl_name); // Загружаем модель        
        
    }
    
    function index () {
        // Временная заглушка
        echo 'Здесь будет список ссылок';        
    }
    
    /**
     * Добавление новой ссылки
     */
    function add () {
        
        $this->lib_mng->add($this->iname, 'Добавление новой ссылки');
        
    }
    
    /**
     * Просмотр ссылки
     */
     function show ($id) {
        
        $this->lib_mng->show($this->iname, $id, 'Просмотр ссылки');
        
     }
     
     /**
     * Редактирование ссылки
     */
     function edit ($id) {
        
        $this->lib_mng->edit($this->iname, $id, 'Изменение ссылки');
        
     }
     
     /**
     * Удаление ссылки
     */
     function del ($id) {
        
        $this->lib_mng->del($this->iname, $id);
        
     }
	
}

?>
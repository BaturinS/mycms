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
    
    function generator () {
        
        for ($i = 1100; $i < 1200; $i++) {
            
            $data = array (
                'link_id' => $i,
                'descr' => $i,
                'url' => $i
            );

            $this->db->insert('links', $data);
            
        }
        
        echo 'Записи добавлены';
        
    }
    
    function mass_del () {
        
        for ($i = 1100; $i < 1200; $i++) {
            
            $this->db->where('link_id', $i);
            $this->db->delete('links');
            
        }
        
        echo 'Записи удалены';
        
    }
    
    /**
     * Список ссылок
     */
    function index () {
        
        $this->lib_mng->show_index($this->iname, 'Список ссылок');
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
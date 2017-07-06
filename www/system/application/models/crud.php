<?php

/**
 * Описание файла: Общая для всех модель
 * @author KNARS
 * @copyright 18.5.2017 19:43
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Crud extends Model {
    
    var $table = ''; //Имя таблицы
    
    var $idkey = 'id'; //Ключ ID
    
    var $add_rules = array(); //Правила валидации для добавления
    
    var $edit_rules = array(); //Правила валидации для редактирования
    
    /**
     * Конструктор
     */
    function Crud () {
        parent::Model();
    }
    
    /**
     * Функция добавления
     */
    function add () {
        
        $this->form_validation->set_rules($this->add_rules);
        
        if ($this->form_validation->run()) {
            
            $data = array();
            
            foreach ($this->add_rules as $one) {
                
                $f = $one['field'];
                $data[$f] = $this->input->post($f);
            }
        
        	$this->db->insert($this->table, $data);
            return $this->db->insert_id(); //Возвращает номер товара
            
        } else {
            
            return FALSE;
            
        }
    }
    
    /**
     * Функция редактирования
     */
    function edit ($id) {
        
        $this->form_validation->set_rules($this->edit_rules);
        
        if ($this->form_validation->run()) {
            
            $data = array();
            
            foreach ($this->edit_rules as $one) {
                
                $f = $one['field'];
                
                $data[$f] = $this->input->post($f);
            }
            
            $this->db->where($this->idkey, $id);
        	$this->db->update($this->table, $data);
            return TRUE;
            
        } else {
            
            return FALSE;
            
        }
    }
    
    /**
     * Функция удаления
     */
    function del ($id) {
        $this->db->where($this->idkey, $id);
        $this->db->delete($this->table);
    }
    
    /**
     * Получение данных
     */
    function get ($id) {
        $this->db->where($this->idkey, $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }
    
    /**
     * Получение списка
     */
    function getlist ($start_from = FALSE) {
        
        // Ставим список сортировки
        $sort_by = $this->session->userdata('sort_by');
        $sort_dir = $this->session->userdata('sort_dir');
        
        // Если не пустые значения, то ставим сортировку
        if (!empty($sort_by)) {
            
            $this->db->order_by($sort_by, $sort_dir);
            
        }
        
        if ($start_from !== FALSE) {
        
            $this->db->limit($this->config->item('cms_per_page'), $start_from);
            // Ограничение
            
        }
        
        $query = $this->db->get($this->table);
        return $query->result_array();
        	
    }
    
}

?>
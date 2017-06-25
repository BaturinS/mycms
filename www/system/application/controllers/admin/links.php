<?php

/**
 * �������� �����: ���������� "������"
 * @author KNARS
 * @copyright 25.5.2017 22:43
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Links extends Controller {
    
    var $iname = 'link';
        
    // �����������
    function Links () {
        
        parent::Controller();
        
        $mdl_name = 'mdl_'.$this->iname; // ��� ������
        
        $this->load->model($mdl_name); // ��������� ������        
        
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
        
        echo '������ ���������';
        
    }
    
    function mass_del () {
        
        for ($i = 1100; $i < 1200; $i++) {
            
            $this->db->where('link_id', $i);
            $this->db->delete('links');
            
        }
        
        echo '������ �������';
        
    }
    
    /**
     * ������ ������
     */
    function index () {
        
        $this->lib_mng->show_index($this->iname, '������ ������');
    }
    
    /**
     * ���������� ����� ������
     */
    function add () {
        
        $this->lib_mng->add($this->iname, '���������� ����� ������');
        
    }
    
    /**
     * �������� ������
     */
     function show ($id) {
        
        $this->lib_mng->show($this->iname, $id, '�������� ������');
        
     }
     
     /**
     * �������������� ������
     */
     function edit ($id) {
        
        $this->lib_mng->edit($this->iname, $id, '��������� ������');
        
     }
     
     /**
     * �������� ������
     */
     function del ($id) {
        
        $this->lib_mng->del($this->iname, $id);
        
     }
	
}

?>
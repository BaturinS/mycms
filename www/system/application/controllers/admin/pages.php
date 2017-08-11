<?php

/**
 * �������� �����: ���������� "��������"
 * @author KNARS
 * @copyright 10.8.2017 03:09
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Pages extends Controller {
    
    var $iname = 'page';
        
    /**
     * �����������
     */
    function Pages () {
        
        parent::Controller();
        
        $mdl_name = 'mdl_'.$this->iname; // ��� ������
        
        $this->load->model($mdl_name); // ��������� ������        
        
    }
    
    /**
     * ������ �������
     */
    function index ($page_num = 0) {
        
        $this->lib_mng->show_index($this->iname, '������ �������', $page_num);
    }
    
    /**
     * ���������� ����� ��������
     */
    function add () {
        
        $this->lib_mng->add($this->iname, '���������� ����� ��������');
        
    }
    
    /**
     * �������� ��������
     */
    function show ($id) {
        
        $this->lib_mng->show($this->iname, $id, '�������� ��������');
        
    }
     
    /**
     * �������������� ��������
     */
    function edit ($id) {
        
        $this->lib_mng->edit($this->iname, $id, '��������� ��������');
        
    }
     
    /**
     * �������� ��������
     */
    function del ($id) {
        
        $this->lib_mng->del($this->iname, $id);
        
    }
     
    /**
     * ����������
     */
    function sort ($field) {
        
        $this->lib_mng->set_sort($this->iname, $field);
        
    }
      
    /**
     * �����
     */
    function search () {
        $this->lib_mng->do_search($this->iname);
    }
	
}

?>
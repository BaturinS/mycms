<?php

/**
 * �������� �����: ������ ��� "�������"
 * @author KNARS
 * @copyright 10.8.2017 3:19
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class mdl_page extends CRUD {
    
    var $table = 'pages'; // ��� �������
    var $idkey = 'page_id';
    
    // ������� ��������� ��� ����������
    var $add_rules = array (
    
        array (
            'field' => 'page_id',
            'label' => 'ID ��������',
            'rules' => 'required|az_numeric|uniq[page_id]'
        ),
        
        array (
            'field' => 'title',
            'label' => '��������',
            'rules' => 'required|valid_title'
        ),
        
        array (
            'field' => 'text',
            'label' => '�����',
            'rules' => ''
        ),
        
        array (
            'field' => 'date',
            'label' => '����',
            'rules' => 'required|numeric'
        ),
        
        array (
            'field' => 'showed',
            'label' => '����������',
            'rules' => 'numeric'
        )
    
    );
    
    // ������� ��������� ��� ��������������
    var $edit_rules = array (
        
        array (
            'field' => 'title',
            'label' => '��������',
            'rules' => 'required|valid_title'
        ),
        
        array (
            'field' => 'text',
            'label' => '�����',
            'rules' => ''
        ),
        
        array (
            'field' => 'showed',
            'label' => '����������',
            'rules' => 'numeric'
        )
    
    );
    
}

?>
<?php

/**
 * �������� �����: ������ ��� "������"
 * @author KNARS
 * @copyright 25.5.2017 22:38
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class mdl_link extends CRUD {
    
    var $table = 'links'; // ��� �������
    var $idkey = 'link_id';
    
    // ������� ��������� ��� ����������
    var $add_rules = array (
    
        array (
            'field' => 'link_id',
            'label' => 'ID ������',
            'rules' => 'required|az_numeric|uniq[link_id]'
        ),
        
        array (
            'field' => 'descr',
            'label' => '��������',
            'rules' => 'required|valid_title'
        ),
        
        array (
            'field' => 'url',
            'label' => 'URL',
            'rules' => 'required|valid_url'
        ),
    
    );
    
}

?>
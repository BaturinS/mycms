<?php

/**
 * �������� �����: ����� ��������� ��� ������������
 * @author KNARS
 * @copyright 20.5.2017 12:36
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class lib_mng {
    
    function add ($name, $title = '') {
        
        $CI = &get_instance();
        
        $md = 'mdl_'.$name;
        
        $CI->load->model($md); // �������� ������
        
        if ($CI->{$md}->add() !== FALSE) {
            
            // ������ �������� �� ������ ������
            redirect ('admin/'.$name.'s');
            
        } else {
            
            // �����, ���������� ����� ����������
            $CI->lib_view->admin_page($name.'/add', array(), $title);
            
        }
        
    }
    
}

?>
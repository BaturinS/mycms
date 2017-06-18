<?php

/**
 * �������� �����: ���������� ���������
 * @author KNARS
 * @copyright 20.5.2017 12:13
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class lib_view {
    
    // ������� ���������� ������� �� ������ ������, ������ � ��������
    function admin_page ($pagename, $data = array(), $title = '') {
        
        // ������� ������� ����� - ��� �������� ������ ���������
        $d = array();
        $d['page_title'] = $title;
        
        $CI = &get_instance(); // ������ � CodeIgniter
        
        $CI->load->view('admin/header.php', $d);
        
        // ������ ������� ����� ���������
        $CI->load->view('admin/'.$pagename, $data);
        
        // ������ ��� ������
        $fdata = array();
        $fdata['validation_errors'] = validation_errors();
        
        // ����� ����� ������
        $CI->load->view('admin/footer.php', $fdata);
        
    }
    
}

?>
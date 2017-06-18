<?php

/**
 * Описание файла: Библиотека просмотра
 * @author KNARS
 * @copyright 20.5.2017 12:13
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class lib_view {
    
    // Функция отображает админку на основе хедера, футера и середины
    function admin_page ($pagename, $data = array(), $title = '') {
        
        // Вначале выводим футер - ему передаем только заголовок
        $d = array();
        $d['page_title'] = $title;
        
        $CI = &get_instance(); // Доступ к CodeIgniter
        
        $CI->load->view('admin/header.php', $d);
        
        // Теперь готовим вывод серединки
        $CI->load->view('admin/'.$pagename, $data);
        
        // Данные для футера
        $fdata = array();
        $fdata['validation_errors'] = validation_errors();
        
        // Здесь вывод футера
        $CI->load->view('admin/footer.php', $fdata);
        
    }
    
}

?>
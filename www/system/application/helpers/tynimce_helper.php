<?php

/**
 * Описание файла: Хелпер для вывода TinyMCE
 * @author KNARS
 * @copyright 24.9.2017 6:52
 */

if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Возвращает код редактора для элемента с указанием ID
function show_tinymce($id)
{
    $CI = &get_instance();
    $data = array();
    $data['id'] = $id;
    
    // Считываем код из файла
    $code = $CI->load->view('tinymce', $data, TRUE);
    
    return $code;
}
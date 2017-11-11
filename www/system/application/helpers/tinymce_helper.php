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

// Функция посылает хедеры, отменяющие кэширование
function nocache_headers()
{
    // Date in the past
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    
    // Always modified
    header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
    
    // HTTP/1.1
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Cache-Control: max-age=0", false);
    
    // HTTP/1.0
    header("Pragma: no-cache");
}
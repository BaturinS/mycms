<?php

/**
 * @author KNARS
 * @copyright 29.10.2017 16:54
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Images extends Controller
{
    function Images()
    {
        parent::Controller();
    }
    
    // Показать список картинок
    function index()
    {
        // Загрузка хелпера Directory
        $this->load->helper('directory');
        
        // Список файлов
        $list = directory_map('./img/upload/', TRUE);
        
        // Записываем список файлов в массив для передачи в вид
        $data = array();
        $data['list'] = $list;
        
        // Отображаем страницу списка
        $this->lib_view->admin_page('images/index', $data, 'Список картинок');
    }
    
    // Удалить картинку
    function del($filename)
    {
        $filename = base64_decode($filename);
        unlink('./img/upload/'.$filename);
        redirect('admin/images');
    }
    
    // Показать форму загрузки картинок
    function show_upload()
    {
        $this->lib_view->admin_page('images/upload', array(), 'Загрузка картинки');
    }
    
    // Функция загрузки
    function do_upload()
    {
        $this->load->library('upload');
        
        // Конфигурация для загрузки
        $config = array();
        $config['upload_path'] = './img/upload/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
        
        // Применяем конфигурацию
        $this->upload->initialize($config);
        
        // Загружаем картинку
        $this->upload->do_upload();
        
        // Переадресация к списку картинок
        redirect('admin/images');
    }
    
    // Генерация списка картинок для TinyMCE
    function img_list()
    {
        // Загружаем хелпер TinyMCE
        $this->load->helper('tinymce');
        
        // Передаем хедеры запрета кэширования
        nocache_headers();
        
        // Формируем код списка
        $code = 'var tinyMCEImageList = new Array(';
        
        // Загружаем хелпер Directory
        $this->load->helper('directory');
        
        // Получаем список файлов
        $filelist = directory_map('./img/upload/', TRUE);
        $firstelement = true; // Для первого элемента, чтобы не ставить запятую
        
        foreach ($filelist as $one)
        {
            if ($firstelement)
            {
                $firstelement = false; // Отменяем для следующих итераций
            } else {
                $code .= ', '; // Иначе добавляем запятую
            }
            
            $code .= "\r\n"; // Перевод строки
            
            // Добавляем элемент списка
            $code .= '["'.$one.'", "'.base_url().'img/upload/'.$one.'"]';
        }
        
        // Конец кода
        $code .= "\r\n );";
        
        echo $code; // Выводим код
    }
}
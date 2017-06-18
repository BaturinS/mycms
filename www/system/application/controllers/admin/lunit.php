<?php

/**
 * Описание файла: Контроллер входа и выхода для админки
 * 
 * @author KNARS
 * @copyright 9.5.2017 2:15
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Lunit extends Controller {
    
    function login () {
        echo 'Вход';
    }
    
    function logout () {
        echo 'Выход';
    }
    
}

?>
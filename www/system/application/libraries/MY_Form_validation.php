<?php

/**
 * �������� �����: ���������� ������ ��������� ����
 * @author KNARS
 * @copyright 25.5.2017 23:19
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Form_validation extends CI_Form_validation {
    
    /**
     * ����� ������������� ������
     */
     function MY_Form_validation () {
        
        parent::CI_Form_validation();
        
        // ��������� ����� �������� ����
        $CI = &get_instance();
        $CI->lang->load('validation_new');
        
     }
     
     /**
      * ������� �������� �� ������� ��������� ���� � ����
      */
      function az_numeric($str) {
        return (!preg_match("/^([a-z0-9])+$/i", $str)) ? FALSE : TRUE;
      }
      
      /**
      * ��������� url
      */
      function valid_url($str) {
        return (!preg_match('/(http|https):\/\/(\w+:(0,1)\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:;.?+=&%@!\-\/]))?/', $str)) ? FALSE : TRUE;
      }
      
      /**
      * �������� ��������
      */
      function valid_title($str) {
        return (!preg_match('/^[�-��-���\w\d\s\.\,\+\-\_\!\?\#\%\@\�\/\(\)\[\]\:\&\$\*]{1,250}$/', $str)) ? FALSE : TRUE;
      }
      
      /**
       * �������� �� ������������
       */
       function uniq ($str, $param) {
        // ������ CI
        $CI = &get_instance();
        // ��� �������
        $tname = str_replace('_id', 's', $param);
        $CI->db->where($param, $str);
        return ($CI->db->count_all_results($tname)==0);
       }
    
}

?>
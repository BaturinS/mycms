<?php

/**
 * @author KNARS
 * @copyright 9.5.2017 2:28
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class mdl_set extends Model {
    
    function mdl_set () {
        parent::Model();
        $this->load_config();
    }
    
    function load_config () {
        
        $query = $this->db->get('settings');
        
        $sets = $query->result();
        
        foreach ($sets as $row) {
            
            $val = $row->value;
            if (is_numeric($val)) {
                $val = $val + 0;
            }
            $this->config->set_item($row->param, $val);
            
        }
        
    }
    
}

?>
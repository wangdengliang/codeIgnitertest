<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News_model
 *
 * @author dengliang.wang
 */
class News_model extends CI_Model
{
    //put your code here
    public function __construct() {
        $this->load->database();
    }
    public function get_news($slug = FALSE) {
        
        if($slug == FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array;
        }
        
        $query = $this->db->get_where('news',array('slug' =>$slug));
        return $query->row_array();
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Blog
 *
 * @author dengliang.wang
 */
class Blog  extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->databases();
    }
    //put your code here
    public function index()
    {
        //echo 'hello word';
        $this->load->view('blogview');
        $game = $this->db->query('SELECT * FROM codeIg_test_wdl.news;');
        
        foreach ($game->result_array() as $g) {
            echo $g->title; 
            echo 'hhhhhhh';
        }
    }
    public function test($p1,$p2)
    {
        
        echo $p1;
        echo $p2;
    }
}

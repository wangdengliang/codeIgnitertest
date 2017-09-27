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
    //put your code here
    public function index()
    {
        echo 'hello word';
    }
    public function test($p1,$p2)
    {
        
        echo $p1;
        echo $p2;
    }
}

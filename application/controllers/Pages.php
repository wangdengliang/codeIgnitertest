<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 *
 * @author wdlymr
 */
class Pages extends CI_Controller {
    //put your code here
    public function view($page = 'home') {
       
        if(!file(APPPATH.'views/pages/'.$page.'php'))
        {
            show_404();
        }
        
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load>view('templaes/footer',$data);
        
    }
}

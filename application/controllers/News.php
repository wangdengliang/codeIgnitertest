<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News
 *
 * @author dengliang.wang
 */
class News extends CI_Controller    
{
    //put your code here
    public function __construct() {
        parent::__construct();
        
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
    
    public function index() {
        
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'news archive';
        
        $this->load->view('templates/header',$data);
        $this->load->view('news/index',$data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug = NULL) {
        
    $data['news_item'] = $this->news_model->get_news($slug);

    if (empty($data['news_item']))
    {
        show_404();
    }

    $data['title'] = $data['news_item']['title'];

    $this->load->view('templates/header', $data);
    $this->load->view('news/view', $data);
    $this->load->view('templates/footer');
                
    }
}

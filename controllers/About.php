<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('publicmodel');
        
    }
    
    function index(){
        $head = array();
        $data = array();
        $head['brand'] = $this->Publicmodel->getShopBrands();
        $head['categories'] = $this->Publicmodel->getShopCategory_mother(['sub_for' => 0, 'category_name !=' => '']);
        $head['sub_categories'] = $this->Publicmodel->getShopCategory_child();
        $head['title'] = 'About Us - Aussievitaminstore';
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
  
        $this->render('about', $head, $data);
    }
    
}
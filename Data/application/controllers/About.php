<?php

class About extends CI_Controller {

    public function index() {
        $data['ViewContent']='about';
        
        $data['header']=  'About';
        $this->load->view('layout/main',$data);
    }
}
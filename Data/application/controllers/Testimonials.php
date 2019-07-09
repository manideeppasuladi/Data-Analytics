<?php

class Testimonials extends CI_Controller {

    public function index() {
        $data['ViewContent']='testimonials';
        
        $data['header']=  'Testimonials';
        $this->load->view('layout/main',$data);
    }
}
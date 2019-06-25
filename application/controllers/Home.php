<?php

class Home extends CI_Controller {

    public function index() {
        $data['ViewContent']='home';
        
        $data['about']='Krushi Infras India Pvt. Ltd. ';
        $this->load->view('layout/main',$data);
    }
}
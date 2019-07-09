<?php

class Achievements extends CI_Controller {

    public function index() {
        $data['ViewContent']='achievements';
        
        $data['header']=  'Achievements';
        $this->load->view('layout/main',$data);
    }
}
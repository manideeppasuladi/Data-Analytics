<?php

class Home extends CI_Controller {

    public function index() {
        $data['ViewContent']='home';
        
        $data['header']=  'Data Analytics Club';
        $this->load->view('layout/main',$data);
    }
}
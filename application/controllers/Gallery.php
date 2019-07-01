<?php

class Gallery extends CI_Controller {

    public function index() {
        $data['ViewContent']='gallery';
        
        $data['header']=  'Gallery';
        $this->load->view('layout/main',$data);
    }
}
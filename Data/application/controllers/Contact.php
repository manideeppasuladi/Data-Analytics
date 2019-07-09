<?php

class Contact extends CI_Controller {

    public function index() {
        $data['ViewContent']='contact';
        
        $data['header']=  'Contact';
        $this->load->view('layout/main',$data);
    }
}
<?php

class Team extends CI_Controller {

    public function index() {
        $data['ViewContent']='team';
        
        $data['header']=  'Organising Body';
        $this->load->view('layout/main',$data);
    }
}
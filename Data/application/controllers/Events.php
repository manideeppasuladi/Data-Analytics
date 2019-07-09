<?php

class Events extends CI_Controller {

    public function index() {
        $data['ViewContent']='events';
        
        $data['header']=  'News & Events ';
        $this->load->view('layout/main',$data);
    }
}
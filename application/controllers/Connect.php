<?php

class Connect extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Executive RP';
        $this->load->view('templates/header', $data); 
        $this->load->view('connect/index'); 
        $this->load->view('templates/footer'); 
    }
}
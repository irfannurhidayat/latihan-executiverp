<?php

class Geng extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Executive RP';
        $this->load->view('templates/header', $data); 
        $this->load->view('geng/index'); 
        $this->load->view('templates/footer'); 
    }
}
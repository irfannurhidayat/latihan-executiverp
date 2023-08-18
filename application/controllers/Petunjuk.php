<?php

class Petunjuk extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Executive RP';
        $this->load->view('templates/header', $data); 
        $this->load->view('petunjuk/index'); 
        $this->load->view('templates/footer'); 
    }
}
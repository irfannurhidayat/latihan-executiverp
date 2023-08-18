<?php

class Team extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Executive RP';
        $this->load->view('templates/header', $data); 
        $this->load->view('team/index'); 
        $this->load->view('templates/footer'); 
    }
}
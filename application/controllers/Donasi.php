<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_donasi');
    }

    public function index()
    {
        $data['donasi'] = $this->M_donasi->getAllUser();
        $this->load->view('templates/header', $data); 
        $this->load->view('donasi/index'); 
        $this->load->view('templates/footer'); 
    }
}
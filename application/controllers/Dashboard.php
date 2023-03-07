<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        // untuk memberi perintah jika belum login maka tidak bisa masuk
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}

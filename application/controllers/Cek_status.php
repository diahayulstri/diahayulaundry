<?php

class Cek_status extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cek_laundry_m');
        $this->load->model('Paket_m');
    }

    public function index()
    {
        $data['paket'] = $this->Paket_m->get_paket();
        $kode_invoice = $this->input->post('kode_invoice');
        $data['data'] = $this->Cek_laundry_m->cek_status($kode_invoice);
        $data['title'] = 'Cek Status Laundry';
        $this->load->view('templates/header_landing', $data);
        $this->load->view('cek_laundry/index', $data);
        $this->load->view('templates/footer_landing');
    }
}

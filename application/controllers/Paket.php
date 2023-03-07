<?php

class Paket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        if ($this->session->userdata('role') == 'kasir') {
            echo "Error Unauthorized";
            die;
        }
        if ($this->session->userdata('role') == 'owner') {
            echo "Error Unauthorized";
            die;
        }
    }

    public function get_paket($id_paket)
    {
        echo json_encode($this->db->get_where('tb_paket', ['id_paket' => $id_paket])->row_array());
    }

    public function index()
    {
        $data['title'] = 'Data Paket';
        // memanggil data paket dari tabel paket menggunakan model
        $data['paket'] = $this->Paket_m->get_paket();

        $this->load->view('templates/header', $data);
        $this->load->view('paket/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_paket', 'Id Paket', 'required');

        if ($valid->run()) {
            $this->Paket_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
            redirect('paket');
        }

        $data['title'] = 'Tambah Data';
        $data['paket'] = $this->Paket_m->get_paket();
        $data['outlet'] = $this->Outlet_m->get_outlet();

        $this->load->view('templates/header', $data);
        $this->load->view('paket/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_paket', 'Id Paket', 'required');

        if ($valid->run()) {
            $this->Paket_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Data Berhasil Diubah');
            redirect('paket');
        }

        $data['title'] = 'Ubah Data';
        $data['paket'] = $this->Paket_m->get_paket($id);
        $data['outlet'] = $this->Outlet_m->get_outlet();
        $this->load->view('templates/header', $data);
        $this->load->view('paket/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->delete('tb_paket', ['id_paket' => $id]);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('paket');
    }
}

<?php

class Outlet extends CI_Controller
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

    public function index()
    {
        $data['title'] = 'Data Outlet';
        // memanggil data outlet dari tabel outlet menggunakan model
        $data['outlet'] = $this->Outlet_m->get_outlet();
        $this->load->view('templates/header', $data);
        $this->load->view('outlet/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_outlet', 'Id Outlet', 'required');

        if ($valid->run()) {
            $this->Outlet_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
            redirect('outlet');
        }

        $data['title'] = 'Tambah Data';
        $data['outlet'] = $this->Outlet_m->get_outlet();

        $this->load->view('templates/header', $data);
        $this->load->view('outlet/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_outlet', 'Id Outlet', 'required');

        if ($valid->run()) {
            $this->Outlet_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Data Berhasil Diubah');
            redirect('outlet');
        }

        $data['title'] = 'Ubah Data';
        $data['outlet'] = $this->Outlet_m->get_outlet($id);

        $this->load->view('templates/header', $data);
        $this->load->view('outlet/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->delete('tb_outlet', ['id_outlet' => $id]);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('outlet');
    }
}

<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        // untuk membatasi hak akses
        if ($this->session->userdata('role') == 'kasir') {
            echo "Error Unauthorized";
            die;
        }
    }

    public function index()
    {
        $data['title'] = 'Data User';
        // untuk memanggil data user dari tabel user menggunakan model 
        $data['user'] = $this->User_m->get_user();
        $this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_user', 'Id User', 'required');

        if ($valid->run()) {
            $this->User_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
            redirect('user');
        }

        $data['title'] = 'Tambah Data';
        $data['user'] = $this->User_m->get_user();
        $data['outlet'] = $this->Outlet_m->get_outlet();

        $this->load->view('templates/header', $data);
        $this->load->view('user/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_user', 'Id User', 'required');

        if ($valid->run()) {
            $this->User_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Data Berhasil Diubah');
            redirect('user');
        }

        $data['title'] = 'Ubah Data';
        $data['user'] = $this->User_m->get_user($id);
        $data['outlet'] = $this->Outlet_m->get_outlet();

        $this->load->view('templates/header', $data);
        $this->load->view('user/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->delete('tb_user', ['id_user' => $id]);
        $this->session->set_flashdata('message', 'Data Berhasil DiHapus');
        redirect('user');
    }
}

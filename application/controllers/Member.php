<?php

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        // untuk membatasi hak akses untuk halaman member
        // if ($this->session->userdata('role') == 'kasir') {
        //     echo "Error Unauthorized";
        //     die;
        // }
        if ($this->session->userdata('role') == 'owner') {
            echo "Error Unauthorized";
            die;
        }
    }

    public function index()
    {
        $data['title'] = 'Data Member';
        // memanggil data member dari tabel member menggunakan model
        $data['member'] = $this->Member_m->get_member();
        $this->load->view('templates/header', $data);
        $this->load->view('member/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_member', 'Id Member', 'required');

        if ($valid->run()) {
            $this->Member_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
            redirect('member');
        }

        $data['title'] = 'Tambah Data';
        $data['member'] = $this->Member_m->get_member();

        $this->load->view('templates/header', $data);
        $this->load->view('member/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_member', 'Id Member', 'required');

        if ($valid->run()) {
            $this->Member_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Data Berhasil Diubah');
            redirect('member');
        }

        $data['title'] = 'Ubah Data';
        $data['member'] = $this->Member_m->get_member($id);

        $this->load->view('templates/header', $data);
        $this->load->view('member/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->delete('tb_member', ['id_member' => $id]);
        $this->session->set_flashdata('message', 'Data Berhasil DiHapus');
        redirect('member');
    }
}

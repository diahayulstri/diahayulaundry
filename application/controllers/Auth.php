<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {
        // untuk memanggil data outlet dari tabel outlet menggunakan model 
        $data['outlet'] = $this->Outlet_m->get_outlet();
        $data['title'] = 'Selamat Datang';
        $this->load->view('templates/header_landing', $data);
        $this->load->view('auth/index', $data);
        $this->load->view('templates/footer_landing', $data);
    }

    public function login()
    {

        // jika id user dari tabel user tidak kosong, maka akan masuk ke halaman dashboard
        if ($this->session->userdata('id_user') != '') {
            redirect('dashboard');
        }

        $valid = $this->form_validation;

        $valid->set_rules('username', 'Username', 'required');
        $valid->set_rules('password', 'Password', 'required');

        if ($valid->run()) {
            $post = $this->input->post();

            $this->db->where('username', $post['username']);
            $user = $this->db->get('tb_user')->row_array();

            if ($user) {
                if (password_verify($post['password'], $user['password'])) {

                    $array = array(
                        'id_user' => $user['id_user'],
                        'id_outlet' => $user['id_outlet'],
                        'nama' => $user['nama'],
                        'role' => $user['role'],
                    );

                    $this->session->set_userdata($array);
                    $this->session->set_flashdata('success', 'Login Berhasil');
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Password anda salah');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('error', 'Username tidak ditemukan');
                redirect('auth/login');
            }
        }


        $this->load->view('auth/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        session_destroy();
        redirect('auth/login');
    }
}

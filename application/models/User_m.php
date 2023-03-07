<?php

class User_m extends CI_Model
{

    public function get_user($id = '')
    {
        if ($id == '') {
            // untuk mengambil tabel outlet, member, dan user berdasarkan nama dan menggati nama tersebut menggunakan nama alias
            $this->db->select('*, tb_outlet.nama as nama_outlet');
            // untuk menjoin tabel outlet 
            $this->db->join('tb_outlet', 'id_outlet', 'left');
            // untuk mengambil data user dari tabel user 
            return $this->db->get('tb_user')->result_array();
        } else {
            $this->db->join('tb_outlet', 'id_outlet', 'left');
            // untuk mengambil data user dari tabel user berdasarkan id user
            return $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
        }
    }

    // untuk menambah data user pada tabel user
    public function insert($post)
    {
        $this->db->insert('tb_user', [
            'id_user' => $post['id_user'],
            'id_outlet' => $post['id_outlet'],
            'nama_user' => $post['nama_user'],
            'role' => $post['role'],
            'username' => $post['username'],
            'password' => password_hash($post['password'], PASSWORD_DEFAULT),
        ]);
    }

    // untuk mengupdate data user pada tabel user berdasarkan id user
    public function update($post)
    {
        $data = [
            'id_outlet' => $post['id_outlet'],
            'nama_user' => $post['nama_user'],
            'role' => $post['role'],
            'username' => $post['username'],
            'password' => $post['password'],
        ];

        if ($post['password'] != '') {
            $data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
        }

        $this->db->where('id_user', $post['id_user']);
        $this->db->update('tb_user', $data);
    }
}

<?php

class Member_m extends CI_Model
{


    public function get_member($id = '')
    {
        if ($id == '') {
            // untuk mengambil data member dari tabel member
            return $this->db->get('tb_member')->result_array();
        } else {
            // untuk mengambil data member dari tabel member berdasarkan id member
            return $this->db->get_where('tb_member', ['id_member' => $id])->row_array();
        }
    }

    // untuk menambahkan data pada tabel member
    public function insert($post)
    {
        $this->db->insert('tb_member', [
            'id_member' => $post['id_member'],
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'tlp' => $post['tlp'],
        ]);
    }

    // untuk mengupdate data pada tabel member berdasarkan id member
    public function update($post)
    {
        $data = [
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'tlp' => $post['tlp'],
        ];

        $this->db->where('id_member', $post['id_member']);
        $this->db->update('tb_member', $data);
    }
}

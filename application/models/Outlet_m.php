<?php

class Outlet_m extends CI_Model
{

    public function get_outlet($id = '')
    {
        if ($id == '') {
            // untuk mengambil data outlet dari tabel outlet
            return $this->db->get('tb_outlet')->result_array();
        } else {
            // untuk mengambil data outlet dari tabel outlet berdasarkan id outlet
            return $this->db->get_where('tb_outlet', ['id_outlet' => $id])->row_array();
        }
    }

    // untuk menambah data outlet dari tabel outlet
    public function insert($post)
    {
        $this->db->insert('tb_outlet', [
            'id_outlet' => $post['id_outlet'],
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'tlp' => $post['tlp'],
        ]);
    }

    // untuk mengupdate data outlet dari tabel outlet berdasarkan id outlet
    public function update($post)
    {
        $data = [
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'tlp' => $post['tlp'],
        ];

        $this->db->where('id_outlet', $post['id_outlet']);
        $this->db->update('tb_outlet', $data);
    }
}

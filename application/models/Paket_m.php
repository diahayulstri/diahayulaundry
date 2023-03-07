<?php

class Paket_m extends CI_Model
{

    public function get_paket($id = '')
    {
        if ($id == '') {
            // untuk menjoin tabel outlet 
            $this->db->join('tb_outlet', 'id_outlet', 'left');
            // untuk mengambil data paket dari tabel paket 
            return $this->db->get('tb_paket')->result_array();
        } else {
            // untuk menjoin tabel outlet 
            $this->db->join('tb_outlet', 'id_outlet', 'left');
            // untuk mengambil data paket dari tabel paket berdasarkan id paket
            return $this->db->get_where('tb_paket', ['id_paket' => $id])->row_array();
        }
    }

    // untuk menambah data paket dari tabel paket
    public function insert($post)
    {
        $this->db->insert('tb_paket', [
            'id_paket' => $post['id_paket'],
            'id_outlet' => $post['id_outlet'],
            'nama_paket' => $post['nama_paket'],
            'jenis' => $post['jenis'],
            'harga' => $post['harga'],
        ]);
    }

    // untuk mengupdate data paket dari tabel paket berdasarkan id paket
    public function update($post)
    {
        $data = [
            'id_outlet' => $post['id_outlet'],
            'nama_paket' => $post['nama_paket'],
            'jenis' => $post['jenis'],
            'harga' => $post['harga'],
        ];

        $this->db->where('id_paket', $post['id_paket']);
        $this->db->update('tb_paket', $data);
    }
}

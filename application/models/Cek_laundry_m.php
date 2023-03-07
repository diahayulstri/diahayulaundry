<?php

class Cek_laundry_m extends CI_Model
{

    public function cek_status($kode_invoice)
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_outlet', 'tb_transaksi.id_outlet = tb_outlet.id_outlet', 'left');
        $this->db->join('tb_member', 'tb_transaksi.id_member = tb_member.id_member', 'left');
        $this->db->join('tb_user', 'tb_transaksi.id_user = tb_user.id_user', 'left');
        $this->db->where('tb_transaksi.kode_invoice', $kode_invoice);
        return $this->db->get()->result();
    }
}

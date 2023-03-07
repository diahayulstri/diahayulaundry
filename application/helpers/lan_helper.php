<?php

function cek_login()
{
    $ci = &get_instance();
    if (!$ci->session->userdata('id_user')) {
        $ci->session->set_flashdata('error', 'Anda belum login');
        redirect('auth');
    }
}

function id($table, $id)
{
    $ci = &get_instance();
    $ci->db->order_by($id, 'Desc');
    $last_id = $ci->db->get($table)->row_array();
    $new_id = $last_id[$id] * 1;
    return $new_id;
}

// function kode_invoice()
// {
//     $ci = &get_instance();
//     // 'TR-1202230001'

//     $ci->db->order_by('id_transaksi', 'desc');
//     $latest = $ci->db->get('tb_transaksi')->row();

//     $latest_id = substr( 9, 4);

//     // return 'TR - ' . date('dmy') . sprintf('%03s', $latest_id + 1);

//     return 'TR - ' . date('dmy') . sprintf('%03s', $latest_id);
// }

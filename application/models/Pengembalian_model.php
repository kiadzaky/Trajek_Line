<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian_model extends CI_Model
{
    public function getPengembalian()
    {
        $query = "SELECT id_pengembalian,tbtransaksi.id_transaksi,tbtransaksi.nip,tanggal_kembali, denda  from tbpengembalian join tbtransaksi
         on tbpengembalian.id_transaksi = tbtransaksi.id_transaksi ";

        return $this->db->query($query)->result_array();
    }
    public function getPengembalianById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}

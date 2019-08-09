<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function getLaporan()
    {
        $query = "SELECT * FROM `tbtransaksi` where keterangan = '3'";

        return $this->db->query($query)->result_array();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function getKategoriById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function cariDataKategori()
    {
        $keyword =  $_POST['keyword'];
        $query = "SELECT * FROM tbkategori WHERE kategori LIKE '%$keyword%'";
        return  $this->db->query($query)->result_array();
    }
}

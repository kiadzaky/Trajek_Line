<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_model extends CI_Model
{
    private $table="tbpelanggan";
    public function getPelanggan()
    {
        $query = "SELECT * FROM tbpelanggan JOIN tbjabatan
        ON tbpelanggan.id_jabatan = tbjabatan.id_jabatan";

        return $this->db->query($query)->result_array();
    }
    public function getPelangganByNik($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function cariDataPelanggan()
    {
        $keyword =  $_POST['keyword'];
        $query = "SELECT * FROM tbpelanggan JOIN tbjabatan ON tbpelanggan.id_jabatan = tbjabatan.id_jabatan
         WHERE nama_pelanggan LIKE '%$keyword%' and jabatan = 'pelanggan'";
        return  $this->db->query($query)->result_array();
    }
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function getPelangganbyEmail($email){
        return $this->db->get_where($this->table,$email);
    }

}

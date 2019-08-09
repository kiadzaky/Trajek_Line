<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    public function getKaryawan()
    {
        $query = "SELECT nip,nama,email,no_telepon,alamat,foto,tbjabatan.jabatan,tanggal_buat 
        FROM tbkaryawan JOIN tbjabatan ON tbkaryawan.id_jabatan = tbjabatan.id_jabatan WHERE jabatan = 'karyawan'";

        return $this->db->query($query)->result_array();
    }
    public function getKaryawanByNip($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function cariDataKaryawan()
    {
        error_reporting(0);
        $keyword =  $_POST['keyword'];
        $query = "SELECT * FROM tbkaryawan join tbjabatan on tbkaryawan.id_jabatan = tbjabatan.id_jabatan 
        WHERE nama_karyawan LIKE '%$keyword%' and jabatan = 'karyawan'";
        return  $this->db->query($query)->result_array();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    public function getBarang()
    {
        $query = "SELECT id_barang,tbkategori.kategori,nopol,merk,jenis,gambar,tahun,warna,harga,tbbarang.status 
        FROM tbbarang JOIN tbkategori ON tbbarang.id_kategori = tbkategori.id_kategori";

        return $this->db->query($query)->result_array();
    }
    public function getBarangById($where, $table)
    {
        $this->db->select('*');
        $this->db->from('tbbarang');
        $this->db->join('tbkategori', 'tbkategori.id_kategori=tbbarang.id_kategori');
        $this->db->where_in('id_barang', $where);
        return $this->db->get();
    }
    public function cariDataBarang()
    {
        $keyword =  $_POST['keyword'];
        $query = "SELECT * FROM tbbarang join tbkategori on tbbarang.id_kategori = tbkategori.id_kategori 
        WHERE kategori LIKE '%$keyword%'";
        return  $this->db->query($query)->result_array();
    }
    function buat_kode()
    {
        $this->db->select('RIGHT(tbbarang.id_barang,2) as kode', FALSE);
        $this->db->order_by('id_barang', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbbarang');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "BR" . $kodemax;
        return $kodejadi;
    }
    public function getBarangMobil()
    {
        $query = "SELECT id_barang,tbkategori.kategori,nopol,merk,jenis,gambar,kapasitas,tahun,warna,harga,tbbarang.status 
        FROM tbbarang JOIN tbkategori ON tbbarang.id_kategori = tbkategori.id_kategori where tbkategori.id_kategori ='1'";

        return $this->db->query($query)->result_array();
    }
  public function getBarangKamera()
    {$query = "SELECT id_barang,tbkategori.kategori,nopol,merk,jenis,gambar,kapasitas,tahun,warna,harga,tbbarang.status 
        FROM tbbarang JOIN tbkategori ON tbbarang.id_kategori = tbkategori.id_kategori where tbkategori.id_kategori ='3'";

        return $this->db->query($query)->result_array();
    } 

    public function getBarangSepeda()
    {$query = "SELECT id_barang,tbkategori.kategori,nopol,merk,jenis,gambar,kapasitas,tahun,warna,harga,tbbarang.status 
        FROM tbbarang JOIN tbkategori ON tbbarang.id_kategori = tbkategori.id_kategori where tbkategori.id_kategori ='2'";

        return $this->db->query($query)->result_array();
    } 
}

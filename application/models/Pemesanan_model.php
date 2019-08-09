<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    public function getTransaksi()
    {
        $query = "SELECT * from tbtransaksi join tbpelanggan on tbtransaksi.nik = tbpelanggan.nik 
        join tbbarang on tbtransaksi.id_barang = tbbarang.id_barang where konfirmasi = 'ya' and keterangan = '1'";

        return $this->db->query($query)->result_array();
    }
    public function getKonfirmasi()
    {
        $query = "SELECT * from tbtransaksi join tbpelanggan on tbtransaksi.nik = tbpelanggan.nik 
        join tbbarang on tbtransaksi.id_barang = tbbarang.id_barang where konfirmasi = 'tidak' and keterangan = '1'";

        return $this->db->query($query)->result_array();
    }
    public function getPengembalian()
    {
        $query = "SELECT * from tbtransaksi join tbpelanggan on tbtransaksi.nik = tbpelanggan.nik 
        join tbbarang on tbtransaksi.id_barang = tbbarang.id_barang where konfirmasi = 'ya' and keterangan = '2'";

        return $this->db->query($query)->result_array();
    }
    public function getPemesananById($where, $table)
    {
        $this->db->select('*');
        $this->db->from('tbbarang');
        $this->db->join('tbtransaksi', 'tbtransaksi.id_barang=tbbarang.id_barang');
        $this->db->join('tbpelanggan', 'tbtransaksi.nik = tbpelanggan.nik');
        $this->db->where_in('id_transaksi', $where);
        return $this->db->get();
        //return $this->db->get_where($table, $where);
    }
    function buat_kode()
    {
        $this->db->select('RIGHT(tbtransaksi.id_transaksi,2) as kode', FALSE);
        $this->db->order_by('id_transaksi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbtransaksi');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }
        $tgl = date('YmdHis');
        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodejadi = "TR" . $tgl . $kodemax;
        return $kodejadi;
    }
}

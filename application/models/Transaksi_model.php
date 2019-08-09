<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    private $table="tbtransaksi";
    public function getTransaksi()
    {
        $query = "SELECT id_transaksi,tbpemesanan.id_pemesanan,tbpemesanan.nik,tbkaryawan.nip,bayar, kembali from tbtransaksi join tbpemesanan
         on tbtransaksi.id_pemesanan = tbpemesanan.id_pemesanan join tbkaryawan on tbtransaksi.nip = tbkaryawan.nip" ; 

        return $this->db->query($query)->result_array();
    }
    public function getTransaksiById($where)
    {
        return $this->db->get_where($this->table,$where);
    }
    public function getTransaksiNotification($where)
    {
        $this->db->select('*');
        $this->db->from('tbpelanggan');
        $this->db->join('tbtransaksi', 'tbtransaksi.nik=tbpelanggan.nik');
        $this->db->where_in('tbpelanggan.nik', $where);
        return $this->db->get();
    }
    
}
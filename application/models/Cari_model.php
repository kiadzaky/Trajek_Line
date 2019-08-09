<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari_model extends CI_Model
{
	public function cari()
	{
		error_reporting(0);
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM `tbbarang` WHERE 
merk like '%$keyword%' or 
jenis LIKE '%$keyword%' OR 
kapasitas LIKE '%$keyword%' OR 
tahun LIKE '%$keyword%' or 
warna LIKE '%$keyword%' OR 
harga like '%$keyword%' OR
status LIKE '%$keyword%' ";
		return $this->db->query($query)->result_array();
	}

}
?>
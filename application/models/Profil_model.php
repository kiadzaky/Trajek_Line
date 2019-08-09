<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{
    private $table="tbpelanggan";

    public function profil($email){
        return $this->db->get_where($this->table,$email);
    }
    function update_data($where,$data){
		$this->db->where($where);
        $this->db->update($this->table,$data);
    }
}

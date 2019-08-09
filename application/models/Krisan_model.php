<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Krisan_model extends CI_Model
{
    public function getKrisan()
    {
    	$query="select * from tbkritiksaran";
        return $this->db->query($query)->result_array();
    }
}

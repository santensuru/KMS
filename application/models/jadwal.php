<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Jadwal extends CI_Model {

	function ambil() {
		$this->db->where("Tanggal like '%".date('Y')."%'");
		$result = $this->db->get("jadwal_imunisasi");

		return $result;
	}

	function tambah($param) {
		
	}
}


/* End of file jadwal.php */
/* Location: ./application/models/jadwal.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Data_balita extends CI_Model {

	function ambil() {

	}

	function cari($param) {
		$this->db->from("balita, perkembangan_balita");
		$this->db->where("Nama like '%".$param."%' AND balita.ID_Balita = perkembangan_balita.ID_Balita");
		$result = $this->db->get();
		return $result;
		// return "mock";
	}
}


/* End of file data_balita.php */
/* Location: ./application/models/data_balita.php */
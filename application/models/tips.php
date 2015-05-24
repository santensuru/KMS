<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Tips extends CI_Model {

	function ambil() {
		$this->db->from("saran");
		$this->db->order_by("RAND() LIMIT 1");
		$result = $this->db->get();
		return $result;
	}
}


/* End of file tips.php */
/* Location: ./application/models/tips.php */
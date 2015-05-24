<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Faq extends CI_Model {

	function ambil() {
		$this->db->from("faq");
		$result = $this->db->get();
		return $result;
	}
}


/* End of file faq.php */
/* Location: ./application/models/faq.php */
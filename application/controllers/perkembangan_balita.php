<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perkembangan_balita extends CI_Controller {
	
	/* main */
	public function index($param = null)	{
		$data["title"] = "Perkembangan Balita";
		$this->load->view('header', $data);
		$data1["nav"][0] = "";
		$data1["nav"][1] = " class=\"active\"";
		$this->load->view('navbar_petugas', $data1);
		if ($param == null) {
			$data2["name"] = "";
			$data2["date"] = "";
			$data2["addr"] = "";
			$data2["sele"][0] = "";
			$data2["sele"][1] = "";
			$data2["sear"] = "";
		}
		else {
			$data2["sear"] = $param;

			// load from db
			
			$data2["name"] = "";
			$data2["date"] = "";
			$data2["addr"] = "";
			$data2["sele"][0] = "";
			$data2["sele"][1] = "";
		}
		$this->load->view('perkembangan_balita_view', $data2);
		$this->load->view('footer');

		// echo base_url();
	}

	/* set */
}


/* End of file perkembangan_balita.php */
/* Location: ./application/controllers/perkembangan_balita.php */
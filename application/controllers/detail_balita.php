<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail_balita extends CI_Controller {
	
	/* main */
	public function index($param = null)	{
		$data["title"] = "Detail Balita";
		$data["user"] = "pengguna";
		$this->load->view('header', $data);
		$data1["nav"][0] = "";
		$data1["nav"][1] = " class=\"active\"";
		$data1["nav"][2] = "";
		$data1["nav"][3] = "";
		$this->load->view('navbar_pengguna', $data1);
		if ($param == null) {
			$data2["name"] = "";
			$data2["sear"] = "";
		}
		else {
			$data2["sear"] = $param;

			// load from db
			
			$data2["name"] = "";
		}
		$this->load->view('detail_balita_view', $data2);
		$this->load->view('footer');

		// echo base_url();
	}

	/* set */
}


/* End of file detail_balita.php */
/* Location: ./application/controllers/detail_balita.php */
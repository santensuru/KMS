<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biodata_balita extends CI_Controller {
	
	/* main */
	public function index()	{
		$data["title"] = "Biodata Balita";
		$data["user"] = "petugas posyandu";
		$this->load->view('header', $data);
		$data1["nav"][0] = " class=\"active\"";
		$data1["nav"][1] = "";
		$this->load->view('navbar_petugas', $data1);
		$this->load->view('biodata_balita_view');
		$this->load->view('footer');

		// echo base_url();
	}
}


/* End of file biodata_balita.php */
/* Location: ./application/controllers/biodata_balita.php */
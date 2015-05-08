<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {
	
	/* main */
	public function index()	{
		$data["title"] = "Beranda";
		$data["user"] = "pengguna";
		$this->load->view('header', $data);
		$data1["nav"][0] = " class=\"active\"";
		$data1["nav"][1] = "";
		$data1["nav"][2] = "";
		$data1["nav"][3] = "";
		$this->load->view('navbar_pengguna', $data1);
		$data2["user"] = "pengguna";
		$data2["quot"] = "test tips";
		$this->load->view('beranda_view', $data2);
		$this->load->view('footer');

		// echo base_url();
	}
}


/* End of file beranda.php */
/* Location: ./application/controllers/beranda.php */
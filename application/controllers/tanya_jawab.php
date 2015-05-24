<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tanya_jawab extends CI_Controller {
	
	/* main */
	public function index()	{
		$data["title"] = "Tanya Jawab";
		$data["user"] = "pengguna";
		$this->load->view('header', $data);
		$data1["nav"][0] = "";
		$data1["nav"][1] = "";
		$data1["nav"][2] = "";
		$data1["nav"][3] = " class=\"active\"";
		$this->load->view('navbar_pengguna', $data1);
		$data2["user"] = "pengguna";

		$this->load->model("faq");
		$fq = $this->faq->ambil();

		$data2["faq"] = $fq;
		$this->load->view('tanya_jawab_view', $data2);
		$this->load->view('footer');

		// echo base_url();
	}
}


/* End of file tanya_jawab.php */
/* Location: ./application/controllers/tanya_jawab.php */
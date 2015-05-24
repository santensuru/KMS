<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_imunisasi extends CI_Controller {
	
	/* main */
	public function index()	{
		$data["title"] = "Jadwal Imunisasi";
		$data["user"] = "pengguna";
		$this->load->view('header', $data);
		$data1["nav"][0] = "";
		$data1["nav"][1] = "";
		$data1["nav"][2] = " class=\"active\"";
		$data1["nav"][3] = "";
		$this->load->view('navbar_pengguna', $data1);
		$data2["user"] = "pengguna";

		$this->load->model("jadwal");
		$jd = $this->jadwal->ambil();

		$data2["jadw"] = $jd;
		$this->load->view('jadwal_imunisasi_view', $data2);
		$this->load->view('footer');

		// echo base_url();
	}
}


/* End of file jadwal_imunisasi.php */
/* Location: ./application/controllers/jadwal_imunisasi.php */
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
			$data2["tips"] = "";

			$data2["state"] = "disabled";
		}
		else {
			$data2["sear"] = $param;

			// load from db
			$this->load->model("data_balita");
			$bt = $this->data_balita->cari($param);
			

			// var_dump($bt);

			$tempNama = "";
			foreach ($bt->result() as $row) {
				if ($tempNama == "")
					$tempNama = $row->Nama;
				else if ($tempNama == $row->Nama)
					continue;
				else
					$tempNama = "";
			}

			$data2["name"] = $tempNama;
			$data2["cart"] = $bt;

			$this->load->model("tips");
			$tp = $this->tips->ambil();

			$tempSaran = "";
			foreach ($tp->result() as $row) {
				$tempSaran = $row->Saran;
			}

			$data2["tips"] = $tempSaran;

			$data2["state"] = "";
		}
		$this->load->view('detail_balita_view', $data2);
		$this->load->view('footer');

		// echo base_url();
	}

	/* set */
}


/* End of file detail_balita.php */
/* Location: ./application/controllers/detail_balita.php */
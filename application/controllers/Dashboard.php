<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		// cara panggil autoload secara satu persatu
		// $this->load->library(array('session'));

		// Pengiriman parameter ke "view"
		// 1. Denga Variabel  
		// $data ["nama"] = "Udin";
		// $data ["kelas"] = "IF20DX";
		// 2.Dengan arrow function (array)
		$data = array(
			"nama" => "Udin",
			"kelas" => "IF20DX",
			"jurusan" => "inforamtika",
			"telepon" => "0822120129",
			"kelamin" => "laki-laki"
		);

		$this->load->view('dashboard_vw',$data);
	}
	function kirim_konstan() 
	{
		$this->load->view('dashboard2_vw');
	}
}

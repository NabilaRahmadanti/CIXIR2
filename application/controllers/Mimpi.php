<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimpi extends CI_Controller {

	public function index()
	{
		$data['konten']="impian";
		$this->load->view('template',$data);
	}

}

/* End of file Mimpi.php */
/* Location: ./application/controllers/Mimpi.php */
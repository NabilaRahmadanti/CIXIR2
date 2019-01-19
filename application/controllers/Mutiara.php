<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutiara extends CI_Controller {

	public function index()
	{
		$data['konten']="kata";
		$this->load->view('template',$data);
	}

}

/* End of file Mutiara.php */
/* Location: ./application/controllers/Mutiara.php */
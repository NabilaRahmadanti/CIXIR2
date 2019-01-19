<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teman extends CI_Controller {

	public function dekat()
	{
		$data['konten']="teman";
		$this->load->view('template',$data);
	}

}

/* End of file Teman.php */
/* Location: ./application/controllers/Teman.php */
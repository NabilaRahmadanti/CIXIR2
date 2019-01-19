<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function aku()
	{
	$data['konten']="v_profil";
	$this->load->view('template',$data);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */
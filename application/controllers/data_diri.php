<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_diri extends CI_Controller {

	public function index()
	{
		$data['konten']="data_diri";
		$this->load->view('template',$data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */

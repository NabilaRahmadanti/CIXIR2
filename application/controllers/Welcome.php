<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function user($nama)
	{
		$data['nama_lengkap']=$nama;
		$this->load->view('beranda',$data);
	}
	public function lanjutan()
	{
		$this->load->view('maneh');
	}
	public function profil()
	{
		$this->load->view('gambar');
	}
	public function keluarga()
	{
		$this->load->view('cerita');
	}
	public function impian()
	{
		$this->load->view('tercapai');
	}
	public function teman()
	{
		$this->load->view('sahabat');
	}
	public function pesan()
	{
		$this->load->view('motto');
	}
}


<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Kategori_model extends CI_Model{

 public function get_kategori()
 {
     $this->db->get('kategori');
 }   
}
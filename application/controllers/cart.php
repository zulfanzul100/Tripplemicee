<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	
	public function index()
	{
		$data['judul'] = "Cart";
		$tpl['konten'] = $this->load->view('cart',$data,TRUE);
		$this->load->view('template',$tpl);
	}
}

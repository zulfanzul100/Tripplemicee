<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function index()
	{
		$data['judul'] = "Product";
		$tpl['konten'] = $this->load->view('product',$data,TRUE);
		$this->load->view('template',$tpl);
	}
}

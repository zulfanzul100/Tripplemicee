<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

	
	public function index()
	{
		$data['judul'] = "Details";
		$tpl['konten'] = $this->load->view('details',$data,TRUE);
		$this->load->view('template',$tpl);
	}
}

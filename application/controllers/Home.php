<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['judul'] = "Home";
		$tpl['konten'] = $this->load->view('home',$data,TRUE);
		$this->load->view('template',$tpl);
	}
}

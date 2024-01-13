<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function index()
	{
		$data['judul'] = "Register";
		$tpl['konten'] = $this->load->view('register',$data,TRUE);
		$this->load->view('template',$tpl);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$data['judul'] = "Login";
		$tpl['konten'] = $this->load->view('login',$data,TRUE);
		$this->load->view('template',$tpl);
	}
}

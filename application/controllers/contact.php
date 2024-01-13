<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{
		$data['judul'] = "Contact";
		$tpl['konten'] = $this->load->view('contact',$data,TRUE);
		$this->load->view('template',$tpl);
	}
}

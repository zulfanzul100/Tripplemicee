<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	
	public function index()
	{
		$data['judul'] = "Categories";
		$tpl['konten'] = $this->load->view('categories',$data,TRUE);
		$this->load->view('template',$tpl);
	}
}

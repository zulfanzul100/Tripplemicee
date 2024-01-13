<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	
	public function index()
	{
		$data['judul'] = "Booking";
		$tpl['konten'] = $this->load->view('booking',$data,TRUE);
		$this->load->view('template',$tpl);
	}
}

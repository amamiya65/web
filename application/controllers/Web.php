<?php
defined('BASEPATH') or exit('No direct script access allowed');

class panggil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		
		$this->load->view('neksi');
		
	}
}
?>

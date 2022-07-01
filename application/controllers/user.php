<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parents :: __construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
	}
	function index()
	{
		$this->load->view('user')
	}


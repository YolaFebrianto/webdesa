<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model('M_login');
	}
	public function index()
	{
		$this->load->view('V_login');
	}
	public function login_aksi(){
		$user_id  = $this->input->post('user_id');
		$password = md5($this->input->post('password'));
		$login 	  = $this->M_login->get_where(['user_id'=>$user_id,'password'=>$password])->row_array();
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect();
	}
}
?>
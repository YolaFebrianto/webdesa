<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$cek = $this->M_login->cek_login("tbl_user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'email' => $email
				);
 
			$this->session->set_userdata($data_session);
 
			redirect();
 
		}else{
			echo "Email dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
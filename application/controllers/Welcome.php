<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
public function __construct()
{
	parent ::__construct();
	$this->load->library('form_validation');
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->db->order_by('tgl', 'desc');
		// URUTAN get_where: get_where('nama_tabel',[kolom_yg_dicari], limit, offset)
		$data['pengumuman'] = $this->db->get_where('tbl_pengumuman', [], 3);
		$this->db->order_by('tgl', 'desc');
		$data['agenda'] = $this->db->get_where('tbl_agenda', [], 4);
		$this->db->order_by('tgl', 'desc');
		$data['galeri'] = $this->db->get_where('tbl_galeri', [], 6);
		$this->db->order_by('tgl', 'desc');
		$data['berita'] = $this->db->get_where('tbl_berita', [], 4);
		$data['jml_agenda'] = $this->db->get('tbl_agenda')->num_rows();
		$data['jml_pengumuman'] = $this->db->get('tbl_pengumuman')->num_rows();
		$data['jml_berita'] = $this->db->get('tbl_berita')->num_rows();
		$data['jml_galeri'] = $this->db->get('tbl_galeri')->num_rows();
		$this->load->view('templates/header');
		$this->load->view('templates/content', $data);
		$this->load->view('templates/footer');
	}
	public function semua_berita()
	{
		$this->db->order_by('tgl', 'desc');
		$data['berita_header'] = $this->db->get_where('tbl_berita', [], 1)->row_array();
		$this->db->order_by('tgl', 'desc');
		$data['berita'] = $this->db->get('tbl_berita');
		$this->load->view('templates/header');
		$this->load->view('templates/semua_berita', $data);
		$this->load->view('templates/footer');
	}
	public function detail_berita($id)
 	{
 		$data['berita'] = $this->db->get('tbl_berita');
 		$data['berita'] = $this->db->get_where('tbl_berita', ['id_berita' => $id])->row_array();
 		$this->load->view('templates/header');
 		$this->load->view('templates/detail_berita',$data);
 		$this->load->view('templates/footer');
	}
	public function kontak()
	 {
	 	$this->load->view('templates/header');
		 $this->load->view('templates/kontak');
	 	$this->load->view('templates/footer');	
	 }
	 public function aspirasi()
	 {
	 	if (!empty($this->input->post('btnsubmit'))) {
			$data = [
				'id'	=> $this->input->post('id'),
				'nama_pelapor' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'alamat'=> $this->input->post('alamat'),
				'tgl' => $this->input->post('tanggal'),
				'isi' => $this->input->post('isi'),
				'gambar' => $this->input->post('gambar')
			];

			$this->db->insert('tbl_aspirasi', $data);
			$this->session->set_flashdata('success', 'aspirasi Berhasil Ditambahkan!');
		}
		$data['aspirasi'] = $this->db->get('tbl_aspirasi');
	 	$this->load->view('templates/header');
		 $this->load->view('templates/aspirasi', $data);
	 	$this->load->view('templates/footer');	
	 }
	 public function pengaduan()
	 {
	 	$this->load->view('templates/header');
		 $this->load->view('templates/pengaduan');
	 	$this->load->view('templates/footer');	
	 }
	 public function login ()
	 {
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/login');
		} else {

			$email = $this->input->post('email');
			$password = password_hash($this->input->post('password'));

			$user = $this->db->get_where('tbl_user',['email' => $email])->row();
			
			if(!$user) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}

	
			if(!password_verify($password,$user->password)) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}

			 $data = array(
					'user_id' => $user->user_id,
					'first_name' => $user->first_name,
					'last_name' => $user->last_name,
					'email' => $user->email,
					);

				
			$this->session->set_userdata($data);

			//redirect('/'); // redirect to home
			echo 'Login success!'; exit;
			
		}		
	}
	public function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }
	 public function registrasi()
	 {

	 	if ($this->form_validation->run() == false ) {
	 		$this->load->view('templates/registrasi');
	 	} else{
	 		$data = [
	 			'nama' => htmlspecialchars($this->input->post('username', true)),
	 			'email' =>htmlspecialchars($this->input->post('email', true)),
	 			'gambar' => 'default.jpg',
	 			'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
	 			'role_id' => 2,
	 			'status' => 1,
				];

				$this->db->insert('tbl_user', $data);
				redirect('welcome/login');
	 		}
	 	}
	 	
	 }


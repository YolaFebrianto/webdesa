<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {
public function __construct()
	{
		parent::__construct();
	
	}
	public function index()
	{
		$data['jum_berita'] = $this->db->get('tbl_berita')->num_rows();
		$data['jum_aspirasi'] = $this->db->get('tbl_aspirasi')->num_rows();
		$data['jum_pengaduan'] = $this->db->get('tbl_pengaduan')->num_rows();
		$data['jum_user'] = $this->db->get('tbl_user')->num_rows();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}
	public function v_aspirasi()
	{
		// if (!empty($this->input->post('btnsubmit'))) {
		// 	$data = [
		// 		'id'	=> $this->input->post('id'),
		// 		'nama_pelapor' => $this->input->post('nama'),
		// 		'alamat'=> $this->input->post('alamat'),
		// 		'tgl' => $this->input->post('tanggal'),
		// 		'isi' => $this->input->post('isi'),
		// 		'gambar' => $this->input->post('gambar')
		// 	];

		// 	$this->db->insert('tbl_aspirasi', $data);
		// 	$this->session->set_flashdata('success', 'agenda Berhasil Ditambahkan!');
		// }
		$data['aspirasi'] = $this->db->get('tbl_aspirasi');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/v_aspirasi', $data);
		$this->load->view('template/footer');
	}
	public function hapus_aspirasi($id)
	{
		$where = array('id' => $id);
		$this->db->delete('tbl_aspirasi', $where);
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');
		redirect('admin/v_aspirasi');
	}
	public function v_pengaduan()
	{
		// if (!empty($this->input->post('btnsubmit'))) {
		// 	$data = [
		// 		'id'	=> $this->input->post('id'),
		// 		'nama_pelapor' => $this->input->post('nama'),
		// 		'alamat'=> $this->input->post('alamat'),
		// 		'tgl' => $this->input->post('tanggal'),
		// 		'isi' => $this->input->post('isi'),
		// 		'gambar' => $this->input->post('gambar'),
		// 		'keterangan' => $this->input->post('keterangan')
		// 	];

		// 	//$this->db->insert('tbl_pengaduan', $data);
		// 	$this->session->set_flashdata('success', 'pengaduan Berhasil Ditambahkan!');
		// }
		$data['pengaduan'] = $this->db->get('tbl_pengaduan');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/v_pengaduan', $data);
		$this->load->view('template/footer');
	}	
	public function lihat_pengaduan($id)
	{
		$data['data'] = $this->db->get_where('tbl_pengaduan', ['id' => $id])->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/lihat_pengaduan', $data);
		$this->load->view('template/footer');
	}
	public function hapus_pengaduan($id)
	{
		$where = array('id' => $id);
		$this->db->delete('tbl_pengaduan', $where);
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');
		redirect('admin/v_pengaduan');
	}
	
	public function v_berita()
	{
		$data['berita'] = $this->db->get('tbl_berita');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/v_berita', $data);
		$this->load->view('template/footer');
	}
	public function tambahberita() 
    {
	    $config['upload_path']          = APPPATH.'../gambar/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 4096;
		$config['max_height']           = 4096;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/tambah_berita', $error);
		} else {
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$id_berita = $this->input->post('id', TRUE);
			$tgl = $this->input->post('tgl', TRUE);
			$jam = $this->input->post('jam', TRUE);
			$judul_berita = $this->input->post('judul', TRUE);
			$isi_berita = $this->input->post('isi', TRUE);
			$author = $this->input->post('author', TRUE);
			
			$data = array (
				'id_berita' => $id_berita,
				'tgl' => $tgl,
				'jam' => $jam,
				'judul_berita' => $judul_berita,
				'isi_berita' => $isi_berita,
				'author' => $author,
				'gambar' => $gambar,
			);
			$this->db->insert('tbl_berita', $data);
			redirect('admin/v_berita');
        }
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/tambah_berita');
		$this->load->view('template/footer');
    }
 
	public function edit_berita($id = 0,$error=array())
	{
		if (!empty($error)) {
			$data['error'] = $error['error'];
		} else {
			$data['error'] = $error;
		}
		$data['data'] = $this->db->get_where('tbl_berita', ['id_berita' => $id])->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/edit_berita', $data);
		$this->load->view('template/footer');
	}
	public function hapus_berita($id_berita)
	{
		$where = array('id_berita' => $id_berita);
		$this->db->delete('tbl_berita', $where);
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');
		redirect('admin/v_berita');
	}
}
	
	
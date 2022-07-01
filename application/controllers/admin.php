<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_desa');
	}
	public function index()
	{
		$data['jum_berita'] = $this->db->get('tbl_berita')->num_rows();
		$data['jum_agenda'] = $this->db->get('tbl_agenda')->num_rows();
		$data['jum_pengumuman'] = $this->db->get('tbl_pengumuman')->num_rows();
		$data['jum_gambar'] = $this->db->get('tbl_galeri')->num_rows();
		$data['jum_pengumuman'] = $this->db->get('tbl_pengumuman')->num_rows();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}

	public function v_kontak()
	{
		if (!empty($this->input->post('btnsubmit'))) {
			$data = [
				'id_kontak'	=> $this->input->post('id'),
				'nama_kontak' => $this->input->post('nama'),
				'jabatan_kontak' => $this->input->post("jabatan"),
				'telp' => $this->input->post('tlp'),
			];

			$this->db->insert('tbl_kontak', $data);
			$this->session->set_flashdata('success', 'kontak Berhasil Ditambahkan!');
		}
		$data['kontak'] = $this->db->get('tbl_kontak');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/v_kontak', $data);
		$this->load->view('template/footer');
	}
	public function tambahkontak()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tambah_kontak');
		$this->load->view('template/footer');
	}

		
	public function v_galeri()
	{
		if (!empty($this->input->post('btnsubmit'))) {
			$uploads = $this->upload();
			$data = [
				'id_galeri'	=> $this->input->post('id'),
				'judul_galeri' => $this->input->post('judul_galeri'),
				'tgl' => $this->input->post("tgl"),
				'gambar_galeri' => $uploads,
			];
			$this->db->insert('tbl_galeri', $data);
			$this->session->set_flashdata('success', 'berita Berhasil Ditambahkan!');
			redirect('admin/v_galeri');
		}
		$data['galeri'] = $this->db->get('tbl_galeri');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/v_galeri', $data);
		$this->load->view('template/footer');
	}
	public function tambah_gambar()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/tambahgambar');
		$this->load->view('template/footer');
	}
	public function edit_gambar($id = 0)
	{
		$data['data'] = $this->db->get_where('tbl_galeri', ['id_galeri' => $id])->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/edit_gambar', $data);
		$this->load->view('template/footer');
	}
	public function editgambar()
	{
		if (!empty($this->input->post('btnsubmit'))) {
			$data = [
				'id_galeri'		=> $this->input->post('id'),
				'judul_galeri'	=> $this->input->post('judul_galeri'),
				'tgl'			=> $this->input->post('tanggal'),
				'gambar_galeri' => $this->input->post('gambar_galeri')
			];
			$where = [
				'id_galeri' => $this->input->post('id'),
			];
			$this->db->where($where);
			$this->db->update('tbl_galeri', $data);
		}
		redirect('admin/v_galeri');
	}
	public function hapus_gambar($id_galeri)
	{
		$where = array('id_galeri' => $id_galeri);
		$this->db->delete('tbl_galeri', $where);
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');
		redirect('admin/v_galeri');
	}
	public function aksi_upload()
	{
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 4096;
		$config['max_height']           = 4096;

		$this->load->library('upload', $config);

		$data = [
			'id_galeri'	=> $this->input->post('id'),
			'judul_galeri' => $this->input->post('judul_galeri'),
			'tgl' => $this->input->post("tgl"),
			'gambar_galeri' => $this->input->post('berkas'),
		];
		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/tambahgambar', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			$this->db->insert('tbl_galeri', $data);
			$this->session->set_flashdata('success', 'berita Berhasil Ditambahkan!');
			redirect('admin/v_galeri');
			// $this->load->view('admin/tambahgambar', $data);
		}
	}

	
	public function v_berita()
	{
		// if (!empty($this->input->post('btnsubmit'))) {
		//     $config['upload_path']          = APPPATH. '../gambar/';
		// 	$config['allowed_types']        = 'jpg|png|jpeg';
		// 	$config['max_size']             = 8000;
		// 	// $config['max_width']            = 4096;
		// 	// $config['max_height']           = 4096;

		// 	$this->load->library('upload', $config);

		// 	if (!$this->upload->do_upload('gambar')) {
		// 		$error = array('error' => $this->upload->display_errors());
		// 		$this->load->view('admin/tambah_berita', $error);
		// 		$this->session->set_flashdata('Gagal', 'berita Gagal Ditambahkan!');
		// 	} else {
		// 		$gambar = $this->upload->data();
		// 		$gambar = $gambar['file_name'];
		// 		$data = [
		// 			'id_berita' => $this->input->post('id'),
		// 			'tgl' => $this->input->post('tgl'),
		// 			'jam' => $this->input->post('jam'),
		// 			'judul_berita' => $this->input->post('judul'),
		// 			'isi_berita' => $this->input->post('isi'),
		// 			'author' => $this->input->post('author'),
		// 			'gambar' => $gambar['file_name']
		// 		];
		// 		$this->db->insert('tbl_berita',$data);
		// 		$this->session->set_flashdata('success', 'berita Berhasil Ditambahkan!');
		// 	}
		// }

		$data['berita'] = $this->db->get('tbl_berita');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/v_berita', $data);
		$this->load->view('template/footer');
	
	}
 	// public function tambahberita()
 	// {	
	// 	$this->load->view('template/header');
	// 	$this->load->view('template/sidebar');
	// 	$this->load->view('admin/tambah_berita');
	// 	$this->load->view('template/footer');	
	// }

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
	public function edit()
	{
		$data['data'] = $this->db->get_where('tbl_berita', ['id_berita' => $id])->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/edit_berita', $data);
		$this->load->view('template/footer');
		// if (!empty($this->input->post('btnsubmit'))) {
		// 	//file upload code 
		// 	//set file upload settings 
		// 	$config['upload_path']          = './gambar/';
		// 	$config['allowed_types']        = 'gif|jpg|png';
		// 	$config['max_size']             = 2500;

		// 	$this->load->library('upload', $config);
		// 	$this->upload->initialize($config);

		// 	if ( ! $this->upload->do_upload('gambar')){
		// 		$id = $this->input->post('id');
		// 		$error = array('error'=>$this->upload->display_errors());
		// 		$this->edit_berita($id,$error);
		// 	}else{

		// 		//file is uploaded successfully
		// 		//now get the file uploaded data 
		// 		$upload_data = $this->upload->data();

		// 		//get the uploaded file name
		// 		$gambar = $upload_data['file_name'];
		// 		$data = [
		// 			'tgl'		=> $this->input->post('tgl'),
		// 			'jam'=> $this->input->post('jam'),
		// 			'judul_berita'	=> $this->input->post('judul_berita'),
		// 			'isi_berita'	=> $this->input->post('isi_berita'),
		// 			'author' => $this->input->post('author'),
		// 			'gambar' => $gambar,
		// 		];
		// 		$where = [
		// 			'id_berita'		=> $this->input->post('id'),
		// 		];
		// 		$this->db->where($where);
		// 		$this->db->update('tbl_berita', $data);
		// 		redirect('admin/v_berita');
		// 	}
		// }
	}
	public function hapus_berita($id_berita)
	{
		$where = array('id_berita' => $id_berita);
		$this->db->delete('tbl_berita', $where);
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');
		redirect('admin/v_berita');
	}

	public function v_agenda()
	{
		if (!empty($this->input->post('btnsubmit'))) {
			$data = [
				'id_agenda'	=> $this->input->post('id'),
				'nama_agenda' => $this->input->post('nama'),
				'tgl' => $this->input->post('tanggal'),
				'isi_agenda' => $this->input->post('isi'),
				'mulai_agenda' => $this->input->post('mulai'),
				'selesai_agenda' => $this->input->post('akhir'),
				'keterangan_agenda' => $this->input->post('keterangan')
			];

			$this->db->insert('tbl_agenda', $data);
			$this->session->set_flashdata('success', 'agenda Berhasil Ditambahkan!');
		}
		$data['agenda'] = $this->db->get('tbl_agenda');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/v_agenda', $data);
		$this->load->view('template/footer');
	}
	public function tambahagenda()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/tambah_agenda');
		$this->load->view('template/footer');
	}
	public function edit_agenda($id = 0)
	{
		$data['data'] = $this->db->get_where('tbl_agenda', ['id_agenda' => $id])->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/edit_agenda', $data);
		$this->load->view('template/footer');
	}
	public function editagenda()
	{
		if (!empty($this->input->post('btnsubmit'))) {
			$data = [
				'id_agenda' => $this->input->post('id_agenda'),
				'nama_agenda'	=> $this->input->post('nama_agenda'),
				'tgl'		=> $this->input->post('tgl'),
				'isi_agenda'		=> $this->input->post('isi_agenda'),
				'mulai_agenda' => $this->input->post('mulai_agenda'),
				'selesai_agenda' => $this->input->post('selesai_agenda'),
				'mketerangan_agenda' => $this->input->post('keterangan_agenda'),

			];
			$where = [
				'id_agenda'		=> $this->input->post('id_agenda'),
			];
			$this->db->where($where);
			$this->db->update('tbl_agenda', $data);
		}
		redirect('admin/v_agenda');
	}
	public function hapus_agenda($id_agenda)
	{
		$where = array('id_agenda' => $id_agenda);
		$this->db->delete('tbl_agenda', $where);
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');
		redirect('admin/v_agenda');
	}
	
	public function v_pengumuman()
	{
		if (!empty($this->input->post('btnsubmit'))) {
			$data = [
				'id_pengumuman'	=> $this->input->post('id'),
				'judul_pengumuman'	=> $this->input->post('judul'),
				'isi_pengumuman' => $this->input->post("isi"),
				'tgl' => $this->input->post('tanggal'),
				'pengumuman_author' => $this->input->post("author"),


			];

			$this->db->insert('tbl_pengumuman', $data);
			$this->session->set_flashdata('success', 'pengumuman Berhasil Ditambahkan!');
			redirect('admin/v_pengumuman');
		}
		$data['pengumuman'] = $this->db->get('tbl_pengumuman');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/v_pengumuman', $data);
		$this->load->view('template/footer');
	}
	public function tambahpengumuman()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/tambah_pengumuman');
		$this->load->view('template/footer');
	}
	public function edit_pengumuman($id = 0)
	{
		$data['data'] = $this->db->get_where('tbl_pengumuman', ['id_pengumuman' => $id])->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/edit_pengumuman', $data);
		$this->load->view('template/footer');
	}
	public function editpengumuman()
	{
		if (!empty($this->input->post('btnsubmit'))) {
			$data = [
				'id_pengumuman' => $this->input->post('id_pengumuman'),
				'judul_pengumuman'	=> $this->input->post('judul_pengumuman'),
				'isi_pengumuman'		=> $this->input->post('isi_pengumuman'),
				'tgl'		=> $this->input->post('tgl'),
				'pengumuman_author' => $this->input->post('pengumuman_author')
			];
			$where = [
				'id_pengumuman'		=> $this->input->post('id_pengumuman'),
			];
			$this->db->where($where);
			$this->db->update('tbl_pengumuman', $data);
		}
		redirect('admin/v_pengumuman');
	}
	public function hapus_pengumuman($id_pengumuman)
	{
		$where = array('id_pengumuman' => $id_pengumuman);
		$this->db->delete('tbl_pengumuman', $where);
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');
		redirect('admin/v_pengumuman');
	}
}
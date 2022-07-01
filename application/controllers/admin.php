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
		$data['jum_user'] = $this->db->get('tbl_user')->num_rows();
		$data['jum_aspirasi'] = $this->db->get('tbl_aspirasi')->num_rows();
		$data['jum_pengaduan'] = $this->db->get('tbl_pengaduan')->num_rows();
		$data['jum_pengumuman'] = $this->db->get('tbl_pengumuman')->num_rows();
		$data['jum_gambar'] = $this->db->get('tbl_galeri')->num_rows();
		$data['jum_pengumuman'] = $this->db->get('tbl_pengumuman')->num_rows();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}	
	public function v_galeri()
	{
		$data['galeri'] = $this->db->get('tbl_galeri');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/v_galeri', $data);
		$this->load->view('template/footer');
	}

	public function tambah_gambar() 
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
			$this->load->view('admin/tambah_gambar', $error);
		} else {
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$id_galeri = $this->input->post('id', TRUE);
			$judul_galeri = $this->input->post('judul', TRUE);
			$isi_galeri = $this->input->post('isi', TRUE);
			$tgl = $this->input->post('tgl', TRUE);
			
	    	$data = array (
				'id_galeri' => $id_galeri,
				'judul_galeri' => $judul_galeri,
				'isi_galeri' => $isi_galeri,
				'tgl' => $tgl,
				'gambar' => $gambar,
			);
			$this->db->insert('tbl_galeri', $data);
			redirect('admin/v_galeri');
        }
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/tambah_gambar');
		$this->load->view('template/footer');
    }
 
	public function edit_gambar($id = 0,$error=array())
	{
		if (!empty($error)) {
			$data['error'] = $error['error'];
		} else {
			$data['error'] = $error;
		}
		$data['data'] = $this->db->get_where('tbl_galeri', ['id_galeri' => $id])->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/edit_gambar', $data);
		$this->load->view('template/footer');
	}
	public function edit_()
	{
		$data['data'] = $this->db->get_where('tbl_galeri', ['id_galeri' => $id])->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/edit_gambar', $data);
		$this->load->view('template/footer');
}
	public function hapus_gambar($id_galeri)
	{
		$where = array('id_galeri' => $id_galeri);
		$this->db->delete('tbl_galeri', $where);
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');
		redirect('admin/v_galeri');
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
	public function edit()
	{
	   // print_r($_POST);die();
	    $id = $_POST['id'];
// 		$data['data'] = $this->db->get_where('tbl_berita', ['id_berita' => $id])->row_array();
// 		$this->load->view('template/header');
// 		$this->load->view('template/sidebar');
// 		$this->load->view('admin/edit_berita', $data);
// 		$this->load->view('template/footer');
	    $config['upload_path']          = APPPATH.'../gambar/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 4096;
		$config['max_height']           = 4096;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

// 		if (!$this->upload->do_upload('gambar')) {
// 			$error = array('error' => $this->upload->display_errors());
// 			$this->load->view('admin/tambah_berita', $error);
// 		} else {
// 			$gambar = $this->upload->data();
// 			$gambar = $gambar['file_name'];
// 			$id_berita = $this->input->post('id', TRUE);
			$tgl = $this->input->post('tgl', TRUE);
			$jam = $this->input->post('jam', TRUE);
			$judul_berita = $this->input->post('judul_berita', TRUE);
			$isi_berita = $this->input->post('isi_berita', TRUE);
			$author = $this->input->post('author', TRUE);
			
			$data = array (
				'tgl' => $tgl,
				'jam' => $jam,
				'judul_berita' => $judul_berita,
				'isi_berita' => $isi_berita,
				'author' => $author,
				// 'gambar' => $gambar,
			);
			$where = [
				'id_berita'		=> $id,
			];
			$this->db->where($where);
			$this->db->update('tbl_berita', $data);
// 			redirect('admin/v_berita');
//         }
		
		$this->session->set_flashdata('success', 'Data Berhasil Di Ubah!');
		redirect('admin/v_berita');
}
	public function hapus_berita($id_berita)
	{
		$where = array('id_berita' => $id_berita);
		$this->db->delete('tbl_berita', $where);
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');
		redirect('admin/v_berita');
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
				'gambar' => $this->input->post("gambar"),
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
		$config['upload_path']          = APPPATH.'../gambar/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 4096;
		$config['max_height']           = 4096;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/tambah_pengumuman', $error);
		} else {
			$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
			$id_pengumuman = $this->input->post('id', TRUE);
			$judul_pengumuman = $this->input->post('judul', TRUE);
			$isi_pengumuman = $this->input->post('isi', TRUE);
			$tgl = $this->input->post('tgl', TRUE);
			$pengumuman_author = $this->input->post('author', TRUE);
			
			$data = array (
				'id_pengumuman' => $id_pengumuman,
				'judul_pengumuman' => $judul_pengumuman,
				'isi_pengumuman' => $isi_pengumuman,
				'tgl' => $tgl,
				'pengumuman_author' => $pengumuman_author,
				'gambar' => $gambar,
			);
			$this->db->insert('tbl_pengumuman', $data);
			redirect('admin/v_pengumuman');
        }
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
	public function v_aspirasi()
	{
		
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
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->db->order_by('tanggal', 'desc');
		// URUTAN get_where: get_where('nama_tabel',[kolom_yg_dicari], limit, offset)
		$data['pengumuman'] = $this->db->get_where('tbl_pengumuman', [], 3);
		$this->db->order_by('tgl_agenda', 'desc');
		$data['agenda'] = $this->db->get_where('tbl_agenda', [], 4);
		$this->db->order_by('tanggal', 'desc');
		$data['galeri'] = $this->db->get_where('tbl_galeri', [], 6);
		$data['jml_agenda'] = $this->db->get('tbl_agenda')->num_rows();
		$data['jml_pengumuman'] = $this->db->get('tbl_agenda')->num_rows();
		$data['jml_berita'] = $this->db->get('tbl_agenda')->num_rows();
		$data['jml_galeri'] = $this->db->get('tbl_galeri')->num_rows();
		// $this->load->view('welcome/header');
		// $this->load->view('welcome/home',$data);
		// $this->load->view('welcome/footer');
		echo "index";
	}
	public function semua_berita()
	{
		$this->db->order_by('tanggal', 'desc');
		$data['berita_header'] = $this->db->get_where('tbl_berita', [], 1)->row_array();
		$this->db->order_by('tanggal', 'desc');
		// $data['berita'] = $this->db->get('tbl_tulisan');
		$this->load->view('welcome/header');
		$this->load->view('welcome/semua_berita', $data);
		$this->load->view('welcome/footer');
	}
	public function detail_berita($id)
	{
		$data['berita'] = $this->db->get_where('tbl_tulisan', ['tulisan_id' => $id])->row_array();
		$this->load->view('welcome/header');
		$this->load->view('welcome/detail_berita', $data);
		$this->load->view('welcome/footer');
	}
	public function semua_pengumuman()
	{
		$this->db->order_by('pengumuman_tanggal', 'desc');
		$data['pengumuman_header'] = $this->db->get_where('tbl_pengumuman', [], 1)->row_array();
		$this->db->order_by('pengumuman_tanggal', 'desc');
		$data['pengumuman'] = $this->db->get('tbl_pengumuman');
		$this->load->view('welcome
			/header');
		$this->load->view('welcome
			/semua_pengumuman', $data);
		$this->load->view('welcome
			/footer');
	}
	public function detail_pengumuman($id)
	{
		$data['pengumuman'] = $this->db->get_where('tbl_pengumuman', ['pengumuman_id' => $id])->row_array();
		$this->load->view('welcome
			/header');
		$this->load->view('welcome
			/detail_pengumuman', $data);
		$this->load->view('welcome
			/footer');
	}
	public function semua_agenda()
	{
		$this->db->order_by('agenda_tanggal', 'desc');
		$data['agenda_header'] = $this->db->get_where('tbl_agenda', [], 1)->row_array();
		$this->db->order_by('agenda_tanggal', 'desc');
		$data['agenda'] = $this->db->get('tbl_agenda');
		$this->load->view('welcome
			/header');
		$this->load->view('welcome
			/semua_agenda', $data);
		$this->load->view('welcome
			/footer');
	}
	public function detail_agenda($id)
	{
		$data['agenda'] = $this->db->get_where('tbl_agenda', ['agenda_id' => $id])->row_array();
		$this->load->view('welcome
			/header');
		$this->load->view('welcome
			/detail_agenda', $data);
		$this->load->view('welcome
			/footer');
	}
	public function semua_galeri()
	{
		$this->db->order_by('tgl', 'desc');
		$data['galeri_header'] = $this->db->get_where('tbl_galeri', [], 1)->row_array();
		$this->db->order_by('tgl', 'desc');
		$data['agenda'] = $this->db->get('tbl_galeri');
		$this->load->view('welcome
			/header');
		$this->load->view('welcome
			/semua_galei', $data);
		$this->load->view('welcome
			/footer');
	}
	public function detail_galeri($id)
	{
		$data['galeri'] = $this->db->get_where('tbl_galeri', ['id_galeri' => $id])->row_array();
		$this->load->view('welcome
			/header');
		$this->load->view('welcome
			/detail_galeri', $data);
		$this->load->view('welcome
			/footer');
	}
}
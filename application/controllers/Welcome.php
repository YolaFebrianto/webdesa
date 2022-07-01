<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
		$this->load->view('frontend/header');
		$this->load->view('frontend/content', $data);
		$this->load->view('frontend/footer');
	}
	public function semua_berita()
	{
		$this->db->order_by('tgl', 'desc');
		$data['berita_header'] = $this->db->get_where('tbl_berita', [], 1)->row_array();
		$this->db->order_by('tgl', 'desc');
		$data['berita'] = $this->db->get('tbl_berita');
		$this->load->view('frontend/header');
		$this->load->view('frontend/semua_berita', $data);
		$this->load->view('frontend/footer');
	}
	public function detail_berita($id)
 	{
 		$data['berita'] = $this->db->get_where('tbl_berita', ['id_berita' => $id])->row_array();
 		$this->load->view('frontend/header');
 		$this->load->view('frontend/detail_berita', $data);
 		$this->load->view('frontend/footer');
	}
// }
// 	
// 	public function semua_pengumuman()
// 	{
// 		$this->db->order_by('tgl', 'desc');
// 		$data['pengumuman_header'] = $this->db->get_where('tbl_pengumuman', [], 1)->row_array();
// 		$this->db->order_by('tgl', 'desc');
// 		$data['pengumuman'] = $this->db->get('tbl_pengumuman');
// 		$this->load->view('template/header');
// 		$this->load->view('template/semua_pengumuman', $data);
// 		$this->load->view('template/footer');
// 	}
// 	public function detail_pengumuman($id)
// 	{
// 		$data['pengumuman'] = $this->db->get_where('tbl_pengumuman', ['id_pengumuman' => $id])->row_array();
// 		$this->load->view('template/header');
// 		$this->load->view('template/detail_pengumuman', $data);
// 		$this->load->view('template/footer');
// 	}
// 	public function semua_agenda()
// 	{
// 		$this->db->order_by('tgl', 'desc');
// 		$data['agenda_header'] = $this->db->get_where('tbl_agenda', [], 1)->row_array();
// 		$this->db->order_by('tgl', 'desc');
// 		$data['agenda'] = $this->db->get('tbl_agenda');
// 		$this->load->view('template/header');
// 		$this->load->view('template/semua_agenda', $data);
// 		$this->load->view('template/footer');
// 	}
// 	public function detail_agenda($id)
// 	{
// 		$data['agenda'] = $this->db->get_where('tbl_agenda', ['id_agenda' => $id])->row_array();
// 		$this->load->view('template/header');
// 		$this->load->view('template/detail_agenda', $data);
// 		$this->load->view('template/footer');
// 	}
// 	public function semua_galeri()
// 	{
// 		$this->db->order_by('tgl', 'desc');
// 		$data['galeri_header'] = $this->db->get_where('tbl_galeri', [], 1)->row_array();
// 		$this->db->order_by('tgl', 'desc');
// 		$data['galeri'] = $this->db->get('tbl_galeri');
// 		$this->load->view('template/header');
// 		$this->load->view('template/semua_galeri', $data);
// 		$this->load->view('template/footer');
// 	}
// 	public function detail_galeri($id)
// 	{
// 		$data['galeri'] = $this->db->get_where('tbl_galeri', ['id_galeri' => $id])->row_array();
// 		$this->load->view('template/header');
// 		$this->load->view('template/detail_galeri', $data);
// 		$this->load->view('template/footer');
// 	}
// 	public function about()
// 	 {
// 	 	$this->load->view('template/header');
// 		 $this->load->view('template/about');
// 	 	$this->load->view('template/footer');	
// 	 }
	 public function aspirasi()
	 {
	 	$this->load->view('frontend/header');
		 $this->load->view('frontend/aspirasi');
	 	$this->load->view('frontend/footer');	
	 }
	 public function pengaduan()
	 {
	 	$this->load->view('frontend/header');
		 $this->load->view('frontend/pengaduan');
	 	$this->load->view('frontend/footer');	
	 }
	 public function login ()
	 {
	 	$this->load->view('frontend/login');
	 }

}

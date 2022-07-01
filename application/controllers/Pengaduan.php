<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
	}
	public function Pengaduan()
	{
		if (!empty($this->input->post('btnsubmit'))) {
			$data = [
				'id'	=> $this->input->post('id'),
				'nama_pelapor'	=> $this->input->post('nama_pelapor'),
				'alamat' => $this->input->post("alamat"),	
				'tgl' => $this->input->post('tanggal'),
				'isi' => $this->input->post("isi"),
				'keterangan' => $this->input->post("keterangan"),
			];

			$this->db->insert('tbl_pengaduan', $data);
			$this->session->set_flashdata('success', 'pengumuman Berhasil Ditambahkan!');
			redirect('pengaduan/pengaduan');
		}
		$data['pengaduan'] = $this->db->get('tbl_pengaduan');
		$this->load->view('templates/header');
		$this->load->view('templates/pengaduan', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_pengaduan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/tambah_pengaduan');
		$this->load->view('templates/footer');
	}
	
}
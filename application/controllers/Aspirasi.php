<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aspirasi extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
	}
	public function aspirasi()
	{
		if (!empty($this->input->post('btnsubmit'))) {
			$data = [
				'id'	=> $this->input->post('id'),
				'nama_pelapor'	=> $this->input->post('nama_pelapor'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post("alamat"),	
				'tgl' => $this->input->post('tanggal'),
				'isi' => $this->input->post("isi"),
				
				// 'keterangan' => $this->input->post("keterangan"),
			];

			$this->db->insert('tbl_aspirasi', $data);
			$this->session->set_flashdata('success', 'pengumuman Berhasil Ditambahkan!');
			redirect('aspirasi/aspirasi');
		}
		$where = [
		  'email' => @$this->session->userdata('email'),  
		];
		$data['aspirasi'] = $this->db->get_where('tbl_aspirasi',$where);
		$this->load->view('templates/header');
		$this->load->view('templates/aspirasi', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_aspirasi()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/tambah_aspirasi');
		$this->load->view('templates/footer');
	}
	
}
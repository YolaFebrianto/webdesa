<?php 

class M_desa extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tbl_berita');

	}
	public function input_data($data){
		$this->db->insert('tbl_berita', $data);

}
	}
?>
<?php 

class M_berita extends CI_Model {

	public function tampil_data(){
		return $this->db->get('tbl_berita');
	}

}

 ?>
<?php

class Paket_model extends CI_model {
	public function getAllPaket(){
		return $this->db->get('paket_indihome')->result_array();
	}
	
	public function tambah_paket($data) {
		$this->db->insert('paket_indihome', $data);
	}

	public function hapuspaket($id_paket) {
		$this->db->where('id_paket',$id_paket);
		$this->db->delete('paket_indihome');
	}

	public function getPaketByID($id_paket){
		return $this->db->get_where('paket_indihome', ['id_paket' => $id_paket])->row_array();
	}  
}


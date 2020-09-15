<?php

class Form_model extends CI_model {
	public function getAllForm(){
		return $this->db->get('form_pelanggan')->result_array();
	}

	public function tambahform() {
		$data = [
			"nik" => $this->input->post('nik'),
			"nama" => $this->input->post('nama'),
			"alamat" => $this->input->post('alamat'),
			"telepon" => $this->input->post('telepon'),
			"email" => $this->input->post('email'),
		];
		$this->db->insert('form_pelanggan', $data);
	}

	public function hapusform($nik) {
		$this->db->where('nik',$nik);
		$this->db->delete('form_pelanggan');
	}
}
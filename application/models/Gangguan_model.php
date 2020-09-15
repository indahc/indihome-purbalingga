<?php

class Gangguan_model extends CI_model {
	public function getAllGangguan(){
		return $this->db->get('lapor_gangguan')->result_array();
	}

	public function tambahgangguan() {
		$data = [
			"nik" => $this->input->post('nik'),
			"nama" => $this->input->post('nama'),
			"alamat" => $this->input->post('alamat'),
			"telepon" => $this->input->post('telepon'),
			"gangguan" => $this->input->post('gangguan'),
		];
		$this->db->insert('lapor_gangguan', $data);
	}

	public function hapusgangguan($nik) {
		$this->db->where('nik',$nik);
		$this->db->delete('lapor_gangguan');
	}
}
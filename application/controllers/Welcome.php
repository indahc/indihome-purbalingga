<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('Gangguan_model');
		$this->load->model('Paket_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('nik','nik','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('telepon','telepon','required');
		$this->form_validation->set_rules('gangguan','gangguan','required');
		if($this->form_validation->run()==FALSE){
			$data['paket_indihome']= $this->Paket_model->getAllPaket();
			$this->load->view('welcome_message', $data);
		}else{
			$this->Gangguan_model->tambahgangguan();
			$this->session->set_flashdata('flash','Berhasil');
			redirect('welcome');
		}
	}
}

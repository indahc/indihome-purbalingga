<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('Form_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('nik','nik','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('telepon','telepon','required');
		$this->form_validation->set_rules('email','email','required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('register');
		}else{
			$this->Form_model->tambahform();
			$this->session->set_flashdata('flash','Berhasil');
			redirect('welcome');
		}
	}
}

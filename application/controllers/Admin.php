<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('Paket_model');
		$this->load->model('Form_model');
		$this->load->model('Gangguan_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('id_paket','id_paket','required');
		$this->form_validation->set_rules('nama_paket','nama_paket','required');
		$this->form_validation->set_rules('harga_paket','harga_paket','required');
		$this->form_validation->set_rules('gambar_paket','gambar_paket','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');
			
			if($this->form_validation->run()==FALSE){
				$data['paket_indihome']= $this->Paket_model->getAllPaket();
				$data['form_pelanggan']= $this->Form_model->getAllForm();
				$data['lapor_gangguan']= $this->Gangguan_model->getAllGangguan();
				$this->load->view('admin/overview',$data );
			}else{
				$config = [
					'file_name' => date('d-m-Y').'-paket',
					'upload_path' => './img/paket/',
					'allowed_types' => 'gif|jpg|png|jpeg',
					'max_size' => 2048,
				];
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar_paket')){
					$file = $this->upload->data();
					$data = [
						'id_paket' => $this->input->post('id_paket'),
						'nama_paket' => $this->input->post('nama_paket'),
						'harga_paket' => $this->input->post('harga_paket'),
						'gambar_paket' => $file['file_name'],
						'deskripsi' => $this->input->post('deskripsi'),
					];
					$this->Paket_model->tambah_paket($data);					
				}
			}
	}

	public function tambahPaket() {
		$config = [
			'file_name' => date('d-m-Y').'-paket',
			'upload_path' => './img/paket/',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'max_size' => 2048,
		];
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			$file = $this->upload->data();
			$data = [
				'id_paket' => $this->input->post('id_paket'),
				'nama_paket' => $this->input->post('nama_paket'),
				'harga_paket' => $this->input->post('harga_paket'),
				'gambar_paket' => $file['file_name'],
				'deskripsi' => $this->input->post('deskripsi'),
			];
			$this->Paket_model->tambah_paket($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Berhasil!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"> &times; </span> </button> </div>');
			redirect(base_url('admin'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Gagal!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"> &times; </span> </button> </div>');
			redirect(base_url('admin'));
		}
	}

	public function hapuspaket($id_paket) {
		$this->hapusimage($id_paket);
		$this->Paket_model->hapuspaket($id_paket);
		$this->session->set_flashdata('flash','Data terhapus');
		redirect('admin');
	}

	public function hapusimage($id_paket){
		$data = $this->Paket_model->getPaketByID($id_paket);
		$filename = explode('.', $data['gambar_paket'])[0];
		return array_map('unlink', glob(FCPATH."./img/paket/$filename.*"));
	}
	
	public function hapusform($nik) {
		$this->Form_model->hapusform($nik);
		$this->Gangguan_model->hapusgangguan($nik);
		$this->session->set_flashdata('flash','Data terhapus');
		redirect('admin');
	}
	public function hapusgangguan($nik) {
		$this->Gangguan_model->hapusgangguan($nik);
		$this->session->set_flashdata('flash','Data terhapus');
		redirect('admin');
	}
}

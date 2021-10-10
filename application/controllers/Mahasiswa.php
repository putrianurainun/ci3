<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}

	public function index()
	{
		$data['title']= 'Data Mahasiswa';
		$mhs=$this->M_Mahasiswa->getDataMahasiswa();
		$datas=array('data_mhs'=> $mhs);
		
		$this->load->view('mahasiswa/index', $datas);
	}
	public function create()
	{
		$this->load->view('mahasiswa/create');
	}
	public function save()
	{
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$jurusan=$this->input->post('jurusan');
		$save=array(
			'nim'=>$nim,
			'nama'=>$nama,
			'jurusan'=>$jurusan
		);
		
		$this->M_Mahasiswa->InsertDataMhs($save);
		redirect(base_url('mahasiswa'));
	}
	public function formEdit($id)
	{
		$save=$this->M_Mahasiswa->getDataMahasiswaDetail($id);
		$DATA=array('data_mhs'=>$save);
		$this->load->view('mahasiswa/edit', $DATA);
	}
	public function aksiedit()
	{
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$jurusan=$this->input->post('jurusan');

		$save= array(
			'nama'=>$nama,
			'jurusan'=>$jurusan,
		);

		$this->M_Mahasiswa->editMhs($save, $nim);
		redirect(base_url('mahasiswa'));
	}
	public function aksidelete($nim)
	{
		$this->M_Mahasiswa->deleteDataMhs($nim);
		redirect(base_url('mahasiswa'));
	}
}
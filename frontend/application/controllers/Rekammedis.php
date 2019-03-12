<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$no_rekamedis = $session_data['no_rekamedis'];
			$no_tkp = $session_data['no_ktp'];
			$no_bpjs = $session_data['no_bpjs'];
			$nama_pasien = $session_data['nama_pasien'];
			$jenis_kelamin = $session_data['jenis_kelamin'];
			$tempat_lahir = $session_data['tempat_lahir'];
			$tanggal_lahir = $session_data['tanggal_lahir'];
			$alamat = $session_data['alamat'];
			$desa = $session_data['desa'];
			$status_pasien = $session_data['status_pasien'];
			$no_telp = $session_data['no_telp'];
			$password = $session_data['password'];

			$this->load->helper('url', 'form');
			$this->load->library('form_validation');
			$this->load->model('rekammedis_model');
			$this->load->library('encryption');
		}
		else{
			redirect('login','refresh');
		}
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$no_rekamedis = $session_data['no_rekamedis'];
			$no_tkp = $session_data['no_ktp'];
			$no_bpjs = $session_data['no_bpjs'];
			$nama_pasien = $session_data['nama_pasien'];
			$jenis_kelamin = $session_data['jenis_kelamin'];
			$tempat_lahir = $session_data['tempat_lahir'];
			$tanggal_lahir = $session_data['tanggal_lahir'];
			$alamat = $session_data['alamat'];
			$desa = $session_data['desa'];
			$status_pasien = $session_data['status_pasien'];
			$no_telp = $session_data['no_telp'];
			$password = $session_data['password'];

			$data = array('nama_pasien' => $nama_pasien,
						  'pendaftaran' => $this->rekammedis_model->getPendaftaran($no_rekamedis) );

			$this->load->view('rekammedis/rekammedis',$data);
		}
		else{
			redirect('login','refresh');
		}
	}

	public function detail($no_rawat)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$no_rekamedis = $session_data['no_rekamedis'];
			$no_tkp = $session_data['no_ktp'];
			$no_bpjs = $session_data['no_bpjs'];
			$nama_pasien = $session_data['nama_pasien'];
			$jenis_kelamin = $session_data['jenis_kelamin'];
			$tempat_lahir = $session_data['tempat_lahir'];
			$tanggal_lahir = $session_data['tanggal_lahir'];
			$alamat = $session_data['alamat'];
			$desa = $session_data['desa'];
			$status_pasien = $session_data['status_pasien'];
			$no_telp = $session_data['no_telp'];
			$password = $session_data['password'];

			$data = array('nama_pasien' => $nama_pasien,
						  'pendaftaran' => $this->rekammedis_model->getPendaftaran($no_rekamedis),
						  'resep' => $this->rekammedis_model->getResep($no_rawat),
						  'tindakan' => $this->rekammedis_model->getTindakan($no_rawat) );
			$this->load->view('rekammedis/detail',$data);
		}
		else{
			redirect('login','refresh');
		}
	}

}

/* End of file Rekammedis.php */
/* Location: ./application/controllers/Rekammedis.php */
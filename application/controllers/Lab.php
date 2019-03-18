<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lab extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_lab_model');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','lab/tbl_lab_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_lab_model->json();
    }

    public function create(){
		$session_data = $this->session->userdata('sesslogin');
        
        // load model
        $this->load->model('Tbl_pendaftaran_model');
        $data["pendaftaran"] = $this->Tbl_pendaftaran_model->selectPendaftaran($pendaftaran);

		$this->load->helper('url','form');	
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_reg', '', 'trim|required');
        $this->form_validation->set_rules('no_rekamedis', '', 'trim|required');
        $this->form_validation->set_rules('nama_pasien', '', 'trim|required');
		$this->form_validation->set_rules('alamat', '', 'trim');
        $this->form_validation->set_rules('tgl_periksa', '', 'trim|required');
        $this->form_validation->set_rules('kode_dokter', '', 'trim|required');
        $this->form_validation->set_rules('tgl_ambil_sampel', '', 'trim|required');
        $this->form_validation->set_rules('tgl_penyerahan_hasil', '', 'trim|required');

        // 1
        $this->form_validation->set_rules('hb_l', '', 'trim');
        $this->form_validation->set_rules('hb_p', '', 'trim');
        $this->form_validation->set_rules('leucosit', '', 'trim');
        $this->form_validation->set_rules('eritrosit_l', '', 'trim');
        $this->form_validation->set_rules('eritrosit_p', '', 'trim');
        $this->form_validation->set_rules('led_l', '', 'trim');
        $this->form_validation->set_rules('led_p', '', 'trim');
        $this->form_validation->set_rules('trombosit', '', 'trim');
        $this->form_validation->set_rules('hematrocit_l', '', 'trim');
        $this->form_validation->set_rules('hematrocit_p', '', 'trim');
        $this->form_validation->set_rules('mcv', '', 'trim');
        $this->form_validation->set_rules('mhc', '', 'trim');
        $this->form_validation->set_rules('mchc', '', 'trim');
        $this->form_validation->set_rules('eosinofil', '', 'trim');
        $this->form_validation->set_rules('basofil', '', 'trim');
        $this->form_validation->set_rules('stab', '', 'trim');
        $this->form_validation->set_rules('segmen', '', 'trim');
        $this->form_validation->set_rules('limposit', '', 'trim');
        $this->form_validation->set_rules('monosit', '', 'trim');

        // 2
        $this->form_validation->set_rules('widal_h', '', 'trim');
        $this->form_validation->set_rules('widal_o', '', 'trim');
        $this->form_validation->set_rules('widal_pa', '', 'trim');
        $this->form_validation->set_rules('widal_pb', '', 'trim');
        $this->form_validation->set_rules('widal_hiv', '', 'trim');
        $this->form_validation->set_rules('ppt', '', 'trim');
        $this->form_validation->set_rules('goldar', '', 'trim');
        $this->form_validation->set_rules('hbsag', '', 'trim');
        $this->form_validation->set_rules('syphilis', '', 'trim');
        $this->form_validation->set_rules('nsi', '', 'trim');

        // 3 
        $this->form_validation->set_rules('glucosa_puasa', '', 'trim');
        $this->form_validation->set_rules('glucosa_2jam', '', 'trim');
        $this->form_validation->set_rules('glucosa_sewaktu', '', 'trim');
        $this->form_validation->set_rules('uric_acid_l', '', 'trim');
        $this->form_validation->set_rules('uric_acid_p', '', 'trim');
        $this->form_validation->set_rules('cholestrol', '', 'trim');

        // 4

        // 5
        $this->form_validation->set_rules('warna', '', 'trim');
        $this->form_validation->set_rules('bentuk', '', 'trim');
        $this->form_validation->set_rules('konsistensi', '', 'trim');
        $this->form_validation->set_rules('amoeba', '', 'trim');
        $this->form_validation->set_rules('arytrocit', '', 'trim');
        $this->form_validation->set_rules('leukosit', '', 'trim');
        $this->form_validation->set_rules('telur_cacing', '', 'trim');
        $this->form_validation->set_rules('malaria', '', 'trim');
        $this->form_validation->set_rules('bta', '', 'trim');

		if($this->form_validation->run()==FALSE){	
			// $this->load->view('partials/header');
			// $this->load->view('lab/tbl_lab_form', $data);
            // $this->load->view('partials/footer');		
            $this->template->load('template','lab/tbl_lab_form', $data);
		}else{
			$this->load->model('Tbl_lab_model');
			$this->Tbl_lab_model->create();
			$this->session->set_flashdata('sukses','1');	
			redirect('lab','refresh');
		}
	}
}
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


    public function index(){
        $data['riwayat_tindakan']=$this->Tbl_lab_model->getTindakan();
        
        // $this->load->view('template');
        $this->template->load('template','lab/tbl_lab_list', $data);
    }

    public function create($id){
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_rekamedis', 'ID', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $this->template->load('template','lab/tbl_lab_form', $data);	
		}else{
			$this->load->model('Tbl_lab_model');
            $id=$this->Tbl_lab_model->createData();
            //$data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $data['pasien']=$this->Tbl_lab_model->select($id);
            //var_dump($data['pasien']);
			$this->session->set_flashdata('sukses','1');	
            $this->template->load('template','lab/hematologi_form', $data);
		}
    }

    



    // FORM LAB ===================================================
    public function hematologi()
    {
        $this->template->load('template','lab/hematologi_form');
    } 

    public function imuno()
    {
        $this->template->load('template','lab/imuno_form');
    }

    public function kimia()
    {
        $this->template->load('template','lab/kimiaklinik_form');
    }

    public function urine()
    {
        $this->template->load('template','lab/urine_form');
    }

    public function parasitologi()
    {
        $this->template->load('template','lab/parasitologi_form');
    }
    // FORM LAB END ==========================================================

    // CREATE LAB ==============================================================
    public function createHematologi($id){
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_rekamedis', 'ID', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $this->template->load('template','lab/hematologi_form', $data);	
		}else{
			$this->load->model('Tbl_lab_model');
            $id=$this->Tbl_lab_model->createHema();
            //$data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $data['pasien']=$this->Tbl_lab_model->select($id);
            //var_dump($data['pasien']);
			$this->session->set_flashdata('sukses','1');	
            $this->template->load('template','lab/hematologi_form', $data);
		}
    }

    public function createImuno($id){
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_rekamedis', 'ID', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $this->template->load('template','lab/imuno_form', $data);	
		}else{
			$this->load->model('Tbl_lab_model');
            $id=$this->Tbl_lab_model->createI();
            //$data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $data['pasien']=$this->Tbl_lab_model->select($id);
            //var_dump($data['pasien']);
			$this->session->set_flashdata('sukses','1');	
            $this->template->load('template','lab/imuno_form', $data);
		}
    }

    public function createKimia($id){
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_rekamedis', 'ID', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $this->template->load('template','lab/kimiaklinik_form', $data);	
		}else{
			$this->load->model('Tbl_lab_model');
            $id=$this->Tbl_lab_model->createK();
            //$data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $data['pasien']=$this->Tbl_lab_model->select($id);
            //var_dump($data['pasien']);
			$this->session->set_flashdata('sukses','1');	
            $this->template->load('template','lab/kimiaklinik_form', $data);
		}
    }

    public function createUrine($id){
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_rekamedis', 'ID', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $this->template->load('template','lab/urine_form', $data);	
		}else{
			$this->load->model('Tbl_lab_model');
            $id=$this->Tbl_lab_model->createU();
            //$data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $data['pasien']=$this->Tbl_lab_model->select($id);
            //var_dump($data['pasien']);
			$this->session->set_flashdata('sukses','1');	
            $this->template->load('template','lab/urine_form', $data);
		}
    }

    public function createParasitologi($id){
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_rekamedis', 'ID', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $this->template->load('template','lab/parasitologi_form', $data);	
		}else{
			$this->load->model('Tbl_lab_model');
            $id=$this->Tbl_lab_model->createP();
            //$data['lab']=$this->Tbl_lab_model->getTindakanById($id);
            $data['pasien']=$this->Tbl_lab_model->select($id);
            //var_dump($data['pasien']);
			$this->session->set_flashdata('sukses','1');	
            $this->template->load('template','lab/parasitologi_form', $data);
		}
    }

    public function createHematologi2(){
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
    }

    public function createImunoserologi2(){
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
    }

    public function createKimia2(){
        // 3 
        $this->form_validation->set_rules('glucosa_puasa', '', 'trim');
        $this->form_validation->set_rules('glucosa_2jam', '', 'trim');
        $this->form_validation->set_rules('glucosa_sewaktu', '', 'trim');
        $this->form_validation->set_rules('uric_acid_l', '', 'trim');
        $this->form_validation->set_rules('uric_acid_p', '', 'trim');
        $this->form_validation->set_rules('cholestrol', '', 'trim');
    }

    public function createUrine2(){

    }

    public function createParasitologi2(){
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
    }
    // CREATE LAB END ==========================================================
}

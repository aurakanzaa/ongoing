<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    //halo

class Dataicd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_icd_model');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','icd/tbl_icd_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_icd_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_icd_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_icd' => $row->id_icd,
        'kode_icd' => $row->kode_icd,
        'deskripsi' => $row->deskripsi,
	    );
            $this->template->load('template','icd/tbl_icd_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dataicd'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('dataicd/create_action'),
	    'id_icd' => set_value('id_icd'),
        'kode_icd' => set_value('kode_icd'),
        'deskripsi' => set_value('deskripsi'),
	);
        $this->template->load('template','icd/tbl_icd_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
            'kode_icd' => $this->input->post('kode_icd',TRUE),
            'deskripsi' => $this->input->post('deskripsi',TRUE),
	    );

            $this->Tbl_icd_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');
            redirect(site_url('dataicd'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_icd_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dataicd/update_action'),
		'id_icd' => set_value('id_icd', $row->id_icd),
        'kode_icd' => set_value('kode_icd', $row->id_icd),
        'deskripsi' => set_value('deskripsi', $row->deskripsi),
	    );
            $this->template->load('template','icd/tbl_icd_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dataicd'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_icd', TRUE));
        } else {
            $data = array(
		'kode_icd' => $this->input->post('kode_icd',TRUE),
	    );

            $this->Tbl_icd_model->update($this->input->post('id_icd', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');            
            redirect(site_url('dataicd'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_icd_model->get_by_id($id);

        if ($row) {
            $this->Tbl_icd_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');            
            redirect(site_url('dataicd'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dataicd'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('kode_icd', 'kode icd', 'trim|required');
    $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');

    $this->form_validation->set_message('required', '{field} wajib diisi');

	$this->form_validation->set_rules('id_icd', 'id_icd', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_bidang.xls";
        $judul = "tbl_bidang";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Bidang");

	foreach ($this->Tbl_icd_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_bidang);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_bidang.doc");

        $data = array(
            'tbl_bidang_data' => $this->Tbl_icd_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('bidang/tbl_bidang_doc',$data);
    }

}


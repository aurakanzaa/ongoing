<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//halo
class Penanggung extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_penanggung_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','penanggung/tbl_penanggung_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_penanggung_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_penanggung_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_ruang' => $row->kode_ruang,
		'penanggung' => $row->penanggung,
		'jabatan' => $row->jabatan,
		'no_telp' => $row->no_telp,
	    );
            $this->template->load('template','penanggung/tbl_penanggung_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penanggung'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('penanggung/create_action'),
	    'kode_ruang' => set_value('kode_ruang'),
	    'penanggung' => set_value('penanggung'),
	    'jabatan' => set_value('jabatan'),
	    'no_telp' => set_value('no_telp'),
	);
        $this->template->load('template','penanggung/tbl_penanggung_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'kode_ruang' => $this->input->post('kode_ruang',TRUE),
		'penanggung' => $this->input->post('penanggung',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
	    );

            $this->Tbl_penanggung_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');
            redirect(site_url('penanggung'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_penanggung_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('penanggung/update_action'),
		'kode_ruang' => set_value('kode_ruang', $row->kode_ruang),
		'penanggung' => set_value('penanggung', $row->penanggung),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'no_telp' => set_value('no_telp', $row->no_telp),
	    );
            $this->template->load('template','penanggung/tbl_penanggung_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penanggung'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_ruang', TRUE));
        } else {
            $data = array(
        'kode_ruang' => $this->input->post('kode_ruang',TRUE),
		'penanggung' => $this->input->post('penanggung',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
	    );

            $this->Tbl_penanggung_model->update($this->input->post('kode_ruang', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');              
            redirect(site_url('penanggung'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_penanggung_model->get_by_id($id);

        if ($row) {
            $this->Tbl_penanggung_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');                 redirect(site_url('penanggung'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penanggung'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_ruang', 'nama ruang', 'trim|required');
    $this->form_validation->set_rules('penanggung', 'penanggung', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telpon', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');


	$this->form_validation->set_rules('kode_ruang', 'kode_ruang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_penanggung.xls";
        $judul = "tbl_penanggung";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama penanggung");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "No Telpon");

	foreach ($this->Tbl_penanggung_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_penanggung);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_telpon);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_penanggung.doc");

        $data = array(
            'tbl_penanggung_data' => $this->Tbl_penanggung_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('penanggung/tbl_penanggung_doc',$data);
    }

}


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//halo
class Jadwalpraktek extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_jadwal_praktek_dokter_model');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','jadwalpraktek/tbl_jadwal_praktek_dokter_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_jadwal_praktek_dokter_model->json();
    }
    public function read($id) 
    {
        $row = $this->Tbl_jadwal_praktek_dokter_model->get_by_id($id);
        if ($row) {
            $data = array(
            'id_jadwal' => $row->id_jadwal,
            'hari' => $row->hari,
            'loket' => $row->loket,
            'pelayanan' => $row->pelayanan,
	    );
            $this->template->load('template','jadwalpraktek/tbl_jadwal_praktek_dokter_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwalpraktek'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('jadwalpraktek/create_action'),
	    'id_jadwal' => set_value('id_jadwal'),
	    'hari' => set_value('hari'),
	    'loket' => set_value('loket'),
	    'pelayanan' => set_value('pelayanan'),
	);
        $this->template->load('template','jadwalpraktek/tbl_jadwal_praktek_dokter_form', $data);
    }

    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'hari' => $this->input->post('hari',TRUE),
		'loket' => $this->input->post('loket',TRUE),
		'pelayanan' => $this->input->post('pelayanan',TRUE),
	    );

            $this->Tbl_jadwal_praktek_dokter_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');  
            redirect(site_url('jadwalpraktek'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_jadwal_praktek_dokter_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jadwalpraktek/update_action'),
		'id_jadwal' => set_value('id_jadwal', $row->id_jadwal),
		'hari' => set_value('hari', $row->hari),
		'loket' => set_value('loket', $row->loket),
		'pelayanan' => set_value('pelayanan', $row->pelayanan),
	    );
            $this->template->load('template','jadwalpraktek/tbl_jadwal_praktek_dokter_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwalpraktek'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jadwal', TRUE));
        } else {
            $data = array(
		'hari' => $this->input->post('hari',TRUE),
		'loket' => $this->input->post('loket',TRUE),
		'pelayanan' => $this->input->post('pelayanan',TRUE),
	    );

            $this->Tbl_jadwal_praktek_dokter_model->update($this->input->post('id_jadwal', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');              
            redirect(site_url('jadwalpraktek'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_jadwal_praktek_dokter_model->get_by_id($id);

        if ($row) {
            $this->Tbl_jadwal_praktek_dokter_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');             
             redirect(site_url('jadwalpraktek'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwalpraktek'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('hari', 'hari', 'trim|required');
	$this->form_validation->set_rules('loket', 'loket', 'trim|required');
	$this->form_validation->set_rules('pelayanan', 'pelayanan', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');

	$this->form_validation->set_rules('id_jadwal', 'id_jadwal', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_jadwal_praktek_dokter.xls";
        $judul = "tbl_jadwal_praktek_dokter";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Hari");
	xlsWriteLabel($tablehead, $kolomhead++, "Loket");
	xlsWriteLabel($tablehead, $kolomhead++, "Pelayanan");

	foreach ($this->Tbl_jadwal_praktek_dokter_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->hari);
	    xlsWriteLabel($tablebody, $kolombody++, $data->loket);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pelayanan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_jadwal_praktek_dokter.doc");

        $data = array(
            'tbl_jadwal_praktek_dokter_data' => $this->Tbl_jadwal_praktek_dokter_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('jadwalpraktek/tbl_jadwal_praktek_dokter_doc',$data);
    }

}


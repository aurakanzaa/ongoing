<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Datakamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_kamar_model');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','datakamar/tbl_kamar_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_kamar_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_kamar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_kamar' => $row->kode_kamar,
		'nama_kamar' => $row->nama_kamar,
		'kelas_kamar' => $row->kelas_kamar,
		'kapasitas' => $row->kapasitas,
        'harga' => $row->harga,
        'stok' => $row->stok,

	    );
            $this->template->load('template','datakamar/tbl_kamar_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('datakamar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('datakamar/create_action'),
	    'kode_kamar' => set_value('kode_kamar'),
	    'nama_kamar' => set_value('nama_kamar'),
	    'kelas_kamar' => set_value('kelas_kamar'),
	    'kapasitas' => set_value('kapasitas'),
        'harga' => set_value('harga'),
        'stok' => set_value('stok'),

	);
        $this->template->load('template','datakamar/tbl_kamar_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'kode_kamar' => $this->input->post('kode_kamar',TRUE),
		'nama_kamar' => $this->input->post('nama_kamar',TRUE),
		'kelas_kamar' => $this->input->post('kelas_kamar',TRUE),
		'kapasitas' => $this->input->post('kapasitas',TRUE),
        'harga' => $this->input->post('harga',TRUE),
        'stok' => $this->input->post('stok',TRUE),


	    );

            $this->Tbl_kamar_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');       
            redirect(site_url('datakamar'));
        }
    }
    
   public function update($id) 
    {
        $row = $this->Tbl_kamar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('datakamar/update_action'),
        'kode_kamar' => set_value('kode_kamar', $row->kode_kamar),
        'nama_kamar' => set_value('nama_kamar', $row->nama_kamar),
        'kelas_kamar' => set_value('kelas_kamar', $row->kelas_kamar),
        'kapasitas' => set_value('kapasitas', $row->kapasitas),
        'harga' => set_value('harga', $row->harga),
        'stok' => set_value('stok', $row->stok),

        );
            $this->template->load('template','datakamar/tbl_kamar_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('datakamar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_obat', TRUE));
        } else {
            $data = array(
        'kode_kamar' => $this->input->post('kode_kamar',TRUE),
        'nama_kamar' => $this->input->post('nama_kamar',TRUE),
        'kelas_kamar' => $this->input->post('kelas_kamar',TRUE),
        'kapasitas' => $this->input->post('kapasitas',TRUE),
        'harga' => $this->input->post('harga',TRUE),
        'stok' => $this->input->post('stok',TRUE),

        );

            $this->Tbl_kamar_model->update($this->input->post('kode_kamar', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');       
            redirect(site_url('datakamar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_kamar_model->get_by_id($id);

        if ($row) {
            $this->Tbl_kamar_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');       
            redirect(site_url('datakamar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('datakamar'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('nama_kamar', 'nama kamar', 'trim|required');
    $this->form_validation->set_rules('kelas_kamar', 'jenis kamar', 'trim|required');
    $this->form_validation->set_rules('kapasitas', 'kapasitas', 'trim|required');
    $this->form_validation->set_rules('harga', 'harga', 'trim|required');
    $this->form_validation->set_rules('stok', 'stok', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');


    $this->form_validation->set_rules('kode_kamar', 'kode_kamar', 'trim|required');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_kamar.xls";
        $judul = "tbl_kamar";
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
    xlsWriteLabel($tablehead, $kolomhead++, "Nama kamar");
    xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kamar");
    xlsWriteLabel($tablehead, $kolomhead++, "Harga");

    foreach ($this->Tbl_kamar_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
        xlsWriteLabel($tablebody, $kolombody++, $data->nama_kamar);
        xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kamar);
        xlsWriteLabel($tablebody, $kolombody++, $data->harga);

        $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_obat.doc");

        $data = array(
            'tbl_kamar_data' => $this->Tbl_kamar_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('datakamar/tbl_kamar_doc',$data);
    }

}

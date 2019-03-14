<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//halo
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

    public function read($id) 
    {
        $row = $this->Tbl_lab_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no_reg' => $row->no_reg,
        'no_rekamedis' => $row->no_rekamedis,
        'nama_pasien' => $row->nama_pasien,
        'alamat' => $row->alamat,
        'tgl_periksa' => $row->tgl_periksa,
        'kode_dokter' => $row->kode_dokter,
        'tgl_ambil_sampel' => $row->tgl_ambil_sampel,
        'tgl_penyerahan_hasil' => $row->tgl_penyerahan_hasil,
	    );
            $this->template->load('template','lab/tbl_lab_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('lab'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('lab/create_action'),
	    'no_reg' => set_value('no_reg'),
        'nama_jabatan' => set_value('nama_jabatan'),
        'no_reg' => set_value('no_reg'),
        'no_rekamedis' => set_value('no_rekamedis'),
        'nama_pasien' => set_value('nama_pasien'),
        'alamat' => set_value('alamat'),
        'tgl_periksa' => set_value('tgl_periksa'),
        'kode_dokter' => set_value('kode_dokter'),
        'tgl_ambil_sampel' => set_value('tgl_ambil_sampel'),
        'tgl_penyerahan_hasil' => set_value('tgl_penyerahan_hasil'),
	);
        $this->template->load('template','lab/tbl_lab_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
            'nama_jabatan' => $this->input->post('nama_jabatan',TRUE),
            'no_reg' => $this->input->post('no_reg', TRUE),
            'no_rekamedis' => $this->input->post('no_rekamedis', TRUE),
            'nama_pasien' => $this->input->post('nama_pasien', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'tgl_periksa' => $this->input->post('tgl_periksa', TRUE),
            'kode_dokter' => $this->input->post('kode_dokter', TRUE),
            'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel', TRUE),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil', TRUE),
	    );

            $this->Tbl_lab_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');  

            redirect(site_url('lab'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_lab_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan/update_action'),
                'no_reg' => set_value('no_reg'),
                'nama_jabatan' => set_value('nama_jabatan'),
                'no_reg' => set_value('no_reg'),
                'no_rekamedis' => set_value('no_rekamedis'),
                'nama_pasien' => set_value('nama_pasien'),
                'alamat' => set_value('alamat'),
                'tgl_periksa' => set_value('tgl_periksa'),
                'kode_dokter' => set_value('kode_dokter'),
                'tgl_ambil_sampel' => set_value('tgl_ambil_sampel'),
                'tgl_penyerahan_hasil' => set_value('tgl_penyerahan_hasil'),
	    );
            $this->template->load('template','lab/tbl_lab_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('lab'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no_reg', TRUE));
        } else {
            $data = array(
                
                'no_reg' => $this->input->post('no_reg', TRUE),
                'no_rekamedis' => $this->input->post('no_rekamedis', TRUE),
                'nama_pasien' => $this->input->post('nama_pasien', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'tgl_periksa' => $this->input->post('tgl_periksa', TRUE),
                'kode_dokter' => $this->input->post('kode_dokter', TRUE),
                'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel', TRUE),
                'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil', TRUE),
	    );

            $this->Tbl_lab_model->update($this->input->post('no_reg', TRUE), $data);
             $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');  
            redirect(site_url('lab'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_lab_model->get_by_id($id);

        if ($row) {
            $this->Tbl_lab_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');  
            redirect(site_url('lab'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('lab'));
        }
    }

    // public function _rules() 
    // {
	// $this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'trim|required');
    // $this->form_validation->set_message('required', '{field} wajib diisi');

	// $this->form_validation->set_rules('id_jabatan', 'id_jabatan', 'trim');
	// $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    // }

    // public function excel()
    // {
    //     $this->load->helper('exportexcel');
    //     $namaFile = "tbl_jabatan.xls";
    //     $judul = "tbl_jabatan";
    //     $tablehead = 0;
    //     $tablebody = 1;
    //     $nourut = 1;
    //     //penulisan header
    //     header("Pragma: public");
    //     header("Expires: 0");
    //     header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
    //     header("Content-Type: application/force-download");
    //     header("Content-Type: application/octet-stream");
    //     header("Content-Type: application/download");
    //     header("Content-Disposition: attachment;filename=" . $namaFile . "");
    //     header("Content-Transfer-Encoding: binary ");

    //     xlsBOF();

    //     $kolomhead = 0;
    //     xlsWriteLabel($tablehead, $kolomhead++, "No");
	// xlsWriteLabel($tablehead, $kolomhead++, "Nama Jabatan");

	// foreach ($this->Tbl_lab_model->get_all() as $data) {
    //         $kolombody = 0;

    //         //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
    //         xlsWriteNumber($tablebody, $kolombody++, $nourut);
	//     xlsWriteLabel($tablebody, $kolombody++, $data->nama_jabatan);

	//     $tablebody++;
    //         $nourut++;
    //     }

    //     xlsEOF();
    //     exit();
    // }

    // public function word()
    // {
    //     header("Content-type: application/vnd.ms-word");
    //     header("Content-Disposition: attachment;Filename=tbl_jabatan.doc");

    //     $data = array(
    //         'tbl_jabatan_data' => $this->Tbl_lab_model->get_all(),
    //         'start' => 0
    //     );
        
    //     $this->load->view('jabatan/tbl_jabatan_doc',$data);
    // }

}


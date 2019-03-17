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
        'jenis_kelamin' => $row->jenis_kelamin,
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
        'no_rekamedis' => set_value('no_rekamedis'),
        'nama_pasien' => set_value('nama_pasien'),
        'jenis_kelamin' => set_value('jenis_kelamin'),
        'alamat' => set_value('alamat'),
        'tgl_periksa' => set_value('tgl_periksa'),
        'kode_dokter' => set_value('kode_dokter'),
        'tgl_ambil_sampel' => set_value('tgl_ambil_sampel'),
        'tgl_penyerahan_hasil' => set_value('tgl_penyerahan_hasil'),

        // 1
        'hb_l' => set_value('hb_l'),
        'hb_p' => set_value('hb_p'),
        'leucosit' => set_value('leucosit'),
        'eritrosit_l' => set_value('eritrosit_l'),
        'eritrosit_p' => set_value('eritrosit_p'),
        'led_l' => set_value('led_l'),
        'led_p' => set_value('led_p'),
        'trombosit' => set_value('trombosit'),
        'hematrocit_l' => set_value('hematrocit_l'),
        'hematrocit_p' => set_value('hematrocit_p'),
        'mcv' => set_value('mcv'),
        'mhc' => set_value('mhc'),
        'mchc' => set_value('mchc'),
        'eosinofil' => set_value('eosinofil'),
        'basofil' => set_value('basofil'),
        'stab' => set_value('stab'),
        'segmen' => set_value('segmen'),
        'limposit' => set_value('limposit'),
        'monosit' => set_value('monosit'),

        // 2
        'widal_h' => set_value('widal_h'),
        'widal_o' => set_value('widal_o'),
        'widal_pa' => set_value('widal_pa'),
        'widal_pb' => set_value('widal_pb'),
        'widal_hiv' => set_value('widal_hiv'),
        'ppt' => set_value('ppt'),
        'goldar' => set_value('goldar'),
        'hbsag' => set_value('hbsag'),
        'syphilis' => set_value('syphilis'),
        'nsi' => set_value('nsi'),

        // 3 
        'glucosa_puasa' => set_value('glucosa_puasa'),
        'glucosa_2jam' => set_value('glucosa_2jam'),
        'glucosa_sewaktu' => set_value('glucosa_sewaktu'),
        'uric_acid_l' => set_value('uric_acid_l'),
        'uric_acid_p' => set_value('uric_acid_p'),
        'cholestrol' => set_value('cholestrol'),

        // 4

        // 5
        'warna' => set_value('warna'),
        'bentuk' => set_value('bentuk'),
        'konsistensi' => set_value('konsistensi'),
        'amoeba' => set_value('amoeba'),
        'arytrocit' => set_value('arytrocit'),
        'leukosit' => set_value('leukosit'),
        'telur_cacing' => set_value('telur_cacing'),
        'malaria' => set_value('malaria'),
        'bta' => set_value('bta'),
        
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
            
            'no_reg' => $this->input->post('no_reg', TRUE),
            'no_rekamedis' => $this->input->post('no_rekamedis', TRUE),
            'nama_pasien' => $this->input->post('nama_pasien', TRUE),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'tgl_periksa' => $this->input->post('tgl_periksa', TRUE),
            'kode_dokter' => $this->input->post('kode_dokter', TRUE),
            'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel', TRUE),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil', TRUE),

            // 1
            'hb_l' => $this->input->post('hb_l', TRUE),
            'hb_p' => $this->input->post('hb_p', TRUE),
            'leucosit' => $this->input->post('leucosit', TRUE),
            'eritrosit_l' => $this->input->post('eritrosit_l', TRUE),
            'eritrosit_p' => $this->input->post('eritrosit_p', TRUE),
            'led_l' => $this->input->post('led_l', TRUE),
            'led_p' => $this->input->post('led_p', TRUE),
            'trombosit' => $this->input->post('trombosit', TRUE),
            'hematrocit_l' => $this->input->post('hematrocit_l', TRUE),
            'hematrocit_p' => $this->input->post('hematrocit_p', TRUE),
            'mcv' => $this->input->post('mcv', TRUE),
            'mhc' => $this->input->post('mhc', TRUE),
            'mchc' => $this->input->post('mchc', TRUE),
            'eosinofil' => $this->input->post('eosinofil', TRUE),
            'basofil' => $this->input->post('basofil', TRUE),
            'stab' => $this->input->post('stab', TRUE),
            'segmen' => $this->input->post('segmen', TRUE),
            'limposit' => $this->input->post('limposit', TRUE),
            'monosit' => $this->input->post('monosit', TRUE),

            // 2
            'widal_h' => $this->input->post('widal_h', TRUE),
            'widal_o' => $this->input->post('widal_o', TRUE),
            'widal_pa' => $this->input->post('widal_pa', TRUE),
            'widal_pb' => $this->input->post('widal_pb', TRUE),
            'widal_hiv' => $this->input->post('widal_hiv', TRUE),
            'ppt' => $this->input->post('ppt', TRUE),
            'goldar' => $this->input->post('goldar', TRUE),
            'hbsag' => $this->input->post('hbsag', TRUE),
            'syphilis' => $this->input->post('syphilis', TRUE),
            'nsi' => $this->input->post('nsi', TRUE),

            // 3 
            'glucosa_puasa' => $this->input->post('glucosa_puasa', TRUE),
            'glucosa_2jam' => $this->input->post('glucosa_2jam', TRUE),
            'glucosa_sewaktu' => $this->input->post('glucosa_sewaktu', TRUE),
            'uric_acid_l' => $this->input->post('uric_acid_l', TRUE),
            'uric_acid_p' => $this->input->post('uric_acid_p', TRUE),
            'cholestrol' => $this->input->post('cholestrol', TRUE),

            // 4

            // 5
            'warna' => $this->input->post('warna', TRUE),
            'bentuk' => $this->input->post('bentuk', TRUE),
            'konsistensi' => $this->input->post('konsistensi', TRUE),
            'amoeba' => $this->input->post('amoeba', TRUE),
            'arytrocit' => $this->input->post('arytrocit', TRUE),
            'leukosit' => $this->input->post('leukosit', TRUE),
            'telur_cacing' => $this->input->post('telur_cacing', TRUE),
            'malaria' => $this->input->post('malaria', TRUE),
            'bta' => $this->input->post('bta', TRUE),
            

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
                'action' => site_url('lab/update_action'),

                
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

    function detail($no_rekmedis){

        $no_rawat = substr($this->uri->uri_string(3), 23);
        $sql_no_rekmed = "SELECT no_rekamedis from tbl_pasien";
        $sql_daftar = "SELECT pd.no_rekamedis, pd.no_rawat,ps.nama_pasien,ps.alamat, ps.jenis_kelamin, pd.status_pasien FROM tbl_pendaftaran as pd, tbl_pasien as ps WHERE pd.no_rekamedis = ps.no_rekamedis and pd.no_rawat = '$no_rekmedis'";
        $sql_dokter = "SELECT d.nama_dokter from tbl_pendaftaran as p, tbl_dokter as l where p.kode_dokter_penanggung_jawab = l.kode_dokter = '$nama_dokter'";
        // $sql_penyakit = "SELECT pd.no_rekamedis, pd.no_rawat,dg.nama_penyakit FROM tbl_pendaftaran as pd, tbl_diagnosa_penyakit as dg WHERE pd.no_rekamedis and pd.no_rawat = '$no_rekmedis'";
        // $sql_poli_input_rekmed = "SELECT pd.no_rawat,pd.id_poli, p.nama_poli FROM tbl_pendaftaran as pd, tbl_poli as p WHERE pd.no_rawat = '$no_rekmedis' AND pd.id_poli = p.id_poli";
        // $no_rekmed = $this->db->query($sql_daftar)->row()->no_rekamedis; //untuk proses pengambilan data atribut no_rekamedis (yang diambil hanya data atribut itu saja)
        // $sql_data_tindakan = "SELECT * FROM tbl_tindakan_rawatinap JOIN tbl_poli ON tbl_tindakan_rawatinap.id_poli = tbl_poli.id_poli JOIN tbl_diagnosa_penyakit ON tbl_diagnosa_penyakit.kode_diagnosa = tbl_tindakan_rawatinap.kode_penyakit JOIN tbl_tindakan ON tbl_tindakan.kode_tindakan = tbl_tindakan_rawatinap.kode_tindakan JOIN icd ON icd.kode_icd = tbl_tindakan_rawatinap.kode_icd WHERE tbl_tindakan_rawatinap.no_rawat = '$no_rekmedis'";
        // $sql_data_resep = "SELECT rt.nama_obat, rt.jenis_obat,rt.dosis_aturan_obat,rt.no_rawat,rt.tanggal,rt.jumlah_obat, pkt.nama_pasien FROM tbl_resep_obat as rt, tbl_pasien as pkt WHERE rt.no_rawat = '$no_rawat' AND rt.no_rekamedis = pkt.no_rekamedis";
  
        $data['pendaftaran'] = $this->db->query($sql_daftar)->row_array();
        $data['dokter'] = $this->db->query($sql_dokter)->result();
        // $data['penyakit'] = $this->db->query($sql_penyakit)->row_array();
        // $data['baca_poli'] = $this->db->query($sql_poli_input_rekmed)->row_array();
        // $data['no_rawat'] = $no_rawat;
        // $data['data_tindakan'] = $this->db->query($sql_data_tindakan)->result();
        // $data['data_resep'] = $this->db->query($sql_data_resep)->result();
        //$data['nama_obat'] = $this->db->query($sql_nama_obat)->row_array();
  
        $this->template->load('template', 'tindakanrawatinap/detail', $data);
    }

}


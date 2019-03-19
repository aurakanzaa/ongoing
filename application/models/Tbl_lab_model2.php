<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_lab_model extends CI_Model
{

    public $table = 'lab';
    public $id = 'no_reg';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
// halo
    // datatables
    function json() {
        $this->datatables->select('id_riwayat_tindakan,no_rawat,no_rekamedis,tanggal,pemeriksaan_lab');
        $this->datatables->where('pemeriksaan_lab !=','-');
        $this->datatables->from('tbl_riwayat_tindakan');
        
        //add this line for join
        //$this->datatables->join('table2', 'tbl_obat.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('lab/create/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
                ", 'id_riwayat_tindakan');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->join('tbl_pendaftaran', 'lab.no_rekamedis = tbl_pendaftaran.no_rekamedis');
        $this->db->join('tbl_pasien', 'tbl_pendaftaran.no_rekamedis = tbl_pasien.no_rekamedis ');
        $this->db->join('lab_hematologi', 'lab.no_rekamedis = lab_hematologi.no_rekamedis');
        $this->db->join('lab_imunoserologi', 'lab.no_rekamedis = lab_imunoserologi.no_rekamedis');
        $this->db->join('lab_kimia_klinik', 'lab.no_rekamedis = lab_kimia_klinik.no_rekamedis');
        $this->db->join('lab_parasitologi', 'lab.no_rekamedis = lab_parasitologi.no_rekamedis');
        $this->db->join('tbl_dokter', 'lab.kode_dokter = tbl_dokter.kode_dokter');

        $this->db->where($this->id, $id);
        return $this->db->get('lab')->row();

        
    }

    function getTindakan($id){
        
        $this->db->select('*');
        $this->db->where('id_riwayat_tindakan', $id);
        return $this->db->get('tbl_riwayat_tindakan')->row();

        
    }
    
    function get_by_no_rekammedis($no_rekamedis)
    {
         $this->db->where($this->no_rekamedis, $no_rekamedis);
        $this->db->join('tbl_pasien', 'tbl_pendaftaran.no_rekamedis = tbl_pasien.no_rekamedis');
        $this->db->join('tbl_dokter', 'tbl_pendaftaran.kode_dokter_penanggung_jawab = tbl_dokter.kode_dokter');
        // $this->db->join('tbl_poli', 'tbl_pendaftaran.id_poli = tbl_poli.id_poli');
        return $this->db->get($this->table)->row(); 
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('no_reg', $q);
        $this->db->or_like('no_rekamedis', $q);
        $this->db->or_like('nama_pasien', $q);
        $this->db->or_like('alamat', $q);
        $this->db->or_like('tgl_periksa', $q);
        $this->db->or_like('kode_dokter', $q);
        $this->db->or_like('tgl_ambil_sampel', $q);
        $this->db->or_like('tgl_penyerahan_hasil', $q);

        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('no_reg', $q);
        $this->db->or_like('no_rekamedis', $q);
        $this->db->or_like('nama_pasien', $q);
        $this->db->or_like('alamat', $q);
        $this->db->or_like('tgl_periksa', $q);
        $this->db->or_like('kode_dokter', $q);
        $this->db->or_like('tgl_ambil_sampel', $q);
        $this->db->or_like('tgl_penyerahan_hasil', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    public function selectPendaftaran($id){
        $this->db->select('*');
		$this->db->from('tbl_pendaftaran');
		$this->db->where('no_registrasi', $id);
		$query = $this->db->get();

		return $query->result();
    }
    public function create(){
        $data = array(
            
            'no_reg' => $this->input->post('no_reg'),
            'no_rekamedis' => $this->input->post('no_rekamedis'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'tgl_periksa' => $this->input->post('tgl_periksa'),
            'kode_dokter' => $this->input->post('kode_dokter'),
            'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel'),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil'),

            // 1
            'hb_l' => $this->input->post('hb_l'),
            'hb_p' => $this->input->post('hb_p'),
            'leucosit' => $this->input->post('leucosit'),
            'eritrosit_l' => $this->input->post('eritrosit_l'),
            'eritrosit_p' => $this->input->post('eritrosit_p'),
            'led_l' => $this->input->post('led_l'),
            'led_p' => $this->input->post('led_p'),
            'trombosit' => $this->input->post('trombosit'),
            'hematrocit_l' => $this->input->post('hematrocit_l'),
            'hematrocit_p' => $this->input->post('hematrocit_p'),
            'mcv' => $this->input->post('mcv'),
            'mhc' => $this->input->post('mhc'),
            'mchc' => $this->input->post('mchc'),
            'eosinofil' => $this->input->post('eosinofil'),
            'basofil' => $this->input->post('basofil'),
            'stab' => $this->input->post('stab'),
            'segmen' => $this->input->post('segmen'),
            'limposit' => $this->input->post('limposit'),
            'monosit' => $this->input->post('monosit'),

            // 2
            'widal_h' => $this->input->post('widal_h'),
            'widal_o' => $this->input->post('widal_o'),
            'widal_pa' => $this->input->post('widal_pa'),
            'widal_pb' => $this->input->post('widal_pb'),
            'widal_hiv' => $this->input->post('widal_hiv'),
            'ppt' => $this->input->post('ppt'),
            'goldar' => $this->input->post('goldar'),
            'hbsag' => $this->input->post('hbsag'),
            'syphilis' => $this->input->post('syphilis'),
            'nsi' => $this->input->post('nsi'),

            // 3 
            'glucosa_puasa' => $this->input->post('glucosa_puasa'),
            'glucosa_2jam' => $this->input->post('glucosa_2jam'),
            'glucosa_sewaktu' => $this->input->post('glucosa_sewaktu'),
            'uric_acid_l' => $this->input->post('uric_acid_l'),
            'uric_acid_p' => $this->input->post('uric_acid_p'),
            'cholestrol' => $this->input->post('cholestrol'),

            // 4

            // 5
            'warna' => $this->input->post('warna'),
            'bentuk' => $this->input->post('bentuk'),
            'konsistensi' => $this->input->post('konsistensi'),
            'amoeba' => $this->input->post('amoeba'),
            'arytrocit' => $this->input->post('arytrocit'),
            'leukosit' => $this->input->post('leukosit'),
            'telur_cacing' => $this->input->post('telur_cacing'),
            'malaria' => $this->input->post('malaria'),
            'bta' => $this->input->post('bta'),
        );
        $this->db->insert('lab', $data);
    }

    public function update($id)
	{
		$data = array(
            
            'no_reg' => $this->input->post('no_reg'),
            'no_rekamedis' => $this->input->post('no_rekamedis'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'tgl_periksa' => $this->input->post('tgl_periksa'),
            'kode_dokter' => $this->input->post('kode_dokter'),
            'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel'),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil'),

            // 1
            'hb_l' => $this->input->post('hb_l'),
            'hb_p' => $this->input->post('hb_p'),
            'leucosit' => $this->input->post('leucosit'),
            'eritrosit_l' => $this->input->post('eritrosit_l'),
            'eritrosit_p' => $this->input->post('eritrosit_p'),
            'led_l' => $this->input->post('led_l'),
            'led_p' => $this->input->post('led_p'),
            'trombosit' => $this->input->post('trombosit'),
            'hematrocit_l' => $this->input->post('hematrocit_l'),
            'hematrocit_p' => $this->input->post('hematrocit_p'),
            'mcv' => $this->input->post('mcv'),
            'mhc' => $this->input->post('mhc'),
            'mchc' => $this->input->post('mchc'),
            'eosinofil' => $this->input->post('eosinofil'),
            'basofil' => $this->input->post('basofil'),
            'stab' => $this->input->post('stab'),
            'segmen' => $this->input->post('segmen'),
            'limposit' => $this->input->post('limposit'),
            'monosit' => $this->input->post('monosit'),

            // 2
            'widal_h' => $this->input->post('widal_h'),
            'widal_o' => $this->input->post('widal_o'),
            'widal_pa' => $this->input->post('widal_pa'),
            'widal_pb' => $this->input->post('widal_pb'),
            'widal_hiv' => $this->input->post('widal_hiv'),
            'ppt' => $this->input->post('ppt'),
            'goldar' => $this->input->post('goldar'),
            'hbsag' => $this->input->post('hbsag'),
            'syphilis' => $this->input->post('syphilis'),
            'nsi' => $this->input->post('nsi'),

            // 3 
            'glucosa_puasa' => $this->input->post('glucosa_puasa'),
            'glucosa_2jam' => $this->input->post('glucosa_2jam'),
            'glucosa_sewaktu' => $this->input->post('glucosa_sewaktu'),
            'uric_acid_l' => $this->input->post('uric_acid_l'),
            'uric_acid_p' => $this->input->post('uric_acid_p'),
            'cholestrol' => $this->input->post('cholestrol'),
            'trigliserida' => $this->input->post('trigliserida'),
            
            // 4

            // 5
            
            'warna' => $this->input->post('warna'),
            'bentuk' => $this->input->post('bentuk'),
            'konsistensi' => $this->input->post('konsistensi'),
            'amoeba' => $this->input->post('amoeba'),
            'erytrocit' => $this->input->post('erytrocit'),
            'leukosit' => $this->input->post('leukosit'),
            'telur_cacing' => $this->input->post('telur_cacing'),
            'malaria' => $this->input->post('malaria'),
            'bta' => $this->input->post('bta'),
            'rdt' => $this->input->post('rdt'),
        );
		$this->db->where('no_reg', $id);
		$this->db->update('lab', $data);
    }
    
    public function delete($id)
	{
		$this->db->delete('lab', array('no_reg' => $id));
	}

}


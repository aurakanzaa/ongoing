<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_lab_model extends CI_Model
{
    function getTindakan(){
        $this->db->select('*');
        $this->db->from('tbl_riwayat_tindakan');
        $this->db->where('pemeriksaan_lab !=','-');
		$query = $this->db->get();

		return $query->result();
    }

    function select($no_rekamedis){
        
        $this->db->select('*');
        $this->db->where('no_rekamedis', $no_rekamedis);
		$query = $this->db->get('lab');

		return $query->result();
    }

    function getTindakanById($id){
        $this->db->join('tbl_pasien', 'tbl_pasien.no_rekamedis = tbl_riwayat_tindakan.no_rekamedis');
        $this->db->join('tbl_pendaftaran', 'tbl_pendaftaran.no_rekamedis = tbl_riwayat_tindakan.no_rekamedis');
        $this->db->join('tbl_dokter', 'tbl_dokter.kode_dokter = tbl_pendaftaran.kode_dokter_penanggung_jawab');
        $this->db->where('id_riwayat_tindakan', $id);
		$query = $this->db->get('tbl_riwayat_tindakan',1);
		return $query->result();
    }

    function createData()
    {
        $object = array(
			'no_rekamedis' => $this->input->post('no_rekamedis'),
			'nama_pasien' => $this->input->post('nama_pasien'),
            'alamat' => $this->input->post('alamat'),
            'tgl_periksa' => $this->input->post('tanggal'),
            'nama_dokter' => $this->input->post('nama_dokter'),
            'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel'),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil'),
		);
        $this->db->insert('lab', $object);
        
        return $this->input->post('no_rekamedis');
    }

    function getLab(){
        $this->db->join('tbl_pasien', 'tbl_pasien.no_rekamedis = tbl_riwayat_tindakan.no_rekamedis');
        $this->db->join('tbl_pendaftaran', 'tbl_pendaftaran.no_rekamedis = tbl_riwayat_tindakan.no_rekamedis');
        $this->db->join('tbl_dokter', 'tbl_dokter.kode_dokter = tbl_pendaftaran.kode_dokter_penanggung_jawab');
        $this->db->where('id_riwayat_tindakan', $id);
        $this->db->order_by('no_reg', 'desc');
        $query = $this->db->get('lab',1);

		return $query->result();
    }

    function createHema()
    {
        $object = array(
			'no_rekamedis' => $this->input->post('no_rekamedis'),
			
            'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel'),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil'),

            'hb_l' => $this->input->post('hb_l'),
            'hb_p' => $this->input->post('hb_p'),
            'leucosit' => $this->input->post('leucosit'),
            'eritrosit_l' => $this->input->post('eritrosit_l'),
            'eritrosit_p' => $this->input->post('eritrosit_p'),
            'led_l' => $this->input->post('led_l'),
            'led_p' => $this->input->post('led_p'),
            'trombosit' => $this->input->post('trombosit'),
            'hematocrit_l' => $this->input->post('hematocrit_l'),
            'hematocrit_p' => $this->input->post('hematocrit_p'),
            'mcv' => $this->input->post('mcv'),
            'mch' => $this->input->post('mch'),
            'mchc' => $this->input->post('mchc'),
            'eosinofil' => $this->input->post('eosinofil'),
            'basofil' => $this->input->post('basofil'),
            'stab' => $this->input->post('stab'),
            'segmen' => $this->input->post('segmen'),
            'limposit' => $this->input->post('limposit'),
            'monosit' => $this->input->post('monosit'),
		);
        $this->db->insert('lab_hematologi', $object);
        
        return $this->input->post('id_hematologi');
    }

    function createI(){
        $object = array(
            'no_rekamedis' => $this->input->post('no_rekamedis'),
            'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel'),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil'),
            'widal_h' => $this->input->post('widal_h'),
            'widal_o' => $this->input->post('widal_o'),
            'widal_pa' => $this->input->post('widal_pa'),
            'widal_pb' => $this->input->post('widal_pb'),
            'hiv' => $this->input->post('hiv'),
            'ppt' => $this->input->post('ppt'),
            'goldar' => $this->input->post('goldar'),
            'hbsag' => $this->input->post('hbsag'),
            'syphilis' => $this->input->post('syphilis'),
            'nsi' => $this->input->post('nsi'),
        );
        $this->db->insert('lab_imunoserologi', $object);
        return $this->input->post('id_imun');
    }

    function createK(){
        $object = array(
            'no_rekamedis' => $this->input->post('no_rekamedis'),
            'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel'),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil'),
            'glucosa_puasa' => $this->input->post('glucosa_puasa'),
            'glucosa_2jam' => $this->input->post('glucosa_2jam'),
            'glucosa_sewaktu' => $this->input->post('glucosa_sewaktu'),
            'uric_acid_l' => $this->input->post('uric_acid_l'),
            'uric_acid_p' => $this->input->post('uric_acid_p'),
            'cholesterol' => $this->input->post('cholesterol'),
            'trigliserida' => $this->input->post('trigliserida'),
        );
        $this->db->insert('lab_kimia_klinik', $object);
        return $this->input->post('id_kimia_klinik');
    }

    function createU(){
        $object = array(
            
            'no_rekamedis' => $this->input->post('no_rekamedis'),
            'tgl_ambil_sempel' => $this->input->post('tgl_ambil_sampel'),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil'),
            'warna' => $this->input->post('warna'),
            'ph' => $this->input->post('ph'),
            'berat_jenis' => $this->input->post('berat_jenis'),
            'protein' => $this->input->post('protein'),
            'glukosa' => $this->input->post('glukosa'),
            'bilirubin' => $this->input->post('bilirubin'),
            'urobilinogen' => $this->input->post('urobilinogen'),
            'nitrit' => $this->input->post('nitrit'),
            'keton' => $this->input->post('keton'),
            'lekosit' => $this->input->post('lekosit'),
            'blood' => $this->input->post('blood'),
            'sedimen_lekosit' => $this->input->post('sedimen_lekosit'),
            'eritrosit' => $this->input->post('eritrosit'),
            'ephitel' => $this->input->post('ephitel'),
            'silinder' => $this->input->post('silinder'),
            'kristal' => $this->input->post('kristal'),
            'lainlain' => $this->input->post('lainlain'),

        );
        $this->db->insert('lab_urine', $object);
        return $this->input->post('id_urine');
    }
    
    function createP(){
        $object = array(
            'no_rekamedis' => $this->input->post('no_rekamedis'),
            'tgl_ambil_sampel' => $this->input->post('tgl_ambil_sampel'),
            'tgl_penyerahan_hasil' => $this->input->post('tgl_penyerahan_hasil'),
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
        $this->db->insert('lab_parasitologi', $object);
        return $this->input->post('id_parasitologi');
    }

    
}
    
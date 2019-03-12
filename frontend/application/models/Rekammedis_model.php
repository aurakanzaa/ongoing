<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedis_model extends CI_Model {

	public function getPendaftaran($no_rekamedis)
	{
		$this->db->order_by('tbl_pendaftaran.tanggal_daftar', 'asc');
		$this->db->where('tbl_pendaftaran.no_rekamedis', $no_rekamedis);
		$this->db->join('tbl_pasien', 'tbl_pasien.no_rekamedis = tbl_pendaftaran.no_rekamedis');
		$this->db->join('tbl_poli', 'tbl_poli.id_poli = tbl_pendaftaran.id_poli');
		$this->db->join('tbl_dokter', 'tbl_dokter.kode_dokter = tbl_pendaftaran.kode_dokter_penanggung_jawab');
		return $this->db->get('tbl_pendaftaran')->result();
	}

	public function getResep($no_rawat)
	{
		$this->db->where('tbl_resep_obat.no_rawat', $no_rawat);
		$this->db->join('tbl_pasien', 'tbl_pasien.no_rekamedis = tbl_resep_obat.no_rekamedis');
		return $this->db->get('tbl_resep_obat')->result();
	}

	public function getTindakan($no_rawat)
	{
		$this->db->where('tbl_riwayat_tindakan.no_rawat', $no_rawat);
		$this->db->join('tbl_pasien', 'tbl_pasien.no_rekamedis = tbl_riwayat_tindakan.no_rekamedis');
		$this->db->join('tbl_poli', 'tbl_poli.id_poli = tbl_riwayat_tindakan.id_poli');
		$this->db->join('tbl_diagnosa_penyakit', 'tbl_diagnosa_penyakit.kode_diagnosa = tbl_riwayat_tindakan.kode_penyakit');
		$this->db->join('tbl_tindakan', 'tbl_tindakan.kode_tindakan = tbl_riwayat_tindakan.kode_tindakan');
		return $this->db->get('tbl_riwayat_tindakan')->result();
	}
}

/* End of file Rekammedis_model.php */
/* Location: ./application/models/Rekammedis_model.php */
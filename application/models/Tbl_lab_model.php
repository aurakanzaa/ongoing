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
        $this->datatables->select('no_reg, no_rekamedis, nama_pasien, alamat, tgl_periksa, kode_dokter, tgl_ambil_sampel, tgl_penyerahan_hasil');
        $this->datatables->from('lab');
        $this->datatables->join('tbl_pendaftaran', 'lab.no_rekamedis = tbl_pendaftaran.no_rekamedis');
        $this->datatables->join('tbl_pasien', 'tbl_pendaftaran.no_rekamedis = tbl_pasien.no_rekamedis ');
        $this->datatables->join('lab_hematologi', 'lab.no_rekamedis = lab_hematologi.no_rekamedis');
        $this->datatables->join('lab_imunoserologi', 'lab.no_rekamedis = lab_imunoserologi.no_rekamedis');
        $this->datatables->join('lab_kimia_klinik', 'lab.no_rekamedis = lab_kimia_klinik.no_rekamedis');
        $this->datatables->join('lab_parasitologi', 'lab.no_rekamedis = lab_parasitologi.no_rekamedis');
        $this->datatables->join('tbl_dokter', 'lab.kode_dokter = tbl_dokter.kode_dokter');

        // $this->datatables->select('id_riwayat_tindakan,no_rawat,no_rekamedis,tanggal,pemeriksaan_lab');
        // $this->datatables->where('pemeriksaan_lab !=','-');
        // $this->datatables->from('tbl_riwayat_tindakan');
        
        //add this line for join
        //$this->datatables->join('table2', 'tbl_obat.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('lab/details/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
                ", 'no_reg');
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
        $this->db->where($this->id, $id);
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

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}


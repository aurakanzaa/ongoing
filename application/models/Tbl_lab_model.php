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
        $this->db->like('kode_obat', $q);
	$this->db->or_like('nama_obat', $q);
	$this->db->or_like('jenis_obat', $q);
	$this->db->or_like('dosis_aturan_obat', $q);
    $this->db->or_like('satuan', $q);
    $this->db->or_like('harga_jual', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('kode_obat', $q);
	$this->db->or_like('nama_obat', $q);
	$this->db->or_like('jenis_obat', $q);
	$this->db->or_like('dosis_aturan_obat', $q);
    $this->db->or_like('satuan', $q);
    $this->db->or_like('harga_jual', $q);
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


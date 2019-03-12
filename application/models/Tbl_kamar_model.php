<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_kamar_model extends CI_Model
{

    public $table = 'tbl_kamar';
    public $id = 'kode_kamar';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('kode_kamar,nama_kamar,kelas_kamar,kapasitas,harga,stok');
        $this->datatables->from('tbl_kamar');
        //add this line for join
        //$this->datatables->join('table2', 'tbl_obat.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('datakamar/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
                ".anchor(site_url('datakamar/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'kode_kamar');
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

    public function getKamarById($id_kamar)
    {
        $this->db->where('kode_kamar', $id_kamar);
        return $this->db->get('tbl_kamar')->result();
    }

    public function updateKapasitasById($id_kamar,$jumlah)
    {
        $this->db->where('kode_kamar', $id_kamar);
        $object = array('stok' => $jumlah, );
        $this->db->update('tbl_kamar', $object);
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('kode_kamar', $q);
	$this->db->or_like('nama_kamar', $q);
	$this->db->or_like('kelas_kamar', $q);
	$this->db->or_like('kapasitas', $q);
    $this->db->or_like('harga', $q);
    $this->db->or_like('stok', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('kode_kamar', $q);
	$this->db->or_like('nama_kamar', $q);
	$this->db->or_like('kelas_kamar', $q);
	$this->db->or_like('kapasitas', $q);
    $this->db->or_like('harga', $q);
     $this->db->or_like('stok', $q);
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


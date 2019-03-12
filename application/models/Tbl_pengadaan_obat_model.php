<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_pengadaan_obat_model extends CI_Model
{

    public $table = 'tbl_pengadaan_obat';
    public $id = 'no_trans';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
// halo
    // datatables
    function json() {
        $this->datatables->select('id_pengadaan,no_trans,supplier,nama_obat,jenis_obat,harga_beli,jumlah,satuan,total');
        $this->datatables->from('tbl_pengadaan_obat');
        //add this line for join
        //$this->datatables->join('table2', 'tbl_pengadaan_obat.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('pengadaanobat/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'no_trans');
        return $this->datatables->generate();
    }

    public function getStokObat($kode_obat)
    {
        $this->db->where('kode_obat', $kode_obat);
        return $this->db->get('tbl_stok_obat')->result();
    }

    public function insertObat($kode_obat,$jumlah,$satuan)
    {
        $object = array('kode_obat' => $kode_obat,
        'jumlah' => $jumlah,
        'satuan' => $satuan, );
        $this->db->insert('tbl_stok_obat', $object);
    }

    public function updateStokObat($kode_obat,$jumlah)
    {
        $this->db->where('kode_obat', $kode_obat);
        $object = array('jumlah' => $jumlah );
        $this->db->update('tbl_stok_obat', $object);
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
    
    function getpengadaan()
    {
        $this->db->order_by($this->id, "ASC");
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
        $this->db->like('id_pengadaan', $q);
	$this->db->or_like('no_trans', $q);
	$this->db->or_like('supplier', $q);
	$this->db->or_like('nama_obat', $q);
	$this->db->or_like('kode_obat', $q);
	$this->db->or_like('jenis_obat', $q);
    $this->db->or_like('harga_beli', $q);
	$this->db->or_like('jumlah', $q);
    $this->db->or_like('satuan', $q);
	$this->db->or_like('keterangan', $q);
	$this->db->or_like('total', $q);
	$this->db->or_like('tgl_transaksi', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_pengadaan', $q);
	$this->db->or_like('no_trans', $q);
	$this->db->or_like('supplier', $q);
	$this->db->or_like('nama_obat', $q);
	$this->db->or_like('kode_obat', $q);
	$this->db->or_like('jenis_obat', $q);
    $this->db->or_like('harga_beli', $q);
    
	$this->db->or_like('jumlah', $q);
    $this->db->or_like('satuan', $q);
	$this->db->or_like('keterangan', $q);
	$this->db->or_like('total', $q);
	$this->db->or_like('tgl_transaksi', $q);
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


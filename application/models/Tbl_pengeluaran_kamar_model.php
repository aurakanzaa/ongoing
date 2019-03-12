<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_pengeluaran_kamar_model extends CI_Model
{

    public $table = 'tbl_pengeluaran_kamar';
    public $id = 'id_pengeluaran';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_pengeluaran,no_terima_kamar,nama_pasien,kode_kamar,nama_kamar,kelas_kamar,kapasitas,harga,tanggal_masuk,tanggal_keluar,keterangan');
        $this->datatables->from('tbl_pengeluaran_kamar');
        //add this line for join
        //$this->datatables->tbl('table2', 'tbl_pengeluaran_obat.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('pengeluarankamar/update/$1'),'<i class="fa fa-edit" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
            ".anchor(site_url('pengeluarankamar/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_pengeluaran');
        return $this->datatables->generate();
    }

    public function getKamar()
    {
        return $this->db->get('tbl_kamar')->result();
        
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function getByNoRawat($no_rawat)
    {
        $this->db->where('no_terima_kamar',$no_rawat);
        return $this->db->get($this->table)->result();
    }

    function updateTanggal($id_pengeluaran,$tanggal)
    {
        $this->db->where('id_pengeluaran',$id_pengeluaran);
        $object = array('tanggal_keluar' => $tanggal );
        $this->db->update('tbl_pengeluaran_kamar', $object);
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('no_terima_kamar', $q);
	$this->db->or_like('id_pengeluaran', $q);
	$this->db->or_like('nama_pasien', $q);
	$this->db->or_like('kode_kamar', $q);
	$this->db->or_like('nama_kamar', $q);
	$this->db->or_like('kelas_kamar', $q);
	$this->db->or_like('kapasitas', $q);
    $this->db->or_like('harga', $q);
    $this->db->or_like('keterangan', $q);
    $this->db->or_like('checkin', $q);
    $this->db->or_like('checkout', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('no_terima_obat', $q);
	$this->db->or_like('id_pengeluaran', $q);
    $this->db->or_like('nama_pasien', $q);
    $this->db->or_like('kode_kamar', $q);
    $this->db->or_like('nama_kamar', $q);
    $this->db->or_like('kelas_kamar', $q);
    $this->db->or_like('kapasitas', $q);
    $this->db->or_like('harga', $q);
    $this->db->or_like('keterangan', $q);
    $this->db->or_like('checkin', $q);
    $this->db->or_like('checkout', $q);
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


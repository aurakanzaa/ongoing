<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//halo
class Obatnonpasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_obatnonpasien_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','obatnonpasien/tbl_obatnonpasien_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_obatnonpasien_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_obatnonpasien_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_obatnonpasien' => $row->id_obatnonpasien,
		'no_trans' => $row->no_trans,
		'supplier' => $row->supplier,
		'nama_obat' => $row->nama_obat,
		'kode_obat' => $row->kode_obat,
		'jenis_obat' => $row->jenis_obat,
        // 'harga_beli' => $row->harga_beli,
        // 'harga_jual' => $row->harga_jual,
		'jumlah' => $row->jumlah,
        'satuan' => $row->satuan,
		'keterangan' => $row->keterangan,
		// 'total' => $row->total,
		'tgl_transaksi' => $row->tgl_transaksi,
        'kode_ruang' => $row->kode_ruang,
	    );
            $this->template->load('template','obatnonpasien/tbl_obatnonpasien_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('obatnonpasien'));
        }
    }

     function autoobat() {
        $this->db->like('nama_obat', $_GET['term']);
        $this->db->select('nama_obat');
        $datatindakan = $this->db->get('tbl_obat')->result();
        foreach ($datatindakan as $tindakan) {
            $return_arr[] = $tindakan->nama_obat;
        }

        echo json_encode($return_arr);
    }

     function autofill(){

    $nama_obat = $_GET['nama_obat'];

    $this->db->where('nama_obat',$nama_obat);

    $obat= $this->db->get('tbl_obat')->row_array();
    $data = array(
        'kode_obat' => $obat['kode_obat'],
        'jenis_obat' => $obat['jenis_obat'],
        'satuan' =>   $obat['satuan'],
        );

    echo json_encode($data);
   }

     function autosupplier() {
        $this->db->like('penanggung', $_GET['term']);
        $this->db->select('penanggung');
        $datasupplier = $this->db->get('tbl_tanggungobat')->result();
        foreach ($datasupplier as $supplier) {
            $return_arr[] = $supplier->penanggung;
        }

        echo json_encode($return_arr);
    }


    function autofill2(){

    $penanggung = $_GET['penanggung'];

    $this->db->where('penanggung',$penanggung);

    $obat= $this->db->get('tbl_penanggungobat')->row_array();
    $data = array(
        'kode_ruang' => $obat['kode_ruang'],
        );

    echo json_encode($data);
   }

    function cetak(){

    $no_rawat = substr($this->uri->uri_string(3), 27);
      $sql_daftar = "SELECT pd.no_rekamedis, pd.no_rawat,pd.tanggal_daftar,ps.nama_pasien, td.nama_dokter FROM tbl_pendaftaran as pd, tbl_pasien as ps, tbl_dokter as td WHERE pd.no_rekamedis = ps.no_rekamedis and td.kode_dokter = pd.kode_dokter_penanggung_jawab and pd.no_rawat = '$no_rawat'";
      $sql_penyakit = "SELECT pd.no_rekamedis, pd.no_rawat,dg.nama_penyakit FROM tbl_pendaftaran as pd, tbl_diagnosa_penyakit as dg WHERE pd.no_rekamedis and pd.no_rawat = '$no_rawat'";
      $sql_poli_input_rekmed = "SELECT pd.no_rawat,pd.id_poli, p.nama_poli FROM tbl_pendaftaran as pd, tbl_poli as p WHERE pd.no_rawat = '$no_rawat' AND pd.id_poli = p.id_poli";
      $sql_data_resep = "SELECT * FROM tbl_pengadaan_obat";

    $sql_rekamedis    = "SELECT tr.*,pd.no_rawat,pd.tanggal_daftar 
                        FROM tbl_riwayat_tindakan as tr, tbl_pendaftaran as pd
                        WHERE pd.no_rawat and tr.no_rawat='$no_rawat'";

        $this->load->library('pdf');
        $pdf = new FPDF('l', 'mm', array(345,340));
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);

        $pdf->Image('assets/foto_profil/logo-rs.jpg', 50, 5, 30);
        //$pdf->Image('', )
        // mencetak string 
        $pdf->Cell(45, 7, '', 0, 0, 'C');
        $pdf->Cell(260, 7, 'PUSKESMAS MUNJUNGAN', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 7, '', 0, 0, 'C');
        $pdf->Cell(275, 7, 'Munjungan Krajan, Kec. Munjungan, Kabupaten Trenggalek, Jawa Timur 66365.', 0, 1, 'C');
        $pdf->Cell(80, 7, '', 0, 0, 'C');
        $pdf->Cell(190, 7, 'Telepon : (0267) 4218872. E-mail: ', 0, 1, 'C');
        $pdf->Line(10,35, 390-20, 35);
        $pdf->Line(10,35.5, 390-20, 35.5);
        
        $pdf->Cell(30, 7, '', 0, 1);

        $pdf->Cell(70, 7, '', 0, 0, 'C');
        $pdf->Cell(190, 7, 'Laporan Data Pengadaan Obat', 0, 1, 'C');




        //tabel hasil rekam medik
        $pdf->Cell(1,7, '',0,0,'C');
        $pdf->Cell(35, 7, 'No. Trans  ', 1, 0, 'C');
        $pdf->Cell(45, 7, 'Nama Supplier  ', 1, 0, 'C');
        $pdf->Cell(75, 7, 'Nama Obat  ', 1, 0, 'C');
        $pdf->Cell(49, 7, 'Jenis Obat  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Harga Beli  ', 1, 0, 'C');
        // $pdf->Cell(30, 7, 'Harga Jual  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Jumlah  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Satuan  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Total  ', 1, 1, 'C');







        $resep = $this->db->query($sql_data_resep)->result();
        foreach ($resep as $r) {
        $pdf->Cell(1,7, '',0,0,'C');
        $pdf->Cell(35, 7, $r->no_trans, 1, 0, 'C');
        $pdf->Cell(45, 7, $r->supplier, 1, 0, 'C');
        $pdf->Cell(75, 7, $r->nama_obat, 1, 0, 'C');
        $pdf->Cell(49, 7, $r->jenis_obat, 1, 0, 'C');
        $pdf->Cell(30, 7, $r->harga_beli, 1, 0, 'C');
        // $pdf->Cell(30, 7, $r->harga_jual, 1, 0, 'C');
        $pdf->Cell(30, 7, $r->jumlah, 1, 0, 'C');
        $pdf->Cell(30, 7, $r->satuan, 1, 0, 'C');
        $pdf->Cell(30, 7, $r->total, 1, 1, 'C');






        }


        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(90, 10, '', 0, 0);
        $pdf->Cell(155, 10, 'Tanggal Cetak', 0, 0, 'R');
        $pdf->Cell(43, 10, ': '.date('d-m-Y '), 0, 0, 'R');


        $pdf->Output();
    }


    function cetakobatnonpasien(){

    $no_rawat = substr($this->uri->uri_string(3), 27);
      $sql_daftar = "SELECT pd.no_rekamedis, pd.no_rawat,pd.tanggal_daftar,ps.nama_pasien, td.nama_dokter FROM tbl_pendaftaran as pd, tbl_pasien as ps, tbl_dokter as td WHERE pd.no_rekamedis = ps.no_rekamedis and td.kode_dokter = pd.kode_dokter_penanggung_jawab and pd.no_rawat = '$no_rawat'";
      $sql_penyakit = "SELECT pd.no_rekamedis, pd.no_rawat,dg.nama_penyakit FROM tbl_pendaftaran as pd, tbl_diagnosa_penyakit as dg WHERE pd.no_rekamedis and pd.no_rawat = '$no_rawat'";
      $sql_poli_input_rekmed = "SELECT pd.no_rawat,pd.id_poli, p.nama_poli FROM tbl_pendaftaran as pd, tbl_poli as p WHERE pd.no_rawat = '$no_rawat' AND pd.id_poli = p.id_poli";
      $sql_data_resep = "SELECT * FROM tbl_pengadaan_obat";

    $sql_rekamedis    = "SELECT tr.*,pd.no_rawat,pd.tanggal_daftar 
                        FROM tbl_riwayat_tindakan as tr, tbl_pendaftaran as pd
                        WHERE pd.no_rawat and tr.no_rawat='$no_rawat'";

    $sql_obatnonpasien = "SELECT * from tbl_obatnonpasien JOIN tbl_tanggungobat ON tbl_tanggungobat.kode_ruang = tbl_obatnonpasien.kode_ruang";

        $this->load->library('pdf');
        $pdf = new FPDF('l', 'mm', array(345,340));
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);

        $pdf->Image('assets/foto_profil/logo-rs.jpg', 50, 5, 30);
        //$pdf->Image('', )
        // mencetak string 
        $pdf->Cell(45, 7, '', 0, 0, 'C');
        $pdf->Cell(260, 7, 'PUSKESMAS MUNJUNGAN', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 7, '', 0, 0, 'C');
        $pdf->Cell(275, 7, 'Munjungan Krajan, Kec. Munjungan, Kabupaten Trenggalek, Jawa Timur 66365.', 0, 1, 'C');
        $pdf->Cell(80, 7, '', 0, 0, 'C');
        $pdf->Cell(190, 7, 'Telepon : (0267) 4218872. E-mail: ', 0, 1, 'C');
        $pdf->Line(10,35, 390-20, 35);
        $pdf->Line(10,35.5, 390-20, 35.5);
        
        $pdf->Cell(30, 7, '', 0, 1);

        $pdf->Cell(70, 7, '', 0, 0, 'C');
        $pdf->Cell(190, 7, 'Laporan Data Pengeluaran Obat Non Pasien', 0, 1, 'C');
        $pdf->Cell(30, 7, '', 0, 1);




        //tabel hasil rekam medik
        $pdf->Cell(1,7, '',0,0,'C');
        $pdf->Cell(30, 7, 'No. Trans  ', 1, 0, 'C');
        $pdf->Cell(35, 7, 'Nama Supplier  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Kode Obat  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Nama Obat  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Jenis Obat  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Jumlah  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Satuan  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Tgl. Trans  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Tujuan  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Keterangan  ', 1, 1, 'C');







        $nonpasien = $this->db->query($sql_obatnonpasien)->result();
        foreach ($nonpasien as $n) {
        $pdf->Cell(1,7, '',0,0,'C');
        $pdf->Cell(30, 7, $n->no_trans, 1, 0, 'C');
        $pdf->Cell(35, 7, $n->supplier, 1, 0, 'C');
        $pdf->Cell(30, 7, $n->kode_obat, 1, 0, 'C');
        $pdf->Cell(30, 7, $n->nama_obat, 1, 0, 'C');
        $pdf->Cell(30, 7, $n->jenis_obat, 1, 0, 'C');
        $pdf->Cell(30, 7, $n->jumlah, 1, 0, 'C');
        $pdf->Cell(30, 7, $n->satuan, 1, 0, 'C');
        $pdf->Cell(30, 7, $n->tgl_transaksi, 1, 0, 'C');
        $pdf->Cell(30, 7, $n->kode_ruang, 1, 0, 'C');
        $pdf->Cell(30, 7, $n->keterangan, 1, 1, 'C');
        // $pdf->Cell(45, 7, $r->supplier, 1, 0, 'C');
        // $pdf->Cell(75, 7, $r->nama_obat, 1, 0, 'C');
        // $pdf->Cell(49, 7, $r->jenis_obat, 1, 0, 'C');
        // $pdf->Cell(30, 7, $r->harga_beli, 1, 0, 'C');
        // // $pdf->Cell(30, 7, $r->harga_jual, 1, 0, 'C');
        // $pdf->Cell(30, 7, $r->jumlah, 1, 0, 'C');
        // $pdf->Cell(30, 7, $r->satuan, 1, 0, 'C');
        // $pdf->Cell(30, 7, $r->total, 1, 1, 'C');






        }


        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(90, 10, '', 0, 0);
        $pdf->Cell(155, 10, 'Tanggal Cetak', 0, 0, 'R');
        $pdf->Cell(43, 10, ': '.date('d-m-Y '), 0, 0, 'R');


        $pdf->Output();
    }


    public function create() 
    {
        $obatnonpasien = $this->Tbl_obatnonpasien_model->getobatnonpasien();
        foreach($obatnonpasien as $onp){
            $id_obatnonpasien = $onp->id_obatnonpasien;
        }
        if (count($obatnonpasien) == 0){
            $id_obatnonpasien = 0;
        }
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('obatnonpasien/create_action'),
	    'id_obatnonpasien' => $id_obatnonpasien+1,
	    'no_trans' => set_value('no_trans'),
	    'supplier' => set_value('supplier'),
	    'nama_obat' => set_value('nama_obat'),
	    'kode_obat' => set_value('kode_obat'),
	    'jenis_obat' => set_value('jenis_obat'),
        // 'harga_beli' => set_value('harga_beli'),
        // 'harga_jual' => set_value('harga_jual'),
	    'jumlah' => set_value('jumlah'),
        'satuan' => set_value('satuan'),
	    'keterangan' => set_value('keterangan'),
	    // 'total' => set_value('total'),
	    'tgl_transaksi' => set_value('tgl_transaksi'),
        'kode_ruang' => set_value('kode_ruang'),
	);
        $this->template->load('template','obatnonpasien/tbl_obatnonpasien_form', $data);
    }
    
    public function create_action() 
    {

        $obatnonpasien = $this->Tbl_obatnonpasien_model->get_all();
        $this->_rules() ;       
        if ($this->form_validation->run() != FALSE) {
			$this->create();
		} else {

			$data = array(

                'id_obatnonpasien' => $this->input->post('id_obatnonpasien', TRUE),
				'no_trans' => $this->input->post('no_trans', TRUE),
				'supplier' => $this->input->post('supplier', TRUE),
                'kode_obat' => $this->input->post('kode_obat', TRUE),
				'nama_obat' => $this->input->post('nama_obat', TRUE),
				'jenis_obat' => $this->input->post('jenis_obat', TRUE),
                // 'harga_beli' => $this->input->post('harga_beli', TRUE),
                // 'harga_jual' => $this->input->post('harga_jual', TRUE),
				'jumlah' => $this->input->post('jumlah', TRUE),
                'satuan' => $this->input->post('satuan', TRUE),
				'keterangan' => $this->input->post('keterangan', TRUE),
				// 'total' => $this->input->post('total', TRUE),
				'tgl_transaksi' => date('d-m-Y'),
                'kode_ruang' => $this->input->post('kode_ruang', TRUE)
 				);

			//eksekusi query inser
            $kode_obat = $this->input->post('kode_obat', TRUE);
            $jumlah = $this->input->post('jumlah', TRUE);
            // $satuan = $this->input->post('satuan', TRUE);
            $stokobat = $this->Tbl_obatnonpasien_model->getStokObat($kode_obat);
            if (count($stokobat) > 0) {
                foreach ($stokobat as $key) {
                    $stok = $key->jumlah;
                }
                $stokbaru = $stok - $jumlah;
                $this->Tbl_obatnonpasien_model->updateStokObat($kode_obat,$stokbaru);
            }
            else{
                $this->Tbl_obatnonpasien_model->insertObat($kode_obat,$jumlah,$satuan);
            }

			$this->Tbl_obatnonpasien_model->insert($data);

			//set pesan data berhasil dibuat
			 $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');  

			redirect(site_url('obatnonpasien'));
		}
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_obatnonpasien_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('obatnonpasien/update_action'),
		'id_obatnonpasien' => set_value('id_obatnonpasien', $row->id_obatnonpasien),
		'no_trans' => set_value('no_trans', $row->no_trans),
		'supplier' => set_value('supplier', $row->supplier),
		'nama_obat' => set_value('nama_obat', $row->nama_obat),
		'kode_obat' => set_value('kode_obat', $row->kode_obat),
		'jenis_obat' => set_value('jenis_obat', $row->jenis_obat),
        // 'harga_beli' => set_value('harga_beli', $row->harga_beli),
        // 'harga_jual' => set_value('harga_beli', $row->harga_jual),
		'jumlah' => set_value('jumlah', $row->jumlah),
        'satuan' => set_value('satuan', $row->satuan),
		'keterangan' => set_value('keterangan', $row->keterangan),
		// 'total' => set_value('total', $row->total),
		'tgl_transaksi' => set_value('tgl_transaksi', $row->tgl_transaksi),
        'kode_ruang' => set_value('keterangan', $row->kode_ruang),
	    );
            $this->template->load('template','obatnonpasien/tbl_obatnonpasien_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('obatnonpasien'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no_trans', TRUE));
        } else {
            $data = array(
		'supplier' => $this->input->post('supplier',TRUE),
		'nama_obat' => $this->input->post('nama_obat',TRUE),
		'kode_obat' => $this->input->post('kode_obat',TRUE),
		'jenis_obat' => $this->input->post('jenis_obat',TRUE),
        // 'harga_beli' => $this->input->post('harga_beli',TRUE),
        // 'harga_jual' => $this->input->post('harga_jual',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
        'satuan' => $this->input->post('satuan',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		// 'total' => $this->input->post('total',TRUE),
		'tgl_transaksi' => $this->input->post('tgl_transaksi',TRUE),
        'kode_ruang' => $this->input->post('kode_ruang',TRUE),
	    );

            $this->Tbl_obatnonpasien_model->update($this->input->post('no_trans', TRUE), $data);
             $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');  
            redirect(site_url('obatnonpasien'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_obatnonpasien_model->get_by_id($id);

        if ($row) {
            $this->Tbl_obatnonpasien_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');              redirect(site_url('obatnonpasien'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('obatnonpasien'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_trans', 'no trans', 'trim|required');
	$this->form_validation->set_rules('supplier', 'supplier', 'trim|required');
	$this->form_validation->set_rules('nama_obat', 'nama obat', 'trim|required');
	$this->form_validation->set_rules('kode_obat', 'kode obat', 'trim|required');
	$this->form_validation->set_rules('jenis_obat', 'jenis obat', 'trim|required');
    // $this->form_validation->set_rules('harga_beli', 'harga beli', 'trim|required');
    // $this->form_validation->set_rules('harga_jual', 'harga jual', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
    $this->form_validation->set_rules('satuan', 'satuan', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
	// $this->form_validation->set_rules('total', 'total', 'trim|required');
	$this->form_validation->set_rules('tgl_transaksi', 'tgl transaksi', 'trim|required');
    $this->form_validation->set_rules('kode_ruang', 'kode_ruang', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');

	$this->form_validation->set_rules('id_obatnonpasien', 'id_obatnonpasien', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_pengadaan_obat.xls";
        $judul = "tbl_pengadaan_obat";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "No Trans");
	xlsWriteLabel($tablehead, $kolomhead++, "Supplier");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Obat");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Obat");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Obat");
    xlsWriteLabel($tablehead, $kolomhead++, "Harga Beli");
    // xlsWriteLabel($tablehead, $kolomhead++, "Harga Jual");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah");
	xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");
	xlsWriteLabel($tablehead, $kolomhead++, "Total");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Transaksi");
    xlsWriteLabel($tablehead, $kolomhead++, "kode_ruang");

	foreach ($this->Tbl_pengadaan_obat_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_trans);
	    xlsWriteLabel($tablebody, $kolombody++, $data->supplier);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_obat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_obat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_obat);
        xlsWriteNumber($tablebody, $kolombody++, $data->harga_beli);
        // xlsWriteNumber($tablebody, $kolombody++, $data->harga_jual);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->total);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_transaksi);
        xlsWriteLabel($tablebody, $kolombody++, $data->kode_ruang);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_pengadaan_obat.doc");

        $data = array(
            'tbl_pengadaan_obat_data' => $this->Tbl_pengadaan_obat_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('pengadaanobat/tbl_pengadaan_obat_doc',$data);
    }

}


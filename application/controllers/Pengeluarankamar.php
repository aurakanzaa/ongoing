<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengeluarankamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_pengeluaran_kamar_model');
        $this->load->model('Tbl_kamar_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','pengeluarankamar/tbl_pengeluaran_kmr_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_pengeluaran_kamar_model->json();
    }

    function cetak(){

    $no_rawat = substr($this->uri->uri_string(3), 27);
     
      // $sql_data_resep = "SELECT * FROM tbl_pengeluaran_kamar";

    // $sql_rekamedis    = "SELECT tr.*,pd.no_rawat,pd.tanggal_daftar 
    //                     FROM tbl_riwayat_tindakan as tr, tbl_pendaftaran as pd
    //                     WHERE pd.no_rawat and tr.no_rawat='$no_rawat'";

        $this->load->library('pdf');
        $pdf = new FPDF('l', 'mm', array(360,360));
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
        $pdf->Cell(190, 7, 'Laporan Data Pengeluaran Kamar', 0, 1, 'C');




        //tabel hasil rekam medik
        $pdf->Cell(1,7, '',0,0,'C');
        $pdf->Cell(40, 7, 'No. Terima kamar  ', 1, 0, 'C');
        $pdf->Cell(45, 7, 'Nama Pasien  ', 1, 0, 'C');
        $pdf->Cell(75, 7, 'Nama Kamar  ', 1, 0, 'C');
        $pdf->Cell(49, 7, 'Jenis Kamar  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Kapasitas  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Harga  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Keterangan  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Tanggal Masuk  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Tanggal Keluar  ', 1, 0, 'C');


        $resep = $this->db->get('tbl_pengeluaran_kamar')->result();
        // var_dump($resep);
        foreach ($resep as $r) {
            $pdf->Cell(1,7, '',0,0,'C');
            $pdf->Cell(40, 7, $r->no_terima_kamar, 1, 0, 'C');
            $pdf->Cell(45, 7, $r->nama_pasien, 1, 0, 'C');
            $pdf->Cell(75, 7, $r->nama_kamar, 1, 0, 'C');
            $pdf->Cell(49, 7, $r->kelas_kamar, 1, 0, 'C');
            $pdf->Cell(30, 7, $r->kapasitas, 1, 0, 'C');
            $pdf->Cell(30, 7, $r->harga, 1, 0, 'C');
            $pdf->Cell(30, 7, $r->Keterangan, 1, 0, 'C');
            $pdf->Cell(30, 7, $r->tanggal_masuk, 1, 0, 'C');
            $pdf->Cell(30, 7, $r->tanggal_keluar, 1, 0, 'C');
       
        }


        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(110, 10, '', 0, 0);
        $pdf->Cell(155, 10, 'Tanggal Cetak', 0, 0, 'R');
        $pdf->Cell(43, 10, ': '.date('d-m-Y '), 0, 0, 'R');


        $pdf->Output();
    }

    function cetaklabel($id){

        $sql_pluar_kamar = $this->Tbl_pengeluaran_kamar_model->get_by_id($id);
        $this->load->library('pdf');
        $pdf = new FPDF();
        $pdf->AddPage('P','A4');

        $tgl=date('Y/m/d');
        $pdf->Image('assets/foto_profil/latar-kartu.png',5,5,100,56);
        $pdf->Image('assets/foto_profil/logo-rs.jpg',10,9,10,10);
        $pdf->setFont('Arial','B',12);
        $pdf->Cell(90,5,'PUSKESMAS MUNJUNGAN',0,0,'C');
        $pdf->Cell(10,5,'',0,1,'C');
        $pdf->setFont('Arial','B',10);
        $pdf->setFont('Arial','B',8);
        $pdf->Cell(90,5,'Munjungan Krajan, Kec. Munjungan, Kabupaten Trenggalek, Jawa Timur 66365.',0,0,'C');
        $pdf->Cell(10,5,'',0,1,'C');
        $pdf->setFont('Arial','',7);
        $pdf->SetLineWidth(0.2);
        $pdf->Line(10,20,100,20);
        $pdf->setFont('Arial','B',10);
        $pdf->Cell(90,5,'',0,0,'C');
        $pdf->Cell(10,5,'',0,1,'C');
        $pdf->setFont('Arial','',7);
        $pdf->SetLineWidth(0.2);
        $pdf->Line(10,25,100,25);
        $pdf->Ln(6);
        
        $pdf->setFont('Arial','',9);
        $pdf->Cell(60, 4, '', 0, 1);
        $pdf->Cell(42,4,'Nama Pasien',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pluar_kamar->nama_pasien,0,0,'L');
        $pdf->Cell(10,4,'',0,1,'C');
        $pdf->setFont('Arial','',10);
        $pdf->Cell(42,4,'Nama Kamar',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pluar_kamar->nama_kamar,0,1,'L');
        $pdf->Cell(42,4,'Dosis Aturan Obat',0,0,'L');
        $pdf->Ln(2);

        $pdf->Output('cetak-label-kamar.pdf','I');

            }


    public function read($id) 
    {
        $row = $this->Tbl_pengeluaran_kamar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pengeluaran' => $row->id_pengeluaran,
		'no_terima_kamar' => $row->no_terima_kamar,
		'nama_pasien' => $row->nama_pasien,
		'kode_kamar' => $row->kode_kamar,
		'nama_kamar' => $row->nama_kamar,
		'kelas_kamar' => $row->kelas_kamar,
		'kapasitas' => $row->kapasitas,
        'harga' => $row->harga,
        'tanggal_masuk' => $row->tanggal_masuk,
        'tanggal_keluar' => $row->tanggal_keluar,
        'keterangan' => $row->keterangan,
	    );
            $this->template->load('template','pengeluarankamar/tbl_pengeluaran_kmr_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengeluarankamar'));
        }
    }


     function pasienauto(){
        autocomplate_json('tbl_pasien', 'no_rekamedis');
    }

    function rawatauto(){
        autocomplate_json('tbl_pendaftaran', 'no_rawat');
    }

    function autofillpasien(){

      $no_rekamedis = $_GET['no_rekamedis'];

    $this->db->where('no_rekamedis',$no_rekamedis);

    $pasien= $this->db->get('tbl_pasien')->row_array();
    $data = array(
        'nama_pasien' => $pasien['nama_pasien'],
        );

    echo json_encode($data);
   }



     function kamarauto(){
        autocomplate_json('tbl_kamar', 'nama_kamar');
    }

     function autofill(){

    $nama_kamar = $_GET['nama_kamar'];

    $this->db->where('nama_kamar',$nama_kamar);

    $kamar= $this->db->get('tbl_kamar')->row_array();
    $data = array(
        'kode_kamar' => $kamar['kode_kamar'],
        'kelas_kamar' => $kamar['kelas_kamar'],
        'kapasitas' => $kamar['kapasitas'],
        'harga' => $kamar['harga'],

        );

    echo json_encode($data);
   }



    function autoNorawat(){

        $no_rawat = $_GET['no_rekamedis'];
        // var_dump($no_rawat);
        $this->db->where('tbl_pendaftaran.no_rawat',$no_rawat);
        $this->db->join('tbl_pendaftaran', 'tbl_pendaftaran.no_rekamedis = tbl_pasien.no_rekamedis');
        $pasien= $this->db->get('tbl_pasien')->row_array();
        $data = array(
            'nama_pasien' => $pasien['nama_pasien']
            );
        echo json_encode($data);
   }

    public function create() 
    {
        $kamar = $this->Tbl_pengeluaran_kamar_model->getKamar();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('pengeluarankamar/create_action'),
            'id_pengeluaran' => set_value('id_pengeluaran'),
	    'no_terima_kamar' => set_value('no_terima_kamar'),
	    'nama_pasien' => set_value('nama_pasien'),
	    'kode_kamar' => set_value('kode_kamar'),
	    'nama_kamar' => set_value('nama_kamar'),
	    'kelas_kamar' => set_value('kelas_kamar'),
	    'kapasitas' => set_value('kapasitas'),
        'harga' => set_value('harga'),
        'tanggal_masuk' => set_value('tanggal_masuk'),
        'tanggal_keluar' => set_value('tanggal_keluar'),
        'keterangan' => set_value('keterangan'),
        'kamar' => $kamar,
	);
        $this->template->load('template','pengeluarankamar/tbl_pengeluaran_kmr_form', $data);
    }
    
    public function create_action() 
    {
        $pengeluaran = $this->Tbl_pengeluaran_kamar_model->get_all();
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $kapasitas = $this->input->post('kapasitas');
            $kode_kamar = $this->input->post('kode_kamar');
            $getKamarByNama = $this->Tbl_kamar_model->getKamarById($kode_kamar);
            foreach ($getKamarByNama as $getKamarByNama) {
                $kps = $getKamarByNama->stok;
            }
            $kapasitasbaru = $kps - $kapasitas;
            $this->Tbl_kamar_model->updateKapasitasById($kode_kamar,$kapasitasbaru);
            $data = array(
                'no_terima_kamar' => $this->input->post('no_terima_kamar', TRUE),
        		'nama_pasien' => $this->input->post('nama_pasien',TRUE),
        		'kode_kamar' => $this->input->post('kode_kamar',TRUE),
        		'nama_kamar' => $this->input->post('nama_kamar',TRUE),
        		'kelas_kamar' => $this->input->post('kelas_kamar',TRUE),
        		'kapasitas' => $this->input->post('kapasitas',TRUE),
                'harga' => $this->input->post('harga',TRUE),
                'tanggal_masuk' => $this->input->post('tanggal_masuk',TRUE),
                'tanggal_keluar' => $this->input->post('tanggal_keluar',TRUE),
                'keterangan' => $this->input->post('keterangan',TRUE),
        	    );

            $this->Tbl_pengeluaran_kamar_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');  
            redirect(site_url('pengeluarankamar'));
        }
    }

    public function checkout($no_rawat)
    {
        $kamar = $this->Tbl_pengeluaran_kamar_model->getByNoRawat($no_rawat);
        foreach($kamar as $kam){
            $id_pengeluaran = $kam->id_pengeluaran;
        }
        $tanggal_keluar = date("Y/m/d");
        $this->Tbl_pengeluaran_kamar_model->updateTanggal($id_pengeluaran,$tanggal_keluar);
        $this->db->where('no_rawat', $no_rawat);
        $object = array('status_periksa' => 'Sudah Diperiksa', );
        $this->db->update('tbl_pendaftaran', $object);
        redirect('pengeluarankamar','refresh');
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_pengeluaran_kamar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengeluarankamar/update_action'),
                'id_pengeluaran' => set_value('id_pengeluaran', $row->id_pengeluaran),
                'no_terima_kamar' => set_value('no_terima_kamar', $row->no_terima_kamar),
                'nama_pasien' => set_value('nama_pasien', $row->nama_pasien),
                'kode_kamar' => set_value('kode_kamar', $row->kode_kamar),
                'nama_kamar' => set_value('nama_kamar', $row->nama_kamar),
                'kelas_kamar' => set_value('kelas_kamar', $row->kelas_kamar),
                'kapasitas' => set_value('kapasitas', $row->kapasitas),
                'harga' => set_value('harga', $row->harga),
                'tanggal_masuk' => set_value('tanggal_masuk', $row->tanggal_masuk),
                'tanggal_keluar' => set_value('tanggal_keluar', $row->tanggal_keluar),
                'keterangan' => set_value('keterangan', $row->keterangan),
	    );
            $this->template->load('template','pengeluarankamar/tbl_pengeluaran_kmr_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengeluarankamar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no_terima_kamar', TRUE));
        } else {
            $data = array(
                'id_pengeluaran' => $this->input->post('id_pengeluaran',TRUE),
                'no_terima_kamar' => $this->input->post('no_terima_kamar', TRUE),
        		'nama_pasien' => $this->input->post('nama_pasien',TRUE),
        		'kode_kamar' => $this->input->post('kode_kamar',TRUE),
        		'nama_kamar' => $this->input->post('nama_kamar',TRUE),
        		'kelas_kamar' => $this->input->post('kelas_kamar',TRUE),
        		'kapasitas' => $this->input->post('kapasitas',TRUE),
                'harga' => $this->input->post('harga',TRUE),
                'tanggal_masuk' => $this->input->post('tanggal_masuk',TRUE),
                'tanggal_keluar' => $this->input->post('tanggal_keluar',TRUE),
                'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->Tbl_pengeluaran_kamar_model->update($this->input->post('id_pengeluaran', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');  
            redirect(site_url('pengeluarankamar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_pengeluaran_kamar_model->get_by_id($id);

        if ($row) {
            $this->Tbl_pengeluaran_kamar_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus
            </div>');  
            redirect(site_url('pengeluarankamar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengeluarankamar'));
        }
    }

    public function _rules() 
    {
	// $this->form_validation->set_rules('id_pengeluaran', 'id pengeluaran', 'trim|required');
	$this->form_validation->set_rules('no_terima_kamar', 'no Terima kamar', 'trim|required');
    $this->form_validation->set_rules('nama_pasien', 'nama pasien', 'trim|required');
	$this->form_validation->set_rules('kode_kamar', 'kode kamar', 'trim|required');
	$this->form_validation->set_rules('nama_kamar', 'nama kamar', 'trim|required');
	$this->form_validation->set_rules('kelas_kamar', 'jenis kamar', 'trim|required');
	$this->form_validation->set_rules('kapasitas', 'kapasitas kamar', 'trim|required');
	$this->form_validation->set_rules('harga', 'jumlah', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');


	$this->form_validation->set_rules('no_terima_kamar', 'no_terima_kamar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_pengeluaran_obat.xls";
        $judul = "tbl_pengeluaran_obat";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pengeluaran");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pasien");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Kamar");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Kamar");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas Kamar");
	xlsWriteLabel($tablehead, $kolomhead++, "Kapasitas");
	xlsWriteLabel($tablehead, $kolomhead++, "harga");
	xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");
	
	foreach ($this->Tbl_rawat_inap_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_pengeluaran);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pasien);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_kamar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_kamar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas_kamar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kapasitas);
	    xlsWriteNumber($tablebody, $kolombody++, $data->harga);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
	   

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_pengeluaran_obat.doc");

        $data = array(
            'tbl_pengeluaran_obat_data' => $this->Tbl_rawat_inap_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('pengeluaranobat/tbl_pengeluaran_obat_doc',$data);
    }

}


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//halo
class Pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_pegawai_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','pegawai/tbl_pegawai_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_pegawai_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_pegawai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pegawai' => $row->id_pegawai,
		'nama_pegawai' => $row->nama_pegawai,
		'jenis_kelamin' => $row->jenis_kelamin,
		'npwp' => $row->npwp,
		'tempat_lahir' => $row->tempat_lahir,
		'tanggal_lahir' => $row->tanggal_lahir,
		'id_jabatan' => $row->id_jabatan,
        'id_bidang' => $row->id_bidang,
        'no_telp' => $row->no_telp,
        'pendidikan' => $row->pendidikan,
        'no_kepeg' => $row->no_kepeg,
        'status_kepeg' => $row->status_kepeg,
        'nik' => $row->nik,
        'alamat' => $row->alamat,
        'images' => $row->images
	    );
            $this->template->load('template','pegawai/tbl_pegawai_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pegawai'));
        }
    }

    function cetak(){

     
      $sql_data_resep = "SELECT * FROM tbl_pegawai JOIN tbl_jabatan ON tbl_jabatan.id_jabatan = tbl_pegawai.id_jabatan JOIN tbl_bidang ON tbl_bidang.id_bidang = tbl_pegawai.id_bidang";


      

   
        $this->load->library('pdf');
        $pdf = new FPDF('l', 'mm', array(500,380));
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
        $pdf->Cell(190, 7, 'Laporan Data Pegawai', 0, 1, 'C');




        //tabel hasil rekam medik
        $pdf->Cell(1,7, '',0,0,'C');
        $pdf->Cell(30, 7, 'Id Pegawai  ', 1, 0, 'C');
        $pdf->Cell(40, 7, 'Nama Pegawai  ', 1, 0, 'C');
        $pdf->Cell(20, 7, 'J/k  ', 1, 0, 'C');
        $pdf->Cell(40, 7, 'NPWP  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Tempat Lahir  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Tanggal Lahir  ', 1, 0, 'C');
        $pdf->Cell(40, 7, 'Jabatan  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Bidang  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Kontak  ', 1, 0, 'C');
        $pdf->Cell(50, 7, 'Pendidikan  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'No Kepeg  ', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Status Kepeg  ', 1, 0, 'C');
        $pdf->Cell(40, 7, 'NIK  ', 1, 0, 'C');
        $pdf->Cell(50, 7, 'Alamat  ', 1, 1, 'C');





        $resep = $this->db->query($sql_data_resep)->result();
        foreach ($resep as $r)
         {
        
        
        $pdf->Cell(1,7, '',0,0,'C');
        $pdf->Cell(30, 7, $r->id_pegawai, 1, 0, 'C');
        $pdf->Cell(40, 7, $r->nama_pegawai, 1, 0, 'C');
        $pdf->Cell(20, 7, $r->jenis_kelamin, 1, 0, 'C');
        $pdf->Cell(40, 7, $r->npwp, 1, 0, 'C');
        $pdf->Cell(30, 7, $r->tempat_lahir, 1, 0, 'C');
        $pdf->Cell(30, 7, date('d-m-Y', strtotime($r->tanggal_lahir)), 1, 0, 'C');
        $pdf->Cell(40, 7, $r->nama_jabatan, 1, 0, 'C');
        $pdf->Cell(30, 7, $r->nama_bidang, 1, 0, 'C');
        $pdf->Cell(30, 7, $r->no_telp, 1, 0, 'C');
        $pdf->Cell(50, 7, $r->pendidikan, 1, 0, 'C');
        $pdf->Cell(30, 7, $r->no_kepeg, 1, 0, 'C');
        $pdf->Cell(30, 7, $r->status_kepeg, 1, 0, 'C');
        $pdf->Cell(40, 7, $r->nik, 1, 0, 'C');
        $pdf->Cell(50, 7, $r->alamat, 1, 1, 'C');
        }


        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(110, 10, '', 0, 0);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(130, 10, '', 0, 1);
        $pdf->Cell(110, 10, '', 0, 0);
        $pdf->Cell(155, 10, 'Tanggal Cetak', 0, 0, 'R');
        $pdf->Cell(43, 10, ': '.date('d-m-Y '), 0, 0, 'R');


        $pdf->Output();
    }



    function cetakkartu($id){

        
        $sql_pegawai = $this->Tbl_pegawai_model->get_by_id($id);
        
        // $sql_rekamedis    = "SELECT * from 'tbl_pegawai' join 'tbl_jabatan' , 'tbl_jabatan.id_jabatan=tbl_pegawai.id_jabatan'";
        


        $this->load->library('pdf');
        $pdf = new FPDF('l', 'mm', array(380,380));
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
        $pdf->setFont('Arial','',25);
        $pdf->Cell(200, 7, 'Data Pegawai', 0, 1, 'C');
        
        $pdf->setFont('Arial','',12);
        $pdf->Cell(60, 4, '', 0, 1);
        $pdf->Cell(50,4,'NIP',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->id_pegawai,0,0,'L');
        $pdf->Cell(10,7,'',0,1,'C');
        
        $pdf->Cell(50,4,'Nama Pegawai',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->nama_pegawai,0,1,'L');
        
        $pdf->setFont('Arial','',12);
        $pdf->Cell(60, 4, '', 0, 1);
        $pdf->Cell(50,4,'Jenis Kelamin',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->jenis_kelamin,0,0,'L');
        $pdf->Cell(10,7,'',0,1,'C');
        
        $pdf->Cell(50,4,'NPWP',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->npwp,0,1,'L');

        $pdf->setFont('Arial','',12);
        $pdf->Cell(60, 4, '', 0, 1);
        $pdf->Cell(50,4,'Tempat Lahir',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->tempat_lahir,0,0,'L');
        $pdf->Cell(10,7,'',0,1,'C');
        
        $pdf->Cell(50,4,'Tanggal Lahir',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->tanggal_lahir,0,1,'L');

        $pdf->setFont('Arial','',12);
        $pdf->Cell(60, 4, '', 0, 1);
        $pdf->Cell(50,4,'Jabatan',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->nama_jabatan,0,0,'L');
        $pdf->Cell(10,7,'',0,1,'C');
        
        $pdf->Cell(50,4,'Bidang',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->nama_bidang,0,1,'L');

        $pdf->setFont('Arial','',12);
        $pdf->Cell(60, 4, '', 0, 1);
        $pdf->Cell(50,4,'No Telepon',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->no_telp,0,0,'L');
        $pdf->Cell(10,7,'',0,1,'C');
        
        $pdf->Cell(50,4,'Pendidikan',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->pendidikan,0,1,'L');

        $pdf->setFont('Arial','',12);
        $pdf->Cell(60, 4, '', 0, 1);
        $pdf->Cell(50,4,'No Kepegawaian',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->no_kepeg,0,0,'L');
        $pdf->Cell(10,7,'',0,1,'C');
        
        $pdf->Cell(50,4,'Status kepegawaian',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->status_kepeg,0,1,'L');

        $pdf->setFont('Arial','',12);
        $pdf->Cell(60, 4, '', 0, 1);
        $pdf->Cell(50,4,'NIK',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->nik,0,0,'L');
        $pdf->Cell(10,7,'',0,1,'C');
        
        $pdf->Cell(50,4,'Alamat',0,0,'L');
        $pdf->Cell(36,4,': '.$sql_pegawai->alamat,0,1,'L');

        $pdf->Cell(50,4,'',0,0,'L');
       
        $pdf->Image('assets/foto_profil/'.$sql_pegawai->images,300, 50, 70 );

        $pdf->Ln(2);

        $pdf->Output('cetak-kartu-pegawai.pdf','I');

            
        }



    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('pegawai/create_action'),
	    'id_pegawai' => set_value('id_pegawai'),
	    'nama_pegawai' => set_value('nama_pegawai'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'npwp' => set_value('npwp'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tanggal_lahir' => set_value('tanggal_lahir'),
	    'id_jabatan' => set_value('id_jabatan'),
        'id_bidang' => set_value('id_bidang'),
        'no_telp' => set_value('no_telp'),
        'pendidikan' => set_value('pendidikan'),
        'no_kepeg' => set_value('no_kepeg'),
        'status_kepeg' => set_value('status_kepeg'),
        'nik' => set_value('nik'),
        'alamat' => set_value('alamat'),
        'images' => set_value('images'),
	);
        $this->template->load('template','pegawai/tbl_pegawai_form', $data);
    }
    
    public function create_action() 
    {
        $ttl = $this->input->post('tanggal_lahir',TRUE);

        $this->_rules();
        // $foto = $this->upload_foto();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
                $target_dir = "assets/foto_profil/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                // $uploadOk = 1;
                // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                // if(isset($_POST["submit"])) {
                //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                //     if($check !== false) {
                //         echo "File is an image - " . $check["mime"] . ".";
                //         $uploadOk = 1;
                //     } else {
                //         echo "File is not an image.";
                //         $uploadOk = 0;
                //     }
                // }
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $data = array(
            'id_pegawai' => $this->input->post('id_pegawai',TRUE),
    		'nama_pegawai' => $this->input->post('nama_pegawai',TRUE),
    		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
    		'npwp' => $this->input->post('npwp',TRUE),
    		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
    		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
            'id_bidang' => $this->input->post('id_bidang',TRUE),
            'no_telp' => $this->input->post('no_telp',TRUE),
            'pendidikan' => $this->input->post('pendidikan',TRUE),
            'no_kepeg' => $this->input->post('no_kepeg',TRUE),
            'status_kepeg' => $this->input->post('status_kepeg',TRUE),
            'nik' => $this->input->post('nik',TRUE),
            'alamat' => $this->input->post('alamat',TRUE),
            'images'        => $_FILES["fileToUpload"]["name"]
    	    );

            $this->Tbl_pegawai_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');              
            redirect(site_url('pegawai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_pegawai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pegawai/update_action'),
		'id_pegawai' => set_value('id_pegawai', $row->id_pegawai),
		'nama_pegawai' => set_value('nama_pegawai', $row->nama_pegawai),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'npwp' => set_value('npwp', $row->npwp),
		'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
		'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
		'id_jabatan' => set_value('id_jabatan', $row->id_jabatan),
        'id_bidang' => set_value('id_bidang', $row->id_bidang),
        'no_telp' => set_value('no_telp', $row->no_telp),
        'pendidikan' => set_value('pendidikan', $row->pendidikan),
        'no_kepeg' => set_value('no_kepeg', $row->no_kepeg),
        'status_kepeg' => set_value('status_kepeg', $row->status_kepeg),
        'nik' => set_value('nik', $row->nik),
        'alamat' => set_value('alamat', $row->alamat),
        'images'        => set_value('images', $row->images),
	    );
            $this->template->load('template','pegawai/tbl_pegawai_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pegawai'));
        }
    }
    
    public function update_action() 
    {

        $ttl = $this->input->post('tanggal_lahir',TRUE);

        $this->_rules();
        $foto = $this->upload_foto();
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pegawai', TRUE));
        } else {
                $target_dir = "assets/foto_profil/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	                $data = array(
                		'nama_pegawai' => $this->input->post('nama_pegawai',TRUE),
                		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
                		'npwp' => $this->input->post('npwp',TRUE),
                		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
                		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
                        'id_bidang' => $this->input->post('id_bidang',TRUE),
                        'no_telp' => $this->input->post('no_telp',TRUE),
                        'pendidikan' => $this->input->post('pendidikan',TRUE),
                        'no_kepeg' => $this->input->post('no_kepeg',TRUE),
                        'status_kepeg' => $this->input->post('status_kepeg',TRUE),
                        'nik' => $this->input->post('nik',TRUE),
                        'alamat' => $this->input->post('alamat',TRUE),
                        'images'        =>$_FILES["fileToUpload"]["name"]
                	    );
	            	$this->Tbl_pegawai_model->update($this->input->post('id_pegawai', TRUE), $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
                    </div>');
                    redirect(site_url('pegawai'));
			}
    }

    function upload_foto(){
        $config['upload_path']          = './assets/foto_profil/';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('images');
        return $this->upload->data();
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_pegawai_model->get_by_id($id);

        if ($row) {
            $this->Tbl_pegawai_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');            redirect(site_url('pegawai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pegawai'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('id_pegawai', 'id pegawai', 'trim|required');
	$this->form_validation->set_rules('nama_pegawai', 'nama pegawai', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('npwp', 'npwp', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
	$this->form_validation->set_rules('id_jabatan', 'id jabatan', 'trim|required');
    $this->form_validation->set_rules('id_bidang', 'id bidang', 'trim|required');
    $this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
    $this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
    $this->form_validation->set_rules('no_kepeg', 'no_kepeg', 'trim|required');
    $this->form_validation->set_rules('status_kepeg', 'status_kepeg', 'trim|required');
    $this->form_validation->set_rules('nik', 'nik', 'trim|required');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    // $this->form_validation->set_rules('images', 'images', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');

	$this->form_validation->set_rules('nik', 'nik', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_pegawai.xls";
        $judul = "tbl_pegawai";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pegawai");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
	xlsWriteLabel($tablehead, $kolomhead++, "Npwp");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jabatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Bidang");
    xlsWriteLabel($tablehead, $kolomhead++, "no_telp");
    xlsWriteLabel($tablehead, $kolomhead++, "pendidikan");
    xlsWriteLabel($tablehead, $kolomhead++, "no_kepeg");
    xlsWriteLabel($tablehead, $kolomhead++, "status_kepeg");
    xlsWriteLabel($tablehead, $kolomhead++, "nik");
    xlsWriteLabel($tablehead, $kolomhead++, "alamat");

	foreach ($this->Tbl_pegawai_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pegawai);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamin);
	    xlsWriteLabel($tablebody, $kolombody++, $data->npwp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jabatan);
        xlsWriteNumber($tablebody, $kolombody++, $data->id_bidang);
        xlsWriteNumber($tablebody, $kolombody++, $data->no_telp);
        xlsWriteNumber($tablebody, $kolombody++, $data->pendidikan);

        xlsWriteNumber($tablebody, $kolombody++, $data->no_kepeg);

        xlsWriteNumber($tablebody, $kolombody++, $data->status_kepeg);

        xlsWriteNumber($tablebody, $kolombody++, $data->nik);

        xlsWriteNumber($tablebody, $kolombody++, $data->alamat);


	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_pegawai.doc");

        $data = array(
            'tbl_pegawai_data' => $this->Tbl_pegawai_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('pegawai/tbl_pegawai_doc',$data);
    }

}


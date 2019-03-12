<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->model('login_model');
		$this->load->library('encryption');
	}

	public function index()
	{
		$this->form_validation->set_rules('no_rekamedis', 'No Rekam Medis', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_tombollogin');

		if ($this->form_validation->run()==FALSE)
		{
			$data['error'] = "Maaf, No Rekam Medis dan Password tidak valid.";
			$this->load->view('login/login_view',$data);
		}
		else
		{
			redirect('user','refresh');
		}
	}

	public function tombollogin($password)
	{
		$no_rekamedis=$this->input->post('no_rekamedis');
		$test = $this->encryption->encrypt($password);
		$result=$this->login_model->login($no_rekamedis, $password);

		// $password=$this->input->post('login_password');
		if ($result=='wrong_user')
		{
			$this->form_validation->set_message('tombollogin', 'No Rekam Medis Salah!');
			echo "control:wrong user";
			return false;
		}
		elseif($result=='wrong_password')
		{
			$this->form_validation->set_message('tombollogin', 'Password Salah!');
			echo "control:wrong password";
			return false;
		}
		elseif($result)
		{
			foreach ($result as $row) {
				$session_variables=array('no_rekamedis' =>$row->no_rekamedis, 'no_ktp' =>$row->no_ktp, 'no_bpjs' =>$row->no_bpjs,'nama_pasien' =>$row->nama_pasien, 'jenis_kelamin' =>$row->jenis_kelamin, 'tempat_lahir' =>$row->tempat_lahir, 'alamat' =>$row->alamat, 'tanggal_lahir' =>$row->tanggal_lahir, 'desa' =>$row->desa, 'status_pasien' =>$row->status_pasien, 'no_telp' =>$row->no_telp, 'password' =>$row->password);
			}
			
			$this->session->set_userdata('logged_in', $session_variables);
			return true;
		}
		else
		{
			$this->form_validation->set_message('No Rekam Medis dan Password Salah!');
			return false;
		}
	}

	public function logout(){
      $this->session->unset_userdata('logged_in');
      $this->session->sess_destroy();
      redirect('login','refresh');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
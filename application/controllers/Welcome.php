<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function index() {
    	$session_data = $this->session->userdata();
    	$level = $session_data['nama_level'];
    	$data['level'] = $level;
        //$this->load->view('table');
        $this->template->load('template', 'welcome',$data);
    }

   

}

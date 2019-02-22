<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		   $this->load->library('form_validation');

		   $this->form_validation->set_rules('username', 'Username', 'trim|required');
		   $this->form_validation->set_rules('password', 'Password', 'trim|required');

		    if( $this->session->userdata('isLoggedIn') == 1 ) {
				redirect('home');
			} else {
				echo $this->session->userdata('isLoggedIn');
				redirect(base_url());
			}
	}


	function show_login( $show_error = false ) {
		$data['error'] = $show_error;

		$this->load->helper('form');
		$this->load->view('login',$data);
	}

	public function login()
    {
        $this->load->model('User');
        $email = $this->input->post('username', TRUE);
        $pass = $this->input->post('password', TRUE);
        $level = $this->input->post('level', TRUE);
        $where = "";

        if ($level == "pasien"){ 
        // super admin
            $table = "tbl_pasien";
        }else{ 
            $table = "tbl_admin";
        }

        $validate = $this->User->validate($table,$email, $pass,$level,$where);



		if( $email && $pass &&  $validate ) {
			$result = array(
				'success' => true,
				'message' => "Welcome to Proyecto."
			);
		  } else {
			$result = array(
				'success' => false,
				'message' => "Username Atau Password Anda Salah, Silahkan Coba Lagi"
			);
		  }
		  echo json_encode($result);
    }


    public function logout()
	{
			 $this->session->unset_userdata('isLoggedIn');
			 $this->session->unset_userdata('username');
			$this->session->sess_destroy();

            redirect(base_url(''));
	}

}

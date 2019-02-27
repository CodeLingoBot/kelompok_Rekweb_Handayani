<?php
ob_start();
class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  function index()
  {
    $this->load->helper('form');

//    if( $this->session->userdata('isLoggedIn') == 1 ) {
//      redirect('home');
//    } else {
//      echo $this->session->userdata('isLoggedIn');
      // redirect('login');
      $this->load->view('login');
//    }

  }


    function registrasi()
    {
        $this->load->view('registrasi');
    }


  function level(){
      $this->load->view('level_user');
  }

  public function logout()
	{
			$this->session->unset_userdata('isLoggedIn');
			$this->session->unset_userdata('username');
      redirect(base_url('login'));
	}

}
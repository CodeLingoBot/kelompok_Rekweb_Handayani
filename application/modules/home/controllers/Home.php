<?php
ob_start();
class Home extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    
    }

    public function index()
    {
      cek_session_admin();
      $level = $this->session->userdata('level');
      $nik = $this->session->userdata('nik');

          $this->load->view('home/home');

   


    }

    public function dashboard()
    {
        cek_session_admin();
       
        $this->load->view('dashboard/admin');
    }




}


//W4k4t@b12018
//
//ek1n3rjawk4tb
//
//Ek1n3rja@2018
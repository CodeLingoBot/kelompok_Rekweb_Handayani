<?php

function require_icon()
{
    $c = "<b style='color:red;' >*</b>";
    return $c;
}


function get_code(){
      $ci = & get_instance();
      $q = $ci->db->query("SELECT MAX(RIGHT(kode_temuan,3)) AS kode FROM tbl_temuan");
      $kd = "";
      if($q->num_rows()>0){
          foreach($q->result() as $k){
              $tmp = ((int)$k->kode)+1;
              $kd = sprintf("%03s", $tmp);
          }
      }else{
          $kd = "01";
      }
      date_default_timezone_set('Asia/Makassar');
      return $kd;
}

function total_saldo_giro()
{
    $ci = & get_instance();
    $q = $ci->db->query("SELECT SUM(debit) - SUM(kredit) AS saldo FROM tbl_giro")->row();
    $saldo = $q->saldo;
    return $saldo;
}


function total_saldo_rumah()
{
    $ci = & get_instance();
    $q = $ci->db->query("SELECT SUM(debit) - SUM(kredit) AS saldo FROM tbl_rumah")->row();
    $saldo = $q->saldo;
    return $saldo;
}

function total($fields)
{
    $ci = & get_instance();
    $total = $ci->db->query("SELECT SUM($fields) AS total FROM tbl_pembelian")->row();
    return $total;
}



function get_profil()
{
    $ci = & get_instance();
    $q = $ci->db->query("SELECT * FROM tbl_profil ")->row();
    return $q;
}


function get_day($date)
{
    $datetime =  strtotime($date);
    $date_id = day_id(date('l', $datetime));
    return $date_id;
}


function day_id($day_en){

    if ($day_en == "Sunday") {
        $day_id = "Minggu";
    } else if ($day_en == "Monday") {
        $day_id = "Senin";
    } else if ($day_en == "Tuesday") {
        $day_id = "Selasa";
    }else if ($day_en == "Wednesday") {
        $day_id = "Rabu";
    }else if ($day_en == "Thursday") {
        $day_id = "Kamis";
    }else if ($day_en == "Friday") {
        $day_id = "Jumat";
    }else if ($day_en == "Saturday") {
        $day_id = "Sabtu";
    }
    
    return $day_id;

}

function level_session()
{
    $ci = & get_instance();
    $q = $ci->session->userdata('level');
    return $q;
}




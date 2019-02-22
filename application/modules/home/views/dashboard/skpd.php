
<?php
$skpd = $this->session->userdata('id_skpd');
?>


<script src="https://code.highcharts.com/highcharts.js"></script>

<style>

#table_scroll {
  width: 100%;
  margin-top: 100px;
  margin-bottom: 100px;
  border-collapse: collapse;
}
#table_scroll thead th {
  padding: 10px;
  background-color: #ea922c;
  color: #fff;
}
#table_scroll tbody td {
  padding: 10px;
  background-color: #ed3a86;
  color: #fff;
}

</style>

<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <h2>Selamat Datang Operator <b><?= $this->session->userdata('nama') ?> </b>  </h2>
            </div>
        </div>
    </div>
    <div class="row clearfix">



    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="card planned_task">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <div class="body bg-success text-light" style="border-radius:5px;">
                            <h4><i class="icon-users"></i> <?= $pegawai->jumlah_pegawai; ?> </h4>
                            <span>Total Pegawai </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="body bg-primary text-light" style="border-radius:5px;">
                            <h4><i class="icon-user"></i> <?= $laki->jumlah_pegawai; ?></h4>
                            <span>Laki - Laki </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="body bg-warning text-dark" style="border-radius:5px;">
                            <h4><i class="icon-user"></i> <?= $perempuan->jumlah_pegawai; ?></h4>
                            <span>Perempuan</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-9">
                    <form action="">
                        <div class="form-group">
                            <select name="" class="form-control" id="">
                                <option value="">Pilih Grafik Berdasarkan </option>
                                <option value="golongan">Pangkat </option>
                                <option value="eselon">Eselon </option>
                                <option value="agama">Agama </option>
                                <option value="pendidikan">Pendidikan </option>
                                <option value="jk">Jenis Kelamin </option>
                            </select>
                        </div>
                    </form>
                  </div>
                  <div class="col-md-3">
                    <center>
                      <button type="button" class="btn btn-primary" name="button"><i class=" icon-printer"></i> Cetak Data </button>
                    </center>
                  </div>
                </div>

                <!-- <div id="grafik_pangkat" style="min-width: 310px; height: 400px; margin: 0 auto"></div> -->
                <div id="grafik_pendidikan" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

            </div>
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="row">
          <div class="col-md-12" style="margin-bottom:10px;">
            <div class="card planned_task" >
              <div style="padding:10px 10px 0px 10px;">
                <h6><i class="icon-users text-primary-blue"></i>  PEGAWAI MENDEKATI MASA PENSIUN  </h6>
              </div>
                <div class="body" id="contain" style="height:250px; overflow:scroll;">
                    <table class="table table-hover">
                        <?php 
                        $get_pensiun = $this->pegawai->get_pensiun();
                        foreach ($get_pensiun as $key => $data) {

                          $jenis_unit_kerja = $data->jenis_unit_kerja;
                          $unit_kerja       = $data->unit_kerja;
                          $sub_unit_kerja   = $data->sub_unit_kerja;;

                          $foto = foto_alt($data->foto);


                          $unit_kerja_result =  get_unit_kerja($jenis_unit_kerja,$unit_kerja,$sub_unit_kerja)['unit_kerja_result'];
                          $sub_unit_kerja_result =  get_unit_kerja($jenis_unit_kerja,$unit_kerja,$sub_unit_kerja)['sub_unit_kerja_result'];

                        ?>
                        <tr>
                          <td width="13%;">
                            <center>
                              <img src="<?= base_url()?>assets/img/pegawai/original/<?= $foto ?>" class='img-responsive' width='100%' style='border-radius:5px;'>
                            </center>
                          </td>
                          <td> 
                            <a href='javascript:void(0)' onclick=loadContent('pegawai/detail/<?= $data->id_pegawai ?>') >  <?= $data->nm_pegawai ?>  </a>  | 
                            <small>
                            <i class="icon-calendar color-primary-blue"></i> Umur : <?= $data->age ?> Tahun
                            </small>
                            <br>
                            <small>
                              <?= $data->jabatan ?><br>
                              <i class="fa fa-briefcase"></i>
                               <?= $unit_kerja_result."<br>".$sub_unit_kerja_result.""; ?>
                            </small>
                           
                           
                          </td>
                        </tr>
                        <?php 
                          }
                        ?>
                    </table>
                </div>
            </div>
          </div>

          <div class="col-md-12" >
            <div class="card planned_task" >
              <div style="padding:10px 10px 0px 10px;">
                <h6><i class="icon-users text-primary-blue"></i>   KENAIKAN PANGKAT PEGAWAI  </h6>
              </div>
                <div class="body" id="contain2" style="height:270px; overflow:scroll;">
                    <table class="table table-hover">
                        <?php 
                        $get_pensiun = $this->pegawai->get_pensiun();
                        foreach ($get_pensiun as $key => $data) {

                          $jenis_unit_kerja = $data->jenis_unit_kerja;
                          $unit_kerja       = $data->unit_kerja;
                          $sub_unit_kerja   = $data->sub_unit_kerja;;

                          $foto = foto_alt($data->foto);


                          $unit_kerja_result =  get_unit_kerja($jenis_unit_kerja,$unit_kerja,$sub_unit_kerja)['unit_kerja_result'];
                          $sub_unit_kerja_result =  get_unit_kerja($jenis_unit_kerja,$unit_kerja,$sub_unit_kerja)['sub_unit_kerja_result'];

                        ?>
                        <tr>
                          <td width="13%;">
                            <center>
                              <img src="<?= base_url()?>assets/img/pegawai/original/<?= $foto ?>" class='img-responsive' width='100%' style='border-radius:5px;'>
                            </center>
                          </td>
                          <td> 
                            <a href='javascript:void(0)' onclick=loadContent('pegawai/detail/<?= $data->id_pegawai ?>') >  <?= $data->nm_pegawai ?>  </a>  | 
                            <small>
                            <i class="icon-calendar color-primary-blue"></i> Umur : <?= $data->age ?> Tahun
                            </small>
                            <br>
                            <small>
                              <?= $data->jabatan ?><br>
                              <i class="fa fa-briefcase"></i>
                               <?= $unit_kerja_result."<br>".$sub_unit_kerja_result.""; ?>
                            </small>
                           
                           
                          </td>
                        </tr>
                        <?php 
                          }
                        ?>
                    </table>
                </div>
            </div>
          </div>


        </div>

    </div>

  </div>
</div>




<!-- </div> -->


<script>

Highcharts.chart('grafik_pangkat', {
  exporting: {
    enabled: false
  },
  credits: {
    enabled: false
  },
  chart: {
    type: 'column'
  },
  title: {
    text: 'Pegawai Berdasarkan Golongan'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
        <?php
        $get = $this->pangkat->get_all();
        foreach ($get as $key => $value) {
          echo "'".$value->golongan."/".$value->ruang."'";
          echo ",";
        }
        ?>
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jumlah Pegawai'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.0f} Orang </b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [ {
    name: 'Golongan / Ruang ',
    data: [
        <?php
        foreach ($pangkat as $key => $value) {
           echo $value->jumlah.",";
        }
        ?>
    ]

  }]
});

</script>


<script>

Highcharts.chart('grafik_pendidikan', {
  exporting: {
    enabled: false
  },
  credits: {
    enabled: false
  },
  chart: {
    type: 'column'
  },
  title: {
    text: 'Pegawai Berdasarkan Pendidikan'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
        <?php
        $get = $this->pendidikan->get_all();
        foreach ($get as $key => $value) {
            echo "'".$value->nm_pendidikan."'";
          echo ",";
        }
        ?>
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jumlah Pegawai'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.0f} Orang </b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [ {
    name: 'Golongan / Ruang ',
    data: [
        <?php
        foreach ($pendidikan as $key => $value) {
           echo $value->jumlah.",";
        }
        ?>
    ]

  }]
});



</script>


<script>
var my_time;


$(document).ready(function() {
  pageScroll();
  $("#contain").mouseover(function() {
    clearTimeout(my_time);
  }).mouseout(function() {
    pageScroll();
  });
});

function pageScroll() {  
	var objDiv = document.getElementById("contain");
  objDiv.scrollTop = objDiv.scrollTop + 1;  
  $('p:nth-of-type(1)').html('scrollTop : '+ objDiv.scrollTop);
  $('p:nth-of-type(2)').html('scrollHeight : ' + objDiv.scrollHeight);
  if (objDiv.scrollTop == (objDiv.scrollHeight - 100)) {
    objDiv.scrollTop = 0;
  }
  my_time = setTimeout('pageScroll()', 25);
}

</script>






<!-- SELECT *, GROUP_CONCAT(pangkat) AS pangkat1 FROM ( SELECT a.*,b.pangkat, COUNT(b.pangkat) pangkat2 FROM tbl_pegawai b INNER JOIN tbl_pangkat a ON a.id_pangkat = b.pangkat GROUP BY b.pangkat ) pangkat -->

<!-- SELECT b.nm_pangkat, b.id_pangkat , GROUP_CONCAT( 'jumlah',COUNT(a.pangkat), SEPARATOR ",") FROM tbl_pegawai a RIGHT JOIN tbl_pangkat b ON a.pangkat = b.id_pangkat GROUP BY b.id_pangkat -->

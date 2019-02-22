
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inspektorat Provinsi Sulawesi Selatan">
    <meta name="author" content="Inspektorat Provinsi Sulawesi Selatan">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>assets/img/logo/sulsel.png">
    <title>Inspektorat Provinsi Sulawesi Selatan </title>
    <!-- Custom CSS -->
    <link href="<?= base_url()?>assets/public/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css'>
    <style>
        .form-control-lg{
            font-size: 15px;
        }
    </style>


</head>

<body>
<?php
$role = $this->input->get('role');

    if ( $role == "admin"){
        $title = "Super Administrator";
    }elseif ($role == "kepala"){
        $title = "Kepala Puskesmas";
    }elseif ($role == "bidan"){
        $title = "Bidan";
    }elseif ($role == "pasien" ){
        $title = "Pasien";
    }
    else {
        $title = "Role Not Found";
    }
?>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= base_url('assets/img/bg/bg-login.png')?>) no-repeat center center;">
            <div class="auth-box on-sidebar">
                <div id="loginform" style="margin-top: 20px;">
                    <div class="logo">
                        <span class="db"><img src="<?= base_url()?>assets/img/logo/sulsel.png " width="70%" alt="logo" /></span>
                        <p class="mb-3 mt-2"> <b>SIPADU  </b><br> Silahkan Masukkan Username dan Password</p>

                        <div class="alert alert-success">
                            <strong>Selamat Datang Kembali ! <br> </strong> Saat Ini Anda Login <br> Sebagai <b><?= $title ?></b>
                        </div>
                        
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3"  >
                                <input type="hidden" name="level" id="level" value="<?= $this->input->get('role') ?>">
                                <div id="flash_message"></div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" name="username" autocomplete="off" id="username" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" name="password"  id="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>

                                <div class="form-group text-center">
                                    <div class="col-xs-12 pb-3">
                                        <button class="btn btn-block btn-lg btn-info submit" type="button" id="login" >Masuk  <i class="ti-arrow-circle-right"></i> </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                                        <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="ti-lock"></i> Lupa Password ?</a>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?= base_url()?>assets/public/js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url()?>assets/public/js/popper.min.js"></script>
    <script src="<?= base_url()?>assets/public/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/js/notify.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });


    $(document).ready(function(){

        $('#login').click(function(){

            $.ajax({
                type:'post',
                url:'<?php echo base_url('auth/login');?>',
                data:{
                    username: $('#username').val(),
                    password: $('#password').val(),
                    level: $('#level').val()
                },
                dataType: 'json',
                success: function(response){

                    if(response.success==true){

                        window.location = "<?php echo base_url('home');?>"
                        $('.submit').html("<i class='fa fa-spinner faa-spin animated' style='margin-right:5px;'></i> Proses...");

                    }else{

                        flash_message();

                    }
                },
                error: function(){
                    alert("Ajax Error.");
                }


            });
        });
    });



    </script>
</body>

</html>
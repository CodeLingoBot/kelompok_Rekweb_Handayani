
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css" />
<!--    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

    <style>

        .card{
            /*box-shadow: 2px 0px 16px 1px #88c3ff;*/
        }

        .bg-color-1{
            background-color:#4CAF50!important;
        }

        .bg-color-2{
            background-color:#607D8B!important;
        }

        .animated {
            animation-duration: 2.5s;
            /*animation-iteration-count: infinite;*/
        }


    </style>


</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= base_url('assets/img/bg/bg-login.png')?>) no-repeat center center;">
           <div class="col-md-12"  style="margin-top:150px;">
               <div class="container">
               <div class="row">

        
                   <div class="col-lg-3 col-md-3  card-hover">
                       <div class="card animated bounceInRight">
                           <a href="<?= base_url()?>login?role=admin">
                               <div class="row">
                                   <div class="col-12">
                                       <div class="bg-color-2 p-20">
                                           <div class="text-center text-white display-3">
                                               <i class="mdi mdi-account-location"></i>
                                           </div>
                                       </div>
                                       <div class="card-body">
                                           <div class="no-block align-items-center">
                                               <div class="text-center">
                                                   <h4 class=" mb-0"> Administrator </h4>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                   </div>

                    <div class="col-lg-3 col-md-3  card-hover">
                       <div class="card animated bounceInLeft">
                           <a href="<?= base_url()?>login?role=kepala">
                               <div class="row">
                                   <div class="col-12">
                                       <div class="bg-success p-20">
                                           <div class="text-center text-white display-3">
                                               <i class="mdi mdi-account-location"></i>
                                           </div>
                                       </div>
                                       <div class="card-body">
                                           <div class="no-block align-items-center">
                                               <div class="text-center">
                                                   <h4 class=" mb-0"> Kepala Puskesmas </h4>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                   </div>

                    <div class="col-lg-3 col-md-3  card-hover">
                       <div class="card animated bounceInUp">
                           <a href="<?= base_url()?>login?role=bidan">
                               <div class="row">
                                   <div class="col-12">
                                       <div class="bg-primary p-20">
                                           <div class="text-center text-white display-3">
                                               <i class="mdi mdi-account-location"></i>
                                           </div>
                                       </div>
                                       <div class="card-body">
                                           <div class="no-block align-items-center">
                                               <div class="text-center">
                                                   <h4 class=" mb-0"> Bidan </h4>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                   </div>


                   <div class="col-lg-3 col-md-3  card-hover">
                       <div class="card animated bounceInRight">
                           <a href="<?= base_url()?>login?role=pasien">
                               <div class="row">
                                   <div class="col-12">
                                       <div class="bg-warning p-20">
                                           <div class="text-center text-white display-3">
                                               <i class="mdi mdi-account-location"></i>
                                           </div>
                                       </div>
                                       <div class="card-body">
                                           <div class="no-block align-items-center">
                                               <div class="text-center">
                                                   <h4 class=" mb-0"> Pasien </h4>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                   </div>
                   <div class="col-md-12">
                     &nbsp
                     <br><br><br><br><br>
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


    </script>



</body>

</html>
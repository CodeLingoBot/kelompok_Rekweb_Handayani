
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inspektorat Provinsi Sulawesi Selatan">
    <meta name="author" content="Inspektorat Provinsi Sulawesi Selatan">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>assets/img/logo/sulsel.png">
    <title>Inspektorat Provinsi Sulawesi Selatan </title>
    <link rel="stylesheet" href="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/libs/toastr/build/toastr.min.css">
    <link rel="stylesheet" href="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/libs/select2/dist/css/select2.min.css">
    <link href="<?= base_url()?>assets/public/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/public/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.2.89/css/materialdesignicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


    <style>

        .page-wrapper{
            background: #ffffff;
        }
        .modal-header{
            background-color: #1e73f7;
            color:#fff;
        }

        .modal-title{
            font-size: 30px;
        }

        .collapsing, .modal, .modal-open, .progress{
            overflow: auto;
        }

        .btn-circle.btn-sm, .btn-group-sm>.btn-circle.btn{
            width: 30px;
            height: 30px;
            padding: 4px 5px;
            font-size: 14px;
        }

        .divider{
            border-bottom: 2px solid #455eff;
            font-weight: bold;
            padding-bottom: 5px;

        }

        #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6], #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul, #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6], #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul{
            background: #eef5f9;
        }

        .customizer, .left-sidebar{
            box-shadow: 1px 0 20px rgba(0, 0, 0, 0);
        }

        .table-bordered, .table-bordered td, .table-bordered th{
            border:1px solid black;
        }

    </style>

</head>

<body>


<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>


<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin1" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full" class="mini-sidebar">

    <?php  require('inc/header.php'); ?>

    <?php  require('inc/sidebar.php'); ?>

    <div class="page-wrapper" id="main-content">
        <?php
        require ('dashboard/admin.php');
        ?>
        <footer class="footer text-center">
            All Rights Reserved . Developed by <a href="#">PT. Linyjaya Informatika</a>.
        </footer>
    </div>

</div>

<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url()?>assets/public/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/public/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/public/js/datatables.min.js"></script>

<!-- apps -->
<script src="<?= base_url()?>assets/public/js/app.min.js"></script>
<script src="<?= base_url()?>assets/public/js/app.init.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url()?>assets/public/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url()?>assets/public/js/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= base_url()?>assets/public/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url()?>assets/public/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url()?>assets/public/js/custom.min.js"></script>
<script src="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/libs/toastr/build/toastr.min.js"></script>
<script src="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/extra-libs/toastr/toastr-init.js" ></script>

<script src="<?= base_url()?>assets/js/robikurn.js"></script>

<script src="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/libs/select2/dist/js/select2.min.js"></script>
<script src="https://wrappixel.com/demos/admin-templates/xtreme-admin/dist/js/pages/forms/select2/select2.init.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
<script src="https://cdn.ckeditor.com/4.11.1/standard-all/ckeditor.js"></script>
<!--https://cdn.ckeditor.com/4.11.1/standard-all/ckeditor.js-->


<script>
    $('.modal-backdrop').remove();
</script>




<!-- Bootstrap modal -->
<div class="modal fade" id="redirect" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <img src="" alt=""> -->
                <h4 class="modal-title" id="defaultModalLabel">  </h4>
            </div>
            <div class="modal-body form">
                <center>
                    <div id="btn_redirect"></div>
                </center>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->

</div>


</body>


</html>
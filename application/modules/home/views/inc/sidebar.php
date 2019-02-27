<?php
$level = $this->session->userdata('level');
$nama  = $this->session->userdata('nama'); 
?>
<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <center>
                <img src="<?= base_url()?>assets/img/logo/sulsel.png" style="width:150px;margin-top: 10px;" alt="homepage" class="light-logo" />
                <span class="hide-menu">
                <p>SIPADU  <br> Sistem Informasi Pelayanan Posyandu
                </p>
                </span>
            </center>

            <ul id="sidebarnav">
                <li>
                    <div class="user-profile d-flex no-block dropdown mt-3">
                        <div class="user-pic"><img src="<?= base_url()?>assets/img/icon/xavatar.png" alt="users" class="rounded-circle" width="40" /></div>
                        <div class="user-content hide-menu ml-2">
                            <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 user-name font-medium"><?= $nama ?> </h5>
                                <span class="op-5 user-email">-</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" onclick="loadContent('home/dashboard')" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <?php
                $level = $this->session->userdata('level');
                $nik = $this->session->userdata('nik');
                if ( $level != "pasien" ){
                ?>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" onclick="loadContent('pasien')" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i><span class="hide-menu">Pasien </span></a>
                </li>


                  <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">Layanan</span></a>
                        <ul aria-expanded="false" class="collapse first-level">

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" onclick="loadContent('kohort/ibu_hamil/add')" aria-expanded="false">
                                    <i class="mdi mdi-city"></i><span class="hide-menu">Kohort Ibu Hamil</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" onclick="loadContent('kohort/persalinan/add')" aria-expanded="false">
                                    <i class="mdi mdi-city"></i><span class="hide-menu">Kohort Persalinan  </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" onclick="loadContent('kasus')" aria-expanded="false">
                                    <i class="mdi mdi-city"></i><span class="hide-menu">Kohort Nifas </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" onclick="loadContent('kasus')" aria-expanded="false">
                                    <i class="mdi mdi-city"></i><span class="hide-menu"> Kohort Bayi </span></a>
                            </li>

                        </ul>
                    </li>

                <?php }else{ ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" onclick="loadContent('pasien/detail/<?= $nik ?>')" aria-expanded="false">
                            <i class="mdi mdi-account-multiple"></i><span class="hide-menu">Profil </span></a>
                    </li>

                <?php
                }
                ?>

            </ul>
        </nav>
    </div>
</aside>
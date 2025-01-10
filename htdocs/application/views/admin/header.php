<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?=base_url()?>assets/img/komin_icon.ico" rel="icon">
    <title>Layanan Kominfo - <?=$title?></title>
    <link href="<?=base_url()?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/admin/css/admin-kominfo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>admin">
                <div class="sidebar-brand-icon">
                    <img
                        src="<?=base_url()?>assets/admin/img/kisspng-kominfo-jica-expert-ministry-of-communication-and-id-5ac4684772d1d0.1483048215228211914703.png">
                </div>
                <div class="sidebar-brand-text mx-3">AdminKominfo</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item <?php if ($this->uri->segment(2) == '') {echo 'active';}
;?>">
                <a class="nav-link" href="<?=base_url()?>admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Admin
            </div>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'webdesa') {echo 'active';}
;?>">
                <a class="nav-link" href="<?=base_url()?>admin/webdesa">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Website Desa / OpenSID</span>
                </a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'hakaksesweb') {echo 'active';}
;?>">
                <a class="nav-link" href="<?=base_url()?>admin/hakaksesweb">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Hak Akses Website</span>
                </a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'maturbup') {echo 'active';}
;?>">
                <a class="nav-link" href="<?=base_url()?>admin/maturbup">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Hak Akses Matur Bupati</span>
                </a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'fasinter') {echo 'active';}
;?>">
                <a class="nav-link" href="<?=base_url()?>admin/fasinter">
                    <i class="fas fa-fw fa-wifi"></i>
                    <span>Fasilitas Internet / Wifi</span>
                </a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'fasvideo') {echo 'active';}
;?>">
                <a class="nav-link" href="<?=base_url()?>admin/fasvideo">
                    <i class="fas fa-fw fa-video"></i>
                    <span>Fasilitas Video Conference</span>
                </a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'aduanweb') {echo 'active';}
;?>">
                <a class="nav-link" href="<?=base_url()?>admin/aduanweb">
                    <i class="fas fa-fw fa-envelope-open-text"></i>
                    <span>Aduan Pengelolaan Website</span>
                </a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'aduaninter') {echo 'active';}
;?>">
                <a class="nav-link" href="<?=base_url()?>admin/aduaninter">
                    <i class="fas fa-fw fa-headset"></i>
                    <span>Aduan Infrastruktur dan Jaringan Internet</span>
                </a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'pengajuan_magang') {echo 'active';}
;?>">
                <a class="nav-link" href="<?=base_url()?>admin/pengajuan_magang">
                    <i class="fas fa-fw fa-id-badge"></i>
                    <span>Permohonan Pengajuan Magang</span>
                </a>
            </li>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <!--<li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-1 small"
                                            placeholder="What do you want to look for?" aria-label="Search"
                                            aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>-->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="<?=base_url()?>assets/admin/img/boy.png"
                                    style="max-width: 60px">
                                <span
                                    class="ml-2 d-none d-lg-inline text-white small text-capitalize"><?php echo $this->session->userdata("username"); ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>


                <!-- Modal Logout -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Log-Out</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda ingin logout ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary"
                                    data-dismiss="modal">Cancel</button>
                                <a href="<?php echo base_url('layanan/logout'); ?>" class="btn btn-primary">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
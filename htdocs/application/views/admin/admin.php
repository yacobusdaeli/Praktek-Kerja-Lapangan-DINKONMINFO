<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-80">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Diterima</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?=$jmlacc?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-check text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-80">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Proses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jmlproses?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-info text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-80">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Ditolak</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$jmldc?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-ban text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jmlall?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-inbox text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4">
    <!-- Simple Tables -->
    <div class="card">
        <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-light">Jumlah Tiap Jenis Layanan</h6>
        </div>
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th>Nama Layanan</th>
                        <th>Jumlah Layanan</th>
                        <th>Diterima</th>
                        <th>Proses</th>
                        <th>Ditolak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Website Desa</td>
                        <td><?php echo $allwebdesa ?></td>
                        <td><?php echo $accwebdesa ?></td>
                        <td><?php echo $proseswebdesa ?></td>
                        <td><?php echo $dcwebdesa ?></td>
                    </tr>
                    <tr>
                        <td>Hak Akses Web</td>
                        <td><?php echo $allhak_akses_web ?></td>
                        <td><?php echo $acchak_akses_web ?></td>
                        <td><?php echo $proseshak_akses_web ?></td>
                        <td><?php echo $dchak_akses_web ?></td>
                    </tr>
                    <tr>
                        <td>Hak Akses Matur Bupati</td>
                        <td><?php echo $allhak_akses_matur_bupati ?></td>
                        <td><?php echo $acchak_akses_matur_bupati ?></td>
                        <td><?php echo $proseshak_akses_matur_bupati ?></td>
                        <td><?php echo $dchak_akses_matur_bupati ?></td>
                    </tr>
                    <tr>
                        <td>Fasilitas Internet / Wifi</td>
                        <td><?php echo $allfasilitas_inter_wifi ?></td>
                        <td><?php echo $accfasilitas_inter_wifi ?></td>
                        <td><?php echo $prosesfasilitas_inter_wifi ?></td>
                        <td><?php echo $dcfasilitas_inter_wifi ?></td>
                    </tr>
                    <tr>
                        <td>Fasilitas Video Conference</td>
                        <td><?php echo $allfasilitas_video_conference ?></td>
                        <td><?php echo $accfasilitas_video_conference ?></td>
                        <td><?php echo $prosesfasilitas_video_conference ?></td>
                        <td><?php echo $dcfasilitas_video_conference ?></td>
                    </tr>
                    <tr>
                        <td>Aduan Pengelolaan Website</td>
                        <td><?php echo $alladuan_pengelolaan_website ?></td>
                        <td><?php echo $accaduan_pengelolaan_website ?></td>
                        <td><?php echo $prosesaduan_pengelolaan_website ?></td>
                        <td><?php echo $dcaduan_pengelolaan_website ?></td>
                    </tr>
                    <tr>
                        <td>Aduan Infrastruktur dan Jaringan Internet</td>
                        <td><?php echo $alladuan_jaringan_internet ?></td>
                        <td><?php echo $accaduan_jaringan_internet ?></td>
                        <td><?php echo $prosesaduan_jaringan_internet ?></td>
                        <td><?php echo $dcaduan_jaringan_internet ?></td>
                    </tr>
                    <tr>
                        <td>Pengajuan Permohonan Magang</td>
                        <td><?php echo $allpengajuan_magang ?></td>
                        <td><?php echo $accpengajuan_magang ?></td>
                        <td><?php echo $prosespengajuan_magang ?></td>
                        <td><?php echo $dcpengajuan_magang ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="<?=base_url('admin/PDF')?>" class="btn btn-danger"><i class="fa fa-file"></i> PDF</a>
        </div>
    </div>
</div>


        <!-- Message From Customer-->
        <div class="col-12">
            <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-light">Pesan dari pengguna</h6>
                    <span class="badge bg-light text-dark"><?=count($message)?> Pesan</span>
                </div>

                <?php foreach ($message as $key => $m) {?>

                <div class="cus-msg">
                    <div class="customer-message align-items-center">
                        <div class="font-weight-bold d-flex justify-content-between p-3" href="#">
                            <div class="right">
                                <span class="badge bg-primary text-white"><?=$key + 1?></span>
                                <div class="text-truncate message-title"><?=$m->message?></div>
                                <div class="userinfo d-flex flex-column flex-sm-row">
                                    <div class="small text-gray-500 message-time font-weight-bold mr-2">Name :
                                        <?=$m->nama?>;</div>
                                    <div class="small text-gray-500 message-time font-weight-bold mr-2">No Telpon :
                                        <?=$m->no_telp?>;</div>
                                    <div class="small text-gray-500 message-time font-weight-bold">Email :
                                        <?=$m->email?>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <a class="btn btn-sm btn-danger text-white mt-4 mt-sm-1" data-toggle="modal"
                                    data-target="#deleteModal<?=$m->id_message?>"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="card-footer text-center">
                    <button class="m-0 small btn btn-primary card-link view-more">View More <i
                            class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
    <!-- Modal delete -->
    <?php foreach ($message as $m) {?>
    <div class="modal fade" id="deleteModal<?=$m->id_message?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Delete <?=$m->nama?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapusnya ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="<?=base_url('admin/delete_msg/' . $m->id_message)?>" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>
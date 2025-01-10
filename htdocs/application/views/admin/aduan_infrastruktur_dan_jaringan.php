<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Aduan Infrastruktur dan Jaringan Internet</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Aduan Infrastruktur dan Jaringan Internet</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Aduan Infrastruktur dan Jaringan Internet</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nama OPD/Desa</th>
                                <th>Jabatan</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat Email</th>
                                <th>Alasan Permohonan</th>
                                <th>Keterangan Error</th>
                                <th>Riwayan penggunaan</th>
                                <th>Tanggal Masuk</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php if (empty($aduan_jaringan_internet)) { ?>
                        <tr>
                            <td colspan="11">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        <tbody>
                            <?php $start = 0; ?>
                            <?php foreach($aduan_jaringan_internet as $a) { ?>
                            <tr>
                                <td><?= ++$start ?></td>
                                <td><?= $a['nama'] ?></td>
                                <td><?= $a['opd'] ?></td>
                                <td><?= $a['jabatan'] ?></td>
                                <td><?= $a['no_telp'] ?></td>
                                <td><?= $a['email'] ?></td>
                                <td><?= $a['alasan'] ?></td>
                                <td><?= $a['keterangan'] ?></td>
                                <td><?= $a['riwayat'] ?></td>
                                <td><?= $a['waktu'] ?></td>
                                <td><?php if ($a['status']== 'Ditolak') {
                                    echo '<span class="badge badge-pill badge-danger">Ditolak</span>';
                                } else if ($a['status']== 'Proses'){
                                    echo '<span class="badge badge-pill badge-warning">Proses</span>';
                                } else {
                                    echo '<span class="badge badge-pill badge-success">Diterima</span>';
                                }
                                ?></td>
                                <td><a class="btn btn-sm btn-warning text-white mb-2" data-toggle="modal"
                                        data-target="#editModal<?= $a['id_aduan_jar_inter'] ?>"><i
                                            class="fas fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger text-white" data-toggle="modal"
                                        data-target="#deleteModal<?= $a['id_aduan_jar_inter'] ?>"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!--Row-->

    <!-- Modal delete -->
    <?php foreach ($aduan_jaringan_internet as $a) { ?>
    <div class="modal fade" id="deleteModal<?= $a['id_aduan_jar_inter'] ?>" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Delete <?= $a['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapusnya ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="<?= base_url('admin/delete_aduaninter/'.$a['id_aduan_jar_inter'])?>"
                        class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Modal Edit -->
    <?php foreach ($aduan_jaringan_internet as $a) { ?>
    <div class="modal fade" id="editModal<?= $a['id_aduan_jar_inter'] ?>" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit <?= $a['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('admin/edit_aduaninter/'. $a['id_aduan_jar_inter']) ?>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="Ditolak" <?php if($a['status']== 'Ditolak'){echo 'selected';} ?>>Ditolak
                            </option>
                            <option value="Proses" <?php if($a['status']== 'Proses'){echo 'selected';} ?>>Proses
                            </option>
                            <option value="Diterima" <?php if($a['status']== 'Diterima'){echo 'selected';} ?>>Diterima
                            </option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <?php } ?>

</div>
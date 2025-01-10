<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hak Akses Website</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hak Akses Website</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Hak Akses Website</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat Email</th>
                                <th>Nama OPD/Desa</th>
                                <th>Alamat Website</th>
                                <th>Alasan Permohonan</th>
                                <th>Keterangan</th>
                                <th>Surat Permohonan</th>
                                <th>SK</th>
                                <th>Tanggal Masuk</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php if (empty($hak_akses_web)) { ?>
                        <tr>
                            <td colspan="13">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        <tbody>
                            <?php $start = 0; ?>
                            <?php foreach($hak_akses_web as $h) {?>
                            <tr>
                                <td><?= ++$start ?></td>
                                <td><?= $h['nama'] ?></td>
                                <td><?= $h['jabatan'] ?></td>
                                <td><?= $h['no_telp'] ?></td>
                                <td><?= $h['email'] ?></td>
                                <td><?= $h['opd_desa'] ?></td>
                                <td><?= $h['url'] ?></td>
                                <td><?= $h['alasan'] ?></td>
                                <td><?= $h['keterangan'] ?></td>
                                <td><?= $h['surat_permohonan'] ?></td>
                                <td><?= $h['sk'] ?></td>
                                <td><?= $h['waktu'] ?></td>
                                <td><?php if ($h['status']== 'Ditolak') {
                                    echo '<span class="badge badge-pill badge-danger">Ditolak</span>';
                                } else if ($h['status']== 'Proses'){
                                    echo '<span class="badge badge-pill badge-warning">Proses</span>';
                                } else {
                                    echo '<span class="badge badge-pill badge-success">Diterima</span>';
                                }
                                ?></td>
                                <td><a href="<?= base_url('admin/download_hak_akses_web/'. $h['id_hak_akses_web'])?>"
                                        class="btn btn-sm btn-primary mb-2">Download</a>
                                    <a class="btn btn-sm btn-warning text-white" data-toggle="modal"
                                        data-target="#editModal<?= $h['id_hak_akses_web'] ?>"><i
                                            class="fas fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger text-white" data-toggle="modal"
                                        data-target="#deleteModal<?= $h['id_hak_akses_web'] ?>"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!--Row-->

    <!-- Modal delete -->
    <?php foreach ($hak_akses_web as $h) { ?>
    <div class="modal fade" id="deleteModal<?= $h['id_hak_akses_web'] ?>" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Delete <?= $h['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapusnya ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="<?= base_url('admin/delete_hakaksesweb/'.$h['id_hak_akses_web'])?>"
                        class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Modal Edit -->
    <?php foreach ($hak_akses_web as $h) { ?>
    <div class="modal fade" id="editModal<?= $h['id_hak_akses_web'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit <?= $h['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('admin/edit_hakaksesweb/'. $h['id_hak_akses_web']) ?>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="Ditolak" <?php if($h['status']== 'Ditolak'){echo 'selected';} ?>>Ditolak
                            </option>
                            <option value="Proses" <?php if($h['status']== 'Proses'){echo 'selected';} ?>>Proses
                            </option>
                            <option value="Diterima" <?php if($h['status']== 'Diterima'){echo 'selected';} ?>>Diterima
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
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Website Desa / OpenSID</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Website Desa / OpenSID</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Website Desa</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>SK Pengangkatan Kades</th>
                                <th>SK Pengangkatan Perangkat Desa</th>
                                <th>Surat Kuasa</th>
                                <th>Surat Permohonan Domain</th>
                                <th>Surat Permohonan Hosting</th>
                                <th>KTP</th>
                                <th>Tanggal Masuk</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php if (empty($website_desa)) { ?>
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
                            <?php foreach($website_desa as $w){ ?>
                            <tr>
                                <td><?= ++$start ?></td>
                                <td><?= $w['nama'] ?></td>
                                <td><?= $w['SK_Pengangkatan_Kades'] ?></td>
                                <td><?= $w['SK_Pengangkatan_Perangkat_Desa'] ?></td>
                                <td><?= $w['Surat_Kuasa']?></td>
                                <td><?= $w['Surat_Permohonan_Domain'] ?></td>
                                <td><?= $w['Surat_Permohonan_Hosting'] ?></td>
                                <td><img src="<?= base_url('assets/website_desa/'. $w['KTP'])?>" alt="img" width="75px"
                                        height="75px"></td>
                                <td><?= $w['waktu'] ?></td>
                                <td><?php if ($w['status']== 'Ditolak') {
                                    echo '<span class="badge badge-pill badge-danger">Ditolak</span>';
                                } else if ($w['status']== 'Proses'){
                                    echo '<span class="badge badge-pill badge-warning">Proses</span>';
                                } else {
                                    echo '<span class="badge badge-pill badge-success">Diterima</span>';
                                }
                            ?></td>
                                <td><a href="<?= base_url('admin/download_web_desa/' . $w['id_web_desa'])?>"
                                        class="btn btn-sm btn-primary mb-2">Download</a>
                                    <a class="btn btn-sm btn-warning text-white" data-toggle="modal"
                                        data-target="#editModal<?= $w['id_web_desa'] ?>"><i class="fas fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger text-white" data-toggle="modal"
                                        data-target="#deleteModal<?= $w['id_web_desa'] ?>"><i
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
    <?php foreach ($website_desa as $w) { ?>
    <div class="modal fade" id="deleteModal<?= $w['id_web_desa'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Delete <?= $w['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapusnya ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="<?= base_url('admin/delete_webdesa/'.$w['id_web_desa'])?>"
                        class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Modal Edit -->
    <?php foreach ($website_desa as $w) { ?>
    <div class="modal fade" id="editModal<?= $w['id_web_desa'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit <?= $w['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('admin/edit_webdesa/'. $w['id_web_desa']) ?>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="Ditolak" <?php if($w['status']== 'Ditolak'){echo 'selected';} ?>>Ditolak
                            </option>
                            <option value="Proses" <?php if($w['status']== 'Proses'){echo 'selected';} ?>>Proses
                            </option>
                            <option value="Diterima" <?php if($w['status']== 'Diterima'){echo 'selected';} ?>>Diterima
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
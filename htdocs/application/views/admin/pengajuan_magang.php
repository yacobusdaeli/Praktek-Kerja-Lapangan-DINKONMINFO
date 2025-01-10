<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengajuan Permohonan Magang</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengajuan Permohonan Magang</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pengajuan Permohonan Magang</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Induk</th>
                                <th>No Telp</th>
                                <th>Pendidikan</th>
                                <th>Institusi</th>
                                <th>Jurusan</th>
                                <th>Surat Permohonan</th>
                                <th>Tanggal Masuk</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php if (empty($pengajuan_magang)) {?>
                        <tr>
                            <td colspan="15">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                        <?php }?>
                        <tbody>
                            <?php $start = 0;?>
                            <?php foreach ($pengajuan_magang as $f) {?>
                            <tr>
                                <td><?=++$start?></td>
                                <td><?=$f['nama']?></td>
                                <td><?=$f['no_induk']?></td>
                                <td><?=$f['no_telp']?></td>
                                <td><?=$f['pendidikan']?></td>
                                <td><?=$f['institusi']?></td>
                                <td><?=$f['jurusan']?></td>
                                <td><?=$f['surat_permohonan']?></td>
                                <td><?=$f['waktu']?></td>
                                <td><?php if ($f['status'] == 'Ditolak') {
    echo '<span class="badge badge-pill badge-danger">Ditolak</span>';
} else if ($f['status'] == 'Proses') {
    echo '<span class="badge badge-pill badge-warning">Proses</span>';
} else {
    echo '<span class="badge badge-pill badge-success">Diterima</span>';
}
    ?></td>
                                <td><a href="<?=base_url('admin/download_pengajuan_magang/' . $f['id_pengajuan_magang'])?>"
                                        class="btn btn-sm btn-primary mb-2">Download</a>
                                    <a class="btn btn-sm btn-warning text-white" data-toggle="modal"
                                        data-target="#editModal<?=$f['id_pengajuan_magang']?>"><i
                                            class="fas fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger text-white" data-toggle="modal"
                                        data-target="#deleteModal<?=$f['id_pengajuan_magang']?>"><i
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
    <?php foreach ($pengajuan_magang as $f) {?>
    <div class="modal fade" id="deleteModal<?=$f['id_pengajuan_magang']?>" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Delete <?=$f['nama']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapusnya ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="<?=base_url('admin/delete_pengajuan_magang/' . $f['id_pengajuan_magang'])?>"
                        class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

    <!-- Modal Edit -->
    <?php foreach ($pengajuan_magang as $f) {?>
    <div class="modal fade" id="editModal<?=$f['id_pengajuan_magang']?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit <?=$f['nama']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('admin/edit_pengajuan_magang/' . $f['id_pengajuan_magang']) ?>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="Ditolak" <?php if ($f['status'] == 'Ditolak') {echo 'selected';}?>>Ditolak
                            </option>
                            <option value="Proses" <?php if ($f['status'] == 'Proses') {echo 'selected';}?>>Proses
                            </option>
                            <option value="Diterima" <?php if ($f['status'] == 'Diterima') {echo 'selected';}?>>Diterima
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
    <?php }?>

</div>
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2><span>Kominfo</span> Purbalingga</h2>
        <h3>Permohonan Pengajuan Magang</h3>
    </div>
</section>

<main id="main">
    <section id="featured-services" class="featured-services">
        <div class="container">
            <?php if ($this->session->flashdata('dc')) {
    echo '<div class="alert alert-danger" role="alert">';
    echo $this->session->flashdata('dc');
    echo '</div>';
}?>
            <!-- Section Nama -->
            <form action="<?=base_url('form8/upload')?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="mb-3">
                            <label for="form1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="form1" placeholder="Nama lengkap" name="nama"
                                value="<?=set_value('nama')?>" required>
                            <p class="fs-6 mt-1 text-muted">Silahkan isi nama lengkap.</p>
                        </div>
                    </div>
            <!-- Section No Induk -->
                    <div class="col-xl-6 col-md-6">
                        <div class="mb-3">
                            <label for="form2" class="form-label">No Induk</label>
                            <input type="text" class="form-control" id="form2" placeholder="NISN / NIM" name="no_induk"
                                value="<?=set_value('no_induk')?>" required>
                            <p class="fs-6 mt-1 text-muted">Silahkan isi nomor induk yang berasal dari instansi masing-masing.</p>
                        </div>
                    </div>
            <!-- Section No Telpon -->
                    <div class="col-xl-6 col-md-6">
                        <div class="mb-3">
                            <label for="form3" class="form-label">No Telpon</label>
                            <input type="text" class="form-control" id="form3" placeholder="08xxxxxxxxx" name="no_telp"
                                value="<?=set_value('no_telp')?>" required>
                            <p class="fs-6 mt-1 text-muted">Silahkan isi nomor telepon yang bisa dihubungi.</p>
                        </div>

                    </div>
            <!-- Section Pendidikan -->
                    <div class="form-group">
                        <div class="col-12">
                        <div class="mb-3">
                        <label for="form4">Pendidikan</label>
                            <select class="form-control" id="form4" name="pendidikan" required>
                                <option value="">Pilih Pendidikan</option>
                                <option value="SMA" <?=set_select('pendidikan', 'SMA');?>>SMA</option>
                                <option value="SMK" <?=set_select('pendidikan', 'SMK');?>>SMK</option>
                                <option value="S1" <?=set_select('pendidikan', 'S1');?>>S1</option>
                            </select>
                            <p class="fs-6 mt-1 text-muted">Silahkan isi jenjang pendidikan yang ditempuh.</p>
                        </div>
                        </div>
                    </div>
                <!-- Section Institusi -->
                <div class="col-12">
                        <div class="mb-3">
                            <label for="form5" class="form-label">Nama Institusi</label>
                            <input type="text" class="form-control" id="form5" placeholder="Nama institusi" name="institusi" value="<?=set_value('institusi')?>" required>
                            <p class="fs-6 mt-1 text-muted">Silahkan isi nama institusi dengan lengkap.</p>
                        </div>
                    </div>
                <!-- Section Jurusan -->
                <div class="col-12">
                        <div class="mb-3">
                            <label for="form6" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="form6" placeholder="Jurusan yang diambil" name="jurusan" value="<?=set_value('jurusan')?>" required>
                            <p class="fs-6 mt-1 text-muted">Silahkan isi nama jurusan dengan lengkap.</p>
                        </div>
                    </div>
                <!-- Section Surat Permohonan -->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="file1" class="form-label">Surat Permohonan</label>
                            <input class="form-control" type="file" id="file1" name="surat_permohonan"
                                value="<?=set_value('surat_permohonan')?>" required accept=".pdf">
                            <p class="mt-1 text-muted">Silahkan upload file dalam bentuk .pdf</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary col-12">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>


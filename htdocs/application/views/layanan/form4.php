<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2><span>Kominfo</span> Purbalingga</h2>
        <h3>Permohonan Fasilitas Internet / Wifi</h3>
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
            <form action="<?=base_url('form4/upload')?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="mb-3">
                            <label for="form1" class="form-label">Nama Pemohon</label>
                            <input type="text" class="form-control" id="form1" placeholder="Nama" name="nama"
                                value="<?=set_value('nama')?>" required>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="mb-3">
                            <label for="form2" class="form-label">Jabatan Pemohon</label>
                            <input type="text" class="form-control" id="form2" placeholder="Ketua" name="jabatan"
                                value="<?=set_value('jabatan')?>" required>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="mb-3">
                            <label for="form3" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="form3" placeholder="190000" name="nip"
                                value="<?=set_value('nip')?>">
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="mb-3">
                            <label for="form4" class="form-label">OPD</label>
                            <input type="text" class="form-control" id="form4" placeholder="DINKOMINFO" name="opd"
                                value="<?=set_value('opd')?>" required>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <h3 class="text-uppercase">permohon fasilitas Internet / wifi</h3>
                        <p class="text-capitalize">Untuk pelaksanaan acara yang akan dilaksanakan dengan ketentuan
                            sebagai berikut :</p>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="mb-3">
                            <label for="day" class="form-label">Hari</label>
                            <select name="hari" class="form-control" id="day" value="<?=set_value('hari')?>" required>
                                <option value="Senin" selected>Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="mb-3">
                            <label for="form6" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="form6" name="tanggal"
                                value="<?=set_value('tanggal')?>" required>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="mb-3">
                            <label for="form7" class="form-label">Jam</label>
                            <input type="time" class="form-control" id="form7" placeholder="09:00" name="jam"
                                value="<?=set_value('jam')?>" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="mb-3">
                            <label for="form8" class="form-label">Tempat</label>
                            <input type="text" class="form-control" id="form8" placeholder="Aula" name="tempat"
                                value="<?=set_value('tempat')?>" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="mb-3">
                            <label for="form9" class="form-label">Peserta</label>
                            <input type="text" class="form-control" id="form9" placeholder="100" name="peserta"
                                value="<?=set_value('peserta')?>" required>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="area1" class="form-label">Acara</label>
                            <textarea class="form-control" id="area1" rows="5" name="acara"
                                value="<?=set_value('acara')?>" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="area2" class="form-label">Penyelenggara / Penanggung Jawab Acara</label>
                            <textarea class="form-control" id="area2" rows="5" name="penyelenggara"
                                value="<?=set_value('penyelenggara')?>" required></textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="file1" class="form-label">Surat Permohonan</label>
                            <input class="form-control" type="file" id="file1" name="surat_permohonan"
                                value="<?=set_value('surat_permohonan')?>" required accept=".pdf">
                            <p>Silahkan upload file dalam bentuk .pdf</p>
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


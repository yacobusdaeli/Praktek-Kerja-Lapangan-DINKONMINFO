<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2><span>Kominfo</span> Purbalingga</h2>
        <h3>Permohonan Hak Akses Website</h3>
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
            <form action="<?=base_url('form2/upload')?>" method="post" enctype="multipart/form-data" id="formvalid">

                <div class="row">
                    <div class="col-12">
                        <h3>PERMOHONAN HAK AKSES(USERNAME DAN PASSWORD)WEBSITE DESA DAN SUB DOMAIN OPD</h3>
                        <p>Digunakan untuk mengajukaan permohonan username dan password untuk pengelolaan wetsite
                            Desa dan sub domain Organisasi Perangkat Daerah (DPD lingkup Pemerintah Kabupaten
                            Purbalingga. Selanjutnya username dan password akan dikirimkan melalui nomor telpon atau
                            alamat email yang dicantumkan pada pemohonan ini.
                        </p>
                        <h3>IDENTITAS PEMOHON :</h3>
                    </div>

                    <div class="col-xl-6 col-12">
                        <div class="mb-3">
                            <label for="form1" class="form-label">Nama Pemohon</label>
                            <input type="text" class="form-control" id="form1" placeholder="Nama" name="nama"
                                value="<?=set_value('nama')?>" required>
                            <p>Diisi dengan nama lengkap pemohon</p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-12">
                        <div class="mb-3">
                            <label for="form2" class="form-label">Jabatan Pemohon</label>
                            <input type="text" class="form-control" id="form2" placeholder="Ketua" name="jabatan"
                                value="<?=set_value('jabatan')?>" required>
                            <p>Diisi dengan nama jabatan pemohon pada OPD / Desa</p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-12">
                        <div class="mb-3">
                            <label for="form3" class="form-label">Nomor Telepon Pemohon</label>
                            <input type="text" class="form-control" id="form3" placeholder="+62" name="no_telp"
                                value="<?=set_value('no_telp')?>" required>
                            <p>Diisi dengan nomor telpon pemohon yang aktif</p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-12">
                        <div class="mb-3">
                            <label for="form4" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="form4" placeholder="ex@" name="email"
                                value="<?=set_value('email')?>" required>
                            <p>Diisi dengan alamat email resmi OPD / Desa yang aktif</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="form5" class="form-label">Nama OPD / Desa</label>
                            <input type="text" class="form-control" id="form5" placeholder="DINKOMINFO" name="opd_desa"
                                value="<?=set_value('opd_desa')?>" required>
                            <p>Untuk desa diisi lengkap dengan nama kecamatan</p>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <h3>MEMINTA PERMOHONAN HAK AKSES</h3>
                        <p>Username dan password untuk pengelolaan website Desa / Sub Domain OPD :</p>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="form6" class="form-label">URL / Alamat Website</label>
                            <input type="url" class="form-control" id="form6" placeholder="https://" name="url"
                                value="<?=set_value('url')?>" required>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Alasan Permohonan</label>
                            <div class="form-check">
                                <input class="form-check-input" name="alasan[]" type="checkbox" value="Lupa Password"
                                    id="check">Lupa Password

                                <br>
                                <input class="form-check-input" name="alasan[]" type="checkbox"
                                    value="Admin / Operator Baru" id="check">Admin / Operator
                                Baru
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="area1" class="form-label">Keterangan / Penjelasan Lainnya</label>
                            <textarea class="form-control" id="area1" rows="5" name="keterangan"
                                value="<?=set_value('keterangan')?>" required></textarea>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <h3>PERSYARATAN</h3>
                        <p>Silahkan unggah persyaratan permohonan Username dan password untuk pengelolaan website
                            Desa / Sub Domain OPD. Contoh surat pemohonan dapat diunduh pada menu Download
                            Persyaratan</p>
                    </div>

                    <div class="col-xl-6 col-12">
                        <div class="mb-3">
                            <label for="file1" class="form-label">Surat Permohonan</label>
                            <input class="form-control" type="file" id="file1" name="surat_permohonan"
                                value="<?=set_value('surat_permohonan')?>" required accept=".pdf">
                            <p>Silahkan upload file dalam bentuk .pdf</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="mb-3">
                            <label for="file2" class="form-label">SK</label>
                            <input class="form-control" type="file" id="file2" name="sk" value="<?=set_value('sk')?>"
                                required accept=".pdf">
                            <p>SK sebagai admin website atau surat tugas. Silahkan upload file dalam bentuk .pdf</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" name="save" class="btn btn-primary col-12">Kirim</button>
                    </div>
                </div>

            </form>

        </div>
    </section>
</main>


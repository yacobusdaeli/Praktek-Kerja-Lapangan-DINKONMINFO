<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2><span>Kominfo</span> Purbalingga</h2>
        <h3>ADUAN INFRASTRUKTUR JARINGAN / INTERNET</h3>
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
            <form action="<?=base_url('form7/upload')?>" method="post" id="formvalid">
                <div class="row">
                    <div class="col-12">
                        <p>Digunakan untuk mengajukan aduan terkait kendala infrastruktur jaringan / internet di OPD
                            lingkup Pemerintah Kabupaten Purbalingga.</p>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="form1" class="form-label">Nama Pemohon</label>
                            <input type="text" class="form-control" id="form1" placeholder="Nama" name="nama"
                                value="<?=set_value('nama')?>" required>
                            <p>Diisi dengan nama lengkap pemohon</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="form2" class="form-label">Nama OPD / Desa</label>
                            <input type="text" class="form-control" id="form2" placeholder="DINKOMINFO" name="opd"
                                value="<?=set_value('opd')?>" required>
                            <p>Diisi dengan nama OPD / Desa</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="form3" class="form-label">Jabatan Pemohon</label>
                            <input type="text" class="form-control" id="form3" placeholder="Ketua" name="jabatan"
                                value="<?=set_value('jabatan')?>" required>
                            <p>Diisi dengan nama jabatan pemohon pada OPD / Desa</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="form5" class="form-label">Nomor Telpon Pemohon</label>
                            <input type="tel" class="form-control" id="form5" placeholder="+62" name="no_telp"
                                value="<?=set_value('no_telp')?>" required
                                oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*)\./g, '$1');"
                                maxlength="13">
                            <p>Diisi dengan nomor telpon pemohon yang aktif</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="form6" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="form6" placeholder="ex@" name="email"
                                value="<?=set_value('email')?>" required>
                            <p>Diisi dengan alamat eMail resmi OPD / Desa yang aktif</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Alasan Permohonan</label>
                            <div class="form-check">
                                <input class="form-check-input" name="alasan[]" type="checkbox" value="Error"
                                    id="check">Error
                                <br>
                                <input class="form-check-input" name="alasan[]" type="checkbox"
                                    value="Tidak Bisa Akses Internet" id="check">Tidak Bisa Akses Internet
                                <br>
                                <input class="form-check-input" name="alasan[]" type="checkbox"
                                    value="Koneksi internet lambat" id="check">Koneksi internet lambat
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h3>TULISKAN KOMENTAR ERROR YANG MUNCUL DISINI :</h3>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="area1" class="form-label">Keterangan Error</label>
                            <textarea id="area1" cols="30" rows="10" class="form-control" name="keterangan"
                                value="<?=set_value('keterangan')?>" required></textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="area2" class="form-label">Riwayat Penggunaan :</label>
                            <textarea id="area2" cols="30" rows="10" class="form-control" name="riwayat"
                                value="<?=set_value('riwayat')?>" required></textarea>
                            <p>Tuliskan riwayat penggunaan / pengelolaan website sebelum muncul pesan error /
                                sebelum website tidak bisa diakses.</p>
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


<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2><span>Kominfo</span> Purbalingga</h2>
        <h3>Pendaftaran Website Desa / OpenSID</h3>
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
            <form method="POST" action="<?=base_url('form1/upload')?>" enctype="multipart/form-data" class="row gy-4"
                id="form">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="form1" class="form-label">Nama Desa</label>
                        <input type="text" class="form-control" id="form1" placeholder="Nama" name="nama"
                            value="<?=set_value('nama')?>" required>
                        <p>Diisi dengan nama desa pemohon</p>
                    </div>
                </div>

                <div class="col-xl-6 col-12">
                    <div class="mb-3">
                        <label for="file1" class="form-label">SK Pengangkatan Kades</label>
                        <input class="form-control" type="file" id="file1" name="SK_Pengangkatan_Kades"
                            value="<?=set_value('SK_Pengangkatan_Kades')?>" required accept=".pdf">
                        <p>Silahkan upload file SK Pengangkatan Kepala Desa dalam bentuk .pdf</p>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="mb-3">
                        <label for="file2" class="form-label">SK Pengangkatan Perangkat Desa</label>
                        <input class="form-control" type="file" id="file2" name="SK_Pengangkatan_Perangkat_Desa"
                            value="<?=set_value('SK_Pengangkatan_Perangkat_Desa')?>" required accept=".pdf">
                        <p>Silahkan upload file SK Pengangkatan Perangkat Desa yang ditunjuk sebagai admin website,
                            dalam bentuk .pdf</p>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="mb-3">
                        <label for="file3" class="form-label">Surat Kuasa</label>
                        <input class="form-control" type="file" id="file3" name="Surat_Kuasa"
                            value="<?=set_value('Surat_Kuasa')?>" required accept=".pdf">
                        <p>Silahkan upload file Surat Kuasa dari Kepala Desa kepada Pengangkatan Desa yang ditunjuk
                            sebagai admin website, dalam bentuk .pdf</p>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="mb-3">
                        <label for="file4" class="form-label">Surat Permohonan Domain</label>
                        <input class="form-control" type="file" id="file4" name="Surat_Permohonan_Domain"
                            value="<?=set_value('Surat_Permohonan_Domain')?>" required accept=".pdf">
                        <p>Silahkan upload file Surat Permohonan Domain dalam bentuk .pdf</p>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="mb-3">
                        <label for="file5" class="form-label">Surat Permohonan Hosting</label>
                        <input class="form-control" type="file" id="file5" name="Surat_Permohonan_Hosting"
                            value="<?=set_value('Surat_Permohonan_Hosting')?>" required accept=".pdf">
                        <p>Silahkan upload file. Surat Permohonan Hosting ditujukan kepada kepala Dinas Komunikasi
                            dan Informatika Kabupaten Purbalingga, dalam bentuk .pdf</p>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="mb-3">
                        <label for="file6" class="form-label">KTP</label>
                        <input class="form-control" type="file" id="file6" name="KTP" value="<?=set_value('KTP')?>"
                            required accept=".jpg,.jpeg,.png,.tiff">
                        <p>Upload foto KTP Perangkat Desa yang ditunjuk sebagai admin</p>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary col-12">Kirim</button>
                </div>
            </form>
        </div>
    </section>
</main>


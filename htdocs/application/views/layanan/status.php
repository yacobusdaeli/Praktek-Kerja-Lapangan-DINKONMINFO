<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2><span>Kominfo</span> Purbalingga</h2>
        <h3>Status Permintaan</h3>
    </div>
</section>

<main id="main">
    <section id="featured-services" class="featured-services">
        <div class="container">
            <?php if ($this->session->flashdata('msg')) {
    echo '<div class="alert alert-success" role="alert">';
    echo $this->session->flashdata('msg');
    echo '</div>';
    $this->session->unset_userdata('msg');

}?>
            <div class="accordion" id="accordionExample">
                <!-- Start Website Desa -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed text" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Pendaftaran Website Desa
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            name="search_text" id="search_text" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div id="result">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Website Desa -->

                <!-- Start Hak Akses Website -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed text" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Permohonan Hak Akses Website
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            name="search_text2" id="search_text2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div id="result2">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Hak Akses Website -->

                <!-- Start Hak Akses Matur Bupati-->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed text" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Permohonan Hak Akses Matur Bupati
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            name="search_text3" id="search_text3" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div id="result3">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Hak Akses Matur Bupati-->

                <!-- Start  Permohonan Fasilitas Internet / Wifi -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed text" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Permohonan Fasilitas Internet / Wifi
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            name="search_text4" id="search_text4" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div id="result4">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Permohonan Fasilitas Internet / Wifi -->

                <!-- Start Permohonan Fasilitas Video Conference -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed text" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Permohonan Fasilitas Video Conference
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            name="search_text5" id="search_text5" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div id="result5">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Permohonan Fasilitas Video Conference -->

                <!-- Start Aduan Pengelolaan Website -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed text" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Aduan Pengelolaan Website
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            name="search_text6" id="search_text6" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div id="result6">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Aduan Pengelolaan Website -->

                <!-- Start Aduan Pengelolaan Infrastruktur dan Jaringan Internet -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed text" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Aduan Pengelolaan Infrastruktur dan Jaringan Internet
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            name="search_text7" id="search_text7" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div id="result7">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Aduan Pengelolaan Infrastruktur dan Jaringan Internet -->

                 <!-- Start Permohonan Pengajuan Magang -->
                 <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed text" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Permohonan Pengajuan Magang
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            name="search_text8" id="search_text8" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div id="result8">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Permohonan Pengajuan Magang -->


            </div>
        </div>
    </section>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
    load_data();

    function load_data(query) {
        $.ajax({
            url: "<?php echo base_url(); ?>status/search_webdesa",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result').html(data);
            }
        })
    };

    $('#search_text').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});
</script>

<script>
$(document).ready(function() {
    load_data();

    function load_data(query) {
        $.ajax({
            url: "<?php echo base_url(); ?>status/search_hakaksesweb",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result2').html(data);
            }
        })
    };

    $('#search_text2').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});
</script>

<script>
$(document).ready(function() {
    load_data();

    function load_data(query) {
        $.ajax({
            url: "<?php echo base_url(); ?>status/search_maturbup",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result3').html(data);
            }
        })
    };

    $('#search_text3').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});
</script>

<script>
$(document).ready(function() {
    load_data();

    function load_data(query) {
        $.ajax({
            url: "<?php echo base_url(); ?>status/search_fasinter",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result4').html(data);
            }
        })
    };

    $('#search_text4').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});
</script>

<script>
$(document).ready(function() {
    load_data();

    function load_data(query) {
        $.ajax({
            url: "<?php echo base_url(); ?>status/search_fasvideo",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result5').html(data);
            }
        })
    };

    $('#search_text5').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});
</script>

<script>
$(document).ready(function() {
    load_data();

    function load_data(query) {
        $.ajax({
            url: "<?php echo base_url(); ?>status/search_aduanweb",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result6').html(data);
            }
        })
    };

    $('#search_text6').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});
</script>

<script>
$(document).ready(function() {
    load_data();

    function load_data(query) {
        $.ajax({
            url: "<?php echo base_url(); ?>status/search_aduaninter",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result7').html(data);
            }
        })
    };

    $('#search_text7').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});
</script>


<script>
$(document).ready(function() {
    load_data();

    function load_data(query) {
        $.ajax({
            url: "<?php echo base_url(); ?>status/search_pengajuan_magang",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result8').html(data);
            }
        })
    };

    $('#search_text8').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});
</script>

<script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</script>
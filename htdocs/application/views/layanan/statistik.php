<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2><span>Kominfo</span> Purbalingga</h2>
        <h3>Statistik Permohonan Pengajuan Magang</h3>

    </div>
</section>


<main id="main">
    <section id="intro" class="intro">
        <div class="container">
            <ul class="text-left list-unstyled">
                <li class="mb-2">
                    <a href="#statistik-status" style="transition: transform 0.3s ease; display: inline-block;"
                        onmouseover="this.style.transform='scale(1.2)';" onmouseout="this.style.transform='scale(1)';">
                        Statistik Berdasarkan Status Permohonan Magang
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#statistik-bulanan" style="transition: transform 0.3s ease; display: inline-block;"
                        onmouseover="this.style.transform='scale(1.2)';" onmouseout="this.style.transform='scale(1)';">
                        Statistik Berdasarkan Waktu
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#statistik-institusi" style="transition: transform 0.3s ease; display: inline-block;"
                        onmouseover="this.style.transform='scale(1.2)';" onmouseout="this.style.transform='scale(1)';">
                        Statistik Berdasarkan Institusi
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#statistik-jurusan" style="transition: transform 0.3s ease; display: inline-block;"
                        onmouseover="this.style.transform='scale(1.2)';" onmouseout="this.style.transform='scale(1)';">
                        Statistik Berdasarkan Jurusan
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section id="featured-services" class="featured-services">
        <div class="container">
            <?php if ($this->session->flashdata('dc')): ?>
            <div class="alert alert-danger" role="alert">
                <?=$this->session->flashdata('dc');?>
            </div>
            <?php endif;?>


            <!-- Section Statistik Status -->
            <div class="container">
                <div class="row mb-2 -mt-3 align-items-center">
                    <div class="col-12 text-center fs-5 fw-bold" id="statistik-status">
                        Statistik Berdasarkan Status Permohonan Magang
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 text-center ">
                        <canvas id="chartStatus" width="600 !important"></canvas>
                    </div>
                </div>
            </div>
            <!-- End Section Statistik Status -->

            <!-- Section Statistik Bulanan -->
            <div class="container">
                <div class="row mb-2 mt-5 align-items-center">
                    <div class="col-12 text-center fs-5 fw-bold" id="statistik-bulanan">
                        Statistik Berdasarkan Waktu
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <canvas id="chartBulanan" width:"200"></canvas>
                    </div>
                </div>
            </div>
            <!-- End Section Statistik Bulanan-->

            <!-- Section Statistik Institusi -->
            <div class="container">
                <div class="row mb-2 mt-5 align-items-center">
                    <div class="col-12 text-center fs-5 fw-bold" id="statistik-institusi">
                        Statistik Berdasarkan Institusi Asal
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <canvas id="chartInstitusi" width:"200"></canvas>
                    </div>
                </div>
            </div>
            <!-- End Section Statistik Institusi-->

            <!-- Section Statistik Jurusan -->
            <div class="container">
                <div class="row mb-2 mt-5 align-items-center">
                    <div class="col-12 text-center fs-5 fw-bold" id="statistik-jurusan">
                        Statistik Berdasarkan Jurusan
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <canvas id="chartJurusan" width:"600"></canvas>
                    </div>
                </div>
            </div>
            <!-- End Section Statistik Jurusan-->


        </div>
    </section>
</main>

<!-- Script untuk Statistik Status -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Ambil data dari PHP
        const statistikStatus = JSON.parse(`<?php echo $statistikStatus; ?>`);

        // Siapkan data untuk Bar Chart
        const labels = statistikStatus.map(item => item.status); // Nama status
        const data = statistikStatus.map(item => item.total); // Total masing-masing status

        // Konfigurasi Bar Chart
        const ctx = document.getElementById('chartStatus').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Permohonan',
                    data: data,
                    backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: ['rgb(75, 192, 192)', 'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    });
</script>

<!-- End Script untuk Statistik Status -->

<!-- Script untuk Statistik Bulan -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Ambil data dari PHP
        const statistikBulanan = JSON.parse(`<?php echo $statistikBulanan; ?>`);

        // Cek data yang diterima
        console.log(statistikBulanan);

        // Format data untuk Chart.js
        const labels = statistikBulanan.map(item => {
            const bulanNama = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            return bulanNama[item.month - 1]; // Konversi angka bulan ke nama
        });

        const data = statistikBulanan.map(item => item.total);

        // Konfigurasi Chart.js
        const ctx = document.getElementById('chartBulanan').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Pengajuan Perbulan',
                    data: data,
                    backgroundColor: 'rgba(66, 160, 160, 0.2)',
                    borderColor: 'rgb(75, 192, 192)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    });
</script>

<!-- End Script untuk Statistik Bulan -->

<!-- Script untuk Statistik Institusi -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Ambil data dari PHP
        const statistikInstitusi = JSON.parse(`<?php echo $statistikInstitusi; ?>`);

        // Siapkan data untuk Bar Chart
        const labels = statistikInstitusi.map(item => item.institusi); // Nama institusi
        const data = statistikInstitusi.map(item => item.total); // Total masing-masing institusi

        // Tentukan array warna untuk tiap bar
        const colors = [
            'rgba(54, 162, 235, 0.2)', // Biru muda
            'rgba(255, 159, 64, 0.2)', // Oranye muda
            'rgba(75, 192, 192, 0.2)', // Hijau muda
            'rgba(153, 102, 255, 0.2)', // Ungu muda
            'rgba(201, 203, 207, 0.2)', // Abu-abu muda
            'rgba(255, 205, 86, 0.2)', // Kuning muda
            'rgba(255, 99, 132, 0.2)' // Merah muda
        ];

        // Pastikan setiap bar memiliki warna yang berbeda, ulangi jika warna kurang
        const backgroundColors = labels.map((_, index) => colors[index % colors.length]);
        const borderColors = backgroundColors.map(color => color.replace('0.2',
        '1')); // Ubah transparansi border

        // Konfigurasi Bar Chart
        const ctx = document.getElementById('chartInstitusi').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Pengajuan Per-Institusi',
                    data: data,
                    backgroundColor: backgroundColors, // Warna bar yang berbeda
                    borderColor: borderColors, // Border dengan warna solid
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false // Menyembunyikan legenda jika tidak diperlukan
                    }
                }
            }
        });
    });
</script>
<!-- End Script untuk Statistik Institusi -->

<!-- Section script untuk Statistik Jurusan -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Ambil data dari PHP
        const statistikJurusan = JSON.parse(`<?php echo $statistikJurusan; ?>`);

        // Siapkan data untuk Bar Chart
        const labels = statistikJurusan.map(item => item.jurusan); // Nama jurusan
        const data = statistikJurusan.map(item => item.total); // Total masing-masing jurusan

        // Tentukan array warna untuk tiap bar
        const colors = [
            'rgba(54, 162, 235, 0.2)', // Biru muda
            'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.2)', // Hijau muda
            'rgba(153, 102, 255, 0.2)', // Ungu mud
            'rgba(201, 203, 207, 0.2)',
            'rgba(255, 205, 86, 0.2)', // Abu-abu muda
            'rgba(255, 99, 132, 0.2)' // Merah muda
        ];

        // Pastikan setiap bar memiliki warna yang berbeda, ulangi jika warna kurang
        const backgroundColors = labels.map((_, index) => colors[index % colors.length]);
        const borderColors = backgroundColors.map(color => color.replace('0.2',
        '1')); // Ubah transparansi border

        // Konfigurasi Bar Chart
        const ctx = document.getElementById('chartJurusan').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Pengajuan Perjurusan',
                    data: data,
                    backgroundColor: backgroundColors, // Warna bar yang berbeda
                    borderColor: borderColors, // Border dengan warna solid
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false // Menyembunyikan legenda jika tidak diperlukan
                    }
                }
            }
        });
    });
</script>


<!-- End Section script untuk Statistik Jurusan -->
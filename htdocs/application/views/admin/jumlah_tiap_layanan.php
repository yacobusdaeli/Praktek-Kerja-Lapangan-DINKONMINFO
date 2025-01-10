<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Tiap Layanan</title>
    <style type="text/css">
        body {
            font-family: "Times New Roman", Times, serif;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px; /* Memberi jarak antara judul dan tabel */
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 8px;
        }
        .table th {
            background-color: #f2f2f2;
            text-align: center;
        }
        .text-center {
            text-align: center;
        }
        .text-left {
            text-align: left; /* Mengatur rata kiri pada kolom "Nama Layanan" */
        }
        h1 {
            margin-top: 10px;
            text-align: center;
            position: absolute; /* Mengatur posisi judul */
            width: 100%; /* Lebar judul mengikuti lebar container */
        }
    </style>
</head>
<body>
    <h1>Jumlah Tiap Layanan</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Layanan</th>
                <th>Jumlah Layanan</th>
                <th>Diterima</th>
                <th>Proses</th>
                <th>Ditolak</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td class="text-left">Website Desa</td>
                <td><?=$allwebdesa?></td>
                <td><?=$accwebdesa?></td>
                <td><?=$proseswebdesa?></td>
                <td><?=$dcwebdesa?></td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Hak Akses Web</td>
                <td><?=$allhak_akses_web?></td>
                <td><?=$acchak_akses_web?></td>
                <td><?=$proseshak_akses_web?></td>
                <td><?=$dchak_akses_web?></td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Hak Akses Matur Bupati</td>
                <td><?=$allhak_akses_matur_bupati?></td>
                <td><?=$acchak_akses_matur_bupati?></td>
                <td><?=$proseshak_akses_matur_bupati?></td>
                <td><?=$dchak_akses_matur_bupati?></td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Fasilitas Internet / Wifi</td>
                <td><?=$allfasilitas_inter_wifi?></td>
                <td><?=$accfasilitas_inter_wifi?></td>
                <td><?=$prosesfasilitas_inter_wifi?></td>
                <td><?=$dcfasilitas_inter_wifi?></td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Fasilitas Video Conference</td>
                <td><?=$allfasilitas_video_conference?></td>
                <td><?=$accfasilitas_video_conference?></td>
                <td><?=$prosesfasilitas_video_conference?></td>
                <td><?=$dcfasilitas_video_conference?></td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Aduan Pengelolaan Website</td>
                <td><?=$alladuan_pengelolaan_website?></td>
                <td><?=$accaduan_pengelolaan_website?></td>
                <td><?=$prosesaduan_pengelolaan_website?></td>
                <td><?=$dcaduan_pengelolaan_website?></td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Aduan Infrastruktur dan Jaringan Internet</td>
                <td><?=$alladuan_jaringan_internet?></td>
                <td><?=$accaduan_jaringan_internet?></td>
                <td><?=$prosesaduan_jaringan_internet?></td>
                <td><?=$dcaduan_jaringan_internet?></td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Pengajuan Permohonan Magang</td>
                <td><?=$allpengajuan_magang?></td>
                <td><?=$accpengajuan_magang?></td>
                <td><?=$prosespengajuan_magang?></td>
                <td><?=$dcpengajuan_magang?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>

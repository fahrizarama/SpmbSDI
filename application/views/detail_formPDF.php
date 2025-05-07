<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Bukti Daftar - PPDB SD Islam Tompokersan</title>
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/header_sdi2.png">


    <link rel="stylesheet" href="<?= base_url(); ?>assets/extensions/sweetalert2/sweetalert2.min.css">


    <link rel="shortcut icon" href="<?= base_url(); ?>assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">



    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/iconly.css">


    <style>
        .disabled-link {
            pointer-events: none;
            /* Menonaktifkan klik */
            opacity: 0.6;
            /* Menurunkan opasitas untuk menunjukkan tombol non-aktif */
        }
    </style>

</head>

<body>
    <?php $token1 = '0';
    $token2 = '1' ?>
    <script src="<?= base_url(); ?>assets/static/js/initTheme.js"></script>
    <div>
        <!-- <?php $this->load->view('partials/sidebar') ?> -->
        <div class="m-5">

            <div class="page-content">
                <div class="page-heading">

                    <!-- // Basic multiple Column Form section start -->
                    <section id="multiple-column-form">
                        <form class="form" method="post" action="<?php echo site_url('FormSiswa/add_data'); ?>" enctype="multipart/form-data">
                            <div class="row match-height">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-content">
                                            <div class="card-body">
                                                <table width="100%" cellspacing="0" cellpadding="5" style="color: #000; border-bottom: 3px solid black; font-family: 'Calibri';">
                                                    <tr>
                                                        <td>
                                                            <img src="<?= base_url(); ?>assets/img/header_sdi2.png" style="width: 80px; height: auto;" />
                                                        </td>
                                                        <td align="center" style="font-weight: bold; font-size: 18px; text-transform: uppercase; padding: 10px;">
                                                            FORMULIR PENDAFTARAN SDI TOMPOKERSAN LUMAJANG TAHUN <?= date('Y'); ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <div class="row" style="color: #000; ">
                                                    <!-- ---------------------- identitas formulir------------------------------------------ -->
                                                    <table width="100%" cellspacing="0" cellpadding="5">
                                                        <tr>
                                                            <td width="70%">
                                                                <span style="font-weight: bold; font-size: 18px;">No Pendaftaran : <?= $siswa->id_formulir ?></span><br>
                                                                Tanggal Pendaftaran : <?= date('d-m-Y', strtotime($siswa->tanggal_formulir)) ?><br>
                                                                Status :
                                                                <?php
                                                                if ($siswa->status == '1') {
                                                                    echo 'Belum Terkonfirmasi';
                                                                } elseif ($siswa->status == '2') {
                                                                    echo '<span style=" color: green;">Terkonfirmasi</span>';
                                                                } else {
                                                                    echo '<span style=" color: red;">Tidak Terkonfirmasi</span>';
                                                                }
                                                                ?>
                                                                <br>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                                    <path style="fill:#008000;" d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                                                    <path style="fill:#008000;" d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                                                </svg> Dokumen KK <br>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                                    <path style="fill:#008000;" d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                                                    <path style="fill:#008000;" d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                                                </svg> Dokumen AKTA <br>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                                    <path style="fill:#008000;" d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                                                    <path style="fill:#008000;" d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                                                </svg> Foto 3x4
                                                            </td>
                                                            <td width="30%" align="right">
                                                                <img src="<?= base_url(); ?>uploads/<?= $siswa->foto ?>" width="100" style="border: 1px solid #000;" />
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- ---------------------- Data Siswa------------------------------------------ -->
                                                    <br>
                                                    <table width="100%">
                                                        <tr>
                                                            <td align="center">
                                                                <span style=" font-weight: bold; font-size: 16px;">- Data Calon Siswa -</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="18%" valign="top">Nama</td>
                                                            <td width="1%" valign="top">: </td>
                                                            <td><?= $siswa->nama ?></td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="18%">NIK</td>
                                                            <td width="50%">: <?= $siswa->nik ?></td>
                                                            <td width="15%">Jenis Kelamin</td>
                                                            <td>: <?= $siswa->jenis_kelamin ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Lahir</td>
                                                            <td>: <?= date('d-m-Y', strtotime($siswa->tanggal_lahir)) ?></td>
                                                            <td>Anak Ke</td>
                                                            <td>: <?= $siswa->anak_ke ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Saudara</td>
                                                            <td>: <?= $siswa->saudara ?></td>
                                                            <td>Agama</td>
                                                            <td>: <?= $siswa->agama ?></td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="18%" valign="top">Asal Sekolah</td>
                                                            <td width="1%" valign="top">: </td>
                                                            <td align="left"><?= $siswa->asal_sekolah ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top">Alamat Rumah</td>
                                                            <td valign="top">: </td>
                                                            <td align="left"><?= $siswa->alamat ?></td>
                                                        </tr>
                                                    </table>

                                                    <!-- ---------------------- Data Ayah------------------------------------------ -->
                                                    <br>
                                                    <table width="100%">
                                                        <tr>
                                                            <td align="center">
                                                                <span style=" font-weight: bold; font-size: 16px;">- Data Ayah Calon Siswa -</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="18%" valign="top">Nama Ayah</td>
                                                            <td width="1%" valign="top">: </td>
                                                            <td><?= $siswa->nama_a ?></td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="18%">NIK</td>
                                                            <td width="50%">: <?= $siswa->nik ?></td>
                                                            <td width="8%">Agama</td>
                                                            <td>: <?= $siswa->agama ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Lahir</td>
                                                            <td>: <?= date('d-m-Y', strtotime($siswa->tanggal_lahir)) ?></td>
                                                            <td>No Hp</td>
                                                            <td>: <?= $siswa->no_hp_a ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>email</td>
                                                            <td>: <?= $siswa->email_a ?></td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="18%" valign="top">Profesi</td>
                                                            <td width="1%" valign="top">: </td>
                                                            <td align="left"><?= $siswa->profesi_a ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top">Penghasilan</td>
                                                            <td valign="top">: </td>
                                                            <td align="left"><?= $siswa->penghasilan_a ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top">Alamat Rumah</td>
                                                            <td valign="top">: </td>
                                                            <td align="left"><?= $siswa->alamat_a ?></td>
                                                        </tr>
                                                    </table>

                                                    <!-- ---------------------- Data Ibu------------------------------------------ -->
                                                    <br>
                                                    <table width="100%">
                                                        <tr>
                                                            <td align="center">
                                                                <span style=" font-weight: bold; font-size: 16px;">- Data Ibu Calon Siswa -</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="18%" valign="top">Nama Ibu</td>
                                                            <td width="1%" valign="top">: </td>
                                                            <td><?= $siswa->nama_b ?></td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="18%">NIK</td>
                                                            <td width="50%">: <?= $siswa->nik ?></td>
                                                            <td width="8%">Agama</td>
                                                            <td>: <?= $siswa->agama ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Lahir</td>
                                                            <td>: <?= date('d-m-Y', strtotime($siswa->tanggal_lahir)) ?></td>
                                                            <td>No Hp</td>
                                                            <td>: <?= $siswa->no_hp_b ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>email</td>
                                                            <td>: <?= $siswa->email_b ?></td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="18%" valign="top">Profesi</td>
                                                            <td width="1%" valign="top">: </td>
                                                            <td align="left"><?= $siswa->profesi_b ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top">Penghasilan</td>
                                                            <td valign="top">: </td>
                                                            <td align="left"><?= $siswa->penghasilan_b ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top">Alamat Rumah</td>
                                                            <td valign="top">: </td>
                                                            <td align="left"><?= $siswa->alamat_b ?></td>
                                                        </tr>
                                                    </table>

                                                    <!-- ---------------------- footer pdf------------------------------------------ -->
                                                    <br>
                                                    <table style="border-top: 3px solid black;">
                                                        <tr>
                                                            <td align="center"><br> "Demikian data pribadi ini saya buat dengan sebenarnya dan bila ternyata isian yang dibuat tidak benar, saya bersedia
                                                                menanggung akibat hukum yang ditimbulkannya"
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>









    <script src="<?= base_url(); ?>assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= base_url(); ?>assets/compiled/js/sweetalert2.js"></script>
    <script src="<?= base_url(); ?>assets/extensions/jquery/jquery.min.js"></script>

    <script src="<?= base_url(); ?>assets/static/js/components/dark.js"></script>
    <script src="<?= base_url(); ?>assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="<?= base_url(); ?>assets/compiled/js/app.js"></script>



    <!-- Need: Apexcharts -->
    <script src="<?= base_url(); ?>assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/pages/dashboard.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Formulir - PPDB SD Islam Tompokersan</title>

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
    <div id="app">
        <?php $this->load->view('partials/sidebar') ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-8 order-md-1 order-last">
                                <h3>Detail Formulir Pendaftaran</h3>
                                <p class="text-subtitle text-muted">
                                    Detail Formulir Untuk Pendaftaran Calon Siswa SD Islam Tompokersan
                                </p>
                            </div>
                            <div class="col-12 col-md-4 order-md-2 order-first">
                                <nav
                                    aria-label="breadcrumb"
                                    class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">Data Formulir</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Form Validation
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- // Basic multiple Column Form section start -->
                    <section id="multiple-column-form">
                        <form class="form" method="post" action="<?php echo site_url('FormSiswa/add_data'); ?>" enctype="multipart/form-data">
                            <div class="row match-height">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="row">

                                                    <div style="margin-bottom: 15px;" class="col-sm-7 col-12">
                                                        <h5 class="card-title">Formulir Calon Siswa</h5>
                                                        <a href="<?= site_url('Dashboard/cetak_pdf/' . $siswa->id_formulir) ?>" style="margin-bottom: 1vh;" class="btn icon icon-left btn-warning"><i data-feather="download" style="margin-top: -5px;"></i>Unduh Formulir</a><br>
                                                        <a>Tanggal Upload : <?= date('d-m-Y', strtotime($siswa->tanggal_formulir)); ?></a><br>
                                                        <a>Waktu Upload : <?= date('H:i:s', strtotime($siswa->tanggal_formulir)); ?></a><br>
                                                        <a>Status : <?php if ($siswa->status == '1') { ?>
                                                                <span class="badge bg-secondary mb-2">Belum Terkonfirmasi</span>
                                                            <?php }
                                                                    if ($siswa->status == '2') { ?>
                                                                <span class="badge bg-success mb-2">Terkonfirmasi</span>
                                                            <?php }
                                                                    if ($siswa->status == '3') { ?>
                                                                <span class="badge bg-danger mb-2"> Tidak Terkonfirmasi</span>
                                                            <?php } ?></a><br>

                                                        <a href="<?= base_url('uploads/' . $siswa->dokumen_kk) ?>" target="_blank"><span class="badge bg-success mb-2">📝Lihat Dokumen KK </span></a><br>
                                                        <a href="<?= base_url('uploads/' . $siswa->dokumen_akta) ?>" target="_blank"><span class="badge bg-success">📝Lihat Dokumen Akta</span></a>
                                                    </div>

                                                    <div style=" margin-bottom: 5px; " class="col-sm-5 col-12 text-center text-sm-end">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" class="ms-auto" style="display: inline-block; padding: 1px; border: 1px solid #000;">
                                                            <img src="<?= base_url(); ?>uploads/<?= $siswa->foto ?>" class="img-fluid" width="100" />
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="row" style="margin-top: -50px;">

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="first-name-column" class="form-label">Nama Lengkap</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->nama; ?>" readonly />
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="nik-column" class="form-label">NIK</label>
                                                            <input
                                                                type="number"
                                                                id="nik-column"
                                                                class="form-control"
                                                                placeholder="Nomor Induk Kependudukan"
                                                                name="nik"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->nik; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <!-- Input Jenis Kelamin -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <fieldset>
                                                                <label class="form-label">Jenis Kelamin</label>
                                                                <div class="d-flex">
                                                                    <div class="form-check me-3">
                                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki" required
                                                                            <?= ($siswa->jenis_kelamin == 'Laki-Laki') ? 'checked' : ''; ?> disabled />
                                                                        <label class="form-check-label form-label" for="laki">Laki-Laki</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan"
                                                                            <?= ($siswa->jenis_kelamin == 'Perempuan') ? 'checked' : ''; ?> disabled />
                                                                        <label class="form-check-label form-label" for="perempuan">Perempuan</label>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="religion" class="form-label">Agama</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->agama; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="date-column" class="form-label">Tanggal Lahir</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->tanggal_lahir; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="last-name-column" class="form-label">Asal Sekolah</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->asal_sekolah; ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="anak-ke-column" class="form-label">Anak Ke-</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->anak_ke; ?>" readonly />
                                                            <small class="form-text text-muted">Input hanya dapat berisi huruf dan spasi. Contoh : Pertama,Kedua. Dll.</small>
                                                        </div>
                                                    </div>

                                                    <!-- Input Nama Saudara Kandung -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="last-name-column" class="form-label">
                                                                Nama Saudara Kandung di SD Islam Tompokersan (*jika ada)
                                                            </label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->saudara; ?>" readonly />
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-md-12 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="alamat" class="form-label">Alamat Rumah</label>
                                                        <textarea
                                                            id="alamat"
                                                            class="form-control"
                                                            name="alamat"
                                                            data-parsley-required="true"
                                                            rows="3" readonly><?= $siswa->alamat; ?></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- END Formulir Siswa -->
                                        <!-- Formulir Ayah -->
                                        <div class="card-header">
                                            <h4 class="card-title">Formulir Ayah Kandung</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="row" style="margin-top: -50px;">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="first-name-column" class="form-label">Nama Ayah</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->nama_a; ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="nik-column" class="form-label">NIK</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->nik_a; ?>" readonly />
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="religion" class="form-label">Agama</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->agama_a; ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="date-column" class="form-label">Tanggal Lahir</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->tanggal_lahir_a; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12 ">
                                                        <div class="form-group mandatory">
                                                            <label for="email-id-column" class="form-label">Email</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->email_a; ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="last-name-column" class="form-label">Profesi/Pekerjaan</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->profesi_a; ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="anak-ke-column" class="form-label">Nomor HP (WA Aktif)</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->no_hp_a; ?>" readonly />
                                                            <small class="form-text text-muted">Input hanya dapat berisi angka. Contoh : 08123456789.</small>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="gaji-column" class="form-label">Penghasilan/Gaji</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->penghasilan_a; ?>" readonly />
                                                            <small class="form-text text-muted">Pilih rentang gaji yang sesuai.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="alamat" class="form-label">Alamat Rumah</label>
                                                        <textarea
                                                            id="alamat"
                                                            class="form-control"
                                                            name="alamat_a"
                                                            data-parsley-required="true" required
                                                            rows="3" readonly><?= $siswa->alamat_a; ?></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- END FORM AYAH KANDUNG -->
                                        <div class="card-header">
                                            <h4 class="card-title">Formulir Ibu Kandung</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="row" style="margin-top: -50px;">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="first-name-column" class="form-label">Nama Ibu</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->nama_b; ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="nik-column" class="form-label">NIK</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->nik_b; ?>" readonly />
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="religion" class="form-label">Agama</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->agama_b; ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="date-column" class="form-label">Tanggal Lahir</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->tanggal_lahir_b; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="email-id-column" class="form-label">Email</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->email_b; ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="last-name-column" class="form-label">Profesi/Pekerjaan</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->profesi_b; ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="anak-ke-column" class="form-label">Nomor HP (WA Aktif)</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->no_hp_b; ?>" readonly />
                                                            <small class="form-text text-muted">Input hanya dapat berisi angka. Contoh : 08123456789.</small>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="gaji-column" class="form-label">Penghasilan/Gaji</label>
                                                            <input
                                                                type="text"
                                                                id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Lengkap"
                                                                name="nama"
                                                                data-parsley-required="true" required
                                                                value="<?= $siswa->penghasilan_b; ?>" readonly />
                                                            <small class="form-text text-muted">Pilih rentang gaji yang sesuai.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="alamat" class="form-label">Alamat Rumah</label>
                                                        <textarea
                                                            id="alamat"
                                                            class="form-control"
                                                            name="alamat_b"
                                                            data-parsley-required="true" required
                                                            rows="3" readonly><?= $siswa->alamat_b; ?></textarea>
                                                    </div>
                                                </div>

                                                <?php if ($this->session->userdata('role') == "1") { ?>
                                                    <div class="row justify-content-center">
                                                        <div class="col-5">
                                                            <a onclick="accConfirm('<?= site_url('Home/acc/' . $siswa->id_formulir) ?>')" href="#!" class="btn btn-success w-100 <?= ($siswa->status == "1") ? '' : 'disabled-link' ?>" id="submitButton">
                                                                &#10004; Terima
                                                            </a>
                                                        </div>
                                                        <div class="col-5">
                                                            <a onclick="tolakConfirm('<?= site_url('Home/tolak/' . $siswa->id_formulir) ?>')" href="#!" class="btn btn-danger w-100 <?= ($siswa->status == "1") ? '' : 'disabled-link' ?>" id="submitButton">
                                                                &#10008; Tolak
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a href="<?= site_url('FormSiswa/edit/' . $siswa->id_formulir) ?>" class="btn btn-success w-100 <?= ($siswa->status == "1") ? '' : 'disabled-link' ?>" id="submitButton">
                                                                Edit Data
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                    </section>
                </div>
            </div>

            <!-- <?php $this->load->view('partials/footer') ?> -->
        </div>
    </div>

    <!-- ============================== start modal foto ================================ -->

    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" class="img-fluid d-block mx-auto" src="" alt="Image" style="max-width: 100%; max-height: 50vh; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>

    <!-- ============================= end modal foto ================================ -->

    <script>
        //modal confirm acc
        function accConfirm(url) {
            Swal.fire({
                title: 'Apakah kamu yakin ingin mengkonfirmasi data ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: 'blue',
                cancelButtonColor: 'red',
                confirmButtonText: 'Ya, yakin!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data Berhasil Terkonfirmasi!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // pilih satu di bawah ini
                                        // location.reload(); // Refresh halaman tetap setelah penghapusan data berhasil
                                        window.location.href = '<?= site_url('Home') ?>'; // Redirect ke halaman kostum setelah penghapusan data berhasil
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Terjadi kesalahan saat memproses data!'
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        }
    </script>

    <script>
        //modal confirm tolak
        function tolakConfirm(url) {
            Swal.fire({
                title: 'Apakah kamu yakin ingin tidak mengkonfirmasi data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: 'blue',
                cancelButtonColor: 'red',
                confirmButtonText: 'Ya, Tolak!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data Berhasil Ditolak!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // pilih satu di bawah ini
                                        // location.reload(); // Refresh halaman tetap setelah penghapusan data berhasil
                                        window.location.href = '<?= site_url('Home') ?>'; // Redirect ke halaman kostum setelah penghapusan data berhasil
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Terjadi kesalahan saat menolak data!'
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        }
    </script>

    <script>
        //ajax modal image
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(function(item) {
            item.addEventListener('click', function(e) {
                var imageUrl = e.target.getAttribute('src');
                document.getElementById('modalImage').setAttribute('src', imageUrl);
            });
        });
    </script>


    <script>
        //tombol disabled saat belum centang checkbox
        document.getElementById("checkbox5").addEventListener("change", function() {
            // Cek jika checkbox dicentang atau tidak
            var submitButton = document.getElementById("submitButton");

            if (this.checked) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', (e) => {
            <?php if ($this->session->flashdata('success')) : ?>
                Swal.fire({
                    icon: "success",
                    title: "<?php echo $this->session->flashdata('success'); ?>"
                })
            <?php endif; ?>

            <?php if ($this->session->flashdata('errors')) : ?>
                Swal.fire(
                    'Data Gagal Disimpan!',
                    '<?php echo $this->session->flashdata('errors'); ?>',
                    'error')
            <?php endif; ?>
        });
    </script>






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
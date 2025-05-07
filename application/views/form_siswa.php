<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Formulir - PPDB SD Islam Tompokersan</title>
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/header_sdi2.png">


    <link rel="stylesheet" href="<?= base_url(); ?>assets/extensions/sweetalert2/sweetalert2.min.css">


    <link rel="shortcut icon" href="<?= base_url(); ?>assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">



    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/iconly.css">
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
                                <h3>Formulir Pendaftaran</h3>
                                <p class="text-subtitle text-muted">
                                    Isi Formulir Untuk Pendaftaran Calon Siswa SD Islam Tompokersan
                                </p>
                            </div>
                            <div class="col-12 col-md-4 order-md-2 order-first">
                                <nav
                                    aria-label="breadcrumb"
                                    class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">Isi Formulir</a></li>
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
                                        <div class="card-header">
                                            <h4 class="card-title">Formulir Calon Siswa</h4>
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
                                                                value="<?= $this->session->flashdata('form_data')['nama'] ?? ''; ?>" />
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
                                                                min="0"
                                                                step="1"
                                                                value="<?= $this->session->flashdata('form_data')['nik'] ?? ''; ?>" />
                                                        </div>
                                                    </div>

                                                    <!-- Input Jenis Kelamin -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <fieldset>
                                                                <label class="form-label">Jenis Kelamin</label>
                                                                <div class="d-flex">
                                                                    <div class="form-check me-3">
                                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki" required <?= ($this->session->flashdata('form_data')['jenis_kelamin'] ?? '') == 'Laki-Laki' ? 'checked' : ''; ?> />
                                                                        <label class="form-check-label form-label" for="laki">Laki-Laki</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" <?= ($this->session->flashdata('form_data')['jenis_kelamin'] ?? '') == 'Perempuan' ? 'checked' : ''; ?> />
                                                                        <label class="form-check-label form-label" for="perempuan">Perempuan</label>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="religion" class="form-label">Agama</label>
                                                            <select required
                                                                id="religion"
                                                                class="form-control"
                                                                name="agama"
                                                                data-parsley-required="true">
                                                                <option value="" disabled selected>Pilih Agama</option>
                                                                <option value="Islam" <?= ($this->session->flashdata('form_data')['agama'] ?? '') == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                                                <option value="Lainnya" <?= ($this->session->flashdata('form_data')['agama'] ?? '') == 'Lainnya' ? 'selected' : ''; ?>>Lainnya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="date-column" class="form-label">Tanggal Lahir</label>
                                                            <input
                                                                type="date"
                                                                id="date-column"
                                                                class="form-control"
                                                                name="tanggal_lahir"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['tanggal_lahir'] ?? ''; ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="last-name-column" class="form-label">Asal Sekolah</label>
                                                            <input
                                                                type="text"
                                                                id="last-name-column"
                                                                class="form-control"
                                                                placeholder="Nama TK"
                                                                name="asal_sekolah"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['asal_sekolah'] ?? ''; ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="anak-ke-column" class="form-label">Anak Ke-</label>
                                                            <input
                                                                type="text"
                                                                id="anak-ke-column"
                                                                class="form-control"
                                                                placeholder="Masukkan data hanya berupa huruf"
                                                                name="anak_ke"
                                                                data-parsley-required="true" required
                                                                pattern="[A-Za-z\s]+"
                                                                title="Input hanya boleh berisi huruf dan spasi."
                                                                oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')"
                                                                value="<?= $this->session->flashdata('form_data')['anak_ke'] ?? ''; ?>" />
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
                                                                id="last-name-column"
                                                                class="form-control"
                                                                placeholder="Isi Nama"
                                                                name="saudara"
                                                                value="<?= $this->session->flashdata('form_data')['saudara'] ?? ''; ?>" />
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
                                                            data-parsley-required="true" required
                                                            rows="3"><?= $this->session->flashdata('form_data')['alamat'] ?? ''; ?></textarea>
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
                                                                name="nama_a"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['nama_a'] ?? ''; ?>" />
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
                                                                name="nik_a"
                                                                data-parsley-required="true" required
                                                                min="0"
                                                                step="1"
                                                                value="<?= $this->session->flashdata('form_data')['nik_b'] ?? ''; ?>" />
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="religion" class="form-label">Agama</label>
                                                            <select required
                                                                id="religion"
                                                                class="form-control"
                                                                name="agama_a"
                                                                data-parsley-required="true">
                                                                <option value="" disabled selected>Pilih Agama</option>
                                                                <option value="Islam" <?= ($this->session->flashdata('form_data')['agama_a'] ?? '') == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                                                <option value="Lainnya" <?= ($this->session->flashdata('form_data')['agama_a'] ?? '') == 'Lainnya' ? 'selected' : ''; ?>>Lainnya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="date-column" class="form-label">Tanggal Lahir</label>
                                                            <input
                                                                type="date"
                                                                id="date-column"
                                                                class="form-control"
                                                                name="tanggal_lahir_a"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['tanggal_lahir_a'] ?? ''; ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12 ">
                                                        <div class="form-group mandatory">
                                                            <label for="email-id-column" class="form-label">Email</label>
                                                            <input
                                                                type="email"
                                                                id="email-id-column"
                                                                class="form-control"
                                                                name="email_a"
                                                                placeholder="Email"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['email_a'] ?? ''; ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="last-name-column" class="form-label">Profesi/Pekerjaan</label>
                                                            <input
                                                                type="text"
                                                                id="last-name-column"
                                                                class="form-control"
                                                                placeholder="Pekerjaan"
                                                                name="profesi_a"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['profesi_a'] ?? ''; ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="anak-ke-column" class="form-label">Nomor HP (WA Aktif)</label>
                                                            <input
                                                                type="text"
                                                                id="anak-ke-column"
                                                                class="form-control"
                                                                placeholder="Masukkan nomor HP"
                                                                name="no_hp_a"
                                                                data-parsley-required="true" required
                                                                pattern="[0-9]+"
                                                                title="Input hanya boleh berisi angka."
                                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                                                value="<?= $this->session->flashdata('form_data')['no_hp_a'] ?? ''; ?>" />
                                                            <small class="form-text text-muted">Input hanya dapat berisi angka. Contoh : 08123456789.</small>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="gaji-column" class="form-label">Penghasilan/Gaji</label>
                                                            <select id="gaji-column" required class="form-control" name="penghasilan_a">
                                                                <option value="">Pilih Gaji</option>
                                                                <option value="Tidak Berpenghasilan" <?= ($this->session->flashdata('form_data')['penghasilan_a'] == 'Tidak Berpenghasilan') ? 'selected' : ''; ?>>Tidak Berpenghasilan</option>
                                                                <option value="Kurang Dari Rp. 500.000" <?= ($this->session->flashdata('form_data')['penghasilan_a'] == 'Kurang Dari Rp. 500.000') ? 'selected' : ''; ?>>Kurang Dari Rp. 500.000</option>
                                                                <option value="Rp. 500.000 - Rp. 1.000.000" <?= ($this->session->flashdata('form_data')['penghasilan_a'] == 'Rp. 500.000 - Rp. 1.000.000') ? 'selected' : ''; ?>>Rp. 500.000 - Rp. 1.000.000</option>
                                                                <option value="Rp. 1.000.000 - Rp. 2.000.000" <?= ($this->session->flashdata('form_data')['penghasilan_a'] == 'Rp. 1.000.000 - Rp. 2.000.000') ? 'selected' : ''; ?>>Rp. 1.000.000 - Rp. 2.000.000</option>
                                                                <option value="Rp. 2.000.000 - Rp. 4.000.000" <?= ($this->session->flashdata('form_data')['penghasilan_a'] == 'Rp. 2.000.000 - Rp. 4.000.000') ? 'selected' : ''; ?>>Rp. 2.000.000 - Rp. 4.000.000</option>
                                                                <option value="Rp. 4.000.000 - Rp. 20.000.000" <?= ($this->session->flashdata('form_data')['penghasilan_a'] == 'Rp. 4.000.000 - Rp. 20.000.000') ? 'selected' : ''; ?>>Rp. 4.000.000 - Rp. 20.000.000</option>
                                                            </select>
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
                                                            rows="3"><?= $this->session->flashdata('form_data')['alamat_a'] ?? ''; ?></textarea>
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
                                                                name="nama_b"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['nama_b'] ?? ''; ?>" />
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
                                                                name="nik_b"
                                                                data-parsley-required="true" required
                                                                min="0"
                                                                step="1"
                                                                value="<?= $this->session->flashdata('form_data')['nik_b'] ?? ''; ?>" />
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="religion" class="form-label">Agama</label>
                                                            <select required
                                                                id="religion"
                                                                class="form-control"
                                                                name="agama_b"
                                                                data-parsley-required="true">
                                                                <option value="" disabled selected>Pilih Agama</option>
                                                                <option value="Islam" <?= ($this->session->flashdata('form_data')['agama_b'] ?? '') == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                                                <option value="Lainnya" <?= ($this->session->flashdata('form_data')['agama_b'] ?? '') == 'Lainnya' ? 'selected' : ''; ?>>Lainnya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="date-column" class="form-label">Tanggal Lahir</label>
                                                            <input
                                                                type="date"
                                                                id="date-column"
                                                                class="form-control"
                                                                name="tanggal_lahir_b"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['tanggal_lahir_b'] ?? ''; ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="email-id-column" class="form-label">Email</label>
                                                            <input
                                                                type="email"
                                                                id="email-id-column"
                                                                class="form-control"
                                                                name="email_b"
                                                                placeholder="Email"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['email_b'] ?? ''; ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="last-name-column" class="form-label">Profesi/Pekerjaan</label>
                                                            <input
                                                                type="text"
                                                                id="last-name-column"
                                                                class="form-control"
                                                                placeholder="Pekerjaan"
                                                                name="profesi_b"
                                                                data-parsley-required="true" required
                                                                value="<?= $this->session->flashdata('form_data')['profesi_b'] ?? ''; ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="anak-ke-column" class="form-label">Nomor HP (WA Aktif)</label>
                                                            <input
                                                                type="text"
                                                                id="anak-ke-column"
                                                                class="form-control"
                                                                placeholder="Masukkan nomor HP"
                                                                name="no_hp_b"
                                                                data-parsley-required="true" required
                                                                pattern="[0-9]+"
                                                                title="Input hanya boleh berisi angka."
                                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                                                value="<?= $this->session->flashdata('form_data')['no_hp_b'] ?? ''; ?>" />
                                                            <small class="form-text text-muted">Input hanya dapat berisi angka. Contoh : 08123456789.</small>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="gaji-column" class="form-label">Penghasilan/Gaji</label>
                                                            <select id="gaji-column" required class="form-control" name="penghasilan_b">
                                                                <option value="">Pilih Gaji</option>
                                                                <option value="Tidak Berpenghasilan" <?= ($this->session->flashdata('form_data')['penghasilan_b'] == 'Tidak Berpenghasilan') ? 'selected' : ''; ?>>Tidak Berpenghasilan</option>
                                                                <option value="Kurang Dari Rp. 500.000" <?= ($this->session->flashdata('form_data')['penghasilan_b'] == 'Kurang Dari Rp. 500.000') ? 'selected' : ''; ?>>Kurang Dari Rp. 500.000</option>
                                                                <option value="Rp. 500.000 - Rp. 1.000.000" <?= ($this->session->flashdata('form_data')['penghasilan_b'] == 'Rp. 500.000 - Rp. 1.000.000') ? 'selected' : ''; ?>>Rp. 500.000 - Rp. 1.000.000</option>
                                                                <option value="Rp. 1.000.000 - Rp. 2.000.000" <?= ($this->session->flashdata('form_data')['penghasilan_b'] == 'Rp. 1.000.000 - Rp. 2.000.000') ? 'selected' : ''; ?>>Rp. 1.000.000 - Rp. 2.000.000</option>
                                                                <option value="Rp. 2.000.000 - Rp. 4.000.000" <?= ($this->session->flashdata('form_data')['penghasilan_b'] == 'Rp. 2.000.000 - Rp. 4.000.000') ? 'selected' : ''; ?>>Rp. 2.000.000 - Rp. 4.000.000</option>
                                                                <option value="Rp. 4.000.000 - Rp. 20.000.000" <?= ($this->session->flashdata('form_data')['penghasilan_b'] == 'Rp. 4.000.000 - Rp. 20.000.000') ? 'selected' : ''; ?>>Rp. 4.000.000 - Rp. 20.000.000</option>
                                                            </select>
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
                                                            rows="3"><?= $this->session->flashdata('form_data')['alamat_b'] ?? ''; ?></textarea>
                                                    </div>
                                                </div>
                                                <small> <a style="color: red;">*)</a> Wajib Diisi </small>
                                            </div>
                                        </div>
                                    </div>

                    </section>


                    <!-- ------------------------------------------------------------------------ -->
                    <section id="multiple-column-form">
                        <div class="row match-height">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Upload Berkas</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body" style="margin-top: -50px;">
                                            <div class="mb-3">
                                                <label for="foto" class="form-label">Upload Foto 3X4 (.jpg/png/jpeg) <a style="color: red;">**</a></label>
                                                <input class="form-control" type="file" id="foto" name="foto" accept=".jpg,.png,.jpeg" required>
                                                <small> <a style="color: red;">**)</a> Ukuran Maksimal Foto 2mb </small>
                                            </div>

                                            <div class="mb-3">
                                                <label for="kk" class="form-label">Upload KK (.pdf) <a style="color: red;">**</a></label>
                                                <input class="form-control" type="file" id="dokumen_kk" name="dokumen_kk" accept=".pdf" required>
                                                <small> <a style="color: red;">**)</a> Ukuran Maksimal Dokumen KK 2mb </small>
                                            </div>

                                            <div class="mb-3">
                                                <label for="akta" class="form-label">Upload Akta Kelahiran (.pdf) <a style="color: red;">**</a></label>
                                                <input class="form-control" type="file" id="dokumen_akta" name="dokumen_akta" accept=".pdf" required>
                                                <small> <a style="color: red;">**)</a> Ukuran Maksimal Dokumen Akta 2mb </small>
                                            </div>

                                            <!-- <small style="color: greenyellow;"> ● Sebelum klik tombol Simpan Data, pastikan lagi semua data anda BENAR 👌</small> -->
                                            <br>
                                            <div class="col-12">
                                                <div class='form-group'>
                                                    <div class="form-check mandatory">
                                                        <input required type="checkbox" id="checkbox5" class='form-check-input' data-parsley-required="true" data-parsley-error-message="You have to accept our terms and conditions to proceed.">
                                                        <label for="checkbox5" class="form-check-label form-label">Semua data yang saya berikan sudah BENAR.</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary w-100" id="submitButton">
                                                        Simpan Data
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </section>
                    <!-- ------------------------------------------------------------------------ -->

                </div>
            </div>

            <!-- <?php $this->load->view('partials/footer') ?> -->
        </div>
    </div>


    <script>
        // JavaScript untuk mengontrol tombol berdasarkan status checkbox
        document.getElementById("checkbox5").addEventListener("change", function() {
            // Cek jika checkbox dicentang atau tidak
            var submitButton = document.getElementById("submitButton");

            // Jika checkbox dicentang, aktifkan tombol submit, jika tidak, nonaktifkan tombol
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PPDB SD Islam Tompokersan Lumajang</title>
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/header_sdi2.png">






    <link rel="shortcut icon" href="<?= base_url(); ?>assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">



    <link rel="stylesheet" href="<?= base_url(); ?>assets/extensions/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/iconly.css">
</head>

<body>
    <script src="<?= base_url('assets/static/js/initTheme.js'); ?>"></script>
    <div id="app">
        <?php $this->load->view('partials/sidebar'); ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Setting Akun Admin</h3>
                <p class="text-subtitle text-muted">
                    PPDB SD Islam Tompokersan
                </p>
            </div>
            <div class="page-content">

                <form action="<?= base_url('Home/user_edit') ?>" method="post" enctype="multipart/form-data">
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <input type="hidden" name="id_user" value="<?= $user->id_user ?>" />
                                        <input type="hidden" name="oldPassword" value="<?= $user->password ?>" />
                                        <input type="hidden" name="old_view_password" value="<?= $user->view_password ?>" />
                                        <input type="hidden" name="role" value="<?= $user->role ?>" />

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="basicInput">Nama</label>
                                                <input readonly type="text" value="<?= $user->nama ?>" name="nama" class="form-control" id="basicInput">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="basicInput">Email</label>
                                                <input readonly type="text" value="<?= $user->email ?>" name="email" class="form-control" id="basicInput">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="basicInput">Username</label>
                                                <input readonly type="text" value="<?= $user->username ?>" name="username" class="form-control" id="basicInput">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="basicInput">Password Baru</label>
                                                <input required type="password" name="password" class="form-control" id="passwordInput" minlength="8">
                                                <div id="passwordError" style="color: red; display: none;">Password harus minimal 8 karakter</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="basicInput">Masukkan Ulang Password Baru</label>
                                                <input required type="password" name="password2" class="form-control" id="password2Input">
                                                <div id="password2Error" style="color: red; display: none;">Password tidak cocok</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <input style="width: 100%;" disabled id="submitButton" class="btn btn-success" type="submit" name="btn" value="Simpan" />
                    </section>


                </form>

            </div>

            <?php $this->load->view('partials/footer'); ?>
        </div>
    </div>

    <script>
        //swall untuk sukses/gagal isi formulir
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

            <?php if ($this->session->flashdata('tanya')) : ?>
                Swal.fire({
                    icon: "question",
                    title: "Belum Mendaftar?",
                    text: "<?php echo $this->session->flashdata('tanya'); ?>",
                    showCancelButton: true,
                    confirmButtonText: "Daftar Sekarang",
                    cancelButtonText: "Nanti Saja"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?= base_url('FormSiswa') ?>";
                    }
                });
            <?php endif; ?>
        });
    </script>
    <script>
        document.getElementById('passwordInput').addEventListener('input', validatePassword);
        document.getElementById('password2Input').addEventListener('input', validatePassword);

        function validatePassword() {
            var password1 = document.getElementById('passwordInput').value;
            var password2 = document.getElementById('password2Input').value;
            var passwordError = document.getElementById('passwordError');
            var password2Error = document.getElementById('password2Error');
            var submitButton = document.getElementById('submitButton');

            // Validasi password minimal 8 karakter
            if (password1.length < 8) {
                passwordError.style.display = 'block';
            } else {
                passwordError.style.display = 'none';
            }

            // Validasi apakah kedua password cocok
            if (password1 !== password2) {
                password2Error.style.display = 'block';
                submitButton.disabled = true;
            } else {
                password2Error.style.display = 'none';
                submitButton.disabled = false;
            }
        }
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
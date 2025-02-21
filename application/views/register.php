<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/extensions/sweetalert2/sweetalert2.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to right, #094B57, #49E7B2);
            overflow: hidden;
        }

        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 200px;
            height: auto;
        }

        h1 {
            font-size: 2rem;
            color: #fff;
            margin-bottom: 20px;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            padding: 10px 15px;
            font-size: 1rem;
            border: 2px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #49E7B2;
            box-shadow: 0 0 8px rgba(73, 231, 178, 0.5);
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #aaa;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-group input:focus+label,
        .input-group input:not(:placeholder-shown)+label {
            top: -10px;
            left: 10px;
            font-size: 0.8rem;
            color: #49E7B2;
        }

        .btn {
            width: 100%;
            padding: 10px 15px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            background: linear-gradient(to right, #094B57, #49E7B2);
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: linear-gradient(to right, #49E7B2, #094B57);
        }

        .link {
            margin-top: 10px;
            display: block;
            font-size: 0.9rem;
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .link:hover {
            color: #49E7B2;
        }

        .login {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #fff;
        }

        .login a {
            color: #49E7B2;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .login a:hover {
            color: #094B57;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="<?php echo base_url('assets/img/header_sdi.png'); ?>" alt="Logo">
        </div>
        <h1>Register</h1>

        <?php if ($this->session->flashdata('errors')) : ?>
            <div style="color: red;">
                <?php foreach ($this->session->flashdata('errors') as $error) : ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?php echo site_url('Login/register'); ?>" enctype="multipart/form-data">

            <div class="input-group">
                <input type="text" id="fullname" name="nama" placeholder=" " required>
                <label for="fullname">Nama</label>
            </div>
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder=" " required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder=" " required>
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <input type="password" id="passwordInput" name="password" minlength="8" placeholder=" " required>
                <label for="password">Password</label>
                <br>
                <p id="passwordError" style="color: red; display: none;">Password harus minimal 8 karakter</p>
            </div>

            <div class="input-group">
                <input type="password" id="password2Input" name="password2" minlength="8" placeholder=" " required>
                <label for="password">Masukkan Ulang Password</label>
                <p id="password2TidakSama" style="color: red;  display: none;">Password Tidak Sama</p>
            </div>

            <!-- <button type="submit" class="btn">Register</button> -->

            <input disabled id="submitButton" class="btn" type="submit" name="btn" value="Register" />


            <div class="login">
                <span style="color: #fff;">Already have an account?</span>
                <a href="<?php echo site_url('Login/'); ?>">Login here</a>
            </div>
        </form>
    </div>










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
                submitButton.disabled = true;
            } else {
                passwordError.style.display = 'none';
                submitButton.disabled = false;
            }

            // Validasi apakah kedua password cocok
            if (password1 !== password2) {
                password2TidakSama.style.display = 'block';
                submitButton.disabled = true;
            } else {
                password2TidakSama.style.display = 'none';
                submitButton.disabled = false;
            }
        }
    </script>








    <script src="<?= base_url(); ?>assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= base_url(); ?>assets/compiled/js/sweetalert2.js"></script>
    <script src="<?= base_url(); ?>assets/extensions/jquery/jquery.min.js"></script>




</body>

</html>
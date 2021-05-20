<?php

  require 'functions.php';


if ( isset($_POST["register"])) {

    if (registrasi($_POST)> 0) {

        echo "<script>

            alert ('user baru berhasil ditambahkan')
            document.location.href = 'register.php'

              </script>";
    }   else {


        $error = true;

        
    }


}  



?>






<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Halaman Registrasi</h2>

                        <?php if (isset($error)) : ?>
                            <p style="color: red; font-style: italic;">user gagal di tambahkan</p>
                        <?php endif; ?>
                        
                        <div class="form-group">
                            <label for="username"> Username :</label>
                            <input type="text" name="username" id="username">
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" name="password" id="password" required/>
                            </div>
                            <div class="form-group">
                                <label for="password2">Konfirmasi password :</label>
                                <input type="password" name="password2" id="password2" required/>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" name="nama" id="nama">
                        </div>

        
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" name="alamat" id="alamat" required/>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="register" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
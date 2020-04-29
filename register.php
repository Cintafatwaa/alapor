<?php
include_once('koneksi.php');
$database = new database();
if(isset($_POST['register']))
{
  $username =$_POST['username'];
  $password =password_hash($_POST['password'], PASSWORD_DEFAULT);
  $nama = $_POST['nama'];
  $nik = $_POST['nik'];
  $telp = $_POST['telp'];
  if ($database->register($username,$password,$nama,$nik,$telp))
  {
    header('location:login.php');
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>aLapor</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="assets/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="text-center">
                    <h1><font color="pink">a</font>Lapor</h1>
                    <h3>REGISTRASI</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center" >
                <div class="content">
                   <form class="text-left form-validate" action="simpan_masyarakat.php">
                    <div class="form-group-material">
                      <input id="register-username" type="text" name="nik" required data-msg="Tolong Isi NIK Anda" class="input-material">
                      <label for="register-username" class="label-material">Nomor Induk Kependudukan</label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-nama" type="text" name="nama" required data-msg="Tolong Isi Nama Anda" class="input-material">
                      <label for="register-nama" class="label-material">Nama     </label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-username" type="text" name="username" required data-msg="Tolong Isi Username Anda" class="input-material">
                      <label for="register-username" class="label-material">Username     </label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">Password        </label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-telp" type="text" name="telp" required data-msg="Tolong isi Telp Anda" class="input-material">
                      <label for="register-telp" class="label-material">Telp     </label>
                    </div>
                    <div class="form-group terms-conditions text-center">
                      <input id="register-agree" name="register" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register-agree">I agree with the terms and policy</label>
                    </div>
                    <div class="form-group text-center">
                      <input id="register" type="submit" value="Register" class="btn btn-primary">
                    </form>
                    </div>
                    <a href="login.php" class="signup">masuk</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Kembali</a> 
                     <hr>
                  <div class="text-center">
                  <a href="admin/home.php">Masuk Sebagai Admin</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript files-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/front.js"></script>
  </body>
</html>
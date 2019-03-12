<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Puskesmas Munjungan</title>
  <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/logo.png">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() ?>/assets/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>/assets/template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>/assets/template/css/sb-admin.css" rel="stylesheet">
  <style>
    body{
      background: #11894a;
    }
  </style>
</head>

<body class="">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div align="center" class="card-header"><img width="50px" src="<?php echo base_url() ?>/assets/images/logo.png"><br>Puskesmas Munjungan</div>
      <div class="card-body">
        <?php echo form_open('login'); ?>
          
            <div class="form-group">
              <label for="">Nomor Rekam Medis</label>
              <input type="text" class="form-control" id="" placeholder="Nomor Rekam Medis" name="no_rekamedis"  required="">
            </div>

            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" id="" placeholder="Password" name="password" required="">
            </div>

            <button type="submit" class="btn btn-success btn-block">Login</button>
        <?php echo form_close(); ?>
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>/assets/template/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>/assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

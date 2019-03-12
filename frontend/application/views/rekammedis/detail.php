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
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>/assets/template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>/assets/template/css/sb-admin.css" rel="stylesheet">
  <style>
    nav{
      background: #44b34b;
    }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo site_url('user') ?>"><img width="50px" src="<?php echo base_url() ?>/assets/images/logo.png">Puskesmas Munjungan | Pasien <?php echo $nama_pasien ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul style="background: #44b34b;" class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a style="color: white" class="nav-link" href="<?php echo site_url('user') ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" style="color: white" href="<?php echo site_url('rekammedis') ?>">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Rekam Medis</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler" style="background: #11894a;">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" style="color: white" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo site_url('user') ?>">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="<?php echo site_url('rekammedis') ?>">Rekam Medis</a></li>
        <li class="breadcrumb-item active">Detail Rekam Medis</li>
      </ol>
      <!-- <div class="row"> -->
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Riwayat Tindakan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nama Penyakit</th>
                  <th>Keluhan</th>
                  <th>Pemeriksaan Fisik</th>
                  <th>Pemeriksaan Lab</th>
                  <th>Tindakan</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>
              
              <tbody>
                <?php foreach ($tindakan as $key) { ?>
                  <tr>
                    <td><?php echo date("d-m-Y", strtotime($key->tanggal));?></td>
                    <td><?php echo $key->nama_penyakit ?></td>
                    <td><?php echo $key->keluhan ?></td>
                    <td><?php echo $key->pemeriksaan_fisik ?></td>
                    <td><?php echo $key->pemeriksaan_lab ?></td>
                    <td><?php echo $key->nama_tindakan ?></td>
                    <!-- <td><a href="<?php echo site_url('rekammedis/detail/'.$key->no_rawat) ?>" class="btn btn-primary">Detail</a></td> -->
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Data Rekam Medis</div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Resep Obat</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nama Obat</th>
                  <th>Jenis Obat</th>
                  <th>Dosis Aturan Obat</th>
                  <th>Jumlah Obat</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php foreach ($resep as $key) { ?>
                  <tr>
                    <td><?php echo date("d-m-Y", strtotime($key->tanggal));?></td>
                    <td><?php echo $key->nama_obat ?></td>
                    <td><?php echo $key->jenis_obat ?></td>
                    <td><?php echo $key->dosis_aturan_obat ?></td>
                    <td><?php echo $key->jumlah_obat ?></td>
                    <!-- <td><a href="<?php echo site_url('rekammedis/detail/'.$key->no_rawat) ?>" class="btn btn-primary">Detail</a></td> -->
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Data Resep Obat</div>
      </div>
      <!-- </div> -->
    </div>
  </div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Puskesmas Munjungan 2019</small>
        </div>
      </div>
    </footer>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Tekan Logout jika Anda yakin.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="<?php echo site_url('login/logout') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/assets/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/template/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/template/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/assets/template/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url() ?>/assets/template/js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>


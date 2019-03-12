<!doctype html>
<html>
   <head>
      <title>harviacode.com - codeigniter crud generator</title>
      <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
      <style>
         body{
         padding: 15px;
         }
      </style>
      <!-- halo -->
   </head>
   <body>
      <h2 style="margin-top:0px">Tbl_pasien Read</h2>
   </body>
   <div class="table-responsive">
      <table class="table">
         <tr>
            <td>No Ktp</td>
            <td><?php echo $no_ktp; ?></td>
         </tr>
         <tr>
            <td>No Bpjs</td>
            <td><?php echo $no_bpjs; ?></td>
         </tr>
         <tr>
            <td>Nama Pasien</td>
            <td><?php echo $nama_pasien; ?></td>
         </tr>
         <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $jenis_kelamin; ?></td>
         </tr>
         <tr>
            <td>Tempat Lahir</td>
            <td><?php echo $tempat_lahir; ?></td>
         </tr>
         <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $tanggal_lahir; ?></td>
         </tr>
         <tr>
            <td>Alamat</td>
            <td><?php echo $alamat; ?></td>
         </tr>
         <tr>
            <td>Alamat</td>
            <td><?php echo $desa; ?></td>
         </tr>
         <tr>
            <td>Kontak</td>
            <td><?php echo $no_telp; ?></td>
         </tr>
         <tr>
            <td>Password</td>
            <td><?php echo $Password; ?></td>
         </tr>
         <tr>
            <td></td>
            <td><a href="<?php echo site_url('pasien') ?>" class="btn btn-default">Cancel</a></td>
         </tr>
      </table>
   </div>
   </body>
</html>
<footer class="site-footer">
   <div class="text-center">
      <p>
         &copy; Copyrights <strong>PT DILEM WILIS 2019</strong>. All Rights Reserved
      </p>
      <div class="credits">             
      </div>
   </div>
</footer>
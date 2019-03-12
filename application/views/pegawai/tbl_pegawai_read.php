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
      <h2 style="margin-top:0px">Tbl_pegawai Read</h2>
      <div class="table-responsive">
         <table class="table">
            <tr>
               <td>Nama Pegawai</td>
               <td><?php echo $nama_pegawai; ?></td>
            </tr>
            <tr>
               <td>Jenis Kelamin</td>
               <td><?php echo $jenis_kelamin; ?></td>
            </tr>
            <tr>
               <td>Npwp</td>
               <td><?php echo $npwp; ?></td>
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
               <td>Id Jabatan</td>
               <td><?php echo $id_jabatan; ?></td>
            </tr>
            <tr>
               <td>Id Bidang</td>
               <td><?php echo $id_bidang; ?></td>
            </tr>
            <tr>
               <td>Kontak</td>
               <td><?php echo $no_telp; ?></td>
            </tr>
            <tr>
               <td>Pendidikan</td>
               <td><?php echo $pendidikan; ?></td>
            </tr>
            <tr>
               <td>No Kepeg</td>
               <td><?php echo $no_kepeg; ?></td>
            </tr>
            <tr>
               <td>Status Kepeg</td>
               <td><?php echo $status_kepeg; ?></td>
            </tr>
            <tr>
               <td>NIK</td>
               <td><?php echo $nik; ?></td>
            </tr>
            <tr>
               <td>Alamat</td>
               <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
            <td>Images</td>
            <td><?php echo $images; ?></td>
            </tr>
            <tr>
               <td></td>
               <td><a href="<?php echo site_url('pegawai') ?>" class="btn btn-default">Cancel</a></td>
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
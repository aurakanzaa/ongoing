<!doctype html>
<html>
   <head>
      <title>harviacode.com - codeigniter crud generator</title>
      <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
      <style>
         .word-table {
         border:1px solid black !important; 
         border-collapse: collapse !important;
         width: 100%;
         }
         .word-table tr th, .word-table tr td{
         border:1px solid black !important; 
         padding: 5px 10px;
         }
      </style>
      <!-- halo -->
   </head>
   <body>
      <h2>Tbl_pegawai List</h2>
      <div class="table-responsive">
         <table class="word-table" style="margin-bottom: 10px">
            <tr>
               <th>No</th>
               <th>Nama Pegawai</th>
               <th>Jenis Kelamin</th>
               <th>Npwp</th>
               <th>Tempat Lahir</th>
               <th>Tanggal Lahir</th>
               <th>Id Jabatan</th>
               <th>Id Bidang</th>
               <th>Kontak</th>
               
            </tr>
            <?php
               foreach ($pegawai_data as $pegawai)
               {
                   ?>
            <tr>
               <td><?php echo ++$start ?></td>
               <td><?php echo $pegawai->nama_pegawai ?></td>
               <td><?php echo $pegawai->jenis_kelamin ?></td>
               <td><?php echo $pegawai->npwp ?></td>
               <td><?php echo $pegawai->tempat_lahir ?></td>
               <td><?php echo $pegawai->tanggal_lahir ?></td>
               <td><?php echo $pegawai->id_jabatan ?></td>
               <td><?php echo $pegawai->id_bidang ?></td>
               <td><?php echo $pegawai->no_telp ?></td>
               
            </tr>
            <?php
               }
               ?>
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
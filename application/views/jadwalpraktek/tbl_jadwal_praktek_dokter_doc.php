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
      <h2>Tbl_jadwal_praktek_dokter List</h2>
      <div class="table-responsive">
         <table class="word-table" style="margin-bottom: 10px">
            <tr>
               <th>No</th>
               <th>Hari</th>
               <th>Loket</th>
               <th>Pelayanan</th>
            </tr>
            <?php
               foreach ($jadwalpraktek_data as $jadwalpraktek)
               {
                   ?>
            <tr>
               <td><?php echo ++$start ?></td>
               <td><?php echo $jadwalpraktek->hari ?></td>
               <td><?php echo $jadwalpraktek->loket ?></td>
               <td><?php echo $jadwalpraktek->pelayanan ?></td>
            </tr>
            <?php
               }
               ?>
         </table>
      </div>
   </body>
</html>
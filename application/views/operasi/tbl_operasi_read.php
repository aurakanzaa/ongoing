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
      <h2 style="margin-top:0px">Tbl_operasi Read</h2>
      <div class="table-responsive">
         <table class="table">
            <tr>
               <td>Nama Operasi</td>
               <td><?php echo $nama_operasi; ?></td>
            </tr>
            <tr>
               <td>Biaya</td>
               <td><?php echo $biaya; ?></td>
            </tr>
            <tr>
               <td>Tindakan Oleh</td>
               <td><?php echo $tindakan_oleh; ?></td>
            </tr>
            <tr>
               <td></td>
               <td><a href="<?php echo site_url('operasi') ?>" class="btn btn-default">Cancel</a></td>
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
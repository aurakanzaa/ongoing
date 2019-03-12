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
   </head>
   <body>
      <h2 style="margin-top:0px">Tbl_stok_obat Read</h2>
      <table class="table">
         <tr>
            <td>Jumlah</td>
            <td><?php echo $jumlah; ?></td>
         </tr>
         <tr>
            <td></td>
            <td><a href="<?php echo site_url('stokobat') ?>" class="btn btn-default">Cancel</a></td>
         </tr>
      </table>
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
<div class="content-wrapper">
   <section class="content">
   <div class="col-md-12">
      <div class="box box-warning box-solid">
         <div class="box-header with-border">
            <h3 class="box-title">CETAK DATA BEDASARKAN TANGGAL</h3>
         </div>
         <!-- halo -->
         <?php echo 
            form_open('pendaftaran/cetaktanggal');
            ?>
         <div class="table-responsive">
            <table class='table table-bordered'>
               <tr>
                  <td width='200'>Dari Tanggal <?php echo form_error('tanggal') ?></td>
                  <td><input type="date" class="form-control" name="tanggal" id="tanggal" required />
                     <input type="hidden" class="form-control" name="hidden" id="tanggal" value="Hidden" />
                  </td>
               </tr>
               <tr>
                  <td width='200'>Sampai Tanggal <?php echo form_error('tanggal2') ?></td>
                  <td><input type="date" class="form-control" name="tanggal2" id="tanggal2" required /></td>
               </tr>
               <tr>
                  <td colspan="2"><button type="submit" class="btn btn-primary pull-right">Cetak</button></td>
               </tr>
            </table>
         </div>
         <?php echo 
            form_close();
            ?>
      </div>
   </div>
</div>
<footer class="site-footer">
   <div class="text-center">
      <p>
         &copy; Copyrights <strong>PT DILEM WILIS 2019</strong>. All Rights Reserved
      </p>
      <div class="credits">             
      </div>
   </div>
</footer>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">INPUT DATA JADWAL PELAYANAN RAWAT JALAN</h3>
      </div>
      <form action="<?php echo $action; ?>" method="post">
         <div class="table-responsive">
            <table class='table table-bordered'>
               <tr>
                  <td width='200'>Hari <?php echo form_error('hari') ?></td>
                  <td>
                     <?php echo form_dropdown('hari', array('Senin - Kamis' => 'Senin - Kamis', 'Jumat' => 'Jumat', 'Sabtu' => 'Sabtu'), $hari, array('class' => 'form-control')); ?>
                  </td>
               </tr>
               <tr>
                  <td width='200'>Loket <?php echo form_error('loket') ?></td>
                  <td><input type="text" class="form-control" name="loket" id="loket" placeholder="Loket" value="<?php echo $loket; ?>" /></td>
               </tr>
               <tr>
                  <td width='200'>Pelayanan <?php echo form_error('pelayanan') ?></td>
                  <td><input type="text" class="form-control" name="pelayanan" id="pelayanan" placeholder="Pelayanan" value="<?php echo $pelayanan; ?>" /></td>
               </tr>
               <tr>
                  <td></td>
                  <td><input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal; ?>" /> 
                     <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                     <a href="<?php echo site_url('jadwalpraktek') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
                  </td>
               </tr>
            </table>
         </div>
      </form>
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
<script type="text/javascript">
   $(function() {
       //autocomplete
       $("#kode_dokter").autocomplete({
           source: "<?php echo base_url()?>/index.php/jadwalpraktek/autocomplete",
           minLength: 1
       });              
   });
</script>
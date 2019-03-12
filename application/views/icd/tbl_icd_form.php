<div class="content-wrapper">
   <!-- halo -->
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">INPUT DATA KODE ICD</h3>
      </div>
      <form action="<?php echo $action; ?>" method="post">
         <table class='table table-bordered'>
            <tr>
               <td width='200'>Kode ICD <?php echo form_error('kode_icd') ?></td>
               <td><input type="text" class="form-control" name="kode_icd" id="kode_icd" placeholder="Kode ICD" value="<?php echo $kode_icd; ?>" /></td>
            </tr>
            <tr>
               <td width='200'>Deskripsi <?php echo form_error('deskripsi') ?></td>
               <td><input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?php echo $deskripsi; ?>" /></td>
            </tr>
            <tr>
               <td></td>
               <td><input type="hidden" name="id_icd" value="<?php echo $id_icd; ?>" /> 
                  <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                  <a href="<?php echo site_url('dataicd') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
               </td>
            </tr>
         </table>
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
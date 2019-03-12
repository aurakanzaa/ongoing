<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">FILTER TINDAKAN BERDASARKAN POLI</h3>
      </div>
      <form action="filter_action" method="post">
         <table class='table table-bordered'>
            <tr>
               <td width='200'>Nama Poli <?php echo form_error('id_poliklinik') ?></td>
               <td>
                  <select name="id_poli" id="inputId_poli" class="form-control">
                     <?php foreach ($poli as $key) { ?>
                        <option value="<?php echo $key->id_poli ?>"><?php echo $key->nama_poli ?></option>
                     <?php } ?>
                  </select>
                  <input type="hidden" name="hidden" id="inputHidden" class="form-control" value="Hidden">
               </td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Filter</button> 
                  <a href="<?php echo site_url('tindakan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
               </td>
            </tr>
         </table>
      </form>
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
<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">INPUT DATA PENANGGUNG</h3>
      </div>
      <form action="<?php echo $action; ?>" method="post">
         <table class='table table-bordered'>
            <tr>
               <td width='200'>Kode Ruang <?php echo form_error('kode_ruang') ?></td>
               <td><input type="text" class="form-control" name="kode_ruang" id="kode_ruang" placeholder="Kode Ruang" value="<?php echo $kode_ruang; ?>" /></td>
            </tr>
            <tr>
               <td width='200'>Nama Penanggung <?php echo form_error('penanggung') ?></td>
               <td><input type="text" class="form-control" name="penanggung" id="penanggung" placeholder="Nama Penanggung" value="<?php echo $penanggung; ?>" /></td>
            </tr>
            <tr>
               <td width='200'>Jabatan <?php echo form_error('no_telp') ?></td>
               <td><input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" /></td>
            </tr>
            <tr>
               <td width='200'>No Telpon <?php echo form_error('no_telp') ?></td>
               <td><input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telpon" value="<?php echo $no_telp; ?>" /></td>
            </tr>
            <tr>
               <td></td>
               <td> 
                  <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                  <a href="<?php echo site_url('penanggung') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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
<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">INPUT DATA DIAGNOSA PENYAKIT</h3>
      </div>
      <form action="<?php echo $action; ?>" method="post">
         <div class="table-responsive">
            <table class='table table-bordered'>
               <tr>
                  <td width='200'>Kode Diagnosa <?php echo form_error('kode_diagnosa') ?></td>
                  <td><input type="text" class="form-control" name="kode_diagnosa" id="kode_diagnosa" placeholder="Kode Diagnosa" value="<?php echo $kode_diagnosa; ?>" /></td>
               </tr>
               <tr>
                  <td width='200'>Nama Penyakit <?php echo form_error('nama_penyakit') ?></td>
                  <td><input type="text" class="form-control" name="nama_penyakit" id="nama_penyakit" placeholder="Nama Penyakit" value="<?php echo $nama_penyakit; ?>" /></td>
               </tr>
               <tr>
                  <td width='200'>Ciri Ciri Penyakit <?php echo form_error('ciri_ciri_penyakit') ?></td>
                  <td> <textarea class="form-control" rows="3" name="ciri_ciri_penyakit" id="ciri_ciri_penyakit" placeholder="Ciri Ciri Penyakit"><?php echo $ciri_ciri_penyakit; ?></textarea></td>
               </tr>
               <tr>
                  <td width='200'>Keterangan <?php echo form_error('keterangan') ?></td>
                  <td> <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea></td>
               </tr>
               <tr>
                  <td width='200'>Ciri Ciri Umum <?php echo form_error('ciri_ciri_umum') ?></td>
                  <td> <textarea class="form-control" rows="3" name="ciri_ciri_umum" id="ciri_ciri_umum" placeholder="Ciri Ciri Umum"><?php echo $ciri_ciri_umum; ?></textarea></td>
               </tr>
               <tr>
                  <td width='200'>Nama Poli <?php echo form_error('nama_poli') ?></td>
                  <td><select name="nama_poli" id="inputNama_poli" class="form-control" required="required">
                     <?php foreach ($nama_poli as $key) { ?>
                        <option value="<?php echo $key->nama_poli ?>"><?php echo $key->nama_poli ?></option>
                  <?php } ?>
                  </select></td>
               </tr>
               <tr>
                  <td></td>
                  <td>
                     <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                     <a href="<?php echo site_url('diagnosa') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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
<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">INPUT DATA PEGAWAI</h3>
      </div>
      <?php echo form_open_multipart($action);
      ?>
         <div class="table-responsive">
            <table class='table table-bordered'>
               <!-- halo -->
               <tr>
                  <td width='200'>NIP <?php echo form_error('id_pegawai') ?></td>
                  <td><input type="text" class="form-control" name="id_pegawai" id="id_pegawai" placeholder="NIP" value="<?php echo $id_pegawai; ?>" /></td>
               </tr>
               <tr>
                  <td width='200'>Nama Pegawai <?php echo form_error('nama_pegawai') ?></td>
                  <td><input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" value="<?php echo $nama_pegawai; ?>" /></td>
               </tr>
               <tr>
                  <td width='200'>Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></td>
                  <td>
                     <?php echo form_dropdown('jenis_kelamin', array('Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'), $jenis_kelamin, array('class' => "form-control")); ?>
                  </td>
               </tr>
               <tr>
                  <td width='200'>Npwp <?php echo form_error('npwp') ?></td>
                  <td><input type="text" class="form-control" name="npwp" id="npwp" placeholder="Npwp" value="<?php echo $npwp; ?>" /></td>
               </tr>
               <tr>
                  <td width='200'>Tempat Lahir <?php echo form_error('tempat_lahir') ?></td>
                  <td><input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" /></td>
               </tr>
               <tr>
                  <td width='200'>Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></td>
                  <td><input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" /></td>
               </tr>
               <tr>
                  <td width='200'>Jabatan <?php echo form_error('id_jabatan') ?></td>
                  <td>
                     <?php echo cmb_dinamis('id_jabatan', 'tbl_jabatan', 'nama_jabatan', 'id_jabatan', $id_jabatan); ?>
                  </td>
               </tr>
               <tr>
                  <td width='200'>Bidang <?php echo form_error('id_bidang') ?></td>
                  <td>
                     <?php echo cmb_dinamis('id_bidang', 'tbl_bidang', 'nama_bidang', 'id_bidang', $id_bidang); ?>
                  </td>
               </tr>
               <tr>
                  <td width='200'>Kontak <?php echo form_error('no_telp') ?></td>
                  <td><input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Kontak" value="<?php echo $no_telp; ?>" /></td>
               </tr>

               <tr>
                  <td width='200'>Pendidikan <?php echo form_error('pendidikan') ?></td>
                  <td><input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan" value="<?php echo $pendidikan; ?>" /></td>
               </tr>

               <tr>
                  <td width='200'>No Kepeg <?php echo form_error('no_kepeg') ?></td>
                  <td><input type="text" class="form-control" name="no_kepeg" id="no_kepeg" placeholder="No Kepegawaian" value="<?php echo $no_kepeg; ?>" /></td>
               </tr>

               <tr>
                  <td width='200'>Status Kepegawaian <?php echo form_error('status_kepeg') ?></td>
                  <td>
                     <?php echo form_dropdown('status_kepeg', array('PNS' => 'PNS', 'Honorer' => 'Honorer'), $status_kepeg, array('class' => "form-control")); ?>
                  </td>
               </tr>

               <tr>
                  <td width='200'>NIK <?php echo form_error('nik') ?></td>
                  <td><input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" value="<?php echo $nik; ?>" /></td>
               </tr>

               <tr>
                  <td width='200'>Alamat <?php echo form_error('alamat') ?></td>
                  <td><input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" /></td>
               </tr>

               <tr>
               <td width='200'>Foto Profile</td>
               <td> <input type="file" class="form-control" id="fileToUpload" name="fileToUpload"></td>
            </tr>

               <tr>
                  <td></td>
                  <td> 
                     <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                     <a href="<?php echo site_url('pegawai') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
                     <a href="<?php echo site_url('pegawai/cetakkartu/'.$id_pegawai) ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Cetak</a>
                
                  </td>

               </tr>
            </table>
         </div>
      <?php echo form_close(); ?>
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
<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">EDIT DATA TINDAKAN</h3>
      </div>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
         <!-- halo -->
         <table class="table table-bordered ">
               <input value="<?php echo $no_rawat ?>" name="no_rawat" type="hidden">
               <input value="<?php echo $no_rekamedis ?>" name="no_rekamedis" type="hidden">
               <tr>
                  <!-- <td width="200">ID Poli Tujuan </td>
                  <td> -->
                     <input type="hidden" name="id_poli" id="id_poli" class="form-control" required  placeholder="Masukkan Nama Poli" value="<?php echo $id_poli ?>" readonly>
                     <input type="hidden" name="no_rekamedis" id="no_rekamedis" class="form-control" required  placeholder="Masukkan Nama Poli" value="<?php echo $no_rekamedis ?>" readonly>
                     <input type="hidden" name="id_riwayat_tindakan" id="id_riwayat_tindakan" class="form-control" required  placeholder="Masukkan Nama Poli" value="<?php echo $id_riwayat_tindakan ?>" readonly>
                  <!-- </td> -->
               </tr>
               <tr>
                  <td>Kode Diagnosa Penyakit</td>
                  <td><input type="text" name="kode_penyakit" class="form-control ui-autocomplete-input" placeholder="Masukkan Nama Penyakit" id="nama_penyakit" onkeyup="auto_nama_penyakit()" value="<?php echo $kode_penyakit ?>" required></td>
               </tr>
               <tr>
                  <td>Keluhan</td>
                  <td><input type="text" name="keluhan" class="form-control" placeholder="Masukkan Keluhan" id="keluhan" value="<?php echo $keluhan ?>" required></td>
               </tr>
               <tr>
                  <td>Pemeriksaan Fisik</td>
                  <td><input type="text" name="pemeriksaan_fisik" class="form-control" placeholder="Pemeriksaan Fisik" id="pemeriksaan_fisik" value="<?php echo $pemeriksaan_fisik ?>" required></td>
               </tr>
               <tr>
                  <td>Pemeriksaan Lab</td>
                  <td><input type="text" name="pemeriksaan_lab" class="form-control" placeholder="Pemeriksaan Lab" id="pemeriksaan_lab" value="<?php echo $pemeriksaan_lab ?>" required></td>
               </tr>
               <tr>
                  <td>Kode Tindakan</td>
                  <td><input type="text" name="kode_tindakan" class="form-control ui-autocomplete-input" placeholder="Masukkan Nama Tindakan" id="nama_tindakan" onkeyup="auto_nama_tindakan()" value="<?php echo $kode_tindakan ?>" required></td>
               </tr>
               <tr>
                  <td>Kode ICD 10</td>
                  <td><input type="text" name="kode_icd" class="form-control ui-autocomplete-input" placeholder="Masukkan Kode ICD 10" id="kode_icd" onkeyup="auto_kode_icd()" value="<?php echo $kode_icd ?>" required></td>
               </tr>
               <tr>
                    <td colspan="2">
                    <button type="submit" name="submit" class="btn btn-primary">Edit Data</button>
                    </td>
               </tr>
            </table>
      </form>
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
</div>
</div>
<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box box-warning box-solid">
               <div class="box-header">
                  <h3 class="box-title">BIODATA PASIEN</h3>
               </div>
               <div class="box-body">
                  <!-- halo -->
                  <table class="table table-bordered" style="margin-bottom: 10px">
                     <tr>
                        <td width="200">No Rawat</td>
                        <td><?php echo $pendaftaran['no_rawat'] ?></td>
                     </tr>
                     <tr>
                        <td>No Rekamedis</td>
                        <td><?php echo $pendaftaran['no_rekamedis'] ?></td>
                     </tr>
                     <tr>
                        <td>Nama Pasien</td>
                        <td><?php echo $pendaftaran['nama_pasien'] ?></td>
                     </tr>
                     <tr>
                        <td>Status Periksa</td>
                        <td><?php echo $pendaftaran['status_periksa'] ?></td>
                     </tr>
                     <tr>
                        <td>Status Pasien</td>
                        <td><?php echo $pendaftaran['status_pasien'] ?></td>
                     </tr>
                  </table>
                  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltindakan">Input Tindakan</button> -->
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalresep">Input Resep Obat</button>
                  <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalrujukan">Input Rujukan</button> -->
                  <!-- sedang tidak butuuh -->
                  <!-- <?php echo anchor('tindakanberobat/cetakrekamedis/'.$no_rawat, 'Cetak Rekam Medis', "class='btn btn-danger' target='new'"); ?> -->
                  <?php echo anchor('kasir/cetakresepobat/'.$pendaftaran['no_rawat'], 'Cetak Resep Obat', "class='btn btn-success' target='new'"); ?>
                  <?php echo anchor('kasir/cetaknota/'.$pendaftaran['no_rawat'], 'Cetak Nota Pembayaran', "class='btn btn-primary' target='new'"); ?>
                  <?php if($pendaftaran['status_periksa'] == 'Sudah Diperiksa'){ ?>
                     <?php echo anchor('kasir/bayar/'.$pendaftaran['no_rawat'], 'Bayar', "class='btn btn-danger' target='new'"); ?>
                  <?php }?>
                  <!-- end -->
                  <!-- <?php echo anchor('tindakanberobat/cetakrujukan/'.$no_rawat, 'Cetak Rujukan', "class='btn btn-info' target='new'"); ?>
                  <a href="<?php echo site_url('tindakanberobat/rawat_inap/'.$pendaftaran['no_rawat']) ?>" class="btn btn-warning">Rawat Inap</a>
                  <?php if ($pendaftaran['status_periksa'] == 'Belum Diperiksa'): ?>
                    <a href="<?php echo site_url('tindakanberobat/checkout/'.$pendaftaran['no_rawat']) ?>" class="btn btn-danger">Checkout</a>
                  <?php endif ?> -->
               </div>
            </div>
         </div>
         <!-- <div class="col-xs-12">
            <div class="box box-warning box-solid">
               <div class="box-header">
                  <h3 class="box-title">RIWAYAT TINDAKAN</h3>
               </div>
               <div class="box-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" style="margin-bottom: 10px">
                        <tr>
                           <th>No</th>
                           <th>Poli</th>
                           <th>Penyakit</th>
                           <th>Tindakan</th>
                           <th>Hasil Periksa</th>
                           <th>Nama Obat</th>
                        </tr>
                        <?php  
                           $no = 1;
                           foreach ($data_tindakan as $dt){
                              echo "<tr>
                                                   <td>$no</td>
                                                   <td>$dt->nama_poli</td>
                                                   <td>$dt->nama_penyakit</td>
                                                   <td>$dt->nama_tindakan</td>
                                                   <td>$dt->hasil_periksa</td>
                                                   <td>$dt->nama_obat</td></tr>";
                                               $no++;
                           }
                           ?>
                     </table>
                  </div>
               </div>
            </div>
         </div> -->

         <!-- tindakan -->
         <div class="col-xs-12">
            <div class="box box-warning box-solid">
               <div class="box-header">
                  <h3 class="box-title">BIAYA TINDAKAN</h3>
               </div>
               <div class="box-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" style="margin-bottom: 10px">
                        <tr>
                           <th>No</th>
                           <th>Nama Tindakan</th>
                           <!-- <th>nama obat</th> -->
                           <th>Harga</th>
                           <th>Total</th>
                        </tr>
                        <?php  
                           $no = 1;
                           // var_dump($data_resep);
                           $total = 0;
                           $ttltindakan = 0;
                           foreach ($data_tin as $dt) {
                              $total = $dt->harga;
                              $ttltindakan = $ttltindakan + $total;
                              // $ttlresep = $ttlresep + $total;
                               echo "<tr>
                               <td>$no</td>
                               <td>$dt->nama_tindakan</td>
                               
                               <td>$dt->harga</td>
                               <td>$total</td>
                               </tr>";
                               $no++;
                           }
                           ?>
                           <tr>
                              <td colspan="3"><p class="pull-right"><b>Subtotal</b></p></td>
                              <td><?php if($pendaftaran['status_pasien'] == "Umum"){
                                 echo $ttltindakan;
                              }
                              else{
                                 echo $ttltindakan = "0";
                              }?></td>
                           </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- tindakan end -->

         <!-- resep obat -->
         <div class="col-xs-12">
            <div class="box box-warning box-solid">
               <div class="box-header">
                  <h3 class="box-title">BIAYA RESEP OBAT</h3>
               </div>
               <div class="box-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" style="margin-bottom: 10px">
                        <tr>
                           <th>No</th>
                           <th>Nama Obat</th>
                           <th>Jumlah Obat</th>
                           <th>Harga</th>
                           <th>Total</th>
                        </tr>
                        <?php  
                           $no = 1;
                           // var_dump($data_resep);
                           $total = 0;
                           $ttlresep = 0;
                           foreach ($data_resep as $dr) {
                              $total = $dr->jumlah_obat * $dr->harga_jual;
                              // $ttlresep = $ttlresep + $total;
                               echo "<tr>
                               <td>$no</td>
                               <td>$dr->nama_obat</td>
                               <td>$dr->jumlah_obat</td>
                               <td>$dr->harga_jual</td>
                               <td>$total</td>
                               </tr>";
                               $no++;
                           }
                           ?>
                           <tr>
                              <td colspan="4"><p class="pull-right"><b>Subtotal</b></p></td>
                              <td><?php if($pendaftaran['status_pasien'] == "Umum"){
                              echo $ttlresep;
                              }
                              else{
                                 echo $ttlresep = "0";
                              }?></td>
                           </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- resep obat end -->

        <!-- rawat iniap -->
         <div class="col-xs-12">
            <div class="box box-warning box-solid">
               <div class="box-header">
                  <h3 class="box-title">BIAYA KAMAR RAWAT INAP</h3>
               </div>
               <div class="box-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" style="margin-bottom: 10px">
                        <tr>
                           <th>No</th>
                           <th>Nama Kamar</th>
                           <th>Kelas Kamar</th>
                           <th>Tanggal Masuk</th>
                           <th>Tanggal Keluar</th>
                           <th>Harga / hari</th>
                           <th>Total</th>
                        </tr>
                        <?php  
                           $no = 1;
                           // var_dump($data_resep);
                           $ttlkamar = 0;
                           $ttlresep = 0;
                           foreach ($data_kamar as $dr) {
                              // $total = $dr->jumlah_obat * $dr->harga_jual;
                              // $ttlresep = $ttlresep + $total;
                              $date1=date_create($dr->tanggal_masuk);
                              $date2=date_create($dr->tanggal_keluar);
                              $diff=date_diff($date1,$date2);
                              $hari = $diff->format("%a");
                              if ($pendaftaran['status_pasien'] == "BPJS") {
                                 $ttlkamar = 0;
                              }else{
                                 $ttlkamar = $dr->harga * $hari;
                              }
                               echo "<tr>
                               <td>$no</td>
                               <td>$dr->nama_kamar</td>
                               <td>$dr->kelas_kamar</td>
                               <td>".date_format(date_create($dr->tanggal_masuk),'d-m-Y')."</td>
                               <td>".date_format(date_create($dr->tanggal_keluar),'d-m-Y')."</td>
                               <td>$dr->harga</td>
                               <td>$ttlkamar</td>
                               </tr>";
                               $no++;
                           }
                           ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- rawat inap end -->

         <div class="col-xs-12">
            <div class="box box-warning box-solid">
               <div class="box-header">
                  <h3 class="box-title">BIAYA PENDAFTARAN</h3>
               </div>
               <div class="box-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" style="margin-bottom: 10px">
                        <tr>
                           <th>Biaya Pendaftaran</th>
                           <td><?php if($pendaftaran['status_pasien'] == "Umum"){
                              echo $ttlpendaftaran = "10000";
                              }
                              else{
                                 echo $ttlpendaftaran = "0";
                              }?></td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>

          <div class="col-xs-12">
            <div class="box box-warning box-solid">
               <div class="box-header">
                  <h3 class="box-title">Harga Total</h3>
               </div>
               <div class="box-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" style="margin-bottom: 10px">
                        <tr>
                           <th>Harga Total</th>
                           <td><?php  
                           echo $totalharga = $ttlresep + $ttlkamar + $ttlpendaftaran + $ttltindakan;
                           ?></td>
                        </tr>
                     </table>
                  </div>
               </div>
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
   </section>
</div>
<div class="modal fade" id="modaltindakan" tabindex="-1" role="dialog" aria-labelledby="modaltindakanLabel">
   <div class="modal-dialog modal-lg" role="dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden ="true">&times;</span></button> <!--membuat tombol tutup (close) -->
            <h4 class="modal-title" id="modaltindakanLabel">Input Tindakan</h4>
         </div>
         <div class="modal-body">
            <?php echo form_open('tindakanberobat/periksa_action'); ?>
            <table class="table table-bordered ">
               <input value="<?php echo $no_rawat ?>" name="no_rawat" type="hidden">
               <input value="<?php echo $pendaftaran['no_rekamedis'] ?>" name="no_rekamedis" type="hidden">
               <tr>
                  <td width="200">Poli Tujuan </td>
                  <td>
                     <input type="text" name="nama_poli" id="nama_poli" class="form-control" required  placeholder="Masukkan Nama Poli" value="<?php echo $baca_poli['nama_poli'] ?>" readonly>
                  </td>
               </tr>
               <tr>
                  <td>Nama Penyakit</td>
                  <td><input type="text" name="nama_penyakit" class="form-control ui-autocomplete-input" placeholder="Masukkan Nama Penyakit" id="nama_penyakit" onkeyup="auto_nama_penyakit()" required></td>
               </tr>
               <tr>
                  <td>Nama Tindakan</td>
                  <td><input type="text" name="nama_tindakan" class="form-control ui-autocomplete-input" placeholder="Masukkan Nama Tindakan" id="nama_tindakan" onkeyup="auto_nama_tindakan()" required></td>
               </tr>
               <tr>
                  <td>Hasil Periksa</td>
                  <td><input type="text" name="hasil_periksa"  placeholder="Masukkan Hasil Periksa" id="hasil_periksa" class="form-control"></td>
               </tr>
               <tr>
                  <td>Nama Obat</td>
                  <td><input type="text" name="nama_obat" class="form-control" id="nama_obat" required placeholder="Masukkan Nama Obat" onkeyup="autonamaobat()"></td>
               </tr>
            </table>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
         </div>
      </div>
      <?php echo form_close(); ?>
   </div>
</div>
<div class="modal fade" id="modalresep" tabindex="-1" role="dialog" aria-labelledby="modaltindakanLabel">
   <div class="modal-dialog modal-lg" role="dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden ="true">&times;</span></button> <!--membuat tombol tutup (close) -->
            <h4 class="modal-title" id="modaltindakanLabel">Input Resep</h4>
         </div>
         <div class="modal-body">
            <?php echo form_open('kasir/resep_action/'.$this->uri->segment(3).'/'.$pendaftaran['no_rekamedis']); ?>
            <table class="table table-bordered ">
               <input value="<?php echo noResepOtomatis() ?>" name="kode_resep" type="hidden">
               <input value="<?php echo $no_rawat ?>" name="no_rawat" type="hidden">
               <input value="<?php echo $pendaftaran['no_rekamedis'] ?>" name="no_rekamedis" type="hidden">
               <tr>
                  <td>Nama Obat</td>
                  <td>
                     <input type="text" name="nama_obats" class="form-control" id="nama_obats" required placeholder="Masukkan Nama Obat" onkeyup="autonamaobats()" > 
                     <!--<?php echo datalist_dinamis('test', 'tbl_obat', 'nama_obat') ?> -->
                  </td>
               </tr>
               <tr>
                  <td>Jenis Obat</td>
                  <td><input type="text" name="jenis_obat"  placeholder="Masukkan Jenis Obat" id="jenis_obat" class="form-control"></td>
               </tr>
               <tr>
                  <td>Dosis Obat dan Aturan</td>
                  <td><input type="text" name="dosis_aturan_obat"  placeholder="Masukkan Dosis obat dan Aturan " id="dosis_aturan_obat" class="form-control"></td>
               </tr>
               <tr>
                  <td>Jumlah Obat</td>
                  <td><input type="text" name="jumlah_obat"  placeholder="Masukkan Jumlah Obat" id="jumlah_obat" class="form-control"></td>
               </tr>
            </table>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
         </div>
      </div>
      <?php echo form_close(); ?>
   </div>
</div>
<div class="modal fade" id="modalrujukan" tabindex="-1" role="dialog" aria-labelledby="modalrujukanLabel">
   <div class="modal-dialog modal-lg" role="dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden ="true">&times;</span></button> <!--membuat tombol tutup (close) -->
            <h4 class="modal-title" id="modalrujukanLabel">Input Rujukan</h4>
         </div>
         <div class="modal-body">
            <?php echo form_open('tindakanberobat/rujukan_action'); ?>
            <table class="table table-bordered ">
               <input value="<?php echo kodeRujukOtomatis() ?>" name="kode_rujukan" type="hidden">
               <input value="<?php echo $no_rawat ?>" name="no_rawat" type="hidden">
               <input value="<?php echo "R-".date('Ymd')."-".kodeRujukOtomatis() ?>" name="no_rujukan" type="hidden">
               <tr>
                  <td>Nama Pasien</td>
                  <td>
                     <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" required placeholder="Masukkan Nama Pasien" value="<?php echo $pendaftaran['nama_pasien'] ?>" readonly > 
                  </td>
               </tr>
               <tr>
                  <td>Nama Penyakit</td>
                  <td><input type="text" name="nama_penyakitz" placeholder="Masukkan Nama Penyakit" id="nama_penyakitz" class="form-control" onkeyup="PenyakitAuto()"></td>
               </tr>
               <tr>
                  <td>Diagnosa</td>
                  <td><input type="text" name="diagnosa"  placeholder="Masukkan Diagnosa" id="diagnosa" class="form-control"></td>
               </tr>
               <tr>
                  <td>Nama Rumah Sakit</td>
                  <td><input type="text" name="nama_rumah_sakit"  placeholder="Masukkan Nama Rumah Sakit" id="nama_rumah_sakit" class="form-control"></td>
               </tr>
               <tr>
                  <td>Poli Tujuan</td>
                  <td><input type="text" name="poli_tujuan"  placeholder="Masukkan Poli Tujuan" id="poli_tujuan" class="form-control"></td>
               </tr>
            </table>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
         </div>
      </div>
      <?php echo form_close(); ?>
   </div>
</div>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
   function auto_nama_penyakit(){
        //autocomplete
       $("#nama_penyakit").autocomplete({
           source: "<?php echo base_url() ?>index.php/tindakanberobat/autocompletePenyakit",
           minLength: 1
       });
   }
   
   function PenyakitAuto(){
        //autocomplete
       $("#nama_penyakitz").autocomplete({
           source: "<?php echo base_url() ?>index.php/tindakanberobat/PenyakitAuto",
           minLength: 1
       });
   }
   
   function autonamaobat(){
       //autocomplete
       $("#nama_obat").autocomplete({
           source: "<?php echo base_url() ?>index.php/tindakanberobat/autocompletemedicine",
           minLength: 1
       });
   }
   
   function autonamaobats(){
       //autocomplete
       $("#nama_obats").autocomplete({
           source: "<?php echo base_url() ?>index.php/tindakanberobat/autocomplate",
           minLength: 1
       });
       autofillobat();
   }
   
   
   function auto_nama_tindakan(){
       //autocomplete
       $("#nama_tindakan").autocomplete({
           source: "<?php echo base_url() ?>index.php/tindakanberobat/autocompleteTindakan",
           minLength: 1
       });
   }
   
    function auto_nama_poli(){
       //autocomplete
       $("#nama_poli").autocomplete({
           source: "<?php echo base_url() ?>index.php/tindakanberobat/autocompletePoli",
           minLength: 1
       });
   }
   function autofill(){
   
       var no_rekamedis = $("#no_rekamedis").val();
       $.ajax({
           url: "<?php echo base_url()?>index.php/tindakanberobat/autofill",
           data : "no_rekamedis="+no_rekamedis,
       }).success(function (data) {
           var json = data,
           obj = JSON.parse(json);
           $('#nama_pasien').val(obj.nama_pasien);
           $('#tanggal_lahir').val(obj.tanggal_lahir);
       }); 
   }
   
   function autofillobat(){
   
       var nama_obats = $("#nama_obats").val();
       $.ajax({
           url: "<?php echo base_url()?>index.php/tindakanberobat/autofillobat",
           data : "nama_obat="+nama_obats,
       }).success(function (data) {
           var json = data,
           obj = JSON.parse(json);
           $('#jenis_obat').val(obj.jenis_obat);
           // $('#dosis_aturan_obat').val(obj.dosis_aturan_obat);
       }); 
   }
   
</script>
<!-- <script type="text/javascript">
   $(function() {
       //autocomplete
       $("#nama_obats").autocomplete({
           source: "<?php echo base_url()?>/index.php/pendaftaran/autocomplate",
           minLength: 1
       });        
   
   });
</script>-
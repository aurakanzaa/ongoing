<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">CEK URINE LENGKAP</h3>
      </div>
      <?php echo form_open('Lab/create/'); ?> 
         <!-- halo -->
         <table class='table table-bordered'>
            <tr>
               <td width='200'>No Register</td>
               <!-- <td><?php echo $lab[0]->no_reg ?></td> -->
            </tr>
            <tr>
               <td width='200'>Tgl Pemerikasaan</td>
               <td><input type="date" class="form-control" name="tgl_periksa" id="tgl_periksa"/></td>
            </tr>
            <tr>
               <td width='200'>No RM</td>
               <!-- <td><?php echo $row['no_rekamedis'] ?></td> -->
            </tr>
            <tr>
               <td width='200'>Nama</td>
               <!-- <td><?php echo $pendaftaran['nama_pasien'] ?></td> -->
            </tr>
            <tr>
               <td width='200'>Alamat</td>
               <!-- <td><?php echo $pendaftaran['alamat'] ?></td> -->
            </tr>
            <tr>
               <td width='200'>Jenis Kelamin</td>
               <!-- <td><?php echo $pendaftaran['jenis_kelamin'] ?></td> -->
            </tr>
            <tr>
               <td width='200'>Dokter Pengirim</td>
               <!-- <td><?php echo $pendaftaran['nama_dokter'] ?></td> -->
            </tr>
            <tr>
               <td width='200'>Pengambilan Sampel</td>
               <td><input type="date" class="form-control" name="tgl_ambil_sampel" id="tgl_ambil_sampel"  /></td>
            </tr>
            <tr>
               <td width='200'>Penyerahan Hasil</td>
               <td><input type="date" class="form-control" name="tgl_penyerahan_hasil" id="tgl_penyerahan_hasil"  /></td>
            </tr>

            <tr>
               <td></td>
               <td> 
                  <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> Simpan</button> 
                  <a href="<?php echo site_url('lab') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
               </td>
            </tr>
         </table>

        <!-- BTN LAB -->
         <div class="row">
            <div class="col-lg-12">
                
                
                <table class="table table-bordered table-hover responsive">
                    <thead>
                        <tr>
                            <td>
                                <a href="<?php echo site_url('lab/hematologi')?>" class="btn btn-lg btn-info">HEMATOLOGI</a>
                                <a href="<?php echo site_url('lab/imuno')?>" class="btn btn-lg btn-primary">IMUNO SEROLOGI</a>
                                <a href="<?php echo site_url('lab/kimia')?>" class="btn btn-lg btn-default" style="background-color:#a40a3c; color:white;"> KIMIA KLINIK	</a>
                                <a href="<?php echo site_url('lab/urine')?>" class="btn btn-lg btn-success">URINE LENGKAP</a>
                                <a href="<?php echo site_url('lab/parasitologi')?>" class="btn btn-lg btn-warning">PARASITOLOGI DAN BAKTERIOLOGI</a>
                        
                            </td>
                        </tr>
                    </thead>
                </table>
                
                
            </div>
         </div>
        <!-- BTN LAB END -->
        
         <div class="row">
            <div class="col-lg-12">
                <!-- LEFT -->
                <div class="col-lg-6">
                    <!-- URINE -->
                    <table class='table table-bordered'>
                        <tr>
                            <td colspan="2">D. URINE LENGKAP</td>
                            <td style="text-align:right;font-style:italic">Nilai Normal</td>
                        </tr>
                        <!-- 1 -->
                        <tr>
                            <td width='20'>1.</td>
                            <td width='100'>warna <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <input id="email" type="text" class="form-control" name="email" placeholder="">
                            </td>
                        </tr>
                        <!-- 2 -->
                        <tr>
                            <td width='20'>2.</td>
                            <td width='100'>PH <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(5-6)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 3 -->
                        <tr>
                            <td width='20'>3.</td>
                            <td width='100'>Berat Jenis <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(1.015-1.025)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 4 -->
                        <tr>
                            <td width='20'>4.</td>
                            <td width='100'>Protein <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 5 -->
                        <tr>
                            <td width='20'>5.</td>
                            <td width='100'>Glukosa<?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 6 -->
                        <tr>
                            <td width='20'>6.</td>
                            <td width='100'>Bilirubin <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 7 -->
                        <tr>
                            <td width='20'>7.</td>
                            <td width='100'>Urobilinogen <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 8 -->
                        <tr>
                            <td width='20'>8.</td>
                            <td width='100'>Nitrit <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        
                    </table>
                    <!-- URINE END -->
                </div>
                <!-- LEFT END -->

                <!-- RIGHT -->
                <div class="col-lg-6">
                    <!-- URINE -->
                    <table class='table table-bordered'>
                        <tr>
                            <td colspan="2">D. URINE LENGKAP</td>
                            <td style="text-align:right;font-style:italic">Nilai Normal</td>
                        </tr>
                        <!-- 9 -->
                        <tr>
                            <td width='20'>9.</td>
                            <td width='100'>Keton <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 10 -->
                        <tr>
                            <td width='20'>10.</td>
                            <td width='100'>Lekosit <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 11 -->
                        <tr>
                            <td width='20'>11.</td>
                            <td width='100'>Blood <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 12 -->
                        <tr>
                            <td width='20'>12.</td>
                            <td width='100'>Sedimen <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">1. Lekosit</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(0-2/ Lpb)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">2. Eritrosit</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">3. Ephitel</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(0-2/ Lpb)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">4. Silinder</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">5. Kristal</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">6. Lain-Lain</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                    <!-- URINE END -->

                </div>
                <!-- RIGHT END -->

                
               

            </div>
            <center>
                <div class="col-lg-12" style="padding-bottom:30px">
                    <button type="submit" class="btn btn-lg btn-danger"><i class="fa fa-floppy-o"></i> Simpan</button> 
                    <a href="<?php echo site_url('lab') ?>" class="btn btn-lg btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
                </div>
            </center><br><br>
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
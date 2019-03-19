<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">IMUNOSEROLOGI</h3>
      </div>
      <?php echo form_open('Lab/createImuno/'.$this->uri->segment(3)); ?> 
         <!-- halo -->
         <table class='table table-bordered'>
    
            <tr>
               <td width='200'>Tgl Pemerikasaan</td>
               <td><input type="text" value="<?php echo $lab[0]->tanggal ?>" name="tanggal" readonly></td>
            </tr>
            <tr>
               <td width='200'>No RM</td>
               <td><input type="text" value="<?php echo $lab[0]->no_rekamedis ?>" name="no_rekamedis" readonly></td>
            </tr>
            <tr>
               <td width='200'>Nama</td>
               <td><input type="text" value="<?php echo $lab[0]->nama_pasien ?>" name="nama_pasien" readonly></td>
            </tr>
            <tr>
               <td width='200'>Alamat</td>
               <td><input type="text" value="<?php echo $lab[0]->alamat ?>" name="alamat" readonly></td>
            </tr>
            <tr>
               <td width='200'>Jenis Kelamin</td>
               <td><input type="text" value="<?php echo $lab[0]->jenis_kelamin ?>" name="jenis_kelamin" readonly></td>
            </tr>
            <tr>
               <td width='200'>Dokter Pengirim</td>
               <td><input type="text" value="<?php echo $lab[0]->nama_dokter ?>" name="nama_dokter" readonly></td>
               <td><input type="hidden" value="<?php echo $lab[0]->kode_dokter ?>" name="kode_dokter" readonly></td>
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
                  <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Simpan</button> 
                  <a href="<?php echo site_url('lab') ?>" class="btn btn-primary"><i class="fa fa-sign-out"></i> Kembali</a>
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
                                <a href="<?php echo site_url('Lab/createHematologi/').$lab[0]->id_riwayat_tindakan ?>" class="btn btn-lg btn-info">HEMATOLOGI</a>
                                <a href="<?php echo site_url('Lab/createImuno/').$lab[0]->id_riwayat_tindakan?>" class="btn btn-lg btn-primary">IMUNO SEROLOGI</a>
                                <a href="<?php echo site_url('Lab/createKimia/').$lab[0]->id_riwayat_tindakan?>" class="btn btn-lg btn-default" style="background-color:#a40a3c; color:white;"> KIMIA KLINIK	</a>
                                <a href="<?php echo site_url('Lab/createUrine/').$lab[0]->id_riwayat_tindakan?>" class="btn btn-lg btn-success">URINE LENGKAP</a>
                                <a href="<?php echo site_url('Lab/createParasitologi/').$lab[0]->id_riwayat_tindakan?>" class="btn btn-lg btn-warning">PARASITOLOGI DAN BAKTERIOLOGI</a>
                        
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
                    <!-- IMUNO SEROLOGI -->
                    <table class='table table-bordered'>
                        <tr>
                            <td colspan="2">B. IMUNO SEROLOGI</td>
                            <td style="text-align:right;font-style:italic">Nilai Normal</td>
                        </tr>
                        <!-- 1 -->
                        <tr>
                            <td width='20'>1.</td>
                            <td width='100'>Widal (Rapit Slide Test) <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">1. S Typhi H</span>
                                    <input id="" type="text" class="form-control" name="widal_h" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">2. S Typhi O</span>
                                    <input id="" type="text" class="form-control" name="widal_o" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">3. S Typhi PA</span>
                                    <input id="" type="text" class="form-control" name="widal_pa" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">4. S Typhi PB</span>
                                    <input id="" type="text" class="form-control" name="widal_pb" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                
                            </td>
                        </tr>

                        <!-- 2 -->
                        <tr>
                            <td width='20'>2.</td>
                            <td width='100'>HIV <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="" type="number" class="form-control" name="hiv" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 3 -->
                        <tr>
                            <td width='20'>3.</td>
                            <td width='100'>PPT<?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="" type="number" class="form-control" name="ppt" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        
                    </table>
                    <!-- IMUNO SEROLOGI END -->
                </div>
                <!-- LEFT END -->

                <!-- RIGHT -->
                <div class="col-lg-6">
                    <!-- IMUNO SEROLOGI -->
                    <table class='table table-bordered'>
                        <tr>
                            <td colspan="2">B. IMUNO SEROLOGI</td>
                            <td style="text-align:right;font-style:italic">Nilai Normal</td>
                        </tr>
                        
                        <!-- 4 -->
                        <tr>
                            <td width='20'>4.</td>
                            <td width='100'>Gol Darah <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="" type="number" class="form-control" name="goldar" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>

                        <!-- 5 -->
                        <tr>
                            <td width='20'>5.</td>
                            <td width='100'>HbsAg <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="" type="number" class="form-control" name="hbsag" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>

                        <!-- 6 -->
                        <tr>
                            <td width='20'>6.</td>
                            <td width='100'>Syphilis <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="" type="number" class="form-control" name="syphilis" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 7 -->
                        <tr>
                            <td width='20'>7.</td>
                            <td width='100'>lgG/lgM & NSl <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="" type="number" class="form-control" name="nsi" placeholder="">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                    <!-- IMUNO SEROLOGI END -->

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
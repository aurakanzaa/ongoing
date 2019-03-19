<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">HEMATOLOGI</h3>
      </div>
      <?php echo form_open('Lab/createHematologi/'.$this->uri->segment(3)); ?> 
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
                    <!-- HEMATOLOGI -->
                    <table class='table table-bordered'>
                        <tr>
                            <td colspan="2">A. Hematologi</td>
                            <td style="text-align:right;font-style:italic">Nilai Normal</td>
                        </tr>
                        <!-- 1 -->
                        <tr>
                            <td width='20'>1.</td>
                            <td width='100'>Hb <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">L</span>
                                    <input id="email" type="number" class="form-control" name="hb_l" placeholder="">
                                    <span class="input-group-addon">(13.0-16.0 gr%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">P</span>
                                    <input id="email" type="number" class="form-control" name="hb_p" placeholder="">
                                    <span class="input-group-addon">(12.0-14.0 gr%)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 2 -->
                        <tr>
                            <td width='20'>2.</td>
                            <td width='100'>Leucosit <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="leucosit" placeholder="">
                                    <span class="input-group-addon">(4.000-10.000 Sel/ul)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 3 -->
                        <tr>
                            <td width='20'>3.</td>
                            <td width='100'>Eritrosit <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">L</span>
                                    <input id="email" type="text" class="form-control" name="eritrosit_l" placeholder="">
                                    <span class="input-group-addon">(4.5-5.5 Juta/ul)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">P</span>
                                    <input id="email" type="text" class="form-control" name="eritrosit_p" placeholder="">
                                    <span class="input-group-addon">(4.0-5.0 Juta/ul)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 4 -->
                        <tr>
                            <td width='20'>4.</td>
                            <td width='100'>LED <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">L</span>
                                    <input id="email" type="text" class="form-control" name="led_l" placeholder="">
                                    <span class="input-group-addon">(0-10 jam)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">P</span>
                                    <input id="email" type="text" class="form-control" name="led_p" placeholder="">
                                    <span class="input-group-addon">(0-20 jam)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 5 -->
                        <tr>
                            <td width='20'>5.</td>
                            <td width='100'>Trombosit <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    
                                    <input id="email" type="text" class="form-control" name="trombosit" placeholder="">
                                    <span class="input-group-addon">(150-400 Ribu/ul)</span>
                                </div>
                            </td>
                        </tr>
                       <!-- 6 -->
                       <tr>
                            <td width='20'>6.</td>
                            <td width='100'>Hematocrit <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">L</span>
                                    <input id="email" type="text" class="form-control" name="hematocrit_l" placeholder="">
                                    <span class="input-group-addon">(40-48%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">P</span>
                                    <input id="email" type="text" class="form-control" name="hematocrit_p" placeholder="">
                                    <span class="input-group-addon">(37-43%)</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <!-- HEMATOLOGI END -->

                </div>
                <!-- LEFT END -->

                <!-- RIGHT -->
                <div class="col-lg-6">
                    <!-- HEMATOLOGI -->
                    <table class='table table-bordered'>
                        <tr>
                            <td colspan="2">A. Hematologi</td>
                            <td style="text-align:right;font-style:italic">Nilai Normal</td>
                        </tr>
                        
                        <!-- 7 -->
                        <tr>
                            <td width='20'>7.</td>
                            <td width='100'>MCV <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <!-- <span class="input-group-addon">L</span> -->
                                    <input id="email" type="text" class="form-control" name="mcv" placeholder="">
                                    <span class="input-group-addon">(90.3 fl)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 8 -->
                        <tr>
                            <td width='20'>8.</td>
                            <td width='100'>MCH <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <!-- <span class="input-group-addon">L</span> -->
                                    <input id="email" type="text" class="form-control" name="mch" placeholder="">
                                    <span class="input-group-addon">(28.8 pg)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 9 -->
                        <tr>
                            <td width='20'>9.</td>
                            <td width='100'>MCHC <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <!-- <span class="input-group-addon">L</span> -->
                                    <input id="email" type="text" class="form-control" name="mchc" placeholder="">
                                    <span class="input-group-addon">(32.0 g/Dl)</span>
                                </div>
                            </td>
                        </tr>
                        <!-- 10 -->
                        <tr>
                            <td width='20'>10.</td>
                            <td width='100'>Hb <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">1. Eosinofil</span>
                                    <input id="email" type="text" class="form-control" name="eosinofil" placeholder="">
                                    <span class="input-group-addon">(1-2%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">2. Basofil</span>
                                    <input id="email" type="text" class="form-control" name="basofil" placeholder="">
                                    <span class="input-group-addon">(0-1%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">3. Stab</span>
                                    <input id="email" type="text" class="form-control" name="stab" placeholder="">
                                    <span class="input-group-addon">(3-5%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">4. Segmen</span>
                                    <input id="email" type="text" class="form-control" name="segmen" placeholder="">
                                    <span class="input-group-addon">(50-70%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">5. Limposit</span>
                                    <input id="email" type="text" class="form-control" name="limposit" placeholder="">
                                    <span class="input-group-addon">(20-40%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">6. Monosit</span>
                                    <input id="email" type="text" class="form-control" name="monosit" placeholder="">
                                    <span class="input-group-addon">(1-15%)</span>
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                    <!-- HEMATOLOGI END -->

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
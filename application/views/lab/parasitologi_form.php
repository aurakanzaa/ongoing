<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">KIMIA KLINIK</h3>
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
                    <!-- PARASITOLOGI DAN BAKTERIOLOGI -->
                    <table class='table table-bordered'>
                        <tr>
                            <td colspan="2">E. PARASITOLOGI DAN BAKTERIOLOGI</td>
                            <td style="text-align:right;font-style:italic">Nilai Normal</td>
                        </tr>
                        <!-- 1 -->
                        <tr>
                            <td width='20'>1.</td>
                            <td width='100'>FACES <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <h5>a. Makroskopis</h5>
                                <div class="input-group">
                                    <span class="input-group-addon">Warna</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">Bentuk</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">Konsistensi</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    
                                </div><br>

                                <h5>b. Mikroskopis</h5>
                                <div class="input-group">
                                    <span class="input-group-addon">Amoeba</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">Erytrocit</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">Leukosit</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">Telur Cacing</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    
                                </div><br>


                                
                            </td>
                        </tr>

                        <!-- 2 -->
                        <tr>
                            <td width='20'>2.</td>
                            <td width='100'>Malaria<?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 3 -->
                        <tr>
                            <td width='20'>3.</td>
                            <td width='100'>BTA<?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 4 -->
                        <tr>
                            <td width='20'>4.</td>
                            <td width='100'>RDT <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(negatif)</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <!-- PARASITOLOGI DAN BAKTERIOLOGI END -->
                </div>
                <!-- LEFT END -->

            </div>
            <center>
                <div class="col-lg-6" style="padding-bottom:30px">
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
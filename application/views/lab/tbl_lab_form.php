<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">INPUT DATA OBAT</h3>
      </div>
      <form action="<?php echo $action; ?>" method="post">
         <!-- halo -->
         <table class='table table-bordered'>
            <tr>
               <td width='200'>No Register <?php echo form_error('no_reg') ?></td>
               <td><input readonly type="text" class="form-control" name="no_reg" id="no_reg"  /></td>
            </tr>
            <tr>
               <td width='200'>Tgl Pemerikasaan <?php echo form_error('tgl_periksa') ?></td>
               <td><input type="date" class="form-control" name="tgl_periksa" id="tgl_periksa" /></td>
            </tr>
            <tr>
               <td width='200'>No RM <?php echo form_error('no_rekamedis') ?></td>
               <td><input type="text" class="form-control" name="no_rekamedis" id="no_rekamedis" placeholder="No Rekamedis"  /></td>
            </tr>
            <tr>
               <td width='200'>Nama <?php echo form_error('nama_pasien') ?></td>
               <td><input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien"  /></td>
            </tr>
            <tr>
               <td width='200'>Alamat <?php echo form_error('alamat') ?></td>
               <td><input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"  /></td>
            </tr>
            <tr>
               <td width='200'>Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></td>
               <td><input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin"  /></td>
            </tr>
            <tr>
               <td width='200'>Dokter Pengirim <?php echo form_error('nama_dokter') ?></td>
               <td><input type="text" class="form-control" name="nama_dokter" id="nama_dokter" placeholder="Nama Dokter"  /></td>
            </tr>
            <tr>
               <td width='200'>Pengambilan Sampel <?php echo form_error('tgl_ambil_sampel') ?></td>
               <td><input type="date" class="form-control" name="tgl_ambil_sampel" id="tgl_ambil_sampel"  /></td>
            </tr>
            <tr>
               <td width='200'>Penyerahan Hasil <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
               <td><input type="date" class="form-control" name="tgl_penyerahan_hasil" id="tgl_penyerahan_hasil"  /></td>
            </tr>

            <tr>
               <td></td>
               <td> 
                  <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                  <a href="<?php echo site_url('dataobat') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
               </td>
            </tr>
         </table>

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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(13.0-16.0 gr%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">P</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(4.5-5.5 Juta/ul)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">P</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(0-10 jam)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">P</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
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
                                    
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(150-400 Ribu/ul)</span>
                                </div>
                            </td>
                        </tr>
                        <!-- 6 -->
                        <tr>
                            <td width='20'>6.</td>
                            <td width='100'>Hematosit <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">L</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(40-48%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">P</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(37-43%)</span>
                                </div>
                            </td>
                        </tr>
                        <!-- 7 -->
                        <tr>
                            <td width='20'>7.</td>
                            <td width='100'>MVC <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <!-- <span class="input-group-addon">L</span> -->
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(1-2%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">2. Basofil</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(0-1%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">3. Stab</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(3-5%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">4. Segmen</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(50-70%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">5. Limposit</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(20-40%)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">6. Monosit</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(1-15%)</span>
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                    <!-- HEMATOLOGI END -->

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
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">2. S Typhi O</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">3. S Typhi PA</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">4. S Typhi B</span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 4 -->
                        <tr>
                            <td width='20'>4.</td>
                            <td width='100'>Gol Darah <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>

                        <!-- 6 -->
                        <tr>
                            <td width='20'>6.</td>
                            <td width='100'>lgG/lgM & NSl <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                    <!-- IMUNO SEROLOGI END -->
                    
                    <!-- KIMIA KLINIK -->
                    <table class='table table-bordered'>
                        <tr>
                            <td colspan="2">C. KIMIA KLINIK</td>
                            <td style="text-align:right;font-style:italic">Nilai Normal</td>
                        </tr>
                        <!-- 1 -->
                        <tr>
                            <td width='20'>1.</td>
                            <td width='100'>Glucosa Puasa <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(75-115 mg/dl)</span>
                                </div>
                                
                            </td>
                        </tr>

                        <!-- 2 -->
                        <tr>
                            <td width='20'>2.</td>
                            <td width='100'>Glucosa 2 jam pp <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(< 140mg/dl)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 3 -->
                        <tr>
                            <td width='20'>3.</td>
                            <td width='100'>Glukosa Sewaktu<?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(< 180mg/dl)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 4 -->
                        <tr>
                            <td width='20'>4.</td>
                            <td width='100'>Uric Acid <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">L</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(3,5-7,2 mg/dl)</span>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">P</span>
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(2,6-6,0 mg/dl)</span>
                                </div>
                                
                            </td>
                        </tr>

                        <!-- 5 -->
                        <tr>
                            <td width='20'>5.</td>
                            <td width='100'>Cholesterol <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(< 200 mg/dl)</span>
                                </div>
                                
                            </td>
                        </tr>

                        <!-- 6 -->
                        <tr>
                            <td width='20'>6.</td>
                            <td width='100'>Trigliserida <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(< 150 mg/dl)</span>
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                    <!-- KIMIA KLINIK END -->
                    
                </div>
                <!-- LEFT END -->

                <!-- RIGHT D -->
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
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                            </td>
                        </tr>
                        <!-- 2 -->
                        <tr>
                            <td width='20'>2.</td>
                            <td width='100'>PH <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
                                    <span class="input-group-addon">(Negatif)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- 9 -->
                        <tr>
                            <td width='20'>9.</td>
                            <td width='100'>Keton <?php echo form_error('tgl_peritgl_penyerahan_hasilksa') ?></td>
                            <td>
                                <div class="input-group">
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                                    <input id="email" type="number" class="form-control" name="email" placeholder="Email">
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
                <!-- RIGHT D END -->

            </div>
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
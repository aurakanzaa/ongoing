<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <?php echo $this->session->userdata('message') ?>
            <div class="box box-warning box-solid">
               <div class="box-header">
                  <h3 class="box-title">LABORATURIUM</h3>
               </div>
               <!-- halo -->
               <div class="box-body">
                  <div style="padding-bottom: 10px;">
                     <?php echo anchor(site_url('lab/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
                     <?php echo anchor(site_url('lab/cetak'), '<i class="fa fa-print" aria-hidden="true"></i> Cetak Data', 'class="btn btn-success btn-sm"'); ?>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                           <tr>
                              <th width="30px">No</th>
                              <!-- <th>No Reg</th>
                              <th>Rekamedis</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Tgl Periksa</th>
                              <th>Nama Dokter</th>
                              <th>Tgl Ambil Sampel</th>
                              <th>Tgl Penyerahan Hasil</th>
                              <th width="200px">Action</th> -->
                              <th>ID Tindakan</th>
                              <th>Nomor Rawat</th>
                              <th>Nomor Rekam Medis</th>
                              <th>Tanggal Periksa</th>
                              <th>Pemeriksaan Lab</th>
                              <th width="200px">Action</th>
                           </tr>
                           <?php 
                           $i=1;
                            foreach($riwayat_tindakan as $key) {

                           ?>
                           <tr>
                              <th width="30px"><?php echo $i++; ?></th>
                              <th><?php echo $key->id_riwayat_tindakan; ?></th>
                              <th><?php echo $key->no_rawat; ?></th>
                              <th><?php echo $key->no_rekamedis; ?></th>
                              <th><?php echo $key->tanggal; ?></th>
                              <th><?php echo $key->pemeriksaan_lab; ?></th>
                              <th width="200px"><a href="<?php echo site_url('Lab/create/').$key->id_riwayat_tindakan ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                             Create
                                             </a></th>
                           </tr>
                            <?php }?>
                        </thead>
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
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>

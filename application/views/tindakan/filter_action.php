<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">FILTER TINDAKAN BERDASARKAN POLI</h3>
      </div>
      <form action="filter_action" method="post">
         <table class='table table-bordered'>
            <tr>
               <td width='200'>Nama Poli <?php echo form_error('id_poliklinik') ?></td>
               <td>
                  <select name="id_poli" id="inputId_poli" class="form-control">
                     <?php foreach ($poli as $key) { ?>
                        <option value="<?php echo $key->id_poli ?>"><?php echo $key->nama_poli ?></option>
                     <?php } ?>
                  </select>
                  <input type="hidden" name="hidden" id="inputHidden" class="form-control" value="Hidden">
               </td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Filter</button> 
                  <a href="<?php echo site_url('tindakan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
               </td>
            </tr>
         </table>
      </form>
   </div>

   <div class="row">
         <div class="col-xs-12">
            <?php echo $this->session->userdata('message') ?>
            <div class="box box-warning box-solid">
               <div class="box-header">
                  <h3 class="box-title">DATA TINDAKAN</h3>
               </div>
               <div class="box-body">
                  <!-- <div style="padding-bottom: 10px;">
                     <?php echo anchor(site_url('tindakan/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
                     <?php echo anchor(site_url('tindakan/filter_berdasarkan_poli'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Filter', 'class="btn btn-danger btn-sm"'); ?>
                  </div> -->
                  
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                            <th width="30px">No</th>
                            <th>Kode</th>
                            <th>Nama Tindakan</th>
                            <th>Tindakan Oleh</th>
                            <th>Nama Poli</th>
                            <th>Harga</th>
                            <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $no = 1 ?>
                           <?php foreach ($tindakan as $key) { ?>
                              <tr>
                                 <td><?php echo $no ?></td>
                                 <td><?php echo $key->kode_tindakan ?></td>
                                 <td><?php echo $key->nama_tindakan ?></td>
                                 <td><?php echo $key->tindakan_oleh ?></td>
                                 <td><?php echo $key->nama_poli ?></td>
                                 <td><?php echo $key->harga ?></td>
                                 <td><?php echo anchor(site_url('tindakan/update/'.$key->kode_tindakan),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm')) ?>
                                    <?php echo anchor(site_url('tindakan/delete/'.$key->kode_tindakan),'<i class="fa fa-trash" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm')) ?>
                                 </td>
                              </tr>
                              <?php $no++ ?>
                           <?php } ?>
                        </tbody>
                    </table>
                  </div>
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
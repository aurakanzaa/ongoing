<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA KAMAR</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

		<tr><td width='200'>Kode Kamar <?php echo form_error('kode_kamar') ?></td><td><input type="text" class="form-control" name="kode_kamar" id="kode_kamar" placeholder="Kode Kamar" value="<?php echo $kode_kamar; ?>" /></td></tr>
	    <tr><td width='200'>Nama Kamar <?php echo form_error('nama_kamar') ?></td><td><input type="text" class="form-control" name="nama_kamar" id="nama_kamar" placeholder="Nama Kamar" value="<?php echo $nama_kamar; ?>" /></td></tr>
	   
       <tr><td width='200'>Kelas Kamar<?php echo form_error('kelas_kamar') ?></td>
            <td>
        
            <select id="kelas_kamar" name="kelas_kamar" onchange="tampilkan()" class="form-control">
                <option value="" disabled="disabled" selected>Pilih</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="VIP 1">VIP 1</option>
                <option value="VIP 2">VIP 2</option>
            </select>
            </td>
        </tr>
	    <tr><td width='200'>Kapasitas<?php echo form_error('kapasitas') ?></td><td><input type="text" class="form-control"  name="kapasitas" id="kapasitas" placeholder="Kapasitas" value="<?php echo $kapasitas; ?>" /></td></tr>
		<tr><td width='200'>Harga<?php echo form_error('harga') ?></td><td><input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $harga; ?>" /></td></tr>
      <tr><td width='200'>Stok Kamar<?php echo form_error('stok') ?></td><td><input type="text" class="form-control" 
      name="stok" id="stok" placeholder="Stok Kamar" value="<?php echo $stok; ?>" /></td></tr>

	    <tr><td></td><td> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('datakamar') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i>Kembali</a></td></tr>
	</table></form>        </div>
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
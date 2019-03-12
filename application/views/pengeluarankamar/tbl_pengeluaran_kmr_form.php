<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA PENGELUARAN KAMAR</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>   

	    <tr><td width='200'>No Terima Kamar <?php echo form_error('no_terima_kamar') ?></td><td><input type="text" class="form-control" name="no_terima_kamar" id="no_terima_kamar" placeholder="No Terima Kamar" onkeyup="autoNt()" value="<?php echo $no_terima_kamar; ?>"  /></td></tr>

	    <tr><td width='200'>Nama Pasien <?php echo form_error('nama_pasien') ?></td><td><input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien" onkeyup="autoPasien()" value="<?php echo $nama_pasien; ?>"/></td></tr>

	    <!-- <tr><td width='200'>Nama Kamar <?php echo form_error('nama_kamar') ?></td><td><input type="text" class="form-control" name="nama_kamar" id="nama_kamar" placeholder="Nama Kamar" onkeyup="kamarAuto()"  value="<?php echo $nama_kamar; ?>"/></td></tr> -->
        <tr><td width='200'>Nama Kamar <?php echo form_error('nama_kamar') ?></td><td>
        <select name="nama_kamar" id="nama_kamar" class="form-control" required="required" onchange="kamarAuto()">
            <?php foreach ($kamar as $key) { ?>
                <option value="<?php echo $key->nama_kamar ?>"><?php echo $key->nama_kamar ?></option>
            <?php } ?>
        </select>
        </td></tr>

	    <tr><td width='200'>Kode Kamar <?php echo form_error('kode_kamar') ?></td><td><input type="text" class="form-control" name="kode_kamar" id="kode_kamar" placeholder="Kode Kamar"  onkeyup="autofill()"  value="<?php echo $kode_kamar; ?>" /></td></tr>

	    <tr><td width='200'>Jenis Kamar <?php echo form_error('kelas_kamar') ?></td><td><input type="text" class="form-control" name="kelas_kamar" id="kelas_kamar" placeholder="Jenis Kamar" onkeyup="autofill()" value="<?php echo $kelas_kamar; ?>"  /></td></tr>

	    <tr><td width='200'>Kapasitas Kamar<?php echo form_error('kapasitas') ?></td><td><input type="text" class="form-control" name="kapasitas" id="kapasitas" placeholder="Kapasitas Kamar"  value="<?php echo $kapasitas; ?>" /></td></tr>

        <tr><td width='200'>Harga <?php echo form_error('harga') ?></td><td><input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" onkeyup="autofill()" value="<?php echo $harga;  ?>" /></td></tr>

	    <tr><td width='200'>Keterangan <?php echo form_error('keterangan') ?></td><td><input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" /></td></tr>

        <tr><td width='200'>Tanggal Masuk <?php echo form_error('tanggal_masuk') ?></td><td><input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk" value="<?php echo $tanggal_masuk; ?>" /></td></tr>

        <tr><td width='200'>Tanggal Keluar</td><td><input type="date" class="form-control" name="tanggal_keluar" id="tanggal_keluar" placeholder="Tanggal Keluar" value="<?php echo $tanggal_keluar; ?>" /></td></tr>

	    <tr><td></td><td><input type="hidden" name="id_pengeluaran" value="<?php echo $id_pengeluaran; ?>" />
        <tr><td></td><td><input type="hidden" name="tgl_serah_obat" id="tgl_serah_obat" value="<?php echo date('d-m-Y'); ?>" />

	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('pengeluarankamar') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
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

<script type="text/javascript">



	function autoPasien(){	
        var no_rekamedis = $("#no_rekamedis").val();
        $.ajax({
            url: "<?php echo base_url()?>index.php/pengeluarankamar/autoPasien",
            data : "no_rekamedis="+no_rekamedis,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#nama_pasien').val(obj.nama);
            
        }); 
    }

	function kamarAuto(){
         //autocomplete
        $("#nama_kamar").autocomplete({
            source: "<?php echo base_url() ?>index.php/pengeluarankamar/kamarauto",
            minLength: 1
        });
        autofill();
    }

    function autofill(){

        var nama_kamar = $("#nama_kamar").val();
        $.ajax({
            url: "<?php echo base_url()?>index.php/pengeluarankamar/autofill",
            data : "nama_kamar="+nama_kamar,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#kode_kamar').val(obj.kode_kamar);
            $('#kelas_kamar').val(obj.kelas_kamar);
            // $('#kapasitas').val(obj.kapasitas);
            $("#harga").val(obj.harga);
        }); 
    }

    function autoNt(){
         //autocomplete
        $("#no_terima_kamar").autocomplete({
            source: "<?php echo base_url() ?>index.php/pengeluarankamar/rawatauto",
            minLength: 1
        });
        autoNorawat();
    }

    function autoNorawat(){
         //autocomplete
        var no_rawat = $("#no_terima_kamar").val();
        $.ajax({
            url: "<?php echo base_url()?>index.php/pengeluarankamar/autoNorawat",
            data : "no_rekamedis="+no_rawat,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#nama_pasien').val(obj.nama_pasien);
        }); 
    }
</script>
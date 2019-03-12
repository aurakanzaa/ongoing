<div class="content-wrapper">
   <section class="content">
   <div class="box box-warning box-solid">
      <div class="box-header with-border">
         <h3 class="box-title">INPUT DATA PENGELUARAN OBAT NON PASIEN</h3>
      </div>
      <form action="<?php echo $action; ?>" method="post">
         <div class="table-responsive">
            <table class='table table-bordered' >
               <!-- halo -->
               <tr>
                  <td width='200'>No Trans <?php echo form_error('no_trans') ?></td>
                  <td><input type="text" class="form-control" name="no_trans" id="no_trans" placeholder="Nomor Transaksi" value="<?php echo "B-".date("ymd")."-".$id_obatnonpasien;?>" readonly  /></td>
               </tr>
               <tr>
                  <td width='200'>Nama Penanggung <?php echo form_error('supplier') ?></td>
                  <td><input type="text" class="form-control" name="supplier" id="supplier" placeholder="Nama Penanggung" onkeyup="autosupplier()" required="" /></td>
               </tr>

                 <tr>
                  <td width='200'>kode_ruang <?php echo form_error('kode_ruang') ?></td>
                  <td><input type="text" class="form-control" name="kode_ruang" id="kode_ruang" placeholder="kode_ruang" /></td>
               </tr>

               <tr>
                  <td width='200'>Nama Obat <?php echo form_error('nama_obat') ?></td>
                  <td><input type="text" class="form-control" name="nama_obat" id="nama_obat" placeholder="Nama Obat" onkeyup="autoobat()" required="" /></td>
               </tr>
               <tr>
                  <td width='200'>Kode Obat <?php echo form_error('kode_obat') ?></td>
                  <td><input type="text" class="form-control" name="kode_obat" id="kode_obat" placeholder="Kode Obat" onkeyup="autoobat()" required="" /></td>
               </tr>
               <tr>
                  <td width='200'>Jenis Obat <?php echo form_error('jenis_obat') ?></td>
                  <td><input type="text" class="form-control" name="jenis_obat" id="jenis_obat" placeholder="Jenis Obat" onkeyup="autoobat()" required=""   /></td>
               </tr>
               
               
               <tr>
                  <td width='200'>Jumlah <?php echo form_error('jumlah') ?></td>
                  <td><input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah"  onkeyup="count()" /></td>
               </tr>
               <tr>
                  <td width='200'>Satuan <?php echo form_error('satuan') ?></td>
                  <td><input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan" onkeyup="autoobat()" /></td>
               </tr>
               <tr>
                  <td width='200'>Keterangan <?php echo form_error('keterangan') ?></td>
                  <td><input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" /></td>
               </tr>

              
               
               <tr>
                  <td></td>
                  <td><input type="hidden" name="id_obatnonpasien" value="<?php echo $id_obatnonpasien; ?>" /> 
                     <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                     <a href="<?php echo site_url('obatnonpasien') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
                  </td>
               </tr>
            </table>
         </div>
      </form>
   </div>
</div>
</div>
<script type="text/javascript">
   function count(){
   
   	var a = parseInt($("#harga_beli").val());
   	var b = parseInt($("#jumlah").val());
   	c = a * b;
   
   	if (!isNaN(c)) {
   		$("#total").val(c);
   	}
   }
   
   function autosupplier(){
   
   	$("#supplier").autocomplete({
   		source: "<?php echo base_url() ?>index.php/obatnonpasien/autosupplier",
   		minLength: 1
   	});

      autofill2();
      }
   
      function autofill2(){
   
          var penanggung = $("#penanggung").val();
          $.ajax({
              url: "<?php echo base_url()?>index.php/obatnonpasien/autofill",
              data : "penanggung="+penanggung,
          }).success(function (data) {
              var json = data,
              obj = JSON.parse(json);
              $('#kode_ruang').val(obj.kode_ruang);
   
          }); 

   }
   
   function autoobat(){
           //autocomplete
          $("#nama_obat").autocomplete({
              source: "<?php echo base_url() ?>index.php/obatnonpasien/autoobat",
              minLength: 1
          });
          autofill();
      }
   
      function autofill(){
   
          var nama_obat = $("#nama_obat").val();
          $.ajax({
              url: "<?php echo base_url()?>index.php/obatnonpasien/autofill",
              data : "nama_obat="+nama_obat,
          }).success(function (data) {
              var json = data,
              obj = JSON.parse(json);
              $('#kode_obat').val(obj.kode_obat);
              $('#jenis_obat').val(obj.jenis_obat);
              $('#satuan').val(obj.satuan);
   
          }); 
      }
</script>
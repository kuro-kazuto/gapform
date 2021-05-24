  <div class="container">
		<div class="card">
			<div class="card-header bg-warning"><center><b>Silahkan Edit Data Diri Anda</b></center></div>
			<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>siswa/update">
				<input type="hidden" name="id_mahasiswa" id="id_mahasiswa" value="<?php echo $siswa->id_mahasiswa; ?>"/>
				
				<div class="form-group">
					<label for="nim">NIM/NPM</label>
					<input type="number" class="form-control" value="<?php echo $siswa->nim; ?>" id="nim" name="nim">
				</div>

				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" value="<?php echo $siswa->nama; ?>" class="form-control" id="nama" name="nama" pattern="[A-Za-z\s]{1,}" title="Harus Alfabet !">
					
				</div>

				<div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option value="Pria" <?php echo ($siswa->jenis_kelamin ? 'Pria' : 'selected' ); ?> >Pria</option>
						<option value="Wanita" <?php echo ($siswa->jenis_kelamin ? 'Wanita' : 'selected' ); ?>>Wanita</option>
						<option value="Lainnya" <?php echo ($siswa->jenis_kelamin ? 'Lainnya' : 'selected' ); ?>>Lainnya</option>
					</select>
				</div>

				<div class="form-group">
					<label for="tempat_lahir">Tempat Lahir</label>
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $siswa->tempat_lahir; ?>">
				</div>

				<div class="form-group">
					<label for="tgl_lahir">Tanggal Lahir</label>
					<input type="text" class="form-control datepicker"  readonly id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $siswa->tanggal_lahir; ?>">
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat"><?php echo $siswa->alamat; ?></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>
	
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>	


<legend>1. Identitas Diri</legend>
<div class="col-md-12">
	<div class="form-group">
		<label>Foto</label>
		<input type="file" name="identity['foto']" class="form-control-file" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="identity['nama']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Nama Alias</label>
		<input type="text" name="identity['alias']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-3">
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input type="text" name="identity['tempat']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-9">
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="text" name="identity['tanggal']" class="form-control datepicker" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select class="form-control" name="identity['jk']" id="">
			<option value="laki-laki">Laki-Laki</option>
			<option value="perempuan">Perempuan</option>
		</select>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Suku Bangsa/Ras</label>
		<input type="text" name="identity['suku']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Pekerjaan / Jabatan </label>
		<input type="text" name="identity['pekerjaan']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>NRP / NIP</label>
		<input type="text" name="identity['nrp']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Pangkat / Golongan </label>
		<input type="text" name="identity['pangkat']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Kesatuan</label>
		<input type="text" name="identity['kesatuan']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Alamat dan Nomor Telepon Kantor</label>
		<textarea name="identity['alamatkantor']" id="" cols="30" rows="10" class="form-control"></textarea>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Alamat dan Nomor Telepon Rumah</label>
		<textarea name="identity['alamatrumah']" id="" cols="30" rows="10" class="form-control"></textarea>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Kewarganegaraan</label>
		<input type="text" name="identity['kewarganegaraan']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Cara Memperoleh Kewarganegaraan</label>
		<input type="text" name="identity['caramemperoleh']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Agama yang Dianut Saat Ini</label>
		<input type="text" name="identity['now_agama']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Agama yang dianut sebelumnya</label>
		<input type="text" name="identity['old_agama']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Aliran Kepercayaan yang Diikuti</label>
		<input type="text" name="identity['aliran']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Kawin / Belom Kawin</label>
		<select name="identity['status']" id="" class="form-control">
			<option value="	">Pilih Status</option>
			<option value="Kawin"> Kawin </option>
			<option value="Belum"> Belum Kawin </option>
		</select>
	</div>
</div>
<div class="col-md-3">
	<div class="form-group">
		<label>Tempat Pernikahan</label>
		<input type="text" name="identity['tempat_nikah']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-9">
	<div class="form-group">
		<label>Tanggal Pernikahan</label>
		<input type="text" name="identity['tanggal_nikah']" class="form-control datepicker" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Perkawinan yang keberapa saat ini</label>
		<input type="text" name="identity['jumlah_nikah']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Jumlah Anak</label>
		<input type="text" name="identity['jumlah_anak']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Alamat Tetap sesuai KTP dan Nomor Telepon</label>
		<textarea name="identity['alamat_ktp']" class="form-control" id="" cols="30" rows="10"></textarea>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Nomor Identitas (SIM/KTP/identitas pengenal lain)</label>
		<input type="text" name="identity['nomor_identitas']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Hobi/Kegemaran</label>
		<input type="text" name="identity['hobi']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Kebiasaan yang sukar dihilangkan</label>
		<input type="text" name="identity['kebiasaan']" class="form-control" required=""/>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Kemampuan Berbahasa (Daerah/Asing/Nasional)</label>
		<input type="text" name="identity['bahasa']" class="form-control" required=""/>
	</div>
</div>
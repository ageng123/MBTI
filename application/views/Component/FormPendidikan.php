<div class="row mb-4">
	<legend>2. A) Data Pendidikan Umum</legend>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Nama Sekolah</label>
			<input type="text" name="sekolahnama" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Dari Tahun s/d Tahun</label>
			<input type="text" name="tahunsekolah" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Tempat/Kota</label>
			<input type="text" name="kotasekolah" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Yang Membiayai</label>
			<input type="text" name="biayasekolah" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" name="keterangansekolah" class="form-control">
		</div>
	</div>
	<div class="col-md-12">	
		<button class="btn btn-success" id="submitPendidikanForm" onclick="pendidikanForm.add()">Tambah Data Sekolah</button>
	</div>
	<div class="col-md-12 mt-4">
		<table id="tbPendidikan" class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Nomor Urut</td>
					<td>Nama Sekolah / Instansi / Akademi / Perguruan Tinggi</td>
					<td>Dari Tahun s/d Tahun</td>
					<td>Tempat/Kota</td>
					<td>Yang Membiayai</td>
					<td>Keterangan</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</div>
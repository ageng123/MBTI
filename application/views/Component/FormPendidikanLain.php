<div class="row mb-4">
	<legend>2. C) Data Pendidikan Lain</legend>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Nama kursus, Penataran, Seminar</label>
			<input type="text" name="sekolahlainnama" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Tahun (Lamanya)</label>
			<input type="text" name="tahunsekolahlain" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Tempat</label>
			<input type="text" name="tempatsekolahlain" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Penyelenggara</label>
			<input type="text" name="penyelenggarasekolahlain" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" name="keterangansekolahlain" class="form-control">
		</div>
	</div>
	<div class="col-md-12">	
		<button class="btn btn-success" onclick="PendidikanLainAction.add()" id="SubmitFormPendidikanLain">Tambah Data Sekolah</button>
	</div>
	<div class="col-md-12 mt-4">
		<table id="tb_pendidikanLain" class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Nomor Urut</td>
					<td>Nama Kursus, Penataran, Seminar</td>
					<td>Tahun (Lamanya)</td>
					<td>Tempat</td>
					<td>Penyelenggara</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</div>
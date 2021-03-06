<div class="row mb-4">
	<legend>3. Riwayat Pekerjaan</legend>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Nama Pekerjaan / Jabatan</label>
			<input type="text" name="namapekerjaan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Pangkat / Golongan</label>
			<input type="text" name="pangkatpekerjaan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Instansi / Kesatuan</label>
			<input type="text" name="instansikerja" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Dari tahun / Lamanya</label>
			<input type="text" name="tahunkerja" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" name="keterangankerja" class="form-control">
		</div>
	</div>
	<div class="col-md-12">	
		<button class="btn btn-success" onclick="RiwayatPekerjaanAct.add()" id="submitRiwayatPekerjaan">Tambah Data Riwayat Pekerjaan</button>
	</div>
	<div class="col-md-12 mt-4">
		<table id="tb_riwayatPekerjaan" class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Nomor Urut</td>
					<td>Nama Pekerjaan / Jabatan</td>
					<td>Pangkat / Golongan</td>
					<td>Instansi / Kesatuan</td>
					<td>Dari Tahun / Lamanya</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
</div>
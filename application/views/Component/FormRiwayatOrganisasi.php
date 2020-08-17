<div class="row mb-4">
	<legend>6. Riwayat Organisasi</legend>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Nama Organisasi</label>
			<input type="text" name="namaorganisasi" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Dari Tahun s/d Tahun (Lamanya)</label>
			<input type="text" name="tahunorganisasi" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Kedudukan Dalam Organisasi</label>
			<input type="text" name="kedudukanorganisasi" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Tahun Ikut Organiasasi</label>
			<input type="text" name="tahunikutorganisasi" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Alamat Organisasi</label>
			<input type="text" name="alamatorganisasi" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" name="keteranganorganisasi" class="form-control">
		</div>
	</div>
	<div class="col-md-12">	
		<button class="btn btn-success" id="BtnRiwayatOrganisasi" onclick="RiwayatOrganisasiAct.add()">Tambah Data Riwayat Organisasi</button>
	</div>
	<div class="col-md-12 mt-4">
		<table id="tb_riwayatOrganisasi" class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Nomor Urut</td>
					<td>Nama Organisasi</td>
					<td>Dari Tahun s/d Tahun (Lamanya)</td>
					<td>Kedudukan Dalam Organisasi</td>
					<td>Tahun Ikut Organisasi</td>
					<td>Alamat</td>
					<td>Keterangan</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
</div>
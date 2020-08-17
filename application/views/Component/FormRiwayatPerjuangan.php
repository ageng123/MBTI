<div class="row mb-4">
	<legend>7. Riwayat Perjuangan</legend>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Peristiwa</label>
			<input type="text" name="peristiwaperjuangan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Temmpat / Daerah / Instansi</label>
			<input type="text" name="tempatperjuangan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Dari Tahun s/d Tahun</label>
			<input type="text" name="tahunperjuangan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Dalam Rangka</label>
			<input type="text" name="rangkaperjuangan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" name="keteranganperjuangan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">	
		<button class="btn btn-success" id="BtnSubmitPerjuangan" onclick="RiwayatPerjuanganAct.add()">Tambah Data Riwayat Perjuangan</button>
	</div>
	<div class="col-md-12 mt-4">
		<table id="tb_riwayatperjuangan" class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Nomor Urut</td>
					<td>Peristiwa</td>
					<td>Tempat / Daerah / Instansi</td>
					<td>Dari Tahun s/d Tahun</td>
					<td>Dalam Rangka</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
</div>
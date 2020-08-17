<div class="row mb-4">
	<legend>8. Riwayat Penghargaan</legend>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Bintang, Setia Lencana, Piagam, dan lain-lain</label>
			<input type="text" name="bintangpenghargaan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Diterima dari</label>
			<input type="text" name="diterimapenghargaan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Dalam Rangka</label>
			<input type="text" name="rangkapenghargaan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Kapan</label>
			<input type="text" name="waktupenghargaan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="text" name="keteranganpenghargaan" class="form-control">
		</div>
	</div>
	<div class="col-md-12">	
		<button class="btn btn-success" id="BtnSubmitPenghargaan" onclick="RiwayatPenghargaanAct.add()">Tambah Data Riwayat Penghargaan</button>
	</div>
	<div class="col-md-12 mt-4">
		<table id="tb_penghargaan" class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Nomor Urut</td>
					<td>Bintang, Setia Lencana, Piagam, dan lain-lain</td>
					<td>Diterima dari</td>
					<td>Dalam Rangka</td>
					<td>Kapan</td>
					<td>Keterangan</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
</div>
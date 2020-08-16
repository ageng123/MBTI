	var line = 1;
	const PendidikanArray = new Array(), PendidikanDinasArr = new Array();
	const pendidikanForm = {
		add: () => {
			let data = new Array();
			let sekolahnama = $('input[name="sekolahnama"]').val();
			let tahunsekolah = $('input[name="tahunsekolah"]').val();
			let tempatsekolah = $('input[name="kotasekolah"]').val();
			let biayasekolah = $('input[name="biayasekolah"]').val();
			let keterangan = $('input[name="keterangansekolah"]').val();
			data['namasekolah'] = sekolahnama;
			data['tahunsekolah'] = tahunsekolah;
			data['tempatsekolah'] = tempatsekolah;
			data['biayasekolah'] = biayasekolah;
			data['keterangansekolah'] = keterangan;
			PendidikanArray.push(data);
			$('input[name="sekolahnama"]').val('');
			$('input[name="tahunsekolah"]').val('');
			$('input[name="kotasekolah"]').val('');
			$('input[name="biayasekolah"]').val('');
			$('input[name="keterangansekolah"]').val('');
			pendidikanForm.appendToTbBody();
		},
		appendToTbBody: () => {
			let data = PendidikanArray;
			let content = '';
			let line = 1;
			$(data).each((index, value) => {
				let row = '<tr>[COLUMN]</tr>';
				let column = '<td>'+line+'</td>';
				column += '<td>'+value.namasekolah+'</td>';
				column += '<td>'+value.tahunsekolah+'</td>';
				column += '<td>'+value.tempatsekolah+'</td>';
				column += '<td>'+value.biayasekolah+'</td>';
				column += '<td>'+value.keterangansekolah+'</td>';
				column += '<td><button class="btn btn-sm btn-success" onclick="pendidikanForm.edit('+index+')">Edit</button><button class="btn btn-sm btn-danger" onclick="pendidikanForm.hapus('+index+')">hapus</button></td>';
				row = row.replace("[COLUMN]", column);
				line++;
				content += row;
			});
			$('#tbPendidikan tbody').html(content);
		},
		edit: (index) => {
			let data = PendidikanArray[index];
			$('input[name="sekolahnama"]').val(data.namasekolah);
			$('input[name="tahunsekolah"]').val(data.tahunsekolah);
			$('input[name="kotasekolah"]').val(data.tempatsekolah);
			$('input[name="biayasekolah"]').val(data.biayasekolah);
			$('input[name="keterangansekolah"]').val(data.keterangansekolah);
			$('#submitPendidikanForm').attr('onclick', 'pendidikanForm.update('+index+')');

		},
		update: (index)=>{
			let data = new Array();
			let sekolahnama = $('input[name="sekolahnama"]').val();
			let tahunsekolah = $('input[name="tahunsekolah"]').val();
			let tempatsekolah = $('input[name="kotasekolah"]').val();
			let biayasekolah = $('input[name="biayasekolah"]').val();
			let keterangan = $('input[name="keterangansekolah"]').val();
			data['namasekolah'] = sekolahnama;
			data['tahunsekolah'] = tahunsekolah;
			data['tempatsekolah'] = tempatsekolah;
			data['biayasekolah'] = biayasekolah;
			data['keterangansekolah'] = keterangan;
			PendidikanArray[index] = data;
			$('input[name="sekolahnama"]').val('');
			$('input[name="tahunsekolah"]').val('');
			$('input[name="kotasekolah"]').val('');
			$('input[name="biayasekolah"]').val('');
			$('input[name="keterangansekolah"]').val('');
			$('#submitPendidikanForm').attr('onclick', 'pendidikanForm.add()');
			pendidikanForm.appendToTbBody();
		},
		hapus: (index) => {
			PendidikanArray.splice(index , 1);
			pendidikanForm.appendToTbBody();
		}
	};
	const pendidikanDinas = {
		add: () => {
			pendidikanDinas.appendToTbBody();
		},
		update: () => {
			pendidikanDinas.appendToTbBody();
		},
		delete: () => {
			pendidikanDinas.appendToTbBody();
		},
		edit: () => {

		},
		appendToTbBody: () => {

		}
	}
	var line = 1;
	const PendidikanArray = new Array(), PendidikanDinasArr = new Array(), PendidikanLainArr = new Array(), RiwayatPekerjaan = new Array(), RiwayatPekeraanDinasArr = new Array();
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
			let data = new Array();
			let sekolahnama = $('input[name="namasekolahdinas"]').val();
			let tahunsekolah = $('input[name="tahunsekolahdinas"]').val();
			let tempatsekolah = $('input[name="kotasekolahdinas"]').val();
			let rangkasekolahdinas = $('input[name="rangkasekolahdinas"]').val();
			let keterangan = $('input[name="keterangansekolahdinas"]').val();
			data['namasekolahdinas'] = sekolahnama;
			data['tahunsekolahdinas'] = tahunsekolah;
			data['kotasekolahdinas'] = tempatsekolah;
			data['rangkasekolahdinas'] = rangkasekolahdinas;
			data['keterangansekolahdinas'] = keterangan;
			PendidikanDinasArr.push(data);
			$('input[name="namasekolahdinas"]').val('');
			$('input[name="tahunsekolahdinas"]').val('');
			$('input[name="kotasekolahdinas"]').val('');
			$('input[name="rangkasekolahdinas"]').val('');
			$('input[name="keterangansekolahdinas"]').val('');
			pendidikanDinas.appendToTbBody();
		},
		update: (id) => {
			let data = new Array();
			let sekolahnama = $('input[name="namasekolahdinas"]').val();
			let tahunsekolah = $('input[name="tahunsekolahdinas"]').val();
			let tempatsekolah = $('input[name="kotasekolahdinas"]').val();
			let rangkasekolahdinas = $('input[name="rangkasekolahdinas"]').val();
			let keterangan = $('input[name="keterangansekolahdinas"]').val();
			data['namasekolahdinas'] = sekolahnama;
			data['tahunsekolahdinas'] = tahunsekolah;
			data['kotasekolahdinas'] = tempatsekolah;
			data['rangkasekolahdinas'] = rangkasekolahdinas;
			data['keterangansekolahdinas'] = keterangan;
			PendidikanDinasArr[id] = data;
			$('input[name="namasekolahdinas"]').val('');
			$('input[name="tahunsekolahdinas"]').val('');
			$('input[name="kotasekolahdinas"]').val('');
			$('input[name="rangkasekolahdinas"]').val('');
			$('input[name="keterangansekolahdinas"]').val('');
			$('#submitPendidikanDinas').attr('onclick', 'pendidikanDinas.add()');
			pendidikanDinas.appendToTbBody();
		},
		hapus: (id) => {
			PendidikanDinasArr.splice(id , 1);
			pendidikanDinas.appendToTbBody();
		},
		edit: (id) => {
			let data = PendidikanDinasArr[id];
			$('input[name="namasekolahdinas"]').val(data.namasekolahdinas);
			$('input[name="tahunsekolahdinas"]').val(data.tahunsekolahdinas);
			$('input[name="kotasekolahdinas"]').val(data.kotasekolahdinas);
			$('input[name="rangkasekolahdinas"]').val(data.rangkasekolahdinas);
			$('input[name="keterangansekolahdinas"]').val(data.keterangansekolahdinas);
			$('#submitPendidikanDinas').attr('onclick', 'pendidikanDinas.update('+id+')');
		},
		appendToTbBody: () => {
			let data = PendidikanDinasArr;
			let content = '';
			let line = 1;
			$(data).each((index, value) => {
				let row = '<tr>[COLUMN]</tr>';
				let column = '<td>'+line+'</td>';
				column += '<td>'+value.namasekolahdinas+'</td>';
				column += '<td>'+value.tahunsekolahdinas+'</td>';
				column += '<td>'+value.kotasekolahdinas+'</td>';
				column += '<td>'+value.rangkasekolahdinas+'</td>';
				column += '<td>'+value.keterangansekolahdinas+'</td>';
				column += '<td><button class="btn btn-sm btn-success" onclick="pendidikanDinas.edit('+index+')">Edit</button><button class="btn btn-sm btn-danger" onclick="pendidikanDinas.hapus('+index+')">hapus</button></td>';
				row = row.replace("[COLUMN]", column);
				line++;
				content += row;
			});
			$('#tb_pendidikan_dinas tbody').html(content);
		}
	}
	const PendidikanLainAction = {
		add: () => {
			let data = new Array();
			let sekolahnama = $('input[name="sekolahlainnama"]').val();
			let tahunsekolah = $('input[name="tahunsekolahlain"]').val();
			let tempatsekolah = $('input[name="tempatsekolahlain"]').val();
			let rangkasekolahdinas = $('input[name="penyelenggarasekolahlain"]').val();
			let keterangan = $('input[name="keterangansekolahlain"]').val();
			data['sekolahlainnama'] = sekolahnama;
			data['tahunsekolahlain'] = tahunsekolah;
			data['tempatsekolahlain'] = tempatsekolah;
			data['penyelenggarasekolahlain'] = rangkasekolahdinas;
			data['keterangansekolahlain'] = keterangan;
			PendidikanLainArr.push(data);
			$('input[name="sekolahlainnama"]').val('');
			$('input[name="tahunsekolahlain"]').val('');
			$('input[name="tempatsekolahlain"]').val('');
			$('input[name="penyelenggarasekolahlain"]').val('');
			$('input[name="keterangansekolahlain"]').val('');
			PendidikanLainAction.appendToTbBody();
		},
		update: (id) => {
			let data = new Array();
			let sekolahnama = $('input[name="sekolahlainnama"]').val();
			let tahunsekolah = $('input[name="tahunsekolahlain"]').val();
			let tempatsekolah = $('input[name="tempatsekolahlain"]').val();
			let rangkasekolahdinas = $('input[name="penyelenggarasekolahlain"]').val();
			let keterangan = $('input[name="keterangansekolahlain"]').val();
			data['sekolahlainnama'] = sekolahnama;
			data['tahunsekolahlain'] = tahunsekolah;
			data['tempatsekolahlain'] = tempatsekolah;
			data['penyelenggarasekolahlain'] = rangkasekolahdinas;
			data['keterangansekolahlain'] = keterangan;
			PendidikanLainArr[id] = data;
			$('input[name="sekolahlainnama"]').val('');
			$('input[name="tahunsekolahlain"]').val('');
			$('input[name="tempatsekolahlain"]').val('');
			$('input[name="penyelenggarasekolahlain"]').val('');
			$('input[name="keterangansekolahlain"]').val('');
			$('#SubmitFormPendidikanLain').attr('onclick', 'PendidikanLainAction.add()');
			PendidikanLainAction.appendToTbBody();
		},
		hapus: (id) => {
			PendidikanLainArr.splice(id , 1);
			PendidikanLainAction.appendToTbBody();
		},
		edit: (id) => {
			let data = PendidikanLainArr[id];
			$('input[name="sekolahlainnama"]').val(data.sekolahlainnama);
			$('input[name="tahunsekolahlain"]').val(data.tahunsekolahlain);
			$('input[name="tempatsekolahlain"]').val(data.tempatsekolahlain);
			$('input[name="penyelenggarasekolahlain"]').val(data.penyelenggarasekolahlain);
			$('input[name="keterangansekolahlain"]').val(data.keterangansekolahlain);
			$('#SubmitFormPendidikanLain').attr('onclick', 'PendidikanLainAction.update('+id+')');
		},
		appendToTbBody: () => {
			let data = PendidikanLainArr;
			let content = '';
			let line = 1;
			$(data).each((index, value) => {
				let row = '<tr>[COLUMN]</tr>';
				let column = '<td>'+line+'</td>';
				column += '<td>'+value.sekolahlainnama+'</td>';
				column += '<td>'+value.tahunsekolahlain+'</td>';
				column += '<td>'+value.tempatsekolahlain+'</td>';
				column += '<td>'+value.penyelenggarasekolahlain+'</td>';
				column += '<td>'+value.keterangansekolahlain+'</td>';
				column += '<td><button class="btn btn-sm btn-success" onclick="PendidikanLainAction.edit('+index+')">Edit</button><button class="btn btn-sm btn-danger" onclick="PendidikanLainAction.hapus('+index+')">hapus</button></td>';
				row = row.replace("[COLUMN]", column);
				line++;
				content += row;
			});
			$('#tb_pendidikanLain tbody').html(content);
		}
	}
	const RiwayatPekerjaanAct = {
		add: () => {
			let data = new Array();
			let namakerja = $('input[name="namapekerjaan"]').val();
			let pangkatkerja = $('input[name="pangkatpekerjaan"]').val();
			let instansikerja = $('input[name="instansikerja"]').val();
			let tahunkerja = $('input[name="tahunkerja"]').val();
			let keterangan = $('input[name="keterangankerja"]').val();
			data['namapekerjaan'] = namakerja;
			data['pangkatpekerjaan'] = pangkatkerja;
			data['instansikerja'] = instansikerja;
			data['tahunkerja'] = tahunkerja;
			data['keterangankerja'] = keterangan;
			RiwayatPekerjaan.push(data);
			$('input[name="namapekerjaan"]').val('');
			$('input[name="pangkatpekerjaan"]').val('');
			$('input[name="instansikerja"]').val('');
			$('input[name="tahunkerja"]').val('');
			$('input[name="keterangankerja"]').val('');
			RiwayatPekerjaanAct.appendToTbBody();
		},
		update: (id) => {
			let data = new Array();
			let namakerja = $('input[name="namapekerjaan"]').val();
			let pangkatkerja = $('input[name="pangkatpekerjaan"]').val();
			let instansikerja = $('input[name="instansikerja"]').val();
			let tahunkerja = $('input[name="tahunkerja"]').val();
			let keterangan = $('input[name="keterangankerja"]').val();
			data['namapekerjaan'] = namakerja;
			data['pangkatpekerjaan'] = pangkatkerja;
			data['instansikerja'] = instansikerja;
			data['tahunkerja'] = tahunkerja;
			data['keterangankerja'] = keterangan;
			RiwayatPekerjaan[id] = data;
			$('input[name="namapekerjaan"]').val('');
			$('input[name="pangkatpekerjaan"]').val('');
			$('input[name="instansikerja"]').val('');
			$('input[name="tahunkerja"]').val('');
			$('input[name="keterangankerja"]').val('');
			$('#submitRiwayatPekerjaan').attr('onclick', 'PendidikanLainAction.add()');
			RiwayatPekerjaanAct.appendToTbBody();
		},
		hapus: (id) => {
			RiwayatPekerjaan.splice(id , 1);
			RiwayatPekerjaanAct.appendToTbBody();
		},
		edit: (id) => {
			let data = RiwayatPekerjaan[id];
			$('input[name="namapekerjaan"]').val(data.namapekerjaan);
			$('input[name="pangkatpekerjaan"]').val(data.pangkatpekerjaan);
			$('input[name="instansikerja"]').val(data.instansikerja);
			$('input[name="tahunkerja"]').val(data.tahunkerja);
			$('input[name="keterangankerja"]').val(data.keterangankerja);
			$('#submitRiwayatPekerjaan').attr('onclick', 'PendidikanLainAction.update('+id+')');
		},
		appendToTbBody: () => {
			let data = RiwayatPekerjaan;
			let content = '';
			let line = 1;
			$(data).each((index, value) => {
				let row = '<tr>[COLUMN]</tr>';
				let column = '<td>'+line+'</td>';
				column += '<td>'+value.namapekerjaan+'</td>';
				column += '<td>'+value.pangkatpekerjaan+'</td>';
				column += '<td>'+value.instansikerja+'</td>';
				column += '<td>'+value.tahunkerja+'</td>';
				column += '<td>'+value.keterangankerja+'</td>';
				column += '<td><button class="btn btn-sm btn-success" onclick="RiwayatPekerjaanAct.edit('+index+')">Edit</button><button class="btn btn-sm btn-danger" onclick="RiwayatPekerjaanAct.hapus('+index+')">hapus</button></td>';
				row = row.replace("[COLUMN]", column);
				line++;
				content += row;
			});
			$('#tb_riwayatPekerjaan tbody').html(content);
		}
	}
	const RiwayatPekerjaanDinasAct = {
		add: () => {
			let data = new Array();
			let namakerja = $('input[name="namakerjadinas"]').val();
			let pangkatkerja = $('input[name="pangkatkerjadinas"]').val();
			let instansikerja = $('input[name="instansikerjadinas"]').val();
			let tahunkerja = $('input[name="tahunkerjadinas"]').val();
			let rangkakerja = $('input[name="rangkakerjadinas"]').val();
			let keterangan = $('input[name="keterangankerjadinas"]').val();
			data['namakerjadinas'] = namakerja;
			data['pangkatkerjadinas'] = pangkatkerja;
			data['instansikerjadinas'] = instansikerja;
			data['tahunkerjadinas'] = tahunkerja;
			data['rangkakerjadinas'] = rangkakerja;
			data['keterangankerjadinas'] = keterangan;
			RiwayatPekeraanDinasArr.push(data);
			$('input[name="namakerjadinas"]').val('');
			$('input[name="pangkatkerjadinas"]').val('');
			$('input[name="instansikerja"]').val('');
			$('input[name="tahunkerjadinas"]').val('');
			$('input[name="rangkakerjadinas"]').val('');
			$('input[name="keterangankerjadinas"]').val('');
			RiwayatPekerjaanDinasAct.appendToTbBody();
		},
		update: (id) => {
			let data = new Array();
			let namakerja = $('input[name="namakerjadinas"]').val();
			let pangkatkerja = $('input[name="pangkatkerjadinas"]').val();
			let instansikerja = $('input[name="instansikerjadinas"]').val();
			let tahunkerja = $('input[name="tahunkerjadinas"]').val();
			let rangkakerja = $('input[name="rangkakerjadinas"]').val();
			let keterangan = $('input[name="keterangankerjadinas"]').val();
			data['namakerjadinas'] = namakerja;
			data['pangkatkerjadinas'] = pangkatkerja;
			data['instansikerjadinas'] = instansikerja;
			data['tahunkerjadinas'] = tahunkerja;
			data['rangkakerjadinas'] = rangkakerja;
			data['keterangankerjadinas'] = keterangan;
			RiwayatPekeraanDinasArr[id] = data;
			$('input[name="namakerjadinas"]').val('');
			$('input[name="pangkatkerjadinas"]').val('');
			$('input[name="instansikerja"]').val('');
			$('input[name="tahunkerjadinas"]').val('');
			$('input[name="rangkakerjadinas"]').val('');
			$('input[name="keterangankerjadinas"]').val('');
			$('#SubmitPekerjaanDinas').attr('onclick', 'RiwayatPekerjaanDinasAct.add()');
			RiwayatPekerjaanDinasAct.appendToTbBody();
		},
		hapus: (id) => {
			RiwayatPekeraanDinasArr.splice(id , 1);
			RiwayatPekerjaanDinasAct.appendToTbBody();
		},
		edit: (id) => {
			let data = RiwayatPekeraanDinasArr[id];
			$('input[name="namakerjadinas"]').val(data.namakerjadinas);
			$('input[name="pangkatkerjadinas"]').val(data.pangkatkerjadinas);
			$('input[name="instansikerjadinas"]').val(data.instansikerjadinas);
			$('input[name="tahunkerjadinas"]').val(data.tahunkerjadinas);
			$('input[name="rangkakerjadinas"]').val(data.rangkakerjadinas);
			$('input[name="keterangankerjadinas"]').val(data.keterangankerjadinas);
			$('#SubmitPekerjaanDinas').attr('onclick', 'RiwayatPekerjaanDinasAct.update('+id+')');
		},
		appendToTbBody: () => {
			let data = RiwayatPekeraanDinasArr;
			let content = '';
			let line = 1;
			$(data).each((index, value) => {
				let row = '<tr>[COLUMN]</tr>';
				let column = '<td>'+line+'</td>';
				column += '<td>'+value.namakerjadinas+'</td>';
				column += '<td>'+value.pangkatkerjadinas+'</td>';
				column += '<td>'+value.instansikerjadinas+'</td>';
				column += '<td>'+value.tahunkerjadinas+'</td>';
				column += '<td>'+value.rangkakerjadinas+'</td>';
				column += '<td>'+value.keterangankerjadinas+'</td>';
				column += '<td><button class="btn btn-sm btn-success" onclick="RiwayatPekerjaanDinasAct.edit('+index+')">Edit</button><button class="btn btn-sm btn-danger" onclick="RiwayatPekerjaanDinasAct.hapus('+index+')">hapus</button></td>';
				row = row.replace("[COLUMN]", column);
				line++;
				content += row;
			});
			$('#tb_pekerjaandinas tbody').html(content);
		}
	}
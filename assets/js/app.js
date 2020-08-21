	var line = 1;
	const PendidikanArray = new Array(),
	    PendidikanDinasArr = new Array(),
	    PendidikanLainArr = new Array(),
	    RiwayatPekerjaan = new Array(),
	    RiwayatPekeraanDinasArr = new Array(),
	    RiwayatTempatTinggal = new Array(), 
	    RiwayatOrganisasiArr = new Array()
	    RiwayatPerjuanganArr = new Array(),
<<<<<<< HEAD
		RiwayatPenghargaanArr = new Array(),
		IdentitasDiriArr = new Object(),
		PernikahanArr = new Object(), 
		AyahKandungArr = new Object(),
		AyahTiriArr = new Object(),
		IbuKandungArr = new Object(), 
		IbuTiriArr = new Object(), 
		MertuaLakiArr = new Object(), 
		MertuaPerempuanArr = new Object();
	const pendidikanForm = {
	    add: () => {
	        let data = new Object();
=======
	    RiwayatPenghargaanArr = new Array();
	const pendidikanForm = {
	    add: () => {
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
	            let column = '<td>' + line + '</td>';
	            column += '<td>' + value.namasekolah + '</td>';
	            column += '<td>' + value.tahunsekolah + '</td>';
	            column += '<td>' + value.tempatsekolah + '</td>';
	            column += '<td>' + value.biayasekolah + '</td>';
	            column += '<td>' + value.keterangansekolah + '</td>';
	            column += '<td><button class="btn btn-sm btn-success" onclick="pendidikanForm.edit(' + index + ')">Edit</button><button class="btn btn-sm btn-danger" onclick="pendidikanForm.hapus(' + index + ')">hapus</button></td>';
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
	        $('#submitPendidikanForm').attr('onclick', 'pendidikanForm.update(' + index + ')');

	    },
	    update: (index) => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
	        PendidikanArray.splice(index, 1);
	        pendidikanForm.appendToTbBody();
	    }
	};
	const pendidikanDinas = {
	    add: () => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
	        PendidikanDinasArr.splice(id, 1);
	        pendidikanDinas.appendToTbBody();
	    },
	    edit: (id) => {
	        let data = PendidikanDinasArr[id];
	        $('input[name="namasekolahdinas"]').val(data.namasekolahdinas);
	        $('input[name="tahunsekolahdinas"]').val(data.tahunsekolahdinas);
	        $('input[name="kotasekolahdinas"]').val(data.kotasekolahdinas);
	        $('input[name="rangkasekolahdinas"]').val(data.rangkasekolahdinas);
	        $('input[name="keterangansekolahdinas"]').val(data.keterangansekolahdinas);
	        $('#submitPendidikanDinas').attr('onclick', 'pendidikanDinas.update(' + id + ')');
	    },
	    appendToTbBody: () => {
	        let data = PendidikanDinasArr;
	        let content = '';
	        let line = 1;
	        $(data).each((index, value) => {
	            let row = '<tr>[COLUMN]</tr>';
	            let column = '<td>' + line + '</td>';
	            column += '<td>' + value.namasekolahdinas + '</td>';
	            column += '<td>' + value.tahunsekolahdinas + '</td>';
	            column += '<td>' + value.kotasekolahdinas + '</td>';
	            column += '<td>' + value.rangkasekolahdinas + '</td>';
	            column += '<td>' + value.keterangansekolahdinas + '</td>';
	            column += '<td><button class="btn btn-sm btn-success" onclick="pendidikanDinas.edit(' + index + ')">Edit</button><button class="btn btn-sm btn-danger" onclick="pendidikanDinas.hapus(' + index + ')">hapus</button></td>';
	            row = row.replace("[COLUMN]", column);
	            line++;
	            content += row;
	        });
	        $('#tb_pendidikan_dinas tbody').html(content);
	    }
	}
	const PendidikanLainAction = {
	    add: () => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
	        PendidikanLainArr.splice(id, 1);
	        PendidikanLainAction.appendToTbBody();
	    },
	    edit: (id) => {
	        let data = PendidikanLainArr[id];
	        $('input[name="sekolahlainnama"]').val(data.sekolahlainnama);
	        $('input[name="tahunsekolahlain"]').val(data.tahunsekolahlain);
	        $('input[name="tempatsekolahlain"]').val(data.tempatsekolahlain);
	        $('input[name="penyelenggarasekolahlain"]').val(data.penyelenggarasekolahlain);
	        $('input[name="keterangansekolahlain"]').val(data.keterangansekolahlain);
	        $('#SubmitFormPendidikanLain').attr('onclick', 'PendidikanLainAction.update(' + id + ')');
	    },
	    appendToTbBody: () => {
	        let data = PendidikanLainArr;
	        let content = '';
	        let line = 1;
	        $(data).each((index, value) => {
	            let row = '<tr>[COLUMN]</tr>';
	            let column = '<td>' + line + '</td>';
	            column += '<td>' + value.sekolahlainnama + '</td>';
	            column += '<td>' + value.tahunsekolahlain + '</td>';
	            column += '<td>' + value.tempatsekolahlain + '</td>';
	            column += '<td>' + value.penyelenggarasekolahlain + '</td>';
	            column += '<td>' + value.keterangansekolahlain + '</td>';
	            column += '<td><button class="btn btn-sm btn-success" onclick="PendidikanLainAction.edit(' + index + ')">Edit</button><button class="btn btn-sm btn-danger" onclick="PendidikanLainAction.hapus(' + index + ')">hapus</button></td>';
	            row = row.replace("[COLUMN]", column);
	            line++;
	            content += row;
	        });
	        $('#tb_pendidikanLain tbody').html(content);
	    }
	}
	const RiwayatPekerjaanAct = {
	    add: () => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
	        RiwayatPekerjaan.splice(id, 1);
	        RiwayatPekerjaanAct.appendToTbBody();
	    },
	    edit: (id) => {
	        let data = RiwayatPekerjaan[id];
	        $('input[name="namapekerjaan"]').val(data.namapekerjaan);
	        $('input[name="pangkatpekerjaan"]').val(data.pangkatpekerjaan);
	        $('input[name="instansikerja"]').val(data.instansikerja);
	        $('input[name="tahunkerja"]').val(data.tahunkerja);
	        $('input[name="keterangankerja"]').val(data.keterangankerja);
	        $('#submitRiwayatPekerjaan').attr('onclick', 'PendidikanLainAction.update(' + id + ')');
	    },
	    appendToTbBody: () => {
	        let data = RiwayatPekerjaan;
	        let content = '';
	        let line = 1;
	        $(data).each((index, value) => {
	            let row = '<tr>[COLUMN]</tr>';
	            let column = '<td>' + line + '</td>';
	            column += '<td>' + value.namapekerjaan + '</td>';
	            column += '<td>' + value.pangkatpekerjaan + '</td>';
	            column += '<td>' + value.instansikerja + '</td>';
	            column += '<td>' + value.tahunkerja + '</td>';
	            column += '<td>' + value.keterangankerja + '</td>';
	            column += '<td><button class="btn btn-sm btn-success" onclick="RiwayatPekerjaanAct.edit(' + index + ')">Edit</button><button class="btn btn-sm btn-danger" onclick="RiwayatPekerjaanAct.hapus(' + index + ')">hapus</button></td>';
	            row = row.replace("[COLUMN]", column);
	            line++;
	            content += row;
	        });
	        $('#tb_riwayatPekerjaan tbody').html(content);
	    }
	}
	const RiwayatPekerjaanDinasAct = {
	    add: () => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
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
	        RiwayatPekeraanDinasArr.splice(id, 1);
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
	        $('#SubmitPekerjaanDinas').attr('onclick', 'RiwayatPekerjaanDinasAct.update(' + id + ')');
	    },
	    appendToTbBody: () => {
	        let data = RiwayatPekeraanDinasArr;
	        let content = '';
	        let line = 1;
	        $(data).each((index, value) => {
	            let row = '<tr>[COLUMN]</tr>';
	            let column = '<td>' + line + '</td>';
	            column += '<td>' + value.namakerjadinas + '</td>';
	            column += '<td>' + value.pangkatkerjadinas + '</td>';
	            column += '<td>' + value.instansikerjadinas + '</td>';
	            column += '<td>' + value.tahunkerjadinas + '</td>';
	            column += '<td>' + value.rangkakerjadinas + '</td>';
	            column += '<td>' + value.keterangankerjadinas + '</td>';
	            column += '<td><button class="btn btn-sm btn-success" onclick="RiwayatPekerjaanDinasAct.edit(' + index + ')">Edit</button><button class="btn btn-sm btn-danger" onclick="RiwayatPekerjaanDinasAct.hapus(' + index + ')">hapus</button></td>';
	            row = row.replace("[COLUMN]", column);
	            line++;
	            content += row;
	        });
	        $('#tb_pekerjaandinas tbody').html(content);
	    }
	}
	const RiwayatTempatTinggalAct = {
	    add: () => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
	        let alamat = $('input[name="alamattinggal"]').val();
	        let tahun = $('input[name="tahuntinggal"]').val();
	        let rangka = $('input[name="rangkatinggal"]').val();
	        let keterangan = $('input[name="keterangantinggal"]').val();
	        data['alamattinggal'] = alamat;
	        data['tahuntinggal'] = tahun;
	        data['rangkatinggal'] = rangka;
	        data['keterangantinggal'] = keterangan;
	        RiwayatTempatTinggal.push(data);
	        $('input[name="alamattinggal"]').val('');
	        $('input[name="tahuntinggal"]').val('');
	        $('input[name="rangkatinggal"]').val('');
	        $('input[name="keterangantinggal"]').val('');
	        RiwayatTempatTinggalAct.appendToTbBody();
	    },
	    update: (id) => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
	       	let alamat = $('input[name="alamattinggal"]').val();
	        let tahun = $('input[name="tahuntinggal"]').val();
	        let rangka = $('input[name="rangkatinggal"]').val();
	        let keterangan = $('input[name="keterangantinggal"]').val();
	        data['alamattinggal'] = alamat;
	        data['tahuntinggal'] = tahun;
	        data['rangkatinggal'] = rangka;
	        data['keterangantinggal'] = keterangan;
	        RiwayatTempatTinggal[id] = data;
	        $('input[name="alamattinggal"]').val('');
	        $('input[name="tahuntinggal"]').val('');
	        $('input[name="rangkatinggal"]').val('');
	        $('input[name="keterangantinggal"]').val('');
	        $('#SubmitTempatTinggalBtn').attr('onclick', 'RiwayatTempatTinggalAct.add()');
	        RiwayatTempatTinggalAct.appendToTbBody();
	    },
	    hapus: (id) => {
	        RiwayatTempatTinggal.splice(id, 1);
	        RiwayatTempatTinggalAct.appendToTbBody();
	    },
	    edit: (id) => {
	        let data = RiwayatTempatTinggal[id];
	        $('input[name="alamattinggal"]').val(data.alamattinggal);
	        $('input[name="tahuntinggal"]').val(data.tahuntinggal);
	        $('input[name="rangkatinggal"]').val(data.rangkatinggal);
	        $('input[name="keterangantinggal"]').val(data.keterangantinggal);
	        $('#SubmitTempatTinggalBtn').attr('onclick', 'RiwayatTempatTinggalAct.update(' + id + ')');
	    },
	    appendToTbBody: () => {
	        let data = RiwayatTempatTinggal;
	        let content = '';
	        let line = 1;
	        $(data).each((index, value) => {
	            let row = '<tr>[COLUMN]</tr>';
	            let column = '<td>' + line + '</td>';
	            column += '<td>' + value.alamattinggal + '</td>';
	            column += '<td>' + value.tahuntinggal + '</td>';
	            column += '<td>' + value.rangkatinggal + '</td>';
	            column += '<td>' + value.keterangantinggal + '</td>';
	            column += '<td><button class="btn btn-sm btn-success" onclick="RiwayatTempatTinggalAct.edit(' + index + ')">Edit</button><button class="btn btn-sm btn-danger" onclick="RiwayatTempatTinggalAct.hapus(' + index + ')">hapus</button></td>';
	            row = row.replace("[COLUMN]", column);
	            line++;
	            content += row;
	        });
	        $('#tb_tempattinggal tbody').html(content);
	    }
	}
	const RiwayatOrganisasiAct = {
	    add: () => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
	        let nama = $('input[name="namaorganisasi"]').val();
	        let tahun = $('input[name="tahunorganisasi"]').val();
	        let rangka = $('input[name="kedudukanorganisasi"]').val();
	        let tahunikut = $('input[name="tahunikutorganisasi"]').val();
	        let alamat = $('input[name="alamatorganisasi"]').val();
	        let keterangan = $('input[name="keteranganorganisasi"]').val();
	        data['namaorganisasi'] = nama;
	        data['tahunorganisasi'] = tahun;
	        data['kedudukanorganisasi'] = rangka;
	        data['tahunikutorganisasi'] = tahunikut;
	        data['alamatorganisasi'] = alamat;
	        data['keteranganorganisasi'] = keterangan;
	        RiwayatOrganisasiArr.push(data);
	        $('input[name="namaorganisasi"]').val('');
	        $('input[name="tahunorganisasi"]').val('');
	        $('input[name="kedudukanorganisasi"]').val('');
	        $('input[name="tahunikutorganisasi"]').val('');
	        $('input[name="alamatorganisasi"]').val('');
	        $('input[name="keteranganorganisasi"]').val('');
	        RiwayatOrganisasiAct.appendToTbBody();
	    },
	    update: (id) => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
	       	let nama = $('input[name="namaorganisasi"]').val();
	        let tahun = $('input[name="tahunorganisasi"]').val();
	        let rangka = $('input[name="kedudukanorganisasi"]').val();
	        let tahunikut = $('input[name="tahunikutorganisasi"]').val();
	        let alamat = $('input[name="alamatorganisasi"]').val();
	        let keterangan = $('input[name="keteranganorganisasi"]').val();
	        data['namaorganisasi'] = nama;
	        data['tahunorganisasi'] = tahun;
	        data['kedudukanorganisasi'] = rangka;
	        data['tahunikutorganisasi'] = tahunikut;
	        data['alamatorganisasi'] = alamat;
	        data['keteranganorganisasi'] = keterangan;
	        RiwayatOrganisasiArr[id] = data;
	         $('input[name="namaorganisasi"]').val('');
	        $('input[name="tahunorganisasi"]').val('');
	        $('input[name="kedudukanorganisasi"]').val('');
	        $('input[name="tahunikutorganisasi"]').val('');
	        $('input[name="alamatorganisasi"]').val('');
	        $('input[name="keteranganorganisasi"]').val('');
	        $('#BtnRiwayatOrganisasi').attr('onclick', 'RiwayatOrganisasiAct.add()');
	        RiwayatOrganisasiAct.appendToTbBody();
	    },
	    hapus: (id) => {
	        RiwayatOrganisasiArr.splice(id, 1);
	        RiwayatOrganisasiAct.appendToTbBody();
	    },
	    edit: (id) => {
	        let data = RiwayatOrganisasiArr[id];
	        $('input[name="namaorganisasi"]').val(data.namaorganisasi);
	        $('input[name="tahunorganisasi"]').val(data.tahunorganisasi);
	        $('input[name="kedudukanorganisasi"]').val(data.kedudukanorganisasi);
	        $('input[name="tahunikutorganisasi"]').val(data.tahunikutorganisasi);
			$('input[name="alamatorganisasi"]').val(data.alamatorganisasi);
	        $('input[name="keteranganorganisasi"]').val(data.keteranganorganisasi);
	        $('#BtnRiwayatOrganisasi').attr('onclick', 'RiwayatOrganisasiAct.update(' + id + ')');
	    },
	    appendToTbBody: () => {
	        let data = RiwayatOrganisasiArr;
	        let content = '';
	        let line = 1;
	        $(data).each((index, value) => {
	            let row = '<tr>[COLUMN]</tr>';
	            let column = '<td>' + line + '</td>';
	            column += '<td>' + value.namaorganisasi + '</td>';
	            column += '<td>' + value.tahunorganisasi + '</td>';
	            column += '<td>' + value.kedudukanorganisasi + '</td>';
	            column += '<td>' + value.tahunikutorganisasi + '</td>';
	            column += '<td>' + value.alamatorganisasi + '</td>';
	            column += '<td>' + value.keteranganorganisasi + '</td>';
	            column += '<td><button class="btn btn-sm btn-success" onclick="RiwayatOrganisasiAct.edit(' + index + ')">Edit</button><button class="btn btn-sm btn-danger" onclick="RiwayatOrganisasiAct.hapus(' + index + ')">hapus</button></td>';
	            row = row.replace("[COLUMN]", column);
	            line++;
	            content += row;
	        });
	        $('#tb_riwayatOrganisasi tbody').html(content);
	    }
	}
	const RiwayatPerjuanganAct = {
	    add: () => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
	        let peristiwaperjuangan = $('input[name="peristiwaperjuangan"]').val();
	        let tempatperjuangan = $('input[name="tempatperjuangan"]').val();
	        let tahunperjuangan = $('input[name="tahunperjuangan"]').val();
	        let rangkaperjuangan = $('input[name="rangkaperjuangan"]').val();
	        let keteranganperjuangan = $('input[name="keteranganperjuangan"]').val();
	        data['peristiwaperjuangan'] = peristiwaperjuangan;
	        data['tempatperjuangan'] = tempatperjuangan;
	        data['tahunperjuangan'] = tahunperjuangan;
	        data['rangkaperjuangan'] = rangkaperjuangan;
	        data['keteranganperjuangan'] = keteranganperjuangan;
	        RiwayatPerjuanganArr.push(data);
	        $('input[name="peristiwaperjuangan"]').val('');
	        $('input[name="tempatperjuangan"]').val('');
	        $('input[name="tahunperjuangan"]').val('');
	        $('input[name="rangkaperjuangan"]').val('');
	        $('input[name="keteranganperjuangan"]').val('');
	        RiwayatPerjuanganAct.appendToTbBody();
	    },
	    appendToTbBody: () => {
	        let data = RiwayatPerjuanganArr;
	        let content = '';
	        let line = 1;
	        $(data).each((index, value) => {
	            let row = '<tr>[COLUMN]</tr>';
	            let column = '<td>' + line + '</td>';
	            column += '<td>' + value.peristiwaperjuangan + '</td>';
	            column += '<td>' + value.tempatperjuangan + '</td>';
	            column += '<td>' + value.tahunperjuangan + '</td>';
	            column += '<td>' + value.rangkaperjuangan + '</td>';
	            column += '<td>' + value.keteranganperjuangan + '</td>';
	            column += '<td><button class="btn btn-sm btn-success" onclick="RiwayatPerjuanganAct.edit(' + index + ')">Edit</button><button class="btn btn-sm btn-danger" onclick="RiwayatPerjuanganAct.hapus(' + index + ')">hapus</button></td>';
	            row = row.replace("[COLUMN]", column);
	            line++;
	            content += row;
	        });
	        $('#tb_riwayatperjuangan tbody').html(content);
	    },
	    edit: (index) => {
	        let data = RiwayatPerjuanganArr[index];
	        $('input[name="peristiwaperjuangan"]').val(data.peristiwaperjuangan);
	        $('input[name="tempatperjuangan"]').val(data.tempatperjuangan);
	        $('input[name="tahunperjuangan"]').val(data.tahunperjuangan);
	        $('input[name="rangkaperjuangan"]').val(data.rangkaperjuangan);
	        $('input[name="keteranganperjuangan"]').val(data.keteranganperjuangan);
	        $('#BtnSubmitPerjuangan').attr('onclick', 'RiwayatPerjuanganAct.update(' + index + ')');

	    },
	    update: (index) => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
	        let peristiwaperjuangan = $('input[name="peristiwaperjuangan"]').val();
	        let tempatperjuangan = $('input[name="tempatperjuangan"]').val();
	        let tahunperjuangan = $('input[name="tahunperjuangan"]').val();
	        let rangkaperjuangan = $('input[name="rangkaperjuangan"]').val();
	        let keteranganperjuangan = $('input[name="keteranganperjuangan"]').val();
	        data['peristiwaperjuangan'] = peristiwaperjuangan;
	        data['tempatperjuangan'] = tempatperjuangan;
	        data['tahunperjuangan'] = tahunperjuangan;
	        data['rangkaperjuangan'] = rangkaperjuangan;
	        data['keteranganperjuangan'] = keteranganperjuangan;
	        RiwayatPerjuanganArr[index] = data;
	        $('input[name="peristiwaperjuangan"]').val('');
	        $('input[name="tempatperjuangan"]').val('');
	        $('input[name="tahunperjuangan"]').val('');
	        $('input[name="rangkaperjuangan"]').val('');
	        $('input[name="keteranganperjuangan"]').val('');
	        $('#BtnSubmitPerjuangan').attr('onclick', 'RiwayatPerjuanganAct.add()');
	        RiwayatPerjuanganAct.appendToTbBody();
	    },
	    hapus: (index) => {
	        RiwayatPerjuanganArr.splice(index, 1);
	        RiwayatPerjuanganAct.appendToTbBody();
	    }
	};
	const RiwayatPenghargaanAct = {
	    add: () => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
	        let bintangpenghargaan = $('input[name="bintangpenghargaan"]').val();
	        let diterimapenghargaan = $('input[name="diterimapenghargaan"]').val();
	        let rangkapenghargaan = $('input[name="rangkapenghargaan"]').val();
	        let waktupenghargaan = $('input[name="waktupenghargaan"]').val();
	        let keteranganpenghargaan = $('input[name="keteranganpenghargaan"]').val();
	        data['bintangpenghargaan'] = bintangpenghargaan;
	        data['diterimapenghargaan'] = diterimapenghargaan;
	        data['rangkapenghargaan'] = rangkapenghargaan;
	        data['waktupenghargaan'] = waktupenghargaan;
	        data['keteranganpenghargaan'] = keteranganpenghargaan;
	        RiwayatPenghargaanArr.push(data);
	        $('input[name="bintangpenghargaan"]').val('');
	        $('input[name="diterimapenghargaan"]').val('');
	        $('input[name="rangkapenghargaan"]').val('');
	        $('input[name="waktupenghargaan"]').val('');
	        $('input[name="keteranganpenghargaan"]').val('');
	        RiwayatPenghargaanAct.appendToTbBody();
	    },
	    appendToTbBody: () => {
	        let data = RiwayatPenghargaanArr;
	        let content = '';
	        let line = 1;
	        $(data).each((index, value) => {
	            let row = '<tr>[COLUMN]</tr>';
	            let column = '<td>' + line + '</td>';
	            column += '<td>' + value.bintangpenghargaan + '</td>';
	            column += '<td>' + value.diterimapenghargaan + '</td>';
	            column += '<td>' + value.rangkapenghargaan + '</td>';
	            column += '<td>' + value.waktupenghargaan + '</td>';
	            column += '<td>' + value.keteranganpenghargaan + '</td>';
	            column += '<td><button class="btn btn-sm btn-success" onclick="RiwayatPenghargaanAct.edit(' + index + ')">Edit</button><button class="btn btn-sm btn-danger" onclick="RiwayatPenghargaanAct.hapus(' + index + ')">hapus</button></td>';
	            row = row.replace("[COLUMN]", column);
	            line++;
	            content += row;
	        });
	        $('#tb_penghargaan tbody').html(content);
	    },
	    edit: (index) => {
	        let data = RiwayatPenghargaanArr[index];
	        $('input[name="bintangpenghargaan"]').val(data.bintangpenghargaan);
	        $('input[name="diterimapenghargaan"]').val(data.diterimapenghargaan);
	        $('input[name="rangkapenghargaan"]').val(data.rangkapenghargaan);
	        $('input[name="waktupenghargaan"]').val(data.waktupenghargaan);
	        $('input[name="keteranganpenghargaan"]').val(data.keteranganpenghargaan);
	        $('#BtnSubmitPenghargaan').attr('onclick', 'RiwayatPenghargaanAct.update(' + index + ')');

	    },
	    update: (index) => {
<<<<<<< HEAD
	        let data = new Object();
=======
	        let data = new Array();
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
	        let bintangpenghargaan = $('input[name="bintangpenghargaan"]').val();
	        let diterimapenghargaan = $('input[name="diterimapenghargaan"]').val();
	        let rangkapenghargaan = $('input[name="rangkapenghargaan"]').val();
	        let waktupenghargaan = $('input[name="waktupenghargaan"]').val();
	        let keteranganpenghargaan = $('input[name="keteranganpenghargaan"]').val();
	        data['bintangpenghargaan'] = bintangpenghargaan;
	        data['diterimapenghargaan'] = diterimapenghargaan;
	        data['rangkapenghargaan'] = rangkapenghargaan;
	        data['waktupenghargaan'] = waktupenghargaan;
	        data['keteranganpenghargaan'] = keteranganpenghargaan;
	        RiwayatPenghargaanArr[index] = data;
	        $('input[name="bintangpenghargaan"]').val('');
	        $('input[name="diterimapenghargaan"]').val('');
	        $('input[name="rangkapenghargaan"]').val('');
	        $('input[name="waktupenghargaan"]').val('');
	        $('input[name="keteranganpenghargaan"]').val('');
	        $('#BtnSubmitPenghargaan').attr('onclick', 'RiwayatPenghargaanAct.add()');
	        RiwayatPenghargaanAct.appendToTbBody();
	    },
	    hapus: (index) => {
	        RiwayatPenghargaanArr.splice(index, 1);
	        RiwayatPenghargaanAct.appendToTbBody();
	    }
	};
	const Helper = {
		getRegexFromArray: (data) => {
			let key =  data.replace(/identity/, '');
			key = key.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
			return key;
		}
	}
	const BaseUri = 'http://localhost:8000/';
	const PersonilServices = {
		ADD_PERSONIL: () => {
			$("input[name^='identity']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				IdentitasDiriArr[key] = element.value;
			})
			$("select[name^='identity']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				IdentitasDiriArr[key] = element.value;
			})
			$("textarea[name^='identity']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				IdentitasDiriArr[key] = element.value;
			})
			$("input[name^='pernikahan']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				PernikahanArr[key] = element.value;
			})
			$("textarea[name^='pernikahan']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				PernikahanArr[key] = element.value;
			})
			$("input[name^='ayahkandung']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				AyahKandungArr[key] = element.value;
			})
			$("textarea[name^='ayahkandung']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				AyahKandungArr[key] = element.value;
			})
			$("input[name^='ayahtiri']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				AyahTiriArr[key] = element.value;
			})
			$("textarea[name^='ayahtiri']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				AyahTiriArr[key] = element.value;
			})
			$("input[name^='ibukandung']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				IbuKandungArr[key] = element.value;
			})
			$("textarea[name^='ibukandung']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				IbuKandungArr[key] = element.value;
			})
			$("input[name^='ibutiri']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				IbuTiriArr[key] = element.value;
			})
			$("textarea[name^='ibutiri']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				IbuTiriArr[key] = element.value;
			})
			$("input[name^='mertualaki']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				MertuaLakiArr[key] = element.value;
			})
			$("textarea[name^='mertualaki']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				MertuaLakiArr[key] = element.value;
			})
			$("input[name^='mertuaperempuan']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				MertuaPerempuanArr[key] = element.value;
			})
			$("textarea[name^='mertuaperempuan']").each((index, element) => {
				let key = Helper.getRegexFromArray(element.name);
				MertuaPerempuanArr[key] = element.value;
			})
			let FormData = new Object();
			FormData.identitasdiri =  JSON.stringify(IdentitasDiriArr);
			FormData.pernikahan = JSON.stringify(PernikahanArr);
			FormData.ayahkandung = JSON.stringify(AyahKandungArr);
			FormData.ayahtiri = JSON.stringify(AyahTiriArr);
			FormData.ibukandung = JSON.stringify(IbuKandungArr);
			FormData.ibutiri = JSON.stringify(IbuTiriArr);
			FormData.mertualaki = JSON.stringify(MertuaLakiArr);
			FormData.mertuaperempuan = JSON.stringify(MertuaPerempuanArr);
			FormData.pendidikanumum = JSON.stringify(PendidikanArray);
			FormData.pendidikandinas = JSON.stringify(PendidikanDinasArr);
			FormData.pendidikanlain = JSON.stringify(PendidikanLainArr);
			FormData.riwayatpekerjaan = JSON.stringify(RiwayatPekerjaan);
			FormData.riwayatkerjadinas = JSON.stringify(RiwayatPekeraanDinasArr);
			FormData.riwayatalamat = JSON.stringify(RiwayatTempatTinggal);
			FormData.riwayatorganisasi = JSON.stringify(RiwayatOrganisasiArr);
			FormData.riwayatperjuangan = JSON.stringify(RiwayatPerjuanganArr);
			FormData.penghargaan = JSON.stringify(RiwayatPenghargaanArr);
			console.log(FormData);
			let token = $('input[name="mbtni_csrf_token"]').val();
			FormData.mbtni_csrf_token = token;
			$.ajax({
				type: 'POST',
				url: BaseUri+"api/post_pernyataan",
				mimeType: 'multipart/form-data',
				contentType: false,
    			processData: false,
				data: JSON.stringify({data: FormData }),
				success: function(resultData) { console.log(resultData) }
		  });	
		}
	}
	$('.btn-submit-pernyataan').on('click', () => {
		PersonilServices.ADD_PERSONIL();
	})

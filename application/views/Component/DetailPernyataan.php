<div class="row">
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card" style="flex-direction: row !important">
            <div class="card-body">
                <center class="m-t-30"> <img src="<?= base_url('resources/' . $foto . ''); ?>" width="500" height="600"
                        style="width: 40%" />
                </center>
            </div>
            <div>
                <hr>
            </div>
            <div class="card-body" id="content-loader" style="width: 80%">
                <small class="text-muted">Nama</small>
                <h6><?= $nama; ?></h6>
                <small class="text-muted">Kesatuan</small>
                <h6><?= $kesatuan; ?></h6>
                <small class="text-muted">Pangkat</small>
                <h6><?= $pangkat.' | '.$pekerjaan; ?></h6>
                <small class="text-muted">Agama</small>
                <h6 class="text-uppercase">
                    <?php echo $agama?>
                </h6>
                <small class="text-muted">Tempat, Tanggal Lahir</small>
                <h6 class="text-uppercase"><?= $tmp_lahir . ', ' . dateIndoLengkap($tgl_lahir); ?></h6>
                <small class="text-muted">Jenis Kelamin</small>
                <h6>
                    <?= $j_k ?>
                </h6>
                <small class="text-muted">No. Identitas</small>
                <h6><?= $no_identitas; ?></h6>
                <small class="text-muted">NRP </small>
                <h6><?= $nip; ?></h6>
                <small class="text-muted">Suku</small>
                <h6><?= $suku; ?></h6>
                <small class="text-muted">Kewarganegaraan</small>
                <h6><?= $kewarganegaraan; ?></h6>
                <small class="text-muted">Memperoleh Kewarganegaraan</small>
                <h6><?= $cara_kewarganegaraan; ?></h6>
                <small class="text-muted p-t-30 db">Telepon</small>
                <h6>+62<?= $telepon; ?></h6>
                <small class="text-muted p-t-30 db">Alamat</small>
                <h6><?= $alamat_peserta; ?></h6>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Detail Anggota
                </div>
            </div>
            <div class="card-body">
                <form>
                    <input type="hidden" name="<?= $csrf['name'] ?>" value="<?= $csrf['hash'] ?>" />
                    <ul class="nav nav-tabs m-b-30" id="nav-btn-group">
                        <li class="nav-item"> <a href="#tab-identitas-diri" class="nav-link active show"
                                data-toggle="tab" aria-expanded="true">1. Identitas Diri</a> </li>
                        <li class="nav-item"> <a href="#tab-pendidikan-umum" class="nav-link" data-toggle="tab"
                                aria-expanded="true">2. a) Pendidikan Umum</a> </li>
                        <li class="nav-item"> <a href="#tab-pendidikan-dinas" class="nav-link" data-toggle="tab"
                                aria-expanded="true">2. b) Pendidikan Kedinasan</a> </li>
                        <li class="nav-item"> <a href="#tab-pendidikan-lain" class="nav-link" data-toggle="tab"
                                aria-expanded="true">2. c) Pendidikan Lain</a> </li>
                        <li class="nav-item"> <a href="#tab-riwayat-pekerjaan" class="nav-link" data-toggle="tab"
                                aria-expanded="true">3. Riwayat Pekerjaan</a> </li>
                        <li class="nav-item"> <a href="#tab-riwayat-pekerjaan-lain" class="nav-link" data-toggle="tab"
                                aria-expanded="true">4. Riwayat Pekerjaan Lain diluar Dinas</a> </li>
                        <li class="nav-item"> <a href="#tab-riwayat-tempat-tinggal" class="nav-link" data-toggle="tab"
                                aria-expanded="true">5. Riwayat Tempat Tinggal</a> </li>
                        <li class="nav-item"> <a href="#tab-riwayat-organisasi" class="nav-link" data-toggle="tab"
                                aria-expanded="true">6. Riwayat Organisasi</a> </li>
                        <li class="nav-item"> <a href="#tab-riwayat-perjuangan" class="nav-link" data-toggle="tab"
                                aria-expanded="true">7. Riwayat Perjuangan</a> </li>
                        <li class="nav-item"> <a href="#tab-riwayat-penghargaan" class="nav-link" data-toggle="tab"
                                aria-expanded="true">8. Riwayat Penghargaan</a> </li>
                        <li class="nav-item"> <a href="#tab-pernikahan" class="nav-link" data-toggle="tab"
                                aria-expanded="false">9.
                                Data Pernikahan (Suami / Istri)</a> </li>
                        <li class="nav-item"> <a href="#tab-ayah-kandung" class="nav-link" data-toggle="tab"
                                aria-expanded="true">10. Ayah Kandung</a> </li>
                        <li class="nav-item"> <a href="#tab-ayah-tiri" class="nav-link" data-toggle="tab"
                                aria-expanded="true">11.
                                Ayah Tiri/Angkat</a> </li>
                        <li class="nav-item"> <a href="#tab-ibu-kandung" class="nav-link" data-toggle="tab"
                                aria-expanded="true">12.
                                Ibu Kandung</a> </li>
                        <li class="nav-item"> <a href="#tab-ibu-tiri" class="nav-link" data-toggle="tab"
                                aria-expanded="true">13.
                                Ibu Tiri/Angkat</a> </li>
                        <li class="nav-item"> <a href="#tab-mertua-laki" class="nav-link" data-toggle="tab"
                                aria-expanded="true">14.
                                Mertua Laki-Laki</a> </li>
                        <li class="nav-item"> <a href="#tab-mertua-perempuan" class="nav-link" data-toggle="tab"
                                aria-expanded="true">15. Mertua Perempuan</a> </li>
                    </ul>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <hr>
                        <div class="tab-content br-n pn">
                            <?php if($this->uri->segment(3) == 'Detail'): ?>
                            <div style="display:none">
                                <div id="tab-identitas-diri" style="display: none" class="tab-pane active show">
                                    <small class="text-muted">Nama</small>
                                    <h6><?= $nama; ?></h6>
                                    <small class="text-muted">Kesatuan</small>
                                    <h6><?= $kesatuan; ?></h6>
                                    <small class="text-muted">Pangkat</small>
                                    <h6><?= $pangkat.' | '.$pekerjaan; ?></h6>
                                    <small class="text-muted">Agama</small>
                                    <h6 class="text-uppercase">
                                        <?php echo $agama?>
                                    </h6>
                                    <small class="text-muted">Tempat, Tanggal Lahir</small>
                                    <h6 class="text-uppercase"><?= $tmp_lahir . ', ' . dateIndoLengkap($tgl_lahir); ?>
                                    </h6>
                                    <small class="text-muted">Jenis Kelamin</small>
                                    <h6>
                                        <?= $j_k ?>
                                    </h6>
                                    <small class="text-muted">No. Identitas</small>
                                    <h6><?= $no_identitas; ?></h6>
                                    <small class="text-muted">NRP </small>
                                    <h6><?= $nip; ?></h6>
                                    <small class="text-muted">Suku</small>
                                    <h6><?= $suku; ?></h6>
                                    <small class="text-muted">Kewarganegaraan</small>
                                    <h6><?= $kewarganegaraan; ?></h6>
                                    <small class="text-muted">Memperoleh Kewarganegaraan</small>
                                    <h6><?= $cara_kewarganegaraan; ?></h6>
                                    <small class="text-muted p-t-30 db">Telepon</small>
                                    <h6>+62<?= $telepon; ?></h6>
                                    <small class="text-muted p-t-30 db">Alamat</small>
                                    <h6><?= $alamat_peserta; ?></h6>
                                </div>
                                <div id="tab-pendidikan-umum" class="tab-pane hidden">
                                    <h4>Pendidikan Umum</h4>
                                    <table id="tbPendidikan" class="table table-striped table-bordered w-100">
                                        <thead>
                                            <tr>
                                                <td>Nomor Urut</td>
                                                <td>Nama Sekolah / Instansi / Akademi / Perguruan Tinggi</td>
                                                <td>Dari Tahun s/d Tahun</td>
                                                <td>Tempat/Kota</td>
                                                <td>Yang Membiayai</td>
                                                <td>Keterangan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($pendidikan_umum as $key => $value): ?>
                                            <tr>
                                                <td><?= $key+1 ?></td>
                                                <td><?= $value->nama ?></td>
                                                <td><?= $value->tahun ?></td>
                                                <td><?= $value->tempat ?></td>
                                                <td><?= $value->biaya ?></td>
                                                <td><?= $value->keterangan ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-pendidikan-dinas" class="tab-pane">
                                    <table id="tb_pendidikan_dinas" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>Nomor Urut</td>
                                                <td>Nama Pendidikan Kedinasan</td>
                                                <td>Dari Tahun s/d Tahun</td>
                                                <td>Tempat/Kota</td>
                                                <td>Dalam Rangka</td>
                                                <td>Keterangan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($pendidikan_dinas as $key => $value): ?>
                                            <tr>
                                                <td><?= $key+1 ?></td>
                                                <td><?= $value->nama ?></td>
                                                <td><?= $value->tahun ?></td>
                                                <td><?= $value->tempat ?></td>
                                                <td><?= $value->rangka ?></td>
                                                <td><?= $value->keterangan ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-pendidikan-lain" class="tab-pane">
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
                                            <?php foreach($pendidikan_lain as $key => $value): ?>
                                            <tr>
                                                <td><?= $key+1 ?></td>
                                                <td><?= $value->nama ?></td>
                                                <td><?= $value->tahun ?>></td>
                                                <td><?= $value->tempat ?></td>
                                                <td><?= $value->penyelenggara ?></td>
                                                <td><?= $value->keterangan ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-riwayat-pekerjaan" class="tab-pane">
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
                                        <tbody>
                                            <?php foreach($pekerjaan_dinas as $key => $value): ?>
                                            <tr>
                                                <td><?= $key+1 ?></td>
                                                <td><?= $value->jabatan ?></td>
                                                <td><?= $value->pangkat ?>></td>
                                                <td><?= $value->instansi ?></td>
                                                <td><?= $value->tahun ?></td>
                                                <td><?= $value->keterangan ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-riwayat-pekerjaan-lain" class="tab-pane">
                                    <table id="tb_pekerjaandinas" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>Nomor Urut</td>
                                                <td>Nama Pekerjaan / Jabatan</td>
                                                <td>Pangkat / Golongan</td>
                                                <td>Instansi / Kesatuan</td>
                                                <td>Dari Tahun s/d Tahun</td>
                                                <td>Dalam Rangka</td>
                                                <td>Keterangan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($pekerjaan_luardinas as $key => $value): ?>
                                            <tr>
                                                <td><?= $key+1 ?></td>
                                                <td><?= $value->nama ?></td>
                                                <td><?= $value->pangkat ?></td>
                                                <td><?= $value->instansi ?></td>
                                                <td><?= $value->tahun ?></td>
                                                <td><?= $value->keterangan ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-riwayat-tempat-tinggal" class="tab-pane">
                                    <table id="tb_tempattinggal" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>Nomor Urut</td>
                                                <td>Alamat Tempat Tinggal</td>
                                                <td>Dari Tahun s/d Tahun</td>
                                                <td>Dalam Rangka</td>
                                                <td>Keterangan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($tempat_tinggal as $key => $value): ?>
                                            <tr>
                                                <td><?= $key+1 ?></td>
                                                <td><?= $value->alamat ?></td>
                                                <td><?= $value->tahun ?></td>
                                                <td><?= $value->rangka ?></td>
                                                <td><?= $value->keterangan ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-riwayat-organisasi" class="tab-pane">
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($organisasi as $key => $value): ?>
                                            <tr>
                                                <td><?= $key+1 ?></td>
                                                <td><?= $value->nama ?></td>
                                                <td><?= $value->tahun ?></td>
                                                <td><?= $value->jabatan ?></td>
                                                <td><?= $value->tahun_ikut ?></td>
                                                <td><?= $value->alamat ?></td>
                                                <td><?= $value->keterangan ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-riwayat-perjuangan" class="tab-pane">
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
                                        <tbody>
                                            <?php foreach($perjuangan as $key => $value): ?>
                                            <tr>
                                                <td><?= $key+1 ?></td>
                                                <td><?= $value->peristiwa ?></td>
                                                <td><?= $value->tempat ?></td>
                                                <td><?= $value->tahun ?></td>
                                                <td><?= $value->rangka ?></td>
                                                <td><?= $value->keterangan ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-riwayat-penghargaan" class="tab-pane">
                                    <table id="tb_penghargaan" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>Nomor Urut</td>
                                                <td>Bintang, Setia Lencana, Piagam, dan lain-lain</td>
                                                <td>Diterima dari</td>
                                                <td>Dalam Rangka</td>
                                                <td>Kapan</td>
                                                <td>Keterangan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($penghargaan as $key => $value): ?>
                                            <tr>
                                                <td><?= $key+1 ?></td>
                                                <td><?= $value->nama ?></td>
                                                <td><?= $value->dari ?></td>
                                                <td><?= $value->rangka ?></td>
                                                <td><?= $value->kapan ?></td>
                                                <td><?= $value->keterangan ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-pernikahan" class="tab-pane">
                                    <div class="row">
                                        <?php $data = $pernikahan[0] ?>
                                        <legend>9. Data Suami/Istri</legend>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Nama Lengkap</label>
                                                <h6><?= $data->nama; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Nama Alias</label>
                                                <h6><?= $data->nick; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="text-muted">Tempat Lahir</label>
                                                <h6><?= $data->tmp_lahir; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label class="text-muted">Tanggal Lahir</label>
                                                <h6><?= dateIndoLengkap($data->tgl_lahir); ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Suku Bangsa/Ras</label>
                                                <h6><?= $data->suku; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Kewarganegaraan</label>
                                                <h6><?= $data->kewarganegaraan; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Cara Memperoleh Kewarganegaraan</label>
                                                <h6><?= $data->cara_kewarganegaraan; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Agama yang dianut saat ini</label>
                                                <h6><?= $data->agama; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Agama yang dianut sebelumnya</label>
                                                <h6><?= $data->agama_sebelumnya; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Aliran Kepercayaan yang diikuti</label>
                                                <h6><?= $data->aliran; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Alamat terakhir sebelum kawin</label>
                                                <h6><?= $data->alamat_1; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Alamat saat ini</label>
                                                <h6><?= $data->alamat_2; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Pendidikan Terakhir</label>
                                                <h6><?= $data->pendidikan; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Dengan saudara adalah perkawinan ke </label>
                                                <h6><?= $data->pasangan_ke; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Pekerjaan / Jabatan</label>
                                                <h6><?= $data->jabatan_kantor; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Alamat Kantor / Instansi</label>
                                                <h6><?= $data->alamat_kantor; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Kegiatan Berorganisasi</label>
                                            </div>
                                        </div>
                                        <div class="p-1 pl-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">1. Organisasi yang Sedang Diikuti</label>
                                                    <h6><?= $data->org1; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">2. a) Kedudukan Dalam Organisasi</label>
                                                    <h6><?= $data->kedudukan_org1; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">2. b) Sejak Kapan Berorganisasi</label>
                                                    <h6><?= $data->kapan_org1; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">2. c) Alasan Berorganisasi</label>
                                                    <h6><?= $data->alasan_org1; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">3. Organisasi yang Pernah Diikuti</label>
                                                    <h6><?= $data->org2; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">3. a) Kedudukan Dalam Organisasi</label>
                                                    <h6><?= $data->kedudukan_org2; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">3. b) Sejak Kapan Berorganisasi </label>
                                                    <h6><?= $data->lama_org2; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">3. c) Alasan Berorganisasi</label>
                                                    <h6><?= $data->alasan_org2; ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-ayah-kandung" class="tab-pane">
                                    <?php $data = $ayah_kandung[0] ?>
                                    <div class="row d-flex flex-row">
                                        <legend>Data Ayah Kandung</legend>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Nama Lengkap</label>
                                                <h6><?= $data->nama_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Nama Alias</label>
                                                <h6><?= $data->alias_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="text-muted">Tempat, Tanggal Lahir</label>
                                                <h6><?= $data->tempat_ayahkandung.', '.dateIndoLengkap($data->tgllahir_ayahkandung); ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Agama</label>
                                                <h6><?= $data->agama_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Aliran Kepercayaan yang Diikuti</label>
                                                <h6><?= $data->aliran_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Suku Bangsa/Ras</label>
                                                <h6><?= $data->suku_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Kewarganegaraan</label>
                                                <h6><?= $data->kewarganegaraan_ayahkandung; ?></h6>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Cara Memperoleh Kewarganegaraan</label>
                                                <h6><?= $data->caramemperoleh_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Alamat Rumah Saat ini</label>
                                                <h6><?= $data->alamatsekarang_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Alamat Rumah Sebelumnya</label>
                                                <h6><?= $data->alamatsebelum_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Pekerjaan / Jabatan Terakhir</label>
                                                <h6><?= $data->pekerjaan_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Alamat Kantor / Instansi dan Nomor
                                                    telepon</label>
                                                <h6><?= $data->alamatkantor_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Pekerjaan / Jabatan Sebelumnya</label>
                                                <h6><?= $data->pekerjaanterakhir_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Pendidikan Terakhir</label>
                                                <h6><?= $data->pendidikanterakhir_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted" for="">
                                                    Kegiatan Berorganisasi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="pt-0 pl-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">1. Organisasi yang Sedang Diikuti</label>
                                                    <h6><?= $data->organisasidiikuti_ayahkandung; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">2. a) Kedudukan Dalam Organisasi</label>
                                                    <h6><?= $data->kedudukanorganisasi_ayahkandung; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">2. b) Sejak Kapan Berorganisasi </label>
                                                    <h6><?= $data->kapanorganisasi_ayahkandung; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">2. c) Alasan Berorganisasi</label>
                                                    <h6><?= $data->alasanorganisasi_ayahkandung; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class='text-muted' for="">3. Organisasi yang Pernah
                                                        Diikuti</label>
                                                    <h6><?= $data->organisasipernah_ayahkandung; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">3. a) Kedudukan Dalam Organisasi</label>
                                                    <h6><?= $data->kedudukanpernah_ayahkandung; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">3. b) Lama Berorganisasi </label>
                                                    <h6><?= $data->lamaorganisasi_ayahkandung; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-muted">3. c) Alasan Berorganisasi</label>
                                                    <h6><?= $data->alasanorganisasipernah_ayahkandung; ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-muted">Bila Sudah Meninggal dunia, Jelaskan Bilamana,
                                                    Darimana dan
                                                    Penyebabnya</label>
                                                <h6><?= $data->alasanmeninggal_ayahkandung; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-ayah-tiri" class="tab-pane">
                                    <?php $this->load->view('Component/FormAyahTiri') ?>
                                </div>
                                <div id="tab-ibu-kandung" class="tab-pane">
                                    <?php $this->load->view('Component/FormIbuKandung') ?>
                                </div>
                                <div id="tab-ibu-tiri" class="tab-pane">
                                    <?php $this->load->view('Component/FormIbuTiri') ?>
                                </div>
                                <div id="tab-mertua-laki" class="tab-pane">
                                    <?php $this->load->view('Component/FormMertuaLaki') ?>
                                </div>
                                <div id="tab-mertua-perempuan" class="tab-pane">
                                    <?php $this->load->view('Component/FormMertuaPerempuan') ?>
                                </div>
                            </div>

                            <?php else: ?>
                            <div id="tab-identitas-diri" class="tab-pane active show">
                                <div class="row">
                                    <?php $this->load->view('Component/FormIdentitasDiri') ?>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane">
                                <?php $this->load->view('Component/FormPernikahan') ?>
                            </div>
                            <div id="tab-pendidikan-umum" class="tab-pane">
                                <?php $this->load->view('Component/FormPendidikan') ?>
                            </div>
                            <div id="tab-pendidikan-dinas" class="tab-pane">
                                <?php $this->load->view('Component/FormPendidikanKedinasan') ?>
                            </div>
                            <div id="tab-pendidikan-lain" class="tab-pane">
                                <?php $this->load->view('Component/FormPendidikanLain') ?>
                            </div>
                            <div id="tab-riwayat-pekerjaan" class="tab-pane">
                                <?php $this->load->view('Component/FormRiwayatPekerjaan') ?>
                            </div>
                            <div id="tab-riwayat-pekerjaan-lain" class="tab-pane">
                                <?php $this->load->view('Component/FormRiwayatPekerjaanDinas') ?>
                            </div>
                            <div id="tab-riwayat-tempat-tinggal" class="tab-pane">
                                <?php $this->load->view('Component/FormRiwayatTempatTinggal') ?>
                            </div>
                            <div id="tab-riwayat-organisasi" class="tab-pane">
                                <?php $this->load->view('Component/FormRiwayatOrganisasi') ?>
                            </div>
                            <div id="tab-riwayat-perjuangan" class="tab-pane">
                                <?php $this->load->view('Component/FormRiwayatPerjuangan') ?>
                            </div>
                            <div id="tab-riwayat-penghargaan" class="tab-pane">
                                <?php $this->load->view('Component/FormRiwayatPenghargaan') ?>
                            </div>
                            <div id="tab-pernikahan" class="tab-pane">
                                <?php $this->load->view('Component/FormPernikahan') ?>
                            </div>
                            <div id="tab-ayah-kandung" class="tab-pane">
                                <?php $this->load->view('Component/FormAyahKandung') ?>
                            </div>
                            <div id="tab-ayah-tiri" class="tab-pane">
                                <?php $this->load->view('Component/FormAyahTiri') ?>
                            </div>
                            <div id="tab-ibu-kandung" class="tab-pane">
                                <?php $this->load->view('Component/FormIbuKandung') ?>
                            </div>
                            <div id="tab-ibu-tiri" class="tab-pane">
                                <?php $this->load->view('Component/FormIbuTiri') ?>
                            </div>
                            <div id="tab-mertua-laki" class="tab-pane">
                                <?php $this->load->view('Component/FormMertuaLaki') ?>
                            </div>
                            <div id="tab-mertua-perempuan" class="tab-pane">
                                <?php $this->load->view('Component/FormMertuaPerempuan') ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <!-- Print ID Card () -->
                        <!-- <div class="form-group">
                <?php $id = str_replace(['+', '/', '='], ['-', '_', '~'], $this->encryption->encrypt($id)); ?>
                <a href="<?= base_url('Dashboard/Pernyataan/Print/' . $id . ''); ?>" class="btn btn-default" target="new"><i class="fas fa-print"></i> Print</a>
                <a href="<?= site_url('Dashboard/Pernyataan/Print/'.$id.'') ?>" class="btn btn-primary"><span class="fa fa-id-card"></span> Print Id Card dan Pin</a>
            </div> -->
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="button-group" data-url="<?=  $this->uri->segment(3) ?>">
                    <?php switch($this->uri->segment(3)){
                case 'Add':
            ?>
                    <button class="btn btn-danger">Cancel</button>
                    <button class="btn btn-success btn-submit-pernyataan">Simpan</button>
                    <?php
                break;
                case 'Detail':
            ?>
                    <button class="btn btn-danger">Cancel</button>
                    <button class="btn btn-success btn-submit-pernyataan">Edit</button>
                    <button class="btn btn-primary btn">Print Pernyataan</button>
                    <button class="btn btn-primary btn" onclick="PersonilServices.PRINT_ID('<?= encode($id) ?>')">Print
                        ID Card</button>
                    <?php 
                break;
                default:
            ?>
                    <button class="btn btn-danger">Cancel</button>
                    <button class="btn btn-success btn">Simpan</button>
                    <button class="btn btn-success btn-submit-pernyataan">Kirim</button>
                    <?php 
                break;
            } ?>

                </div>
            </div>
        </div>
    </div>
</div>
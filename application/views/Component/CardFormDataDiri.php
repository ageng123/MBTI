<div class="card">
    <div class="card-header">
        <div class="card-title">
            Detail Anggota
        </div>
    </div>
    <div class="card-body">
        <form>
        <input type="hidden" name="<?= $csrf['name'] ?>" value="<?= $csrf['hash'] ?>"/>
        <ul class="nav nav-tabs m-b-30">
            <li class="nav-item"> <a href="#tab-identitas-diri" class="nav-link active show" data-toggle="tab"
                    aria-expanded="true">1. Identitas Diri</a> </li>
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
            <li class="nav-item"> <a href="#tab-pernikahan" class="nav-link" data-toggle="tab" aria-expanded="false">9.
                    Data Pernikahan (Suami / Istri)</a> </li>
            <li class="nav-item"> <a href="#tab-ayah-kandung" class="nav-link" data-toggle="tab"
                    aria-expanded="true">10. Ayah Kandung</a> </li>
            <li class="nav-item"> <a href="#tab-ayah-tiri" class="nav-link" data-toggle="tab" aria-expanded="true">11.
                    Ayah Tiri/Angkat</a> </li>
            <li class="nav-item"> <a href="#tab-ibu-kandung" class="nav-link" data-toggle="tab" aria-expanded="true">12.
                    Ibu Kandung</a> </li>
            <li class="nav-item"> <a href="#tab-ibu-tiri" class="nav-link" data-toggle="tab" aria-expanded="true">13.
                    Ibu Tiri/Angkat</a> </li>
            <li class="nav-item"> <a href="#tab-mertua-laki" class="nav-link" data-toggle="tab" aria-expanded="true">14.
                    Mertua Laki-Laki</a> </li>
            <li class="nav-item"> <a href="#tab-mertua-perempuan" class="nav-link" data-toggle="tab"
                    aria-expanded="true">15. Mertua Perempuan</a> </li>
        </ul>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <hr>
            <div class="tab-content br-n pn">
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
            </div>
            <!-- Print ID Card () -->
            <!-- <div class="form-group">
                <?php $id = str_replace(['+', '/', '='], ['-', '_', '~'], $this->encryption->encrypt($peserta[0]->id)); ?>
                <a href="<?= base_url('Dashboard/Pernyataan/Print/' . $id . ''); ?>" class="btn btn-default" target="new"><i class="fas fa-print"></i> Print</a>
                <a href="<?= site_url('Dashboard/Pernyataan/Print/'.$id.'') ?>" class="btn btn-primary"><span class="fa fa-id-card"></span> Print Id Card dan Pin</a>
            </div> -->
        </div>
    </form>
    </div>
    <div class="card-footer">
        <div class="button-group">
            <button class="btn btn-danger">Cancel</button>
            <button class="btn btn-success btn-submit-pernyataan">Kirim</button>
        </div>
    </div>
</div>

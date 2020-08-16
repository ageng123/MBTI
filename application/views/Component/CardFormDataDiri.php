<div class="card">
    <div class="card-header">
        <div class="card-title">
            Detail Anggota
        </div>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs m-b-30">
            <li class="nav-item"> <a href="#tab-identitas-diri" class="nav-link active show" data-toggle="tab" aria-expanded="true">1. Identitas Diri</a> </li>
            <li class="nav-item"> <a href="#tab-pendidikan-umum" class="nav-link" data-toggle="tab" aria-expanded="true">2. a) Pendidikan Umum</a> </li>
            <li class="nav-item"> <a href="#tab-pendidikan-dinas" class="nav-link" data-toggle="tab" aria-expanded="true">2. b) Pendidikan Kedinasan</a> </li>
            <li class="nav-item"> <a href="#tab-pendidikan-lain" class="nav-link" data-toggle="tab" aria-expanded="true">2. c) Pendidikan Lain</a> </li>
            <li class="nav-item"> <a href="#tab-riwayat-pekerjaan" class="nav-link" data-toggle="tab" aria-expanded="true">3. Riwayat Pekerjaan</a> </li>
            <li class="nav-item"> <a href="#tab-riwayat-pekerjaan-lain" class="nav-link" data-toggle="tab" aria-expanded="true">4. Riwayat Pekerjaan Lain diluar Dinas</a> </li>
            <li class="nav-item"> <a href="#tab-riwayat-tempat-tinggal" class="nav-link" data-toggle="tab" aria-expanded="true">5. Riwayat Tempat Tinggal</a> </li>
            <li class="nav-item"> <a href="#tab10" class="nav-link" data-toggle="tab" aria-expanded="true">6. Riwayat Organisasi</a> </li>
            <li class="nav-item"> <a href="#tab9" class="nav-link" data-toggle="tab" aria-expanded="true">7. Riwayat Perjuangan</a> </li>
            <li class="nav-item"> <a href="#tab12" class="nav-link" data-toggle="tab" aria-expanded="true">8. Riwayat Penghargaan</a> </li>
            <li class="nav-item"> <a href="#tab2" class="nav-link" data-toggle="tab" aria-expanded="false">9. Data Pernikahan (Suami / Istri)</a> </li>
            <li class="nav-item"> <a href="#tab11" class="nav-link" data-toggle="tab" aria-expanded="true">10. Ayah Kandung</a> </li>
            <li class="nav-item"> <a href="#tab11" class="nav-link" data-toggle="tab" aria-expanded="true">11. Ayah Tiri/Angkat</a> </li>
            <li class="nav-item"> <a href="#tab11" class="nav-link" data-toggle="tab" aria-expanded="true">12. Ibu Kandung</a> </li>
            <li class="nav-item"> <a href="#tab11" class="nav-link" data-toggle="tab" aria-expanded="true">13. Ibu Tiri/Angkat</a> </li>
            <li class="nav-item"> <a href="#tab11" class="nav-link" data-toggle="tab" aria-expanded="true">14. Mertua Laki-Laki</a> </li>
            <li class="nav-item"> <a href="#tab11" class="nav-link" data-toggle="tab" aria-expanded="true">15. Mertua Perempuan</a> </li>
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
                <div id="tab6" class="tab-pane">
                </div>
                <div id="tab7" class="tab-pane">
                </div>
                <div id="tab8" class="tab-pane">
                </div>
                <div id="tab9" class="tab-pane">
                </div>
                <div id="tab10" class="tab-pane">
                </div>
                <div id="tab11" class="tab-pane">
                </div>
                <div id="tab12" class="tab-pane">
                </div>
            </div>
            <!-- Print ID Card () -->
            <!-- <div class="form-group">
                <?php $id = str_replace(['+', '/', '='], ['-', '_', '~'], $this->encryption->encrypt($peserta[0]->id)); ?>
                <a href="<?= base_url('Dashboard/Pernyataan/Print/' . $id . ''); ?>" class="btn btn-default" target="new"><i class="fas fa-print"></i> Print</a>
                <a href="<?= site_url('Dashboard/Pernyataan/Print/'.$id.'') ?>" class="btn btn-primary"><span class="fa fa-id-card"></span> Print Id Card dan Pin</a>
            </div> -->
        </div>
    </div>
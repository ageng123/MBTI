<div class="card" style="flex-direction: row !important">
            <div class="card-body">
                <center class="m-t-30"> <img src="<?= base_url('resources/' . $foto . ''); ?>" width="500" height="600" style="width: 40%" />
                </center>
            </div>
            <div>
                <hr> </div>
            <div class="card-body" style="min-width: 40%">
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
<div class="card" style="flex-direction: row !important">
            <div class="card-body">
                <center class="m-t-30"> <img src="<?= base_url('assets/images/personil/' . $foto . ''); ?>" style="width: 40%" />
                </center>
            </div>
            <div>
                <hr> </div>
            <div class="card-body">
                <small class="text-muted">Nama</small>
                <h6><?= $nama; ?></h6>
                <small class="text-muted">Kesatuan</small>
                <h6><?= $kesatuan; ?></h6>
                <small class="text-muted">Pangkat</small>
                <h6><?= $pangkat.' | '.$pekerjaan; ?></h6>
                <small class="text-muted">Agama</small>
                <h6 class="text-uppercase">
                    <?php
                    if ($agama == 1) {
                        echo 'ISLAM';
                    } elseif ($agama == 2) {
                        echo 'KATOLIK';
                    } elseif ($agama == 3) {
                        echo 'PROTESTAN';
                    } elseif ($agama == 4) {
                        echo 'HINDU';
                    } elseif ($agama == 5) {
                        echo 'BUDHA';
                    } elseif ($agama == 6) {
                        echo 'KONG HU CU';
                    } else {
                        echo 'Lainnya';
                    }
                    ?>
                </h6>
                <small class="text-muted">Tempat, Tanggal Lahir</small>
                <h6 class="text-uppercase"><?= $tmp_lahir . ', ' . dateIndoLengkap($tgl_lahir); ?></h6>
                <small class="text-muted">Jenis Kelamin</small>
                <h6>
                    <?php
                    if ($j_k == 1) {
                        echo 'LAKI-LAKI';
                    } else {
                        echo 'PEREMPUAN';
                    }
                    ?>
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
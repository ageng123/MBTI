<div class="row">
    <div class="col-lg-12 col-xlg-3 col-md-12">
        <input type="hidden" name="nama" value="<?= $peserta[0]->nama; ?>" readonly=""/>
        <input type="hidden" name="pekerjaan" value="<?= $peserta[0]->pekerjaan; ?>" readonly=""/>
        <input type="hidden" name="pangkat" value="<?= $peserta[0]->pangkat; ?>" readonly=""/>
        <div class="card d-flex flex-row">
            <div class="card-body">
                <center class="m-t-30"> <img src="<?= base_url('assets/images/personil/priyambodo.jpg'); ?>" style="width: 30%" />
                <!-- <h4 class="card-title m-t-10"><?= $peserta[0]->nama; ?></h4>
                <h5 class="card-title m-t-10"><?= $peserta[0]->kesatuan; ?></h5>
                <h6 class="card-subtitle"><?= $peserta[0]->pekerjaan . ' | ' . $peserta[0]->pangkat; ?></h6> -->
                </center>
            </div>
            <div>
            <hr> </div>
            <div class="card-body">
                <small class="text-muted">NIP / NRP </small>
                <h6><?= $peserta[0]->nip; ?></h6>
                <small class="text-muted">No. Identitas</small>
                <h6><?= $peserta[0]->no_identitas; ?></h6>
                <small class="text-muted">Nama</small>
                <h6><?= $peserta[0]->nama; ?></h6>
                <small class="text-muted">Kesatuan</small>
                <h6><?= $peserta[0]->kesatuan; ?></h6>
                <small class="text-muted">Pangkat</small>
                <h6><?= $peserta[0]->pangkat.' ('.$peserta[0]->pekerjaan.')' ; ?></h6>
                <small class="text-muted p-t-30 db">Telepon</small>
                <h6>+62<?= $peserta[0]->telepon; ?></h6>
                <small class="text-muted p-t-30 db">Alamat</small>
                <h6><?= $peserta[0]->alamat; ?></h6>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xlg-9">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Penetapan Mutasi
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('Dashboard/Mutasi/Save/'); ?>" method="POST">
                    <input type="hidden" name="<?= $csrf['name'] ?>" value="<?= $csrf['hash'] ?>"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tanggal Mutasi</label>
                                <input type="text" name="berlaku" class="form-control datepicker" required=""/>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Pangkat</label>
                                <input type="text" hidden name="personil_number" value="<?= $peserta[0]->id ?>">
                                <input type="text" name="n_pangkat" class="form-control" required=""/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" required=""/>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control" required=""></textarea>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <div class="btn-group">
                            <a href="<?= base_url('Dashboard/Mutasi/index/'); ?>" class="btn waves-effect waves-light btn-danger"><i class="fas fa-times"></i> Batal</a>
                            <button type="submit" class="btn waves-effect waves-light btn-success"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">History Mutasi</div>
            </div>
            <div class="card-body">
                <table style="width: 100%" id="tbHistoryMutasi" class="table table-bordered serverSide table-striped" data-url="<?= site_url('Dashboard/Mutasi/getHistoryMutasi?id=').$peserta[0]->id ?>">
                    <thead>
                        <td>Nomor</td>
                        <td>Tanggal Mutasi</td>
                        <td>Keterangan</td>
                        <td>Tanggal Pembuatan Pelanggaran</td>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('Dashboard/modalmutasi') ?>
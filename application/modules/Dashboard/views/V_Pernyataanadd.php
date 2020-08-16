<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    #image-preview{
        display:none;
        width : 151px;
        height : 226px;
    }
</style>
<!-- <div class="card">
    <div class="card-body">
        <form action="<?= base_url('Dashboard/Pernyataan/Save/'); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-uppercase">nama lengkap</label>
                        <input type="text" name="nama" class="form-control" required="" autocomplete="off"/>
                    </div>

                    <div class="form-group">
                        <label class="text-uppercase">tempat lahir</label>
                        <input type="text" name="tmp_lahir" class="form-control" required="" autocomplete="off"/>
                    </div>

                    <div class="form-group">
                        <label class="text-uppercase">Agama</label>
                        <select name="agama" class="form-control custom-select" required="">
                            <option value="">Pilih Agama</option>
                            <option value="1">ISLAM</option>
                            <option value="2">KATOLIK</option>
                            <option value="3">PROTESTAN</option>
                            <option value="4">HINDU</option>
                            <option value="5">BUDHA</option>
                            <option value="6">KONG HU CHU</option>
                            <option value="7">lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">kesatuan/instansi</label>
                        <input type="text" name="kesatuan_instansi" class="form-control" required="" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">alamat lengkap</label>
                        <textarea class="form-control" name="alamat" required=""></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-uppercase">Jenis Kelamin</label>
                        <select name="j_k" class="form-control custom-select" required="">
                            <option value="">Jenis Kelamin</option>
                            <option value="1">LAKI-LAKI</option>
                            <option value="2">PEREMPUAN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">pekerjaan / jabatan</label>
                        <input type="text" name="gawe" class="form-control" required="" autocomplete="off"/>
                    </div>

                    <div class="form-group">
                        <label class="text-uppercase">tanggal lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" required="" autocomplete="off"/>
                    </div>

                    <div class="form-group">
                        <label class="text-uppercase">pangkat / golongan / nrp / nip</label>
                        <input type="text" name="pgnn" class="form-control" required="" autocomplete="off"/>
                    </div>

                    <div class="form-group">
                        <label class="text-uppercase">telepon</label>
                        <input type="number" name="telepon" class="form-control" required="" autocomplete="off" inputmode="numeric" pattern="[0-9]*" onkeypress="return isNumber(event)"/>
                    </div>
                    <div class="form-group">
                        <img id="image-preview" alt="image preview"/>
                        <div class="clear" style="margin:10px 0px"></div>
                        <label class="text-uppercase">pas photo 4x6 cm</label>
                        <div class="clear" style="margin:10px 0px"></div>
                        <input type="file" name="fotos" id="image-source" required="" onchange="previewImage();"/>
                    </div>
                </div>
            </div>
            <hr>
            
            <div class="form-group">
                <div class="btn-group">
                    <a href="<?= base_url('Dashboard/Pernyataan/index/'); ?>" class="btn waves-effect waves-light btn-danger"><i class="fas fa-times"></i> Batal</a>
                    <button type="submit" class="btn waves-effect waves-light btn-success"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
        </form>
    </div>
</div> -->
<?php cardDataDiri() ?>
<script>
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    }
    ;
</script>
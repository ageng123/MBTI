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
</style>
<div class="card">
    <div class="card-body">
        <div class="text-center">
            <h3 class="text-uppercase"><u>pernyataan</u></h3>
        </div>
        <div class="clear" style="margin:5%"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-uppercase">nama lengkap</label>
                    <input type="text" name="nama" class="form-control" required="" autocomplete="off"/>
                </div>

                <div class="form-group">
                    <label class="text-uppercase">tempat lahir</label>
                    <input type="text" name="nama" class="form-control" required="" autocomplete="off"/>
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
                    <label class="text-uppercase">alamat</label>
                    <textarea class="form-control" name="alamat" required=""></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-uppercase">pekerjaan / jabatan</label>
                    <input type="text" name="gawe" class="form-control" required="" autocomplete="off"/>
                </div>

                <div class="form-group">
                    <label class="text-uppercase">tanggal lahir</label>
                    <input type="date" name="nama" class="form-control" required="" autocomplete="off"/>
                </div>

                <div class="form-group">
                    <label class="text-uppercase">pangkat / golongan / nrp / nip</label>
                    <input type="text" name="pangkat" class="form-control" required="" autocomplete="off"/>
                </div>

                <div class="form-group">
                    <label class="text-uppercase">telepon</label>
                    <input type="number" name="telepon" class="form-control" required="" autocomplete="off" inputmode="numeric" pattern="[0-9]*" onkeypress="return isNumber(event)"/>
                </div>
            </div>
        </div>
    </div>
</div>
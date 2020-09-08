<div class="row">
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <?php cardIdentity($peserta[0]) ?>
    </div>
    <!-- <div class="col-12">
    </div> -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <p>Data Fisik Form</p>
            </div>
            <div class="card-body">
                <form action="<?= site_url('Dashboard/Datafisik/saveData?session_id=').$_GET['session_id'] ?>" class="col-12 w-100" method="post">
                    <div class="row">
                        <div class="col-12">
                            <legend>1. Sidik Jari</legend>
                            <table class="table table-bordered">
                                <thead>
                                    <td>Jempol Kanan</td>
                                    <td>Telunjuk Kanan</td>
                                    <td>Jari Tengah Kanan</td>
                                    <td>Jari Manis Kanan</td>
                                    <td>Kelingking Kanan</td>
                                </thead>
                                <tbody>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kanan[1]" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kanan[2]" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kanan[3]" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kanan[4]" class="form-control">
                                        </div>
                                    </td>
                                    <<td>
                                        <div class="form-group">
                                            <input type="file" name="kanan[5]" class="form-control">
                                        </div>
                                        </td>
                                </tbody>
                                <thead>
                                    <td>Jempol Kiri</td>
                                    <td>Telunjuk Kiri</td>
                                    <td>Jari Tengah Kiri</td>
                                    <td>Jari Manis Kiri</td>
                                    <td>Kelingking Kiri</td>
                                </thead>
                                <tbody>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kiri[1]" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kiri[2]" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kiri[3]" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kiri[4]" class="form-control">
                                        </div>
                                    </td>
                                    <<td>
                                        <div class="form-group">
                                            <input type="file" name="kiri[5]" class="form-control">
                                        </div>
                                        </td>
                                </tbody>
                            </table>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tanda Tangan 1</label>
                                    <input type="file" name="tanda_tangan[1]" class="form-control">
                                    <div id="signArea">
                                        <h3>Put Signature Below</h3>
                                        <div class="sign signWrapper">
                                            <div class="typed"></div>
                                            <canvas class="sign-pad" id="sign-pad"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tanda Tangan 2</label>
                                    <input type="file" name="tanda_tangan[2]" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tempat</label>
                                        <input type="text" name='tempat' class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tanggal</label>
                                        <input type="text datepicker" name='tanggal' class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="">catatan</label>
                                <textarea name="catatan" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">diambil oleh</label>
                                    <input type="text" name="diambil" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">disaksikan oleh</label>
                                    <input type="text" name="saksi" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tinggi Badan (dalam cm)</label>
                                    <input type="text" name="tinggi" oninput="return this.value = this.value.replace(/[^0-9]/g, '');" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Warna Kulit</label>
                                    <input type="text" name="warna" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 d-flex flex-row">
                                    <div class="col-md-2">
                                        <label for="">Lembaga</label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lembaga"
                                                id="exampleRadios1" value="kuat" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Kuat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lembaga"
                                                id="exampleRadios1" value="tegak">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Tegak
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lembaga"
                                                id="exampleRadios1" value="lampai">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Lampai
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lembaga"
                                                id="exampleRadios1" value="lemah">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Lemah
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 d-flex flex-row">
                                    <div class="col-md-2">
                                        <label for="">Langkah</label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="langkah" id="langkah"
                                                value="tegak" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Tegak
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="langkah" id="langkah"
                                                value="gagah">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Gagah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="langkah" id="langkah"
                                                value="bongkok">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Bongkok
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="langkah" id="langkah"
                                                value="kepala tunduk kaku">
                                            <label class="form-check-label" for="exampleRadios1">
                                                kepala tunduk kaku
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 d-flex flex-row">
                                    <div class="col-md-2">
                                        <label for="">Kaki</label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kaki" id="kaki"
                                                value="panjang" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Panjang
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kaki" id="kaki"
                                                value="pendek">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Pendek
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kaki" id="kaki"
                                                value="lurus">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Lurus
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kaki" id="kaki"
                                                value="bengkok o">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Bengkok O
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kaki" id="kaki"
                                                value="bengkok x">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Bengkok X
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 flex-row d-flex">
                                    <div class="col-md-2">
                                        <label for="">Lengan</label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tangan" id="kaki"
                                                value="panjang" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Panjang
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tangan" id="kaki"
                                                value="pendek">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Pendek
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 flex-row d-flex">
                                    <div class="col-md-2">
                                        <label for="">Bangun Kepala</label>
                                    </div>
                                    <div class="col md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepala" id="kepala"
                                                value="Sebagai Panggal" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Sebagai Panggal
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepala" id="kepala"
                                                value="Belah Ketupat" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Belah Ketupat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepala" id="kepala"
                                                value="Limas Persegi Empat" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Limas Persegi Empat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepala" id="kepala"
                                                value="Panjang" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Panjang
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepala" id="kepala"
                                                value="Bulat" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Bulat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepala" id="kepala"
                                                value="Jorong" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Jorong
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepala" id="kepala"
                                                value="Lonjong" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Lonjong
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepala" id="kepala"
                                                value="Panjang" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Panjang
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 d-flex flex-row">
                                    <div class="col-md-2"><label for="">Rambut</label></div>
                                    <div class="col md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rambut" id="rambut"
                                                value="Lebat" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Lebat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rambut" id="rambut"
                                                value="Jarang" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Jarang
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rambut" id="rambut"
                                                value="Berombak" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Berombak
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rambut" id="rambut"
                                                value="Kejur-kejur" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Kejur-kejur
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rambut" id="rambut"
                                                value="keriting" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Keriting
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rambut" id="rambut"
                                                value="tegak" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Tegak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 d-flex flex-row">
                                    <div class="col-md-2"><label for="">Kening</label></div>
                                    <div class="col md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kening" id="kening"
                                                value="Rata" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Rata
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kening" id="kening"
                                                value="Miring Keatas" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Miring Keatas
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kening" id="kening"
                                                value="Kebawah Bertemu Satu Sama Lain." checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Kebawah Bertemu Satu Sama Lain.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 d-flex flex-row">
                                    <div class="col-md-2"><label for="">Dahi</label></div>
                                    <div class="col md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dahi" id="dahi"
                                                value="Loncos Kebelakang" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Loncos Kebelakang
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dahi" id="dahi"
                                                value="Lurus Kebawah" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Lurus Kebawah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dahi" id="dahi"
                                                value="Cenderung Kedepan" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Cenderung Kedepan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dahi" id="dahi"
                                                value="Tonjol" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Tonjol
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dahi" id="dahi"
                                                value="Mengkolak" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Mengkolak
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dahi" id="dahi"
                                                value="Melengkung Keras" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Melengkung Keras
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dahi" id="dahi"
                                                value="Tinggi" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Tinggi
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dahi" id="dahi"
                                                value="Rendah Lebar Ciut" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Rendah Lebar Ciut
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 d-flex flex-row">
                                    <div class="col-md-2"><label for="">Mata</label></div>
                                    <div class="col md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mata" id="mata"
                                                value="coklat" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Coklat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mata" id="mata"
                                                value="coklat muda" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Coklat Muda
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mata" id="mata"
                                                value="coklat tua" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Coklat Tua
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mata" id="mata"
                                                value="Hitam Biru" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Hitam Biru
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mata" id="mata"
                                                value="Biru Muda" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Biru Muda
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mata" id="mata"
                                                value="Biru Tua" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Biru Tua
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mata" id="mata"
                                                value="Hijau" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                hijau
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mata" id="mata"
                                                value="Iris" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                iris
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mata" id="mata"
                                                value="bundar" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Bundaran Mutiara
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 d-flex flex-row">
                                    <div class="col-md-2"><label for="">Hidung</label></div>
                                    <div class="col md-10 row">
                                        <div class="col-md-2"><label for="">Pangkalnya:</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[1]"
                                                    id="hidung" value="rata" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Rata
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[1]"
                                                    id="hidung" value="masuk" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Masuk Kedalam
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2"><label for="">Batangnya:</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[2]"
                                                    id="hidung" value="kedalam" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Membentuk Kedalam
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[2]"
                                                    id="hidung" value="Keluar" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Keluar Lurus
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[2]"
                                                    id="hidung" value="keatas" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Alasnya Menuju Keatas
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[2]"
                                                    id="hidung" value="kebawah" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Kebawah Rata
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2"><label for="">Bentuknya:</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[3]"
                                                    id="kecil" value="kiri" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Kecil
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[3]"
                                                    id="besar" value="kiri" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Besar
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[3]"
                                                    id="hidung" value="mengangkat" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Mengangkat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2"><label for="">Bengkok:</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[4]"
                                                    id="hidung" value="kiri" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Kekiri
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[4]"
                                                    id="hidung" value="kanan" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Kekanan
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung[4]"
                                                    id="hidung" value="mengangkat" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Mengangkat
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group col-12 d-flex flex-row">
                                    <div class="col-md-2"><label for="">Bibir</label></div>
                                    <div class="col md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bibir" id="bibir"
                                                value="Tebal" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Tebal
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bibir" id="bibir"
                                                value="Tipis" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Tipis
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bibir" id="bibir"
                                                value="Sumbing" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Sumbing
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group d-flex row col-12" style="padding-left: 1.8rem !important">
                                    <div class="col-md-2"><label for="">Telinga</label></div>
                                    <div class="col-md-10" style="padding-left: 1.05rem !important;">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Telinga[1]"
                                                id="telinga" value="Bulat" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Bulat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Telinga[1]"
                                                id="telinga" value="Bulat Bujur Tiga Penjuru" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Bulat Bujur Tiga Penjuru
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Telinga[1]"
                                                id="telinga" value="Jauh Dari Belakang" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Jauh Dari Belakang
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Telinga[1]"
                                                id="telinga" value="Berlengket dengan Kepala Belakang" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Berlengket dengan Kepala Bagian Atas Mengenai Belakang
                                            </label>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-2"><label for="">Bentuk Cuping:</label></div>
                                            <div class="col-md-10">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="Telinga[2]" id="telinga"
                                                        value="Berupa Baja Persegi" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Berupa Baja Persegi
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="Telinga[2]" id="telinga" value="Melengkung"
                                                        checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Melengkung
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="Telinga[2]" id="telinga"
                                                        value="Bergontang-Ganting Rata" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Bergontang-Ganting Rata
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="Telinga[2]" id="telinga" value="Tebal" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Tebal
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="Telinga[2]" id="telinga" value="Beralur" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Beralur
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tanda Istimewa</label>
                                    <textarea name="tandaistimewa" class="form-control" id="" cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Nama Anak</label>
                                    <textarea name="anak" class="form-control" id="" cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-md btn-danger">Cancel</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>
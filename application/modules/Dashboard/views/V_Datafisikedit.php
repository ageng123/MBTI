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
                <form action="post" class="row" method="post">
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
                                            <input type="file" name="kanan['jempol']" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kanan['telunjuk']" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kanan['tengah']" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kanan['manis']" class="form-control">
                                        </div>
                                    </td>
                                    <<td>
                                        <div class="form-group">
                                            <input type="file" name="kanan['kelingking']" class="form-control">
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
                                            <input type="file" name="kiri['jempol']" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kiri['telunjuk']" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kiri['tengah']" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="file" name="kiri['manis']" class="form-control">
                                        </div>
                                    </td>
                                    <<td>
                                        <div class="form-group">
                                            <input type="file" name="kiri['kelingking']" class="form-control">
                                        </div>
                                        </td>
                                </tbody>
                            </table>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tanda Tangan 1</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tanda Tangan 2</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tempat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tanggal</label>
                                        <input type="text datepicker" class="form-control">
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
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">disaksikan oleh</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tinggi Badan</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Warna Kulit</label>
                                    <input type="text" class="form-control">
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
                                                value="Belah Ketupat / Limas Persegi Empat / Panjang" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Belah Ketupat / Limas Persegi Empat / Panjang
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
                                                Lebat / Jarang
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rambut" id="rambut"
                                                value="Berombak" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Berombak / Kejur-kejur
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
                                                value="miring" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Miring Keatas / Kebawah Bertemu Satu Sama Lain.
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
                                                value="Rata" checked>
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
                                                <input class="form-check-input" type="radio" name="hidung['pangkal']"
                                                    id="hidung" value="rata" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Rata
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['pangkal']"
                                                    id="hidung" value="masuk" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Masuk Kedalam
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2"><label for="">Batangnya:</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['batang']"
                                                    id="hidung" value="kedalam" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Membentuk Kedalam
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['batang']"
                                                    id="hidung" value="Keluar" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Keluar Lurus
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['batang']"
                                                    id="hidung" value="keatas" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Alasnya Menuju Keatas
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['batang']"
                                                    id="hidung" value="kebawah" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Kebawah Rata
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2"><label for="">Bentuknya:</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['bentuk']"
                                                    id="kecil" value="kiri" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Kecil
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['bentuk']"
                                                    id="besar" value="kiri" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Besar
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['bengkok']"
                                                    id="hidung" value="mengangkat" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Mengangkat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2"><label for="">Bengkok:</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['bengkok']"
                                                    id="hidung" value="kiri" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Kekiri
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['bengkok']"
                                                    id="hidung" value="kanan" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Kekanan
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hidung['bengkok']"
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
                                <div class="form-group">
                                    <label for="">Telinga</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tanda Istimewa</label>
                                    <textarea name="tandaistimewa" class="form-control" id="" cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn btn-md btn-danger">Cancel</button>
                <a href="<?= site_url('Dashboard/Datafisik/edit?session_id=') ?><?= encode($peserta[0]->id) ?>"
                    class="btn btn-md btn-success">Simpan</a>
            </div>
        </div>
    </div>
</div>
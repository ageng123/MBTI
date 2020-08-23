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
                                <div class="form-group">
                                    <label for="">Lembaga</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lembaga" id="exampleRadios1"
                                            value="kuat" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Kuat
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lembaga" id="exampleRadios1"
                                            value="tegak">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Tegak
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lembaga" id="exampleRadios1"
                                            value="lampai">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Lampai
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lembaga" id="exampleRadios1"
                                            value="lemah">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Lemah
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Langkah</label>
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
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Kaki</label>
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
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Lengan</label>
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
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Bangun Kepala</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Rambut</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Kening</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Dahi</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Mata</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Hidung</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Bibir</label>
                                    <input type="text" class="form-control">
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
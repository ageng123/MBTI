<style>
    li{
        display: block;
        margin:20px 0px;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<div class="clear" style="margin:5% 0px;"></div>
<form action="<?= base_url('Dashboard/Pernyataan/Add'); ?>" method="post">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h3 class="text-uppercase"><u>dengan ini menyatakan</u></h3>
            </div>
            <hr>
            <ul>
                <li>1.&ensp;&ensp;Bersedia memberikan keterangan dengan jujur dan ikhlas dalam menjawab pertanyaan tertulis dan wawancara.</li>
                <li>2.&ensp;&ensp;Tidak menyebarluaskan / membicarakan materi pertanyaan tertulis maupun lisan.</li>
                <li>3.&ensp;&ensp;Bersedia bersumpah / berjanji menurut agama yang saya anut bila diperlukan guna menguatkan keterangan yang telah saya berikan.</li>
                <li>4.&ensp;&ensp;Apabila didalam keterangan dan jawaban yang saya berikan terhadap hal-hal yang saya palsukan atau saya isi tidak berdasarkan data yang sebenarnya, saya bersedia dikenakan sanksi sesuai ketentuan peraturan perundangan yang berlaku.</li>
            </ul>
            <p class="text-center">
                <b>Demikian pernyataan ini saya buat dalam keadaan sehat jasmani dan rokhani serta tidak ada paksaan dari pihak manapun.</b>
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h3 class="text-uppercase">petunjuk pengisian<br><u>formulir clearance test (CT)</u></h3>
            </div>
            <hr>
            <ul>
                <li>
                    <b>I.&ensp;&ensp;<u>UMUM</u></b>
                </li>
                <div class="clear" style="margin:10px 0px;"></div>
                <ul>
                    <li>
                        1.&ensp;&ensp;Pertanyaan jawaban test bersifat "RAHASIA" sehingga setelah mengakhiri test dilarang membicarakan atau memberikan materi test kepada siapapun.
                    </li>
                    <li>
                        2.&ensp;&ensp;Pertanyaan Clearance Test ini harus dikerjakan sendiri, harus dijawab sendiri, ditulis tangan dan tidak menggunakan pensil.
                    </li>
                    <li>
                        3.&ensp;&ensp;Tulisan hendaknya jelas dan mudah dibaca. Semua pertanyaan harus dijawab dengan sebenarnya.
                    </li>
                    <li>
                        4.&ensp;&ensp;Jawaban pertanyaan harus dikerjakan pada hari itu juga. Pengisian jawaban tidak dibenarkan ditunda, tidak dibenarkan dibawa pulang.
                    </li>
                    <li>
                        5.&ensp;&ensp;Pertanyaan yang tidak diketahui jawabannya, tidak dibenarkan untuk dikosongkan (dicoret tanda -) tetap supaya diisi dengan perkataan seperti tidak, tidak tahu, tidak pernah, belum dan sebagainya.
                    </li>
                    <li>
                        6.&ensp;&ensp;Dalam pengisian Clearance Test ini tidak dibenarkan membawa buku-buku petunjuk, diktat, buku pelajaran, dan sebagainya, kecuali data identitas diri.
                    </li>
                </ul>
                <div class="clear" style="margin:10px 0px;"></div>
                <li>
                    <b>II.&ensp;&ensp;<u>W A K T U</u></b>
                </li>
                <div class="clear" style="margin:10px 0px;"></div>
                <ul>
                    <li>
                        Paling Lama 4 jam
                    </li>
                </ul>
                <div class="clear" style="margin:10px 0px;"></div>
                <li>
                    <b>III.&ensp;&ensp;<u>CARA MENGISI/MENJAWAB</u></b>
                </li>
                <div class="clear" style="margin:10px 0px;"></div>
                <uL>
                    <li>
                        1.&ensp;&ensp;Tentang Daftar Isian Data Pribadi supaya diisi:
                        <uL>
                            <li>
                                a.&ensp;&ensp;Selengkap mungkin sesuai dengan yang anda ketahui.
                            </li>
                            <li>
                                b.&ensp;&ensp;Jika orang yang ditanyakan telah meninggal dunia, maka didepan nama yang bersangkutan diberi tanda X, akan tetapi jawaban tetap diisi dengan keterangan-keterangan terakhir sebelum meninggal.
                            </li>
                        </uL>
                    </li>
                    <li>
                        2.&ensp;&ensp;Untuk menjawab pertanyaan uraian, jawaban harus berupa uraian singkat yang memuat unsur pendapat pribadi dan dijelaskan sebab-sebab serta alasannya.
                    </li>
                    <li>
                        3.&ensp;&ensp;Jawaban-jawaban tidak berbelit-belit supaya tidak memungkinkan penafsiran.
                    </li>
                    <li>
                        4.&ensp;&ensp;Berikan menjawab spontan, yang timbul ketika sewaktu membaca pertanyaan.
                    </li>
                </uL>
                <div class="clear" style="margin:10px 0px;"></div>
                <li>
                    <b>IV.&ensp;&ensp;<u>SELAMAT BEKERJA</u></b>
                </li>
            </ul>
        </div>
    </div>
    <fieldset class="checkbox">
        <label>
            <input type="checkbox" name="agreement" value="<?= str_replace(['+', '/', '='], ['-', '_', '~'], $this->encryption->encrypt(86)) ?>" required=""> Saya mengerti dan setuju
        </label>
    </fieldset>
    <div class="form-group">
        <div class="text-right">
            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
            <button type="submit" class="btn waves-effect waves-light btn-primary"><i class="far fa-arrow-alt-circle-right"></i> Lanjut</button>
        </div>
    </div>
</form>
<script>
    window.onload = function () {
        var a = '<?= $this->session->flashdata('message') ?>';
        var b = '<?= $this->session->flashdata('error') ?>';
        if (a !== '') {
            toastr.success(a);
        } else if (b !== '') {
            toastr.error(b);
        } else {
            return false;
        }
    };
    function isNumber(b) {
        b = (b) ? b : window.event;
        var a = (b.which) ? b.which : b.keyCode;
        if (a > 31 && (a < 48 || a > 57)) {
            return false;
        }
        return true;
    }
</script>
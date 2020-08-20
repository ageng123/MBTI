<?php print_r($peserta); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100&display=swap" rel="stylesheet"> 
        <style>
            /*            @media screen{
                            body{
                                display:none;
                            }
                        }*/
            @media print{
                @page {
                    size: A4 portrait;
                    margin: 0;
                }
                body {
                    font: 10pt 'Roboto', sans-serif;
                    line-height: 1;
                    overflow: hidden;
                }
                .bold{
                    font-weight: bold !important;
                }
                .table td, .table th {
                    padding: 0.2rem;
                }
                .table .noborder{
                    border:none !important;
                }
            }
            @-moz-document url-prefix() {
                body {
                    font: 10pt 'Roboto', sans-serif;
                    line-height: 1;
                    overflow: hidden;
                }
                b{
                    font-weight: 900 !important;
                }
                .bold{
                    font-weight: 900 !important;
                }
                .table td, .table th {
                    padding: 0.2rem;
                }
                .table .noborder{
                    border:none !important;
                }
            }
        </style>
    </head>
    <!--onload="window.print();"-->
    <body>
        <div id="printarea">
            <div class="text-center">
                <h3 class="text-uppercase"><u>surat mutasi</u></h3>
                <b>Nomor: <?= $peserta['no_surat']; ?></b>
            </div>
            <hr>
            <div class="clear" style="margin:10px 0px;"></div>
            <p>
                Yang bertanda tangan dibawah ini:
            </p>
            <div class="form-group m-t-40 row">
                <b class="col-1">Nama</b>
                <div class="col-10">
                    : Mayjen TNI Maruli Simanjutak, M.Sc
                </div>
            </div>
            <div class="form-group row">
                <b class="col-1">Jabatan</b>
                <div class="col-10">
                    : Perwira tinggi
                </div>
            </div>
            <div class="form-group row">
                <b class="col-1">Pangkat</b>
                <div class="col-10">
                    : Mayor Jenderal
                </div>
            </div>
            <p class="clear" style="margin: 20px 0px;">
                Yang dengan ini memutuskan untuk melakukan mutasi terhadap:
            </p>
            <div class="form-group row">
                <b class="col-1">Nama</b>
                <div class="col-10">
                    : <?= $peserta['nama'] ?>
                </div>
            </div>
            <div class="form-group row">
                <b class="col-1">Jabatan</b>
                <div class="col-10">
                    : <?= $peserta['pekerjaan'] ?>
                </div>
            </div>
            <div class="form-group row">
                <b class="col-1">Pangkat</b>
                <div class="col-10">
                    : <?= $peserta['pangkat'] ?>
                </div>
            </div>
            <div class="text-justify">
                <p>
                    Mutasi ini mulai efektif pada <?= date('d F Y', strtotime($peserta['berlaku'])); ?>. Oleh karena itu, kepada anggota yang bersangkutan agar mempersiapkan segala sesuatunya sebelum tanggal tersebut.
                </p>
                <p>
                    Demikian surat mutasi ini dibuat untuk dapat dipergunakan sebagaimana mestinya.
                </p>
            </div>
        </div>
        <div class="form-group">
            <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fas fa-print"></i></button>
        </div>
    </body>
</html>

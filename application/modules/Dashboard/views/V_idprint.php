<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="https://utschool.sch.id/SOP/AdminBite/dist/css/style.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="https://utschool.sch.id/SOP/AdminBite/dist/js/app.min.js"></script>
        <script src="https://utschool.sch.id/SOP/AdminBite/dist/js/app.init.js"></script>
        <script src="https://utschool.sch.id/SOP/AdminBite/dist/js/app-style-switcher.js"></script>
        <script src="https://utschool.sch.id/SOP/AdminBite/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.6/waves.min.js"></script>
        <script src="https://utschool.sch.id/SOP/AdminBite/dist/js/sidebarmenu.js"></script>
        <script src="https://utschool.sch.id/SOP/AdminBite/dist/js/custom.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.15.0/d3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
        <title></title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100&display=swap" rel="stylesheet"> 
        <style>
            body{
                border: 1px solid #666;
                width: 85.6mm;
                height: 53.98mm;
                font-size: 11pt;
            }
            .container-fluid{
                background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVZ3WPnuE6ziHrPPvxwxLE-pjsZp2MSEvJTg&usqp=CAU');
                background-repeat: no-repeat;
                background-size: cover;
            }
            
        </style>
    </head>
    <!--onload="window.print();"-->
    <body>
    <div>
        <div style="width: 100%; height: 30%; background-color: red !important; padding: 10px" class="text-center">
            <h2>Tanda Pengenal Pasukan Paspampres</h2>
            <p>Markas Besar Tentara Nasional Indonesia</p>
        </div>
       <div class="p-4">
       <h3>NRP</h3>
        <p>081211138331</p>
        <h3>Nama</h3>
        <p>Ageng Muhammad Wijayanto</p>
       </div>
    </div>
   
        <!-- <div class="row">
            <div class="col-md-4">
                <div class="text-center" style="margin-top:40px;">
                    <p style="border-bottom:4px double black;">
                        MARKAS BESAR
                        <br>
                        TENTARA NASIONAL INDONESIA
                        <br>
                        PASUKAN PENGAMANAN PRESIDEN
                    </p>
                </div>
            </div>
        </div>
        <div class="clear" style="margin:5% 0px;"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-md-4">
                        Nama Lengkap
                    </div>
                    <div class="col-md-8" style="border-bottom: 1px dotted black;">
                        : <?= $peserta[0]->nama; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        Nama Kecil
                    </div>
                    <div class="col-md-8" style="border-bottom: 1px dotted black;">
                        : <?= $peserta[0]->nick; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        Pangkat
                    </div>
                    <div class="col-md-8" style="border-bottom: 1px dotted black;">
                        : <?= $peserta[0]->pangkat; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        Jabatan
                    </div>
                    <div class="col-md-8" style="border-bottom: 1px dotted black;">
                        : <?= $peserta[0]->pekerjaan; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        Kesatuan
                    </div>
                    <div class="col-md-8" style="border-bottom: 1px dotted black;">
                        : <?= $peserta[0]->kesatuan; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src=""/>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-md-5">
                        Rumus Sidik Jari
                    </div>
                    <div class="col-md-7" style="border-bottom: 1px dotted black;">
                        :
                    </div>
                </div>
            </div>
        </div> -->
    </body>
</html>

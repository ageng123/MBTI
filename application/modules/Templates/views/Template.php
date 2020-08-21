<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta property="og:image" content="{logo}">
        <meta property='og:title' content='{title}'>
        <meta property='og:description' content='maspriyambodo, priyambodo © 2020 '>
        <meta property='og:type' content='article'>
        <meta property='og:url' content='<?= base_url(); ?>'>
        <meta property="og:locale" content="en_US">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="{title}">
        <meta name="keywords" content="maspriyambodo, priyambodo © 2020 ">
        <meta name="generator" content="https://maspriyambodo.com/">
        <meta name="application-name" content="maspriyambodo, priyambodo © 2020 ">
        <link rel="canonical" href="https://maspriyambodo.com/">
        <title>{title}</title>
        <link rel="shortcut icon" href="{logo}" type="image/x-icon" />
        <link href="https://cdn.maspriyambodo.com/AdminBite/dist/css/style.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>
                <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
        <link rel="stylesheet" href="<?= site_url('assets/datepicker/css/bootstrap-datetimepicker.min.css') ?>">
        <link rel="stylesheet" href="<?= site_url('assets/css/custom.css') ?>">
        <style> 
            body{
                letter-spacing: 0.05em !important;
            }
        </style>
    </head>
    <body>
        <!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXXFT9S" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
        <div class="preloader"><div class="lds-ripple"><div class="lds-pos"></div><div class="lds-pos"></div></div></div>
        <div id="main-wrapper" class="" data-theme="dark" data-layout="vertical" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
            <header class="topbar" style="background: #333d54;">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark" style="background: #333d54;">
                    <div class="navbar-header">
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"> <i class="ti-menu ti-close"></i> </a>
                        
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div id="navbarSupportedContent" class="navbar-collapse collapse" style="border-bottom:1px solid rgba(0,0,0,.1);">
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block">
                                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                    <i class="sl-icon-menu font-20"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav float-right">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://www.seekpng.com/png/full/428-4287240_no-avatar-user-circle-icon-png.png" alt="user" class="rounded-circle" width="31"> <b>{username}</b>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <span class="with-arrow">
                                        <span class="bg-primary"></span>
                                    </span>
                                    <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                        <div class="">
                                            <img src="https://www.seekpng.com/png/full/428-4287240_no-avatar-user-circle-icon-png.png" alt="user" class="img-circle" width="60">
                                        </div>
                                        <div class="m-l-10">
                                            <h4 class="m-b-0">{username}</h4>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="<?= base_url('Settings/index/'); ?>">
                                        <i class="ti-settings m-r-5 m-l-5"></i> Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('Auth/Logout/'); ?>">
                                        <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="left-sidebar">
                <div class="clearfix" style="margin:20px 0px;"></div>
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li>
                                <div class="user-profile dropdown m-t-20">
                                    <div class="user-pic">
                                        <h1>
                                            <i class="fas fa-user"></i>
                                        </h1>
                                    </div>
                                    <div class="user-content hide-menu m-t-10">
                                        <h5 class="m-b-10 user-name font-medium">{username}</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-small-cap">
                                <i class="mdi mdi-dots-horizontal"></i>
                                <span class="hide-menu">Menu</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Dashboard/index/'); ?>" aria-expanded="false">
                                    <i class="fas fa-desktop"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('User_Manage/index/'); ?>" aria-expanded="false">
                                    <i class="fas fa-users"></i>
                                    <span class="hide-menu">User Management</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Dashboard/Pernyataan/index/'); ?>" aria-expanded="false">
                                    <i class="fas fa-hockey-puck"></i>
                                    <span class="hide-menu">Data Diri Anggota</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Dashboard/Mutasi/index/'); ?>" aria-expanded="false">
                                    <i class="icon-Receipt"></i>
                                    <span class="hide-menu">Mutasi Anggota</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Dashboard/Pelanggaran/index/'); ?>" aria-expanded="false">
                                <i class="fas fa-exclamation-triangle"></i>
                                    <span class="hide-menu">Pelanggaran Anggota</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Dashboard/Datafisik/index/'); ?>" aria-expanded="false">
                                <i class="fas fa-universal-access"></i>
                                    <span class="hide-menu">Data Fisik Anggota</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
            <script src="https://cdn.maspriyambodo.com/AdminBite/dist/js/app.min.js"></script>
            <script src="https://cdn.maspriyambodo.com/AdminBite/dist/js/app.init.js"></script>
            <script src="https://cdn.maspriyambodo.com/AdminBite/dist/js/app-style-switcher.js"></script>
            <script src="https://cdn.maspriyambodo.com/AdminBite/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.6/waves.min.js"></script>
            <script src="https://cdn.maspriyambodo.com/AdminBite/dist/js/sidebarmenu.js"></script>
           
            <script src="https://cdn.maspriyambodo.com/AdminBite/dist/js/custom.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.15.0/d3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
            <div class="page-wrapper">
                <div class="container-fluid">{content}</div>
                <footer class="footer text-center" style="border-top:1px solid rgba(0,0,0,.1);">&copy; <?= date('Y'); ?> All Rights Reserved.</footer>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js" integrity="sha512-zHDWtKP91CHnvBDpPpfLo9UsuMa02/WgXDYcnFp5DFs8lQvhCe2tx56h2l7SqKs/+yQCx4W++hZ/ABg8t3KH/Q==" crossorigin="anonymous"></script>
            <script>
                $('document').ready(function(){
                 setTimeout(function() {
                    $('.sidebartoggler').trigger('click');
                },10);
                });
                $('document').ready(function(){
                    $('.datepicker').datepicker({
                        format: 'yyyy-mm-dd',
                        autoclose:true,
                        language: 'id'
                    })
                })
            </script>
            <script src="<?= site_url('assets/js/app.js') ?>"></script>
           <!--  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script> -->
        </div>
    </body>
</html>
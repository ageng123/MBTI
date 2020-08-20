<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta property="og:image" content="{logo}">
        <meta property='og:title' content='{title}'>
        <meta property='og:description' content='maspriyambodo, priyambodo'>
        <meta property='og:type' content='article'>
        <meta property='og:url' content='<?= base_url('Auth/index/'); ?>'>
        <meta property="og:locale" content="en_US">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="{title}">
        <meta name="keywords" content="maspriyambodo, priyambodo">
        <meta name="generator" content="https://maspriyambodo.com/">
        <meta name="application-name" content="maspriyambodo, priyambodo">
        <link rel="canonical" href="https://maspriyambodo.com/">
        <title>{title}</title>
        <link rel="shortcut icon" href="{logo}" type="image/x-icon" />
        <link href="https://cdn.maspriyambodo.com/AdminBite/dist/css/style.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <div class="preloader">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div>
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url('https://cdn.maspriyambodo.com/images/rnet_bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">
                <div class="auth-box" style="margin:8% 0px;">
                    <div id="loginform">
                        <div class="logo"><i class="fas fa-cogs"></i> Login system</div>
                        <div class="clear" style="margin:20px 0px;"></div>
                        <div class="row">
                            <div class="col-12">
                                <form method="post" class="form-horizontal m-t-20" id="loginform" action="<?= base_url('Auth/Login/'); ?>">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" name="unametxt" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" required="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                        </div>
                                        <input type="password" name="pwdtxt" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="clear" style="margin:10px 0px;"></div>
                                    <div class="form-group text-center">
                                        <div class="col-xs-12 p-b-20">
                                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                            <button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="text-center">&copy; <?= date('Y'); ?> All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <script src="https://cdn.maspriyambodo.com/AdminBite/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="https://cdn.maspriyambodo.com/AdminBite/assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="https://cdn.maspriyambodo.com/AdminBite/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('body').bind('copy paste', function (e) {
                    e.preventDefault();
                    return !1;
                });
                $('#errmsg').delay(3500).toggle('slow');
            });
            $(".preloader").fadeOut();
        </script>
    </body>
</html>

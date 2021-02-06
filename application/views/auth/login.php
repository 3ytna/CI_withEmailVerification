<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Layanan Wifi Rumahan serba digital">
        <meta name="author" content="ZeroWorld">
        <link rel='manifest' href='https://tpow.zeroworld.xyz/style/manifest.json'>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
        <meta property="og:image" content="img/thumbnail.png">
        <meta property="og:title" content="Login - TPOW | Layanan Wifi Rumahan serba digital">
        <meta property="og:url" content="https://tpow.zeroworld.xyz/">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Layanan Wifi Rumahan serba digital.">
        <meta content='#3425AF' name='msapplication-navbutton-color'/>
        <meta content='yes' name='apple-mobile-web-app-capable'/>
        <meta content='#3425AF' name='apple-mobile-web-app-status-bar-style'/>
        <meta content='#3425AF' name='theme-color'/>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://tpow.zeroworld.xyz/style/css/sb-admin-2.min.css?v=2" rel="stylesheet">
        <link href="https://tpow.zeroworld.xyz/style/css/partikel.css" rel="stylesheet">
    </head>
    <title>Login Account - TPOW</title>
    <body class="bg-gradient-purples">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">
                                                <img src="https://tpow.zeroworld.xyz/style/img/tpow.png" width="180">
                                            </h1>
                                            <br>
                                        </div>
                                        <?= $this->session->flashdata('message'); 
                                        unset($_SESSION['message']);
                                        ?>
                                        <form id="loginform" method="post" class="user" action="<?= base_url('auth'); ?>">
                                            <small id="error"></small>
                                            <div class="form-group">
                                                <input type="text" name="email" id="email" class="form-control form-control-user" placeholder="Enter Username or Email Address" required>
                                            </div>
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password" required>
                                            </div>
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label name="remember" class="custom-control-label" for="customCheck">Remember Me</label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="form_submission" value="adminlogin">
                                            <button class="btn btn-primary btn-user btn-block" id="submit">
                                                <i class="fas fa-fingerprint fa-fw" style="font-size:12px"></i>
                                                Login
                                            </button>
                                        </form>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password ?</a>
                                            <br>
                                            <font class="small">Belum punya akun? </font>
                                            <a class="small" href="<?= base_url('auth/registration'); ?>">Daftar sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://tpow.zeroworld.xyz/style/vendor/jquery/jquery.min.js"></script>
        <script src="https://tpow.zeroworld.xyz/style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://tpow.zeroworld.xyz/style/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="https://tpow.zeroworld.xyz/style/js/webpack.js"></script>
        <script src="https://tpow.zeroworld.xyz/style/js/core.min.js?v=7"></script>
        <script src="https://tpow.zeroworld.xyz/style/js/particles.min.js"></script>
        <script src="https://tpow.zeroworld.xyz/style/js/particles.js?v=2.4"></script>
    </body>
</html>

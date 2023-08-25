<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name="Description" content="">
        <meta name="Author" content="">
        <meta name="keywords" content="">

        <!-- TITLE -->
        <title> Zenedge Systems</title>

        <!-- FAVICON -->
        <link rel="icon" href="<?=base_url()?>assets/logo/Zenedge-Systems-logo-01.png" type="image/x-icon" >
        <link rel="shortcut icon" href="<?=base_url()?>assets/logo/Zenedge-Systems-logo-01.png" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- APP SCSS -->
        <link rel="preload" as="style" href="<?=base_url()?>assets/app-881940fc.css" />
        <link rel="stylesheet" href="<?=base_url()?>assets/app-881940fc.css" />

        <!-- ICONS CSS -->
        <link href="<?=base_url()?>assets/iconfonts/icons.css" rel="stylesheet">

        <!-- ANIMATE CSS -->
        <link href="<?=base_url()?>assets/iconfonts/animated.css" rel="stylesheet">

        <!-- APP CSS -->
        <link rel="preload" as="style" href="<?=base_url()?>assets/app-e84fc687.css" />
        <link rel="stylesheet" href="<?=base_url()?>assets/app-e84fc687.css" />
        

    </head>
    <body class="bg-account app sidebar-mini ltr">
        <!--- GLOBAL LOADER -->
        <div id="global-loader" >
            <img src="<?=base_url()?>assets/images/svgs/loader.svg" alt="loader">
        </div>
        <!--- END GLOBAL LOADER -->
        <!-- PAGE -->
        <div class="page h-100">
            <!-- MAIN-CONTENT -->
                
            <div class="page-content">
                <div class="container text-center text-dark">

                    <div class="row">
                        <div class="col-lg-4 d-block mx-auto">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center mb-2">
                                                <a class="header-brand1" href="https://laravelui.spruko.com/sparic/index">
                                                    <img src="<?=base_url()?>assets/logo/Zenedge-Systems-logo-04.png" class="header-brand-img main-logo" alt="Sparic logo">
                                                    <img src="<?=base_url()?>assets/logo/Zenedge-Systems-logo-05.png" class="header-brand-img darklogo" alt="Sparic logo">
                                                </a>
                                            </div>
                                            <h3>Login</h3>
                                            <p class="text-muted">Sign In to your account</p>
                                            <form method="post" class="needs-validation" novalidate action="<?=base_url()?>login/process">
                                                <?php
                                                if(isset($msg)){
                                                ?>
                                                <div class="alert alert-danger mb-0" role="alert">
                                                    <span class="alert-inner--icon">
                                                        <i class="fe fe-slash me-2"></i>
                                                    </span>
                                                    <span class="alert-inner--text">
                                                        <strong>Failed!</strong> <?=$msg;?>!
                                                    </span>
                                                </div>
                                                <?php
                                                } ?>
                                               <div class="input-group mb-3">
                                                    <span class="input-group-addon bg-white"><i class="fa fa-user text-dark"></i></span>
                                                    <input name="username" id="validationTooltip01" required type="text" class="form-control" placeholder="Username">
                                                    <div class="invalid-tooltip">Please provide a valid User Name.</div>
                                                    <div class="valid-tooltip">Looks good!</div>
                                                </div>
                                                <div class="input-group mb-4">
                                                    <span class="input-group-addon bg-white"><i
                                                            class="fa fa-unlock-alt text-dark"></i></span>
                                                    <input name="password" id="validationTooltip02" required type="password" class="form-control" placeholder="Password">
                                                    <div class="invalid-tooltip">Please provide a valid Password.</div>
                                                    <div class="valid-tooltip">Looks good!</div>
                                                </div>
                                                <div class="row">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <a href="<?=base_url()?>forgot-password" class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
                                                    </div>
                                                </div> 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END MAIN-CONTENT -->
        </div>
        <!-- END PAGE-->
    </body>
    <!-- SCRIPTS -->
        
        <!-- JQUERY MIN JS -->
        <script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>

        <!-- BOOTSTRAP5 BUNDLE JS -->
        <script src="<?=base_url()?>assets/plugins/bootstrap/popper.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- MOMENT JS -->
        <script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script>
        
        <!-- NEWS TICKER JS -->
        <script src="<?=base_url()?>assets/plugins/newsticker/breaking-news-ticker.min.js"></script>

        <!-- SELECT2 JS -->
        <script src="<?=base_url()?>assets/plugins/select2/select2.full.min.js"></script>
        <!-- FORMVALIDATION JS -->
        <link rel="modulepreload" href="<?=base_url()?>assets/js/form-validation.js" />
        <script type="module" src="<?=base_url()?>assets/js/form-validation.js"></script>

        <!-- STICKY JS -->
        <script src="<?=base_url()?>assets/js/sticky.js"></script>

        <!-- THEMECOLOR JS -->
        <link rel="modulepreload" href="<?=base_url()?>assets/js/themeColors.js" />
        <link rel="modulepreload" href="<?=base_url()?>assets/js/switcher-styles.js" />
        <script type="module" src="<?=base_url()?>assets/js/themeColors.js"></script>

        <!-- APP JS -->
        <link rel="modulepreload" href="<?=base_url()?>js/app.js" />
        <link rel="modulepreload" href="<?=base_url()?>assets/js/switcher-styles.js" />
        <script type="module" src="<?=base_url()?>js/app.js"></script>        

        <!-- END SCRIPTS -->

    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name="Description" content="Sparic - Laravel Multipurpose Responsive Bootstrap5 Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template, vite laravel template, vite admin template, vite laravel admin, vite laravel admin dashboard, vite laravel bootstrap admin template">

        <!-- TITLE -->
        <title> Sparic - Laravel Multipurpose Responsive Bootstrap5 Dashboard Template</title>

        <!-- FAVICON -->
        <link rel="icon" href="<?=base_url()?>assets/images/brand/favicon.ico" type="image/x-icon" >
        <link rel="shortcut icon" href="<?=base_url()?>assets/images/brand/favicon.ico" type="image/x-icon">

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
                                            <div class="text-center mb-3">
                                                <a class="header-brand1" href="https://laravelui.spruko.com/sparic/index">
                                                    <img src="https://laravelui.spruko.com/sparic/build/assets/images/brand/logo.png"
                                                        class="header-brand-img main-logo" alt="Sparic logo">
                                                    <img src="https://laravelui.spruko.com/sparic/build/assets/images/brand/logo-light.png"
                                                        class="header-brand-img darklogo" alt="Sparic logo">
                                                </a>
                                            </div>
                                            <div class="text-center mb-4 ">
                                                <img src="https://laravelui.spruko.com/sparic/build/assets/images/users/male/15.jpg" alt="user-img"
                                                    class="avatar avatar-xl brround mCS_img_loaded">
                                            </div>
                                            <span class="m-4 d-none d-lg-block text-center">
                                                <span class="h4"><strong>Alison</strong></span>
                                            </span>
                                            <form method="post" action="<?=base_url()?>login/verifyforgetotps">
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
                                               <div class="form-group">
                                                    <input name="AuthCode" type="text" class="form-control" id="exampleInputPassword1" placeholder="OTP Code">
                                                    <p class="text-muted">The OTP Code Was Sent.Please Check Your Registered Email </p>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Enter</button> 
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

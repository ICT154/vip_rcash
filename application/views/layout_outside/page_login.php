<!-- 
─────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────
─████████████████───██████──██████─████████████───██████████████─██████──────────██████────██████████████─██████████████─██████████████████─██████──██████─██████─────────██████─────────
─██░░░░░░░░░░░░██───██░░██──██░░██─██░░░░░░░░████─██░░░░░░░░░░██─██░░██████████──██░░██────██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░░░░░░░░░██─██░░██──██░░██─██░░██─────────██░░██─────────
─██░░████████░░██───██░░██──██░░██─██░░████░░░░██─██████████░░██─██░░░░░░░░░░██──██░░██────██░░██████████─██░░██████░░██─████████████░░░░██─██░░██──██░░██─██░░██─────────██░░██─────────
─██░░██────██░░██───██░░██──██░░██─██░░██──██░░██─────────██░░██─██░░██████░░██──██░░██────██░░██─────────██░░██──██░░██─────────████░░████─██░░██──██░░██─██░░██─────────██░░██─────────
─██░░████████░░██───██░░██████░░██─██░░██──██░░██─██████████░░██─██░░██──██░░██──██░░██────██░░██─────────██░░██──██░░██───────████░░████───██░░██████░░██─██░░██─────────██░░██─────────
─██░░░░░░░░░░░░██───██░░░░░░░░░░██─██░░██──██░░██─██░░░░░░░░░░██─██░░██──██░░██──██░░██────██░░██──██████─██░░██──██░░██─────████░░████─────██░░░░░░░░░░██─██░░██─────────██░░██─────────
─██░░██████░░████───██████████░░██─██░░██──██░░██─██████████░░██─██░░██──██░░██──██░░██────██░░██──██░░██─██░░██──██░░██───████░░████───────██████████░░██─██░░██─────────██░░██─────────
─██░░██──██░░██─────────────██░░██─██░░██──██░░██─────────██░░██─██░░██──██░░██████░░██────██░░██──██░░██─██░░██──██░░██─████░░████─────────────────██░░██─██░░██─────────██░░██─────────
─██░░██──██░░██████─────────██░░██─██░░████░░░░██─██████████░░██─██░░██──██░░░░░░░░░░██────██░░██████░░██─██░░██████░░██─██░░░░████████████─────────██░░██─██░░██████████─██░░██████████─
─██░░██──██░░░░░░██─────────██░░██─██░░░░░░░░████─██░░░░░░░░░░██─██░░██──██████████░░██────██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░░░░░░░░░██─────────██░░██─██░░░░░░░░░░██─██░░░░░░░░░░██─
─██████──██████████─────────██████─████████████───██████████████─██████──────────██████────██████████████─██████████████─██████████████████─────────██████─██████████████─██████████████─
───────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────── -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        RCASH | REGISTER
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/app.bundle.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/skins/skin-master.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url("assets/") ?>img/rcash.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url("assets/") ?>img/rcash.svg">
    <link rel="mask-icon" href="<?= base_url("assets/") ?>img/rcash.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/notifications/toastr/toastr.css">
</head>
<!-- BEGIN Body -->
<!-- Possible Classes

		* 'header-function-fixed'         - header is in a fixed at all times
		* 'nav-function-fixed'            - left panel is fixed
		* 'nav-function-minify'			  - skew nav to maximize space
		* 'nav-function-hidden'           - roll mouse on edge to reveal
		* 'nav-function-top'              - relocate left pane to top
		* 'mod-main-boxed'                - encapsulates to a container
		* 'nav-mobile-push'               - content pushed on menu reveal
		* 'nav-mobile-no-overlay'         - removes mesh on menu reveal
		* 'nav-mobile-slide-out'          - content overlaps menu
		* 'mod-bigger-font'               - content fonts are bigger for readability
		* 'mod-high-contrast'             - 4.5:1 text contrast ratio
		* 'mod-color-blind'               - color vision deficiency
		* 'mod-pace-custom'               - preloader will be inside content
		* 'mod-clean-page-bg'             - adds more whitespace
		* 'mod-hide-nav-icons'            - invisible navigation icons
		* 'mod-disable-animation'         - disables css based animations
		* 'mod-hide-info-card'            - hides info card from left panel
		* 'mod-lean-subheader'            - distinguished page header
		* 'mod-nav-link'                  - clear breakdown of nav links

		>>> more settings are described inside documentation page >>>
	-->

<body>
    <!-- DOC: script to save and load page settings -->
    <script>
        /**
         *	This script should be placed right after the body tag for fast execution 
         *	Note: the script is written in pure javascript and does not depend on thirdparty library
         **/
        'use strict';

        var classHolder = document.getElementsByTagName("BODY")[0],
            /** 
             * Load from localstorage
             **/
            themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {},
            themeURL = themeSettings.themeURL || '',
            themeOptions = themeSettings.themeOptions || '';
        /** 
         * Load theme options
         **/
        if (themeSettings.themeOptions) {
            classHolder.className = themeSettings.themeOptions;
            console.log("%c✔ Theme settings loaded", "color: #148f32");
        } else {
            console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
        }
        if (themeSettings.themeURL && !document.getElementById('mytheme')) {
            var cssfile = document.createElement('link');
            cssfile.id = 'mytheme';
            cssfile.rel = 'stylesheet';
            cssfile.href = themeURL;
            document.getElementsByTagName('head')[0].appendChild(cssfile);

        } else if (themeSettings.themeURL && document.getElementById('mytheme')) {
            document.getElementById('mytheme').href = themeSettings.themeURL;
        }
        /** 
         * Save to localstorage 
         **/
        var saveSettings = function() {
            themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
                return /^(nav|header|footer|mod|display)-/i.test(item);
            }).join(' ');
            if (document.getElementById('mytheme')) {
                themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
            };
            localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
        }
        /** 
         * Reset settings
         **/
        var resetSettings = function() {
            localStorage.setItem("themeSettings", "");
        }
    </script>
    <div class="page-wrapper auth">
        <div class="page-inner bg-brand-gradient">
            <div class="page-content-wrapper bg-transparent m-0" style="padding-left: 0rem;">
                <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                    <div class="d-flex align-items-center container p-0">
                        <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                <!-- <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo"> -->
                                <span class="page-logo-text mr-1">RCASH</span>
                            </a>
                        </div>
                        <!-- <a href="page_register.html" class="btn-link text-white ml-auto">
                            Create Account
                        </a> -->
                    </div>
                </div>
                <div class="flex-1" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                        <div class="row">
                            <div class="col col-md-6 col-lg-7 hidden-sm-down">
                                <h2 class="fs-xxl fw-500 mt-4 text-white">
                                    RCASH PANEL LOGIN
                                    <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                                        Selamat datang di layanan kami! Kami menawarkan berbagai produk dan layanan seperti SMM, PPOB, OTP, dan barang lainnya dengan harga yang murah, mudah, dan simpel.
                                        <br>
                                        Tunggu apalagi? Segera bergabung dengan kami dan rasakan kemudahan dalam berbisnis! Hubungi kami sekarang dan dapatkan penawaran menarik yang tak bisa Anda lewatkan!
                                    </small>
                                </h2>
                                <a href="#" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
                                <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                                    <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                                        Find us on social media
                                    </div>
                                    <div class="d-flex flex-row opacity-70">
                                        <a href="#" class="mr-2 fs-xxl text-white">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                        <a href="#" class="mr-2 fs-xxl text-white">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                        <a href="#" class="mr-2 fs-xxl text-white">
                                            <i class="fab fa-google-plus-square"></i>
                                        </a>
                                        <a href="#" class="mr-2 fs-xxl text-white">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                                <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                    Secure login
                                </h1>
                                <div class="card p-4 rounded-plus bg-faded">
                                    <form id="js-login" novalidate="" method="post" action="<?= base_url("auth/login") ?>">
                                        <div class="form-group">
                                            <label class="form-label" for="username">Username</label>
                                            <input autocomplete="off" type="username" id="username" class="form-control form-control-lg" placeholder="your username" required name="email_username_login">
                                            <div class="invalid-feedback">No, you missed this one.</div>
                                            <div class="help-block">Your unique username to app</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" class="form-control form-control-lg" placeholder="password" required name="password_login">
                                            <div class="invalid-feedback">Sorry, you missed this one.</div>
                                            <div class="help-block">Your password</div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 pr-lg-1 my-2">
                                                <button type="submit" id="js-login-btn" class="btn btn-info btn-block btn-lg">Secure login</button>
                                            </div>
                                            <div class="col-lg-6 pl-lg-1 my-2">
                                                <a href="<?= base_url("auth/register") ?>" class="btn btn-danger btn-block btn-lg">Register</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                            2022 - <?= date("Y") ?> © RCASH by&nbsp;<a href='' class='text-white opacity-40 fw-500' title='' target='_blank'>RADEN DEV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN Color profile -->
    <!-- this area is hidden and will not be seen on screens or screen readers -->
    <!-- we use this only for CSS color refernce for JS stuff -->
    <p id="js-color-profile" class="d-none">
        <span class="color-primary-50"></span>
        <span class="color-primary-100"></span>
        <span class="color-primary-200"></span>
        <span class="color-primary-300"></span>
        <span class="color-primary-400"></span>
        <span class="color-primary-500"></span>
        <span class="color-primary-600"></span>
        <span class="color-primary-700"></span>
        <span class="color-primary-800"></span>
        <span class="color-primary-900"></span>
        <span class="color-info-50"></span>
        <span class="color-info-100"></span>
        <span class="color-info-200"></span>
        <span class="color-info-300"></span>
        <span class="color-info-400"></span>
        <span class="color-info-500"></span>
        <span class="color-info-600"></span>
        <span class="color-info-700"></span>
        <span class="color-info-800"></span>
        <span class="color-info-900"></span>
        <span class="color-danger-50"></span>
        <span class="color-danger-100"></span>
        <span class="color-danger-200"></span>
        <span class="color-danger-300"></span>
        <span class="color-danger-400"></span>
        <span class="color-danger-500"></span>
        <span class="color-danger-600"></span>
        <span class="color-danger-700"></span>
        <span class="color-danger-800"></span>
        <span class="color-danger-900"></span>
        <span class="color-warning-50"></span>
        <span class="color-warning-100"></span>
        <span class="color-warning-200"></span>
        <span class="color-warning-300"></span>
        <span class="color-warning-400"></span>
        <span class="color-warning-500"></span>
        <span class="color-warning-600"></span>
        <span class="color-warning-700"></span>
        <span class="color-warning-800"></span>
        <span class="color-warning-900"></span>
        <span class="color-success-50"></span>
        <span class="color-success-100"></span>
        <span class="color-success-200"></span>
        <span class="color-success-300"></span>
        <span class="color-success-400"></span>
        <span class="color-success-500"></span>
        <span class="color-success-600"></span>
        <span class="color-success-700"></span>
        <span class="color-success-800"></span>
        <span class="color-success-900"></span>
        <span class="color-fusion-50"></span>
        <span class="color-fusion-100"></span>
        <span class="color-fusion-200"></span>
        <span class="color-fusion-300"></span>
        <span class="color-fusion-400"></span>
        <span class="color-fusion-500"></span>
        <span class="color-fusion-600"></span>
        <span class="color-fusion-700"></span>
        <span class="color-fusion-800"></span>
        <span class="color-fusion-900"></span>
    </p>
    <!-- END Color profile -->
    <script>
        console.log(`
██████╗░░░██╗██╗██████╗░██████╗░███╗░░██╗  ░██████╗░░█████╗░███████╗░░██╗██╗██╗░░░░░██╗░░░░░
██╔══██╗░██╔╝██║██╔══██╗╚════██╗████╗░██║  ██╔════╝░██╔══██╗╚════██║░██╔╝██║██║░░░░░██║░░░░░
██████╔╝██╔╝░██║██║░░██║░█████╔╝██╔██╗██║  ██║░░██╗░██║░░██║░░███╔═╝██╔╝░██║██║░░░░░██║░░░░░
██╔══██╗███████║██║░░██║░╚═══██╗██║╚████║  ██║░░╚██╗██║░░██║██╔══╝░░███████║██║░░░░░██║░░░░░
██║░░██║╚════██║██████╔╝██████╔╝██║░╚███║  ╚██████╔╝╚█████╔╝███████╗╚════██║███████╗███████╗
╚═╝░░╚═╝░░░░░╚═╝╚═════╝░╚═════╝░╚═╝░░╚══╝  ░╚═════╝░░╚════╝░╚══════╝░░░░░╚═╝╚══════╝╚══════╝
`);
    </script>
    <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
    <script src="<?= base_url("assets/") ?>js/vendors.bundle.js"></script>
    <script src="<?= base_url("assets/") ?>js/app.bundle.js"></script>
    <script src="<?= base_url("assets/") ?>js/notifications/toastr/toastr.js"></script>
    <script>
        $("#js-login-btn").click(function(event) {

            // Fetch form to apply custom Bootstrap validation
            var form = $("#js-login")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
            // Perform ajax submit here...
        });
    </script>
    <?= $this->session->flashdata('message'); ?>
</body>
<!-- END Body -->



</html>
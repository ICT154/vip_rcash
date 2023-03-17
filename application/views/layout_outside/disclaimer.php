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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-238741735-1"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-572881750"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-238741735-1');
        gtag('config', 'AW-572881750');
    </script>
    <meta charset="utf-8">
    <title>
        <?= $title ?>
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="<?= base_url("vendor/") ?>css/vendors.bundle.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url("vendor/") ?>css/app.bundle.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url("vendor/img/rcash.svg") ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url("vendor/img/rcash.svg") ?>">
    <link rel="mask-icon" href="<?= base_url("vendor/img/rcash.svg") ?>" color="#5bbad5">
    <!-- Optional: page related CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" media="screen, print" href="<?= base_url("vendor/") ?>css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url("vendor/") ?>css/notifications/toastr/toastr.css">
</head>

<body>
    <div class="page-wrapper">
        <div class="page-inner bg-brand-gradient">
            <div class="page-content-wrapper bg-transparent m-0">
                <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                    <div class="d-flex align-items-center container p-0">
                        <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">

                            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                <!-- <img src="http://103.30.246.60/img/blud_bekasi.png" alt="SmartAdmin WebApp" aria-roledescription="logo"> -->
                                <!-- <img src="http://103.30.246.60/img/blud_bekasi.png" alt="" width="50px"> -->
                                <span class="page-logo-text">RCASH</span>
                            </a>
                        </div>
                        <!-- <img src="http://103.30.246.60/img/blud_bekasi.png" alt="SmartAdmin WebApp" aria-roledescription="logo" class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0" width="50px"> -->

                        <!-- <a href="<?= base_url("auth/register/") ?>" class="btn-link text-white ml-auto">
                            Create Account
                        </a> -->
                    </div>
                </div>
                <div class="flex-1" style="background: url(<?= base_url("vendor/") ?>img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                        <div class="">

                            <div class="">

                                <div class="card p-4 rounded-plus bg-faded">
                                    <h1>Disclaimer for VIP RCASH</h1>

                                    <p>If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at radengozal@gmail.com</p>

                                    <h2>Disclaimers for VIP RCASH</h2>

                                    <p>All the information on this website - https://vip.rcash.me - is published in good faith and for general information purpose only. VIP RCASH does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (VIP RCASH), is strictly at your own risk. VIP RCASH will not be liable for any losses and/or damages in connection with the use of our website.</p>

                                    <p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p>

                                    <p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p>

                                    <h2>Consent</h2>

                                    <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>

                                    <h2>Update</h2>

                                    <p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                            <?= date("Y") ?> © RCASH

                            by&nbsp; <a href='#!' class='text-white opacity-40 fw-500' title='rcash' target='_blank'>Raden Dev</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="<?= base_url("vendor/") ?>js/vendors.bundle.js"></script>
    <script src="<?= base_url("vendor/") ?>js/app.bundle.js"></script>
    <script src="<?= base_url("vendor/") ?>js/notifications/toastr/toastr.js"></script>
    <script>
        console.log(`
██████╗░░░██╗██╗██████╗░██████╗░███╗░░██╗  ░██████╗░░█████╗░███████╗░░██╗██╗██╗░░░░░██╗░░░░░
██╔══██╗░██╔╝██║██╔══██╗╚════██╗████╗░██║  ██╔════╝░██╔══██╗╚════██║░██╔╝██║██║░░░░░██║░░░░░
██████╔╝██╔╝░██║██║░░██║░█████╔╝██╔██╗██║  ██║░░██╗░██║░░██║░░███╔═╝██╔╝░██║██║░░░░░██║░░░░░
██╔══██╗███████║██║░░██║░╚═══██╗██║╚████║  ██║░░╚██╗██║░░██║██╔══╝░░███████║██║░░░░░██║░░░░░
██║░░██║╚════██║██████╔╝██████╔╝██║░╚███║  ╚██████╔╝╚█████╔╝███████╗╚════██║███████╗███████╗
╚═╝░░╚═╝░░░░░╚═╝╚═════╝░╚═════╝░╚═╝░░╚══╝  ░╚═════╝░░╚════╝░╚══════╝░░░░░╚═╝╚══════╝╚══════╝
`);
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

</html>
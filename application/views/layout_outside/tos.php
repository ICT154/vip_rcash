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
                                    <h1>Website Terms and Conditions of Use</h1>

                                    <h2>1. Terms</h2>

                                    <p>By accessing this Website, accessible from https://vip.rcash.me, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>

                                    <h2>2. Use License</h2>

                                    <p>Permission is granted to temporarily download one copy of the materials on VIP RCASH's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>

                                    <ul>
                                        <li>modify or copy the materials;</li>
                                        <li>use the materials for any commercial purpose or for any public display;</li>
                                        <li>attempt to reverse engineer any software contained on VIP RCASH's Website;</li>
                                        <li>remove any copyright or other proprietary notations from the materials; or</li>
                                        <li>transferring the materials to another person or "mirror" the materials on any other server.</li>
                                    </ul>

                                    <p>This will let VIP RCASH to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format. </p>

                                    <h2>3. Disclaimer</h2>

                                    <p>All the materials on VIP RCASH’s Website are provided "as is". VIP RCASH makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, VIP RCASH does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>

                                    <h2>4. Limitations</h2>

                                    <p>VIP RCASH or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on VIP RCASH’s Website, even if VIP RCASH or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>

                                    <h2>5. Revisions and Errata</h2>

                                    <p>The materials appearing on VIP RCASH’s Website may include technical, typographical, or photographic errors. VIP RCASH will not promise that any of the materials in this Website are accurate, complete, or current. VIP RCASH may change the materials contained on its Website at any time without notice. VIP RCASH does not make any commitment to update the materials.</p>

                                    <h2>6. Links</h2>

                                    <p>VIP RCASH has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by VIP RCASH of the site. The use of any linked website is at the user’s own risk.</p>

                                    <h2>7. Site Terms of Use Modifications</h2>

                                    <p>VIP RCASH may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>

                                    <h2>8. Your Privacy</h2>

                                    <p>Please read our <a href="<?= base_url("page/privacy_policy") ?>">Privacy Policy.</a> </p>

                                    <h2>9. Governing Law</h2>

                                    <p>Any claim related to VIP RCASH's Website shall be governed by the laws of Indonesia without regards to its conflict of law provisions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                            2022 - <?= date("Y") ?> © RCASH by&nbsp;<a href='' class='text-white opacity-40 fw-500' title='' target='_blank'>PT RADEN DIGITAL HUB</a>
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
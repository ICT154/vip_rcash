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
                                    <h1>Privacy Policy for VIP RCASH</h1>

                                    <p>At VIP RCASH, accessible from https://vip.rcash.me, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by VIP RCASH and how we use it.</p>

                                    <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

                                    <h2>Log Files</h2>

                                    <p>VIP RCASH follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>



                                    <h2>Our Advertising Partners</h2>

                                    <p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>

                                    <ul>
                                        <li>
                                            <p>Google</p>
                                            <p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
                                        </li>
                                    </ul>

                                    <h2>Privacy Policies</h2>

                                    <P>You may consult this list to find the Privacy Policy for each of the advertising partners of VIP RCASH.</p>

                                    <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on VIP RCASH, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

                                    <p>Note that VIP RCASH has no access to or control over these cookies that are used by third-party advertisers.</p>

                                    <h2>Third Party Privacy Policies</h2>

                                    <p>VIP RCASH's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

                                    <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?</p>

                                    <h2>Children's Information</h2>

                                    <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

                                    <p>VIP RCASH does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

                                    <h2>Online Privacy Policy Only</h2>

                                    <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in VIP RCASH. This policy is not applicable to any information collected offline or via channels other than this website.</p>

                                    <h2>Consent</h2>

                                    <p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
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
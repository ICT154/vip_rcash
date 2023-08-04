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
        <?= $title ?>
    </title>
    <meta name="description" content="Introduction">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/vendors.bundle.min.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/app.bundle.min.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/skins/skin-master.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url("assets/") ?>img/rcash.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url("assets/") ?>img/rcash.svg">
    <link rel="mask-icon" href="<?= base_url("assets/") ?>img/rcash.svg" color="#5bbad5">
    <meta name="theme-color" content="#8268a8">
    <meta name="csrf-token" content="<?php echo $this->security->get_csrf_hash(); ?>">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/datagrid/datatables/datatables.bundle.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/notifications/sweetalert2/sweetalert2.bundle.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/formplugins/select2/select2.bundle.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url("assets/") ?>css/statistics/chartjs/chartjs.css">
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

<body class="mod-bg-1 mod-nav-link ">
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
    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">
            <!-- BEGIN Left Aside -->
            <aside class="page-sidebar">
                <div class="page-logo">
                    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                        <img src="<?= base_url("assets/") ?>img/rcash.svg" alt="SmartAdmin WebApp" aria-roledescription="logo">
                        <span class="page-logo-text mr-1">RCASH</span>
                        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                    </a>
                </div>
                <!-- BEGIN PRIMARY NAVIGATION -->
                <nav id="js-primary-nav" class="primary-nav" role="navigation">
                    <div class="nav-filter">
                        <div class="position-relative">
                            <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                            <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                <i class="fal fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="info-card">
                        <img src="<?= base_url("assets/") ?>img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="<?= $user['nama_lengkap'] ?>">
                        <div class="info-card-text">
                            <a href="#" class="d-flex align-items-center text-white">
                                <span class="text-truncate text-truncate-sm d-inline-block">
                                    <?= $user['nama_lengkap'] ?>
                                </span>
                            </a>
                            <span class="d-inline-block text-truncate text-truncate-sm"><?= $user['username'] ?>, <?= $user['email'] ?></span>
                        </div>
                        <img src="<?= base_url("assets/") ?>img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
                        <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                            <i class="fal fa-angle-down"></i>
                        </a>
                    </div>
                    <?php $this->load->view('templates/sidebar'); ?>
                    <div class="filter-message js-filter-message bg-success-600"></div>
                </nav>
                <!-- END PRIMARY NAVIGATION -->
                <!-- NAV FOOTER -->
                <div class="nav-footer shadow-top">
                    <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
                        <i class="ni ni-chevron-right"></i>
                        <i class="ni ni-chevron-right"></i>
                    </a>
                    <ul class="list-table m-auto nav-footer-buttons">
                        <li>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                                <i class="fal fa-comments"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                                <i class="fal fa-life-ring"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                                <i class="fal fa-phone"></i>
                            </a>
                        </li>
                    </ul>
                </div> <!-- END NAV FOOTER -->
            </aside>
            <!-- END Left Aside -->
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                <header class="page-header" role="banner">
                    <!-- we need this logo when user switches to nav-function-top -->
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="<?= base_url("assets/") ?>img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <!-- DOC: nav menu layout change shortcut -->
                    <div class="hidden-md-down dropdown-icon-menu position-relative">
                        <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                            <i class="fa fa-bars"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                                    <i class="fa fa-lock"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- DOC: mobile button appears during mobile width -->
                    <div class="hidden-lg-up">
                        <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="search">

                    </div>
                    <div class="ml-auto d-flex">
                        <!-- activate app search icon (mobile) -->
                        <div class="hidden-sm-up">
                            <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                <i class="fal fa-search"></i>
                            </a>
                        </div>
                        <!-- app settings -->
                        <div class="hidden-md-down">
                            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                                <i class="fal fa-cog"></i>
                            </a>
                        </div>
                        <!-- app shortcuts -->
                        <!-- <div>
                            <a href="#" class="header-icon" data-toggle="dropdown" title="My Apps">
                                <i class="fal fa-cube"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated w-auto h-auto">
                                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top">
                                    <h4 class="m-0 text-center color-white">
                                        Quick Shortcut
                                        <small class="mb-0 opacity-80">User Applications & Addons</small>
                                    </h4>
                                </div>
                                <div class="custom-scroll h-100">
                                    <ul class="app-list">
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-2 icon-stack-3x color-primary-600"></i>
                                                    <i class="base-3 icon-stack-2x color-primary-700"></i>
                                                    <i class="ni ni-settings icon-stack-1x text-white fs-lg"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Services
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-2 icon-stack-3x color-primary-400"></i>
                                                    <i class="base-10 text-white icon-stack-1x"></i>
                                                    <i class="ni md-profile color-primary-800 icon-stack-2x"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Account
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-9 icon-stack-3x color-success-400"></i>
                                                    <i class="base-2 icon-stack-2x color-success-500"></i>
                                                    <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Security
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-18 icon-stack-3x color-info-700"></i>
                                                    <span class="position-absolute pos-top pos-left pos-right color-white fs-md mt-2 fw-400">28</span>
                                                </span>
                                                <span class="app-list-name">
                                                    Calendar
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-7 icon-stack-3x color-info-500"></i>
                                                    <i class="base-7 icon-stack-2x color-info-700"></i>
                                                    <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Stats
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                    <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                    <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Messages
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-4 icon-stack-3x color-fusion-400"></i>
                                                    <i class="base-5 icon-stack-2x color-fusion-200"></i>
                                                    <i class="base-5 icon-stack-1x color-fusion-100"></i>
                                                    <i class="fal fa-keyboard icon-stack-1x color-info-50"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Notes
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                    <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                    <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                    <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Photos
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                    <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                    <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                    <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                    <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Maps
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-5 icon-stack-3x color-success-700 opacity-80"></i>
                                                    <i class="base-12 icon-stack-2x color-success-700 opacity-30"></i>
                                                    <i class="fal fa-comment-alt icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Chat
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-5 icon-stack-3x color-warning-600"></i>
                                                    <i class="base-7 icon-stack-2x color-warning-800 opacity-50"></i>
                                                    <i class="fal fa-phone icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Phone
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-6 icon-stack-3x color-danger-600"></i>
                                                    <i class="fal fa-chart-line icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Projects
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-100">
                                            <a href="#" class="btn btn-default mt-4 mb-2 pr-5 pl-5"> Add more apps </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <!-- app message -->
                        <!-- <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-messenger">
                            <i class="fal fa-globe"></i>
                            <span class="badge badge-icon">!</span>
                        </a> -->
                        <!-- app notification -->
                        <div>
                            <a href="#" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
                                <i class="fal fa-bell"></i>
                                <span class="badge badge-icon">11</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                                    <h4 class="m-0 text-center color-white">
                                        11 New
                                        <small class="mb-0 opacity-80">User Notifications</small>
                                    </h4>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-clean" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-messages" data-i18n="drpdwn.messages">Pesan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-feeds" data-i18n="drpdwn.feeds">Pemberitahuan</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-notification">
                                    <div class="tab-pane active p-3 text-center">
                                        <h5 class="mt-4 pt-4 fw-500">
                                            <span class="d-block fa-3x pb-4 text-muted">
                                                <i class="ni ni-arrow-up text-gradient opacity-70"></i>
                                            </span> Select a tab above to activate
                                            <small class="mt-3 fs-b fw-400 text-muted">
                                                This blank page message helps protect your privacy, or you can show the first message here automatically through
                                                <a href="#">settings page</a>
                                            </small>
                                        </h5>
                                    </div>
                                    <div class="tab-pane" id="tab-messages" role="tabpanel">
                                        <div class="custom-scroll h-100">
                                            <ul class="notification">
                                                <li class="unread">
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-c.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Melissa Ayre <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-1">INBOX</span></span>
                                                            <span class="msg-a fs-sm">Re: New security codes</span>
                                                            <span class="msg-b fs-xs">Hello again and thanks for being part...</span>
                                                            <span class="fs-nano text-muted mt-1">56 seconds ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="unread">
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-a.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Adison Lee</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">2 minutes ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-success mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-b.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Oliver Kopyuv</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">3 days ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-warning mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-e.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Dr. John Cook PhD</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">2 weeks ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-success mr-2">
                                                            <!-- <img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-h.png" class="profile-image rounded-circle" alt="Sarah McBrook" /> -->
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-h.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Sarah McBrook</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">3 weeks ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-success mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-m.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Anothony Bezyeth</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">one month ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-danger mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-j.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Lisa Hatchensen</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">one year ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-feeds" role="tabpanel">
                                        <div class="custom-scroll h-100">
                                            <ul class="notification">
                                                <li class="unread">
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <span class="d-flex flex-column flex-1">
                                                            <span class="name d-flex align-items-center">Administrator <span class="badge badge-success fw-n ml-1">UPDATE</span></span>
                                                            <span class="msg-a fs-sm">
                                                                System updated to version <strong>4.5.1</strong> <a href="docs_buildnotes.html">(patch notes)</a>
                                                            </span>
                                                            <span class="fs-nano text-muted mt-1">5 mins ago</span>
                                                        </span>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <div class="d-flex flex-column flex-1">
                                                            <span class="name">
                                                                Adison Lee <span class="fw-300 d-inline">replied to your video <a href="#" class="fw-400"> Cancer Drug</a> </span>
                                                            </span>
                                                            <span class="msg-a fs-sm mt-2">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day...</span>
                                                            <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                                        </div>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-k.png" class="profile-image rounded-circle" alt="k" />-->
                                                        <div class="d-flex flex-column flex-1">
                                                            <span class="name">
                                                                Troy Norman'<span class="fw-300">s new connections</span>
                                                            </span>
                                                            <div class="fs-sm d-flex align-items-center mt-2">
                                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                                <div data-hasmore="+3" class="rounded-circle profile-image-md mr-1">
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                                </div>
                                                            </div>
                                                            <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                                        </div>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle align-self-start mt-1" alt="k" />-->
                                                        <div class="d-flex flex-column flex-1">
                                                            <span class="name">Dr John Cook <span class="fw-300">sent a <span class="text-danger">new signal</span></span></span>
                                                            <span class="msg-a fs-sm mt-2">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</span>
                                                            <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                                        </div>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <div class="d-flex flex-column flex-1">
                                                            <span class="name">Lab Images <span class="fw-300">were updated!</span></span>
                                                            <div class="fs-sm d-flex align-items-center mt-1">
                                                                <a href="#" class="mr-1 mt-1" title="Cell A-0012">
                                                                    <span class="d-block img-share" style="background-image:url('img/thumbs/pic-7.png'); background-size: cover;"></span>
                                                                </a>
                                                                <a href="#" class="mr-1 mt-1" title="Patient A-473 saliva">
                                                                    <span class="d-block img-share" style="background-image:url('img/thumbs/pic-8.png'); background-size: cover;"></span>
                                                                </a>
                                                                <a href="#" class="mr-1 mt-1" title="Patient A-473 blood cells">
                                                                    <span class="d-block img-share" style="background-image:url('img/thumbs/pic-11.png'); background-size: cover;"></span>
                                                                </a>
                                                                <a href="#" class="mr-1 mt-1" title="Patient A-473 Membrane O.C">
                                                                    <span class="d-block img-share" style="background-image:url('img/thumbs/pic-12.png'); background-size: cover;"></span>
                                                                </a>
                                                            </div>
                                                            <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                                        </div>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-h.png" class="profile-image rounded-circle align-self-start mt-1" alt="k" />-->
                                                        <div class="d-flex flex-column flex-1">
                                                            <div class="name mb-2">
                                                                Lisa Lamar<span class="fw-300"> updated project</span>
                                                            </div>
                                                            <div class="row fs-b fw-300">
                                                                <div class="col text-left">
                                                                    Progress
                                                                </div>
                                                                <div class="col text-right fw-500">
                                                                    45%
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-sm d-flex mt-1">
                                                                <span class="progress-bar bg-primary-500 progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></span>
                                                            </div>
                                                            <span class="fs-nano text-muted mt-1">2 hrs ago</span>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
                                    <a href="#" class="fs-xs fw-500 ml-auto">view all notifications</a>
                                </div>
                            </div>
                        </div>
                        <!-- app user menu -->
                        <div>
                            <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                <img src="<?= base_url("assets/") ?>img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="<?= $user['nama_lengkap'] ?>">
                                <!-- you can also add username next to the avatar with the codes below:
									<span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
									<i class="ni ni-chevron-down hidden-xs-down"></i> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                        <span class="mr-2">
                                            <img src="<?= base_url("assets/") ?>img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="<?= $user['nama_lengkap'] ?>">
                                        </span>
                                        <div class="info-card-text">
                                            <div class="fs-lg text-truncate text-truncate-lg"><?= $user['nama_lengkap'] ?></div>
                                            <span class="text-truncate text-truncate-md opacity-80"><?= $user['email'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider m-0"></div>
                                <a href="#" class="dropdown-item" data-action="app-reset">
                                    <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
                                </a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                    <span data-i18n="drpdwn.settings">Settings</span>
                                </a>
                                <div class="dropdown-divider m-0"></div>
                                <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                    <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                    <i class="float-right text-muted fw-n">F11</i>
                                </a>
                                <a href="#" class="dropdown-item" data-action="app-print">
                                    <span data-i18n="drpdwn.print">Print</span>
                                    <i class="float-right text-muted fw-n">Ctrl + P</i>
                                </a>
                                <!-- <div class="dropdown-multilevel dropdown-multilevel-left">
                                    <div class="dropdown-item">
                                        Language
                                    </div>
                                    <div class="dropdown-menu">
                                        <a href="#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Français</a>
                                        <a href="#?lang=en" class="dropdown-item active" data-action="lang" data-lang="en">English (US)</a>
                                        <a href="#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Español</a>
                                        <a href="#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">Русский язык</a>
                                        <a href="#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">日本語</a>
                                        <a href="#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">中文</a>
                                    </div>
                                </div> -->
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item fw-500 pt-3 pb-3" href="<?= base_url("logout") ?>">
                                    <span data-i18n="drpdwn.page-logout">Logout</span>
                                    <span class="float-right fw-n">&commat;<?= $user['username'] ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- END Page Header -->
                <!-- BEGIN Page Content -->
                <!-- the #js-page-content id is needed for some plugins to initialize -->
                <main id="js-page-content" role="main" class="page-content">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><?= $sidebar_one ?></a></li>
                        <li class="breadcrumb-item"><?= $sidebar_two ?></li>
                        <li class="breadcrumb-item active"><?= $breadcrumb ?></li>
                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='<?= $icon_subheader ?>'></i> <?= $bc_1 ?>
                            <small>
                                <?= $bc_2 ?>
                            </small>
                        </h1>
                    </div>
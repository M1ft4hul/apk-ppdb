<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $title; ?> | <?= $subtitle; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/admin/assets/img/favicon.ico" />
    <link href="<?= base_url() ?>/admin/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url() ?>/admin/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/admin/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/admin/assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/admin/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/admin/plugins/table/datatable/dt-global_style.css">
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?= base_url() ?>/admin/plugins/animate/animate.css" rel="stylesheet" type="text/css" />

    <script src="<?= base_url() ?>/admin/plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="<?= base_url() ?>/admin/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/admin/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/admin/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />

    <link href="<?= base_url() ?>/admin/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />

    <link href="<?= base_url() ?>/admin/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />

    <style>
        /* 
            Note: If you are using this demo without activity sidebar then you have to make some changes by applying the .admin-data-content css inside structure.css
        */

        .admin-data-content {
            height: calc(100vh - 132px);
            max-width: 100%;
            margin: 0;
        }

        .admin-header .header-container {
            margin: 0;
            max-width: 100%;
        }

        .footer-wrapper {
            max-width: 100%;
            margin: 0;
        }


        /* User Profile Dropdown*/
        .admin-header .header-container .nav-item.user-profile-dropdown {
            align-self: center;
            padding: 0;
            border-radius: 8px;
            margin-left: 22px;
            margin-right: 0;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-toggle {
            display: flex;
            justify-content: flex-end;
            padding: 0 20px 0 16px;
            transition: .5s;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-toggle:after {
            display: none;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-toggle svg {
            color: #515365;
            width: 15px;
            height: 15px;
            align-self: center;
            margin-left: 6px;
            stroke-width: 1.7px;
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition: -webkit-transform .2s ease-in-out;
            transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown.show .dropdown-toggle svg {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media {
            margin: 0;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media img {
            width: 33px;
            height: 33px;
            border-radius: 6px;
            box-shadow: 0 0px 0.9px rgba(0, 0, 0, 0.07), 0 0px 7px rgba(0, 0, 0, 0.14);
            margin-right: 13px;
            border: none;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media .media-body {
            flex: auto;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media .media-body h6 {
            color: #4361ee;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media .media-body h6 span {
            color: #515365;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media .media-body p {
            color: #bfc9d4;
            font-size: 10px;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .nav-link.user {
            padding: 0 0;
            font-size: 25px;
        }

        .admin-header .header-container .nav-item.dropdown.user-profile-dropdown .nav-link:after {
            display: none;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu {
            z-index: 9999;
            max-width: 13rem;
            padding: 0 11px;
            top: 166% !important;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu.show {
            top: 42px !important;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section {
            padding: 16px 14px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            margin-right: -12px;
            margin-left: -12px;
            background: rgb(96 152 149);
            margin-top: -1px;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media {
            margin: 0;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 3px solid rgb(224 230 237 / 58%);
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body {
            align-self: center;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body h5 {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 0;
            color: #fafafa;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body p {
            font-size: 11px;
            font-weight: 500;
            margin-bottom: 0;
            color: #e0e6ed;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item {
            padding: 0;
            background: transparent;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item a {
            display: block;
            color: #3b3f5c;
            font-size: 13px;
            font-weight: 600;
            padding: 9px 14px;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item a:hover {
            color: #000
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item.active,
        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item:active {
            background-color: transparent;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item:not(:last-child) {
            border-bottom: 1px solid #ebedf2;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item svg {
            width: 17px;
            margin-right: 7px;
            height: 17px;
            color: #009688;
            fill: rgb(0 150 136 / 13%);
        }

        #content .col-left {
            margin-right: 0;
        }

        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise, Remove it
        */
        .navbar .navbar-item.navbar-dropdown {
            margin-left: auto;
        }

        .layout-px-spacing {
            min-height: calc(100vh - 145px) !important;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="dashboard-analytics admin-header">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div id="compact_submenuSidebar" class="sidebar-wrapper submenu-sidebar sidebar-theme">

            <div class="theme-logo">
                <a href="index.html">
                    <img src="<?= base_url() ?>/foto_kota/Coat_of_arms_of_Southeast_Sulawesi.svg.png" class="navbar-logo" alt="logo">
                    <span class="admin-logo">PPDB SMK<span></span></span>
                </a>
            </div>

            <div class="sidebarCollapseFixed">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </div>

            <nav id="compactSidebar">
                <ul class="menu-categories">
                    <li class="menu menu-single">
                        <a href="<?= base_url('/AdminPPDB') ?>" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </div>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu menu-single">
                        <a href="<?= base_url('/pekerjaan') ?>" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                </div>
                                <span>Pekerjaan</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu menu-single">
                        <a href="<?= base_url('/pendidikan') ?>" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                        <circle cx="12" cy="8" r="7"></circle>
                                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                    </svg>
                                </div>
                                <span>Pendidikan</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu menu-single">
                        <a href="<?= base_url('/agama') ?>" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                        <path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z"></path>
                                        <path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path>
                                        <path d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z"></path>
                                        <path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z"></path>
                                        <path d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z"></path>
                                        <path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path>
                                        <path d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z"></path>
                                        <path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path>
                                    </svg>
                                </div>
                                <span>Agama</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu menu-single">
                        <a href="<?= base_url('/user') ?>" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <span>User</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="content-container">

                    <div class="col-left layout-top-spacing">
                        <div class="col-left-content">

                            <div class="header-container">
                                <header class="header navbar navbar-expand-sm">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                                            <div class="bt-menu-trigger">
                                                <span></span>
                                            </div>
                                        </a>
                                        <div class="page-header">
                                            <div class="page-title">
                                                <h3><?= $page_title; ?></h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="header-actions">

                                        <div class="nav-item dropdown user-profile-dropdown">
                                            <a href="#" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                                <div class="media">
                                                    <img src="assets/img/90x90.jpg" class="img-fluid" alt="admin-profile">
                                                    <div class="media-body align-self-center">
                                                        <h6>Alan</h6>
                                                    </div>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                                                <div class="user-profile-section">
                                                    <div class="media mx-auto">
                                                        <img src="assets/img/90x90.jpg" class="img-fluid mr-2" alt="avatar">
                                                        <div class="media-body">
                                                            <h5>Alan Green</h5>
                                                            <p>Project Leader</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item">
                                                    <a href="<?= base_url('C_Auth/logout') ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                            <polyline points="16 17 21 12 16 7"></polyline>
                                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                                        </svg> <span>Log Out</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </header>
                            </div>

                            <div class="admin-data-content layout-top-spacing">

                                <?= $this->renderSection('content') ?>


                                <div class="footer-wrapper col-xl-12">
                                    <div class="footer-section f-section-1">
                                        <p class="">© <script>
                                                document.write(new Date().getFullYear())
                                            </script>
                                            <a target="_blank" href="https://designreset.com">PPDB ONLINE - SMK SULTRA</a>
                                        </p>
                                    </div>
                                    <div class="footer-section f-section-2">
                                        <p class="">Admin Dashboard <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                            </svg></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url() ?>/admin/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url() ?>/admin/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?= base_url() ?>/admin/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= base_url() ?>/admin/plugins/table/datatable/datatables.js"></script>
    <script>
        $('#default-ordering').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "order": [
                [2, "desc"]
            ],
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function() {
                $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered');
            }
        });
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>/sweetalert/mysweet.js"></script>
    <script src="<?= base_url() ?>/admin/plugins/sweetalerts/custom-sweetalert.js"></script>
    <script>
        $('#multi-column-ordering').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            columnDefs: [{
                targets: [0],
                orderData: [0, 1]
            }, {
                targets: [1],
                orderData: [1, 0]
            }, {
                targets: [2],
                orderData: [2, 0]
            }]
        });
    </script>

    <script src="<?= base_url() ?>/admin/plugins/file-upload/file-upload-with-preview.min.js"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
</body>

</html>
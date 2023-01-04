<!DOCTYPE html>
<html lang="en" ng-app="apps">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LINIK 24 JM</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/logo-mini.svg" />
</head>

<body ng-controller="indexController">
    <div class="container-scroller">
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a href="" class="navbar-brand">KLINIK<span class="text-primary">24.</span></a>   
                        <!-- <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/stripe.png"
                                    alt="logo" /></a> -->
                            <a class="navbar-brand brand-logo-mini" href="index.html"><img
                                    src="assets/images/logo-mini.svg" alt="logo" /></a>
                        </div>
                        <ul class="navbar-nav navbar-nav-right">
                           
                      
                           
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                    id="profileDropdown">
                                    <span class="nav-profile-name">Drscript</span>
                                    <span class="online-status"></span>
                                    <!-- <img src="assets/images/faces/face28.png" alt="profile" /> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                    aria-labelledby="profileDropdown">
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-settings text-primary"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </div>
            </nav>
            <?=view('template/menu')?>
        </div>
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h3 class="text-dark font-weight-bold mb-2"></h3>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Feedback
                                        <i class="mdi mdi-message-outline btn-icon-append"></i>
                                    </button>
                                </div>
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Help
                                        <i class="mdi mdi-help-circle-outline btn-icon-append"></i>
                                    </button>
                                </div>
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Print
                                        <i class="mdi mdi-printer btn-icon-append"></i>
                                    </button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 stretch-card">
                            <?=$this->renderSection('content')?>
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="footer-wrap">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                bootstrapdash.com 2020</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                    href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                                    templates</a> from Bootstrapdash.com</span>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/angular/angular.js"></script>
    <script src="assets/vendors/base/vendor.bundle.base.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="assets/vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="assets/vendors/justgage/justgage.js"></script>
    <script src="assets/js/dashboard.js"></script>

    <script src="apps/apps.js"></script>
    <script src="apps/controllers/admin.controllers.js"></script>
    <script src="apps/services/helper.services.js"></script>
    <script src="apps/services/auth.services.js"></script>
    <script src="apps/services/admin.services.js"></script>


    <script src="apps/services/message.services.js"></script>
    <script src="assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="assets/libs/swangular/swangular.js"></script>
    <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/libs/angular-datatables/dist/angular-datatables.min.js"></script>
    <script src="assets/libs/angular-locale_id-id.js"></script>
    <script src="assets/libs/input-mask/angular-input-masks-standalone.min.js"></script>
    <script src="assets/libs/jquery.PrintArea.js"></script>
    <script src="assets/libs/angular-base64-upload/dist/angular-base64-upload.min.js"></script>
    <script src="assets/libs/loading/dist/loadingoverlay.min.js"></script>
    <script src="assets/libs/calendar/main.min.js"></script>
    <script src="assets/libs/calendar/locales-all.min.js"></script>
    <script src="assets/libs/angularjs-currency-input-mask/dist/angularjs-currency-input-mask.min.js">
    </script>
    <script src="assets/libs/jquery.PrintArea.js">
    < /body>

    </html>
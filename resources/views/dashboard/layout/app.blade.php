
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Assets Cryptoview | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark" data-layout-mode="light">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{ route('index') }}" class="logo logo-dark">
                        <h3 style="font-weight: bolder; color: white">Assets Cryptoview</h3>
                    </a>

                    <a href="{{ route('index') }}" class="logo logo-light">
                        <h3 style="font-weight: bolder; color: white">Assets Cryptoview</h3>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
            </div>

            <div class="d-flex">
                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div>



                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="https://www.pngitem.com/pimgs/m/421-4213036_avatar-hd-png-download.png"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                        <a class="dropdown-item d-block" href="#"><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="bx bx-cog bx-spin"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" key="t-menu">Menu</li>

                    <li>
                        <a href="{{ route('user.dashboard') }}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Dashboards</span>
                        </a>
                    </li>

                    <li class="menu-title" key="t-apps">Base</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-bitcoin"></i>
                            <span key="t-crypto">Crypto Hold</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('user.wallet') }}" key="t-wallet">Wallet</a></li>
                            <li><a href="{{ route('user.assets') }}" key="">Hold</a></li>
                            <li><a href="{{ route('user.assets.history') }}" key="t-exchange">Transactions</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span key="t-crypto">Withdrawal</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('user.withdraw') }}" key="t-wallet">Withdraw</a></li>
                            <li><a href="{{ route('user.assets.history') }}" key="t-exchange">History</a></li>
                            <li><a href="{{ route('user.account.index') }}" key="t-exchange">Account</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('user.stake') }}" class="waves-effect">
                            <i class="bx bx-rocket"></i>
                            <span key="t-dashboards">Staking <span class="badge bg-danger">New</span></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.stake') }}" class="waves-effect">
                            <i class="bx bx-box"></i>
                            <span key="t-dashboards">Mining <span class="badge bg-danger">New</span></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.stake') }}" class="waves-effect">
                            <i class="bx bx-chart"></i>
                            <span key="t-dashboards">Automated Trader <span class="badge bg-danger">New</span></span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="waves-effect">
                            <i class="bx bx-wrench"></i>
                            <span key="t-dashboards">Settings</span>
                        </a>
                    </li>



                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
    @yield('content')
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- crypto dash init js -->
<script src="{{ asset('assets/js/pages/crypto-dashboard.init.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>


</body>

<!-- Mirrored from themesbrand.com/skote/layouts/dashboard-crypto.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 14:22:41 GMT -->
</html>

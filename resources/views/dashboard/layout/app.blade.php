
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="{{ env('APP_NAME') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('APP_NAME') }}" />
    <meta property="og:title" content="{{ env('APP_NAME') }}" />
    <meta property="og:description" content="{{ env('APP_NAME') }}" />
    <meta property="og:image" content="social-image.png"/>
    <meta name="format-detection" content="telephone=no">
    <title>{{ env('APP_NAME') }} | Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('dash/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <!-- Vectormap -->
    <link href="{{ asset('dash/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="{{ asset('dash/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        a .DZ-theme-btn {
            align-items: center;
            justify-content: center;
            display: none;
        }
        .form-control:disabled, .form-control[readonly] {
             background: #dfdddd;
            opacity: 1;
        }
    </style>
    <style>
        .form-control {
            background: #e5e2e2;
            border: 0.0625rem solid #f0f1f5;
            padding: 0.3125rem 1.25rem;
            color: #6e6e6e;
            height: 3.5rem;
            border-radius: 0.5rem !important;
        }
    </style>

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="{{ route('index') }}" class="brand-logo">
            <h2 style="font-weight: bolder; color: black" >RESF</h2>
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->


    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">

                        </div>
                    </div>

                    <ul class="navbar-nav header-right">


                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                <div class="header-info">
                                    <span class="text-black">{{ auth()->user()->name }}</span>
                                </div>
                                <img style="height: 40px; width: 40px" src="https://static-00.iconduck.com/assets.00/user-avatar-icon-2048x2048-wpp8os2d.png"  alt=""/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('user.profile') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="ms-2">Profile </span>
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="route('logout')"
                                       onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>

                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="ai-icon" href="{{ route('user.dashboard') }}" >
                        <i class="flaticon-dashboard-1"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="ai-icon" href="{{ route('user.deposit') }}" aria-expanded="false">
                        <i class="fa fa-money-bill"></i>
                        <span class="nav-text">Fund</span>
                    </a>
                </li>
                <li>
                    <a class="ai-icon" href="{{ route('user.projects') }}" aria-expanded="false">
                        <i class="fa fa-boxes"></i>
                        <span class="nav-text">Properties</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user.withdraw') }}" class="ai-icon" aria-expanded="false">
                        <i class="fa fa-arrow-circle-up"></i>
                        <span class="nav-text">Withdraw</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.depositHistory') }}" class="ai-icon" aria-expanded="false">
                        <i class="fa fa-history"></i>
                        <span class="nav-text">Transactions</span>
                    </a>
                </li>


            </ul>

            <div class="copyright">
                <p><strong>{{ env('APP_NAME') }}</strong> © {{ Date('Y') }} All Rights Reserved</p>

            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
        @yield('content')
    <!--**********************************
        Content body end
    ***********************************-->

    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © <a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_NAME') }}</a>
                {{ Date('Y') }}</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('dash/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('dash/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('dash/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('dash/js/custom.min.js') }}"></script>
<script src="{{ asset('dash/js/deznav-init.js') }}"></script>
<script src="{{ asset('dash/vendor/owl-carousel/owl.carousel.js') }}"></script>

<!-- Vectormap -->
<script src="{{ asset('dash/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('dash/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('dash/vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('dash/vendor/apexchart/apexchart.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('dash/js/dashboard/dashboard-1.js') }}"></script>


</body>

<!-- Mirrored from omah.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 13:27:37 GMT -->
</html>


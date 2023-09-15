
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
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link ai-icon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#3B4CB8"></path>
                                </svg>
                                <div class="pulse-css"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380 ps">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2">
                                                    <img alt="image" width="50" src="images/avatar/1.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>

                            </div>
                        </li>

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


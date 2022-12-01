<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Extranet_V2</title>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="SergeC">
        <meta name="description" content="Bootstrap Admin App + jQuery">
        <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
        @vite(['resources/js/app.js'])

        <!-- Favicon icon -->
        <link rel="icon" href={{asset('storage/front/images/GGSCarre.png')}} type="image/x-icon">

        <!--css for font-awesome-->
        <link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet">

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

        <!-- Jarallax css -->
        <link href={{asset('storage/front/css/jarallax.css')}} rel="stylesheet">

        <!--Responsive css-->
        <link href="{{asset('storage/front/css/responsive.css')}}" rel="stylesheet">

        <!--Style css-->
        <link href="{{asset('storage/front/css/style.css')}}" rel="stylesheet">
        @vite(['resources/scss/style.scss', 'resources/js/app.js'])
    </head>



    <body data-spy="scroll" data-bs-target=".navbar" data-offset="50">

        <!-- Sidebar  -->
        @if ( Route::currentRouteName() != 'login')
            @include('sidebar')
        @endif

        <!-- Start [ nav meu ] -->
        <section class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-blue">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse" href="#"><span></span></a>
                <a href="#" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="{{asset('storage/configuration/logo.png')}}" alt="" class="logo">
                    <img src="{{asset('storage/configuration/logo-icon.png')}}" alt="" class="logo-thumb">
                </a>
                <a href="#" class="mob-toggler">
                    <i class="feather icon-more-vertical"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="#" class="pop-search"><i class="feather icon-search"></i></a>
                        <div class="search-bar">
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
                            <button type="button" class="btn-close" aria-label="Close">
                            </button>
                        </div>
                    </li>
                    {{-- <li class="nav-item">
                         <a href="#" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a>
                     </li>--}}
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="icon feather icon-bell"></i><span
                                    class="badge bg-danger"><span class="sr-only"></span></span></a>
                            <div class="dropdown-menu dropdown-menu-end notification">
                                <div class="noti-head">
                                    <h6 class="d-inline-block m-b-0">Notifications</h6>
                                    <div class="float-end">
                                        <a href="#" class="m-r-10">mark as read</a>
                                        <a href="#">clear all</a>
                                    </div>
                                </div>
                                <ul class="noti-body">
                                    <li class="n-title">
                                        <p class="m-b-0">NEW</p>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('storage/configuration/avatar-1.jpg')}}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                                <p>New ticket Added</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="n-title">
                                        <p class="m-b-0">EARLIER</p>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('storage/images/user/avatar-2.jpg')}}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('storage/images/user/avatar-1.jpg')}}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                                <p>currently login</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('storage/images/user/avatar-2.jpg')}}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="noti-footer">
                                    <a href="#">show all</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="#" class="displayChatbox dropdown-toggle"><i class="icon feather icon-mail"></i><span
                                    class="badge bg-success"><span class="sr-only"></span></span></a>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown drp-user">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <img src="{{asset('storage/images/user/avatar-1.jpg')}}" class="img-radius wid-40"
                                     alt="User-Profile-Image">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-notification">
                                <div class="pro-head">
                                    <img src="{{asset('storage/images/user/avatar-1.jpg')}}" class="img-radius"
                                         alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <a href="#" class="dud-logout" title="Logout">
                                        <i class="feather icon-log-out"></i>
                                    </a>
                                </div>
                                <ul class="pro-body">
                                    <li><a href="#" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                    <li><a href="#" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                    <li><a href="#" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Page Content -->
        <section>
            @yield('content')
        </section>

        <!-- Footer -->
        @include('footer')

        <!-- LIBRAIRIE -->

        <!-- Typing js -->
        <script src="{{ asset('storage/front/js/typed.min.js') }}"></script>
        <!-- Required js -->
        <script src="{{ asset('storage/js/plugins/bootstrap.min.js') }}"></script>

        <!-- Jarallax js -->
        <script src="{{ asset('storage/front/js/jarallax.min.js') }}"></script>

        <!-- Script js -->
        <script src="{{ asset('storage/front/js/script.js') }}"></script>

        <!-- prism Js -->
        <script src="{{ asset('storage/js/plugins/prism.js') }}"></script>

        <script src="{{ asset('storage/js/plugins/popper.min.js') }}"></script>

        <script src="{{ asset('storage/js/plugins/perfect-scrollbar.min.js') }}"></script>

        <script src="{{ asset('storage/js/pcoded.js') }}"></script>


        <script src="{{ asset('storage/js/plugins/apexcharts.min.js') }}"></script>
        <script src="{{ asset('storage/js/pages/dashboard-main.js') }}"></script>
        <script src="{{ asset('storage/js/pages/menu-setting.js') }}"></script>

    </body>
</html>

<!doctype html>

<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{$settings["title"]}}</title>
    <!-- Required meta tags -->
    <meta name="description" content="{{$settings["about_us"]}}">
    <meta name="author" content="{{$settings["title"]}}">
    <meta name="keywords" content="{{$settings["about_us"]}}">
    <meta name="copyright" content="{{$settings["title"]}}" />
    <link rel="shortcut icon" href="{{asset("images/".$settings["logo"])}}">

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{asset("front")}}/assets/css/bootstrap-rtl.min.css">

    <link rel="stylesheet" href="{{asset("front")}}/assets/plugins/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset("front")}}/assets/plugins/animate/animate.css">
    <!-- owl slider CSS -->
    <link rel="stylesheet" href="{{asset("front")}}/assets/plugins/owlslider/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="{{asset("front")}}/assets/css/style.css">

</head>
<!-- pre-loader -->
<section class="pre-loader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</section>
<!-- pre-loader -->

<!-- Side Menu -->
<aside class="side-menu">
    <div class="text-right">
        <button class="bg-transparent border-0 btn text-muted btn-lg" id="closeMenu">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="scroll-menu">
        <nav class="scrollspy_menu">
            <ul class="navbar-nav">
                <li class="nav-item {{ request()->segment(1)=="/" ? "active":"" }}">
                    <a class="nav-link" href="/">الرئيسية </a>
                </li>
                <li class="nav-item " {{ request()->segment(1)=="services" ? "active":"" }}>
                    <a class="nav-link" href="{{route("front.services")}}">الخدمات والدورات</a>
                </li>
                <li class="nav-item"  {{ request()->segment(1)=="experts" ? "active":"" }}>
                    <a class="nav-link" href="{{route("front.experts")}}">الخبراء</a>
                </li>
                <li class="nav-item active" {{ request()->segment(1)=="achievements" ? "active":"" }}>
                    <a class="nav-link" href="{{route("front.achievements")}}">الإنجازات والشهادات</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<div class="side-overlay"></div>
<!-- Side Menu -->
<!-- Main header -->
<header class="main-header pos-absolute">
    <div class="container">
        <div class="content">
            <figure>
                <img src="{{asset('images')}}/{{$settings['logo']}}" alt="">
            </figure>
            <ul class="navbar">
                <li class="nav-item {{ Request::segment(1)=="/" ? "active":"" }}">
                    <a class="nav-link" href="/">الرئيسية </a>
                </li>
                <li class="nav-item " {{ Request::segment(0)=="services" ? "active":"" }}>
                    <a class="nav-link" href="{{route("front.services")}}">الخدمات والدورات</a>
                </li>

                <li class="nav-item"  {{ Request::segment(1)=="experts" ? "active":"" }}>
                    <a class="nav-link" href="{{route("front.experts")}}">الخبراء</a>
                </li>
                <li class="nav-item " {{ Request::segment(1)=="achievements" ? "active":"" }}>
                    <a class="nav-link" href="{{route("front.achievements")}}">الإنجازات والشهادات</a>
                </li>
            </ul>
            <a href="{{asset('images')}}/{{$settings['cv']}}" class="btn cs-btn">سيرتي الذاتية</a>
            <button type="button" class="navbar-toggler btn d-lg-none d-inline-block" id="openMenu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</header>

@yield("content")

<div class="main-footer">
    <div class="container">
        <div class="content">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-3">
                    <figure>
                        <img src="assets/images/footer-logo.svg" alt="" srcset="">
                    </figure>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="#" class="nav-link">الرئيسية</a>
                    <a href="#" class="nav-link">الخدمات والدورات</a>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="#" class="nav-link">الخبراء</a>
                    <a href="#" class="nav-link">الإنجازات والشهادات</a>
                </div>
                <div class="col-lg-4 col-md-3">
                    <div class="social-media">

                        <h4>سعيد بتواصلكم معي على:</h4>
                        <div class="d-flex justify-content-center flex-wrap align-items-center gap-1">
                            <a href="{{config('settings.whatsapp')}}" target="_blank" rel="noopener noreferrer">
                                <svg id="_whatsapp" data-name=" whatsapp" xmlns="http://www.w3.org/2000/svg" width="24"
                                     height="24" viewBox="0 0 24 24">
                                    <g id="whatsapp">
                                        <path id="BG_164" data-name="BG 164" d="M0,0H24V24H0Z" fill="none"
                                              opacity="0.58" />
                                        <path id="Vector"
                                              d="M19.986,9.41A10,10,0,1,0,1.336,15l-.89,3.31a1,1,0,0,0,1.23,1.22l3.26-.9A9.954,9.954,0,0,0,10,20,10.154,10.154,0,0,0,19.986,9.41Zm-5.1,4.31a2.386,2.386,0,0,1-.34.51,2.279,2.279,0,0,1-.82.59,2.447,2.447,0,0,1-.98.19,4.073,4.073,0,0,1-1.63-.37,9.159,9.159,0,0,1-1.72-.99,14.45,14.45,0,0,1-1.64-1.4,14.3,14.3,0,0,1-1.4-1.64,8.8,8.8,0,0,1-.98-1.71,4.234,4.234,0,0,1-.36-1.64,2.613,2.613,0,0,1,.18-.97,2.233,2.233,0,0,1,.58-.84,1.445,1.445,0,0,1,1.04-.47.978.978,0,0,1,.41.09.828.828,0,0,1,.34.28l1.16,1.64a1.614,1.614,0,0,1,.2.35A.73.73,0,0,1,9,7.65a.717.717,0,0,1-.11.36,1.76,1.76,0,0,1-.28.36l-.38.4a.257.257,0,0,0-.08.2.5.5,0,0,0,.02.12.69.69,0,0,1,.04.1,4.008,4.008,0,0,0,.47.64c.23.26.47.53.73.79s.53.51.8.74a3.84,3.84,0,0,0,.65.46c.03.01.06.03.09.04a.328.328,0,0,0,.34-.07l.38-.38a1.607,1.607,0,0,1,.36-.28.689.689,0,0,1,.36-.11.73.73,0,0,1,.31.07,1.82,1.82,0,0,1,.35.2l1.66,1.18a.844.844,0,0,1,.28.32,1.046,1.046,0,0,1,.08.39C15.006,13.35,14.966,13.54,14.886,13.72Z"
                                              transform="translate(1.994 2)" fill="#dceefb" />
                                        <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                              opacity="0" />
                                    </g>
                                </svg>
                            </a>
                            <a href="{{config('settings.whatsapp')}}" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <path id="Subtraction_1" data-name="Subtraction 1"
                                          d="M10-1206a10.011,10.011,0,0,1-10-10,10.011,10.011,0,0,1,10-10,10.011,10.011,0,0,1,10,10A10.011,10.011,0,0,1,10-1206Zm-5.8-6.058a.18.18,0,0,0-.2.13.285.285,0,0,0,.164.3,9.544,9.544,0,0,0,3.886.852,7.167,7.167,0,0,0,7.447-7.03c0-.053,0-.161,0-.273v-.012a.1.1,0,0,1,0-.017.113.113,0,0,0,0-.018.156.156,0,0,0,0-.025.156.156,0,0,1,0-.025c0-.087,0-.168-.005-.211a7.433,7.433,0,0,0,1.244-1.1.164.164,0,0,0,.032-.172.106.106,0,0,0-.1-.062.147.147,0,0,0-.049.009l-.175.062-.026.009a6.231,6.231,0,0,1-1.122.328,4.656,4.656,0,0,0,1.444-1.412.191.191,0,0,0,.02-.2.145.145,0,0,0-.13-.077.2.2,0,0,0-.084.02c-.1.048-.218.1-.341.164a8.441,8.441,0,0,1-1.511.631l-.024.007-.025.007a2.858,2.858,0,0,0-2.019-.83,2.879,2.879,0,0,0-2.875,2.875c0,.026,0,.058,0,.093,0,.08,0,.17,0,.227a5.93,5.93,0,0,1-4.682-2.452.236.236,0,0,0-.176-.1.182.182,0,0,0-.168.145,5.608,5.608,0,0,0-.1,1.151,2.839,2.839,0,0,0,1.789,2.319,2.607,2.607,0,0,1-.652.089,1.9,1.9,0,0,1-.856-.214.233.233,0,0,0-.105-.025.159.159,0,0,0-.129.055.217.217,0,0,0-.02.19,3.172,3.172,0,0,0,2.495,1.972,1.653,1.653,0,0,1-.726.115h-.26c-.088,0-.392-.02-.585-.044a.612.612,0,0,0-.073,0c-.065,0-.18.012-.222.089s-.011.161.072.287A3.313,3.313,0,0,0,7.921-1213a6.479,6.479,0,0,1-3.711.946H4.2Z"
                                          transform="translate(0 1226)" fill="#dceefb" />
                                </svg>
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <svg id="_snapchat" data-name=" snapchat" xmlns="http://www.w3.org/2000/svg" width="24"
                                     height="24" viewBox="0 0 24 24">
                                    <g id="snapchat">
                                        <path id="BG_134" data-name="BG 134" d="M0,0H24V24H0Z" fill="none"
                                              opacity="0.58" />
                                        <path id="Vector"
                                              d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm5.31,13.31a2.865,2.865,0,0,1-.73.28,1.284,1.284,0,0,0-.43.16.407.407,0,0,0-.16.33c-.02.11-.03.2-.11.26a1.113,1.113,0,0,1-.49.08,4.614,4.614,0,0,0-1.14.17,3.637,3.637,0,0,0-.62.32,2.83,2.83,0,0,1-3.27,0,2.907,2.907,0,0,0-.63-.33,4.131,4.131,0,0,0-1.14-.17,1.144,1.144,0,0,1-.49-.08c-.08-.05-.09-.15-.11-.26a.407.407,0,0,0-.16-.33,1.678,1.678,0,0,0-.43-.17,2.781,2.781,0,0,1-.73-.27c-.34-.19-.14-.3-.03-.36a3.716,3.716,0,0,0,2.24-2.48v-.02a.324.324,0,0,0-.11-.35,6.058,6.058,0,0,0-.65-.45,2.112,2.112,0,0,0-.27-.17c-.28-.2-.4-.39-.31-.64a.37.37,0,0,1,.38-.23.68.68,0,0,1,.15.02,3.958,3.958,0,0,1,.52.17,1.913,1.913,0,0,0,.27.1.149.149,0,0,0,.06.01c.1,0,.13-.05.12-.15a.277.277,0,0,0-.01-.09,12.425,12.425,0,0,1-.01-1.52,2.581,2.581,0,0,1,.67-1.63,3,3,0,0,1,2.28-.95,3.016,3.016,0,0,1,2.28.94,2.612,2.612,0,0,1,.67,1.64,9.781,9.781,0,0,1-.02,1.57v.03c-.01.11.02.15.12.15a.127.127,0,0,0,.06-.01q.1-.03.27-.09a3.173,3.173,0,0,1,.52-.17.389.389,0,0,1,.15-.02.371.371,0,0,1,.38.24c.09.24-.03.43-.31.63a1.624,1.624,0,0,1-.27.17,7.313,7.313,0,0,0-.65.45.324.324,0,0,0-.11.35v.02a3.783,3.783,0,0,0,2.24,2.48C15.45,13,15.65,13.12,15.31,13.31Z"
                                              transform="translate(2 2)" fill="#dceefb" />
                                        <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                              opacity="0" />
                                    </g>
                                </svg>
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <svg id="_facebook" data-name=" facebook" xmlns="http://www.w3.org/2000/svg" width="24"
                                     height="24" viewBox="0 0 24 24">
                                    <g id="facebook">
                                        <path id="BG_111" data-name="BG 111" d="M0,0H24V24H0Z" fill="none"
                                              opacity="0.58" />
                                        <path id="Vector"
                                              d="M20,14.19C20,17.83,17.83,20,14.19,20H13a1,1,0,0,1-1-1V13.23a.5.5,0,0,1,.49-.5l1.76-.03a.319.319,0,0,0,.29-.25l.35-1.91a.3.3,0,0,0-.3-.35l-2.13.03a.508.508,0,0,1-.51-.49l-.04-2.45a.3.3,0,0,1,.3-.3l2.4-.04a.3.3,0,0,0,.3-.3l-.04-2.4a.3.3,0,0,0-.3-.3l-2.7.04A3,3,0,0,0,8.92,7.03l.05,2.75a.5.5,0,0,1-.49.51l-1.2.02a.3.3,0,0,0-.3.3l.03,1.9a.3.3,0,0,0,.3.3l1.2-.02a.508.508,0,0,1,.51.49l.09,5.7a1,1,0,0,1-1,1.02H5.81C2.17,20,0,17.83,0,14.18V5.81C0,2.17,2.17,0,5.81,0h8.38C17.83,0,20,2.17,20,5.81v8.38Z"
                                              transform="translate(2 2)" fill="#dceefb" />
                                        <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                              opacity="0" />
                                    </g>
                                </svg>
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <svg id="_youtube" data-name=" youtube" xmlns="http://www.w3.org/2000/svg" width="24"
                                     height="24" viewBox="0 0 24 24">
                                    <g id="youtube">
                                        <path id="BG_165" data-name="BG 165" d="M0,0H24V24H0Z" fill="none"
                                              opacity="0.58" />
                                        <path id="Vector"
                                              d="M15,0H5A4.724,4.724,0,0,0,0,5v6a4.724,4.724,0,0,0,5,5H15a4.724,4.724,0,0,0,5-5V5A4.724,4.724,0,0,0,15,0ZM11.89,9.03,9.42,10.51c-1,.6-1.82.14-1.82-1.03V6.51c0-1.17.82-1.63,1.82-1.03l2.47,1.48A1.108,1.108,0,0,1,11.89,9.03Z"
                                              transform="translate(2 4)" fill="#dceefb" />
                                        <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                              opacity="0" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <h6>جميع الحقوق محفوظة لدي {{$settings["title"]}} @ {{date('Y')}}.</h6>
            </div>
        </div>
    </div>
</div>
<!-- ./main-footer -->

</body>
<script src="{{asset("front")}}/assets/js/jquery.min.js"></script>
<script src="{{asset("front")}}/assets/js/popper.min.js"></script>
<script src="{{asset("front")}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset("front")}}/assets/plugins/owlslider/owl.carousel.min.js"></script>
<script src="{{asset("front")}}/assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="{{asset("front")}}/assets/plugins/animate/wow.min.js"></script>
<script src="{{asset("front")}}/assets/js/main.js"></script>

</html>

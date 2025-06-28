
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from themeadapt.com/tf/ironik/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jun 2025 07:17:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="Ironik - ICO & Crypto Landing Page Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/default-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/tg-cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/main.css') }}">

</head>

<body>

<!--Preloader-->
<div id="preloader">
    <div id="loader" class="loader"></div>
</div>
<!--Preloader-end -->

<!-- Scroll-top -->
<button class="scroll__top scroll-to-target" data-target="html">
    <i class="fas fa-chevron-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header id="header" class="transparent-header">
    <div id="header-fixed-height"></div>
    <div id="sticky-header" class="tg-header__area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    <h3>{{ env('APP_NAME') }}</h3>
{{--                                    <img src="assets/img/logo/logo.svg" alt="Logo">--}}
                                </a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="#features" class="section-link">Market</a></li>
                                    <li><a href="{{ route('user.dashboard') }}" class="section-link">Trade</a></li>
                                    <li><a href="#faq" class="section-link">Faq</a></li>
                                    <li><a href="#contact" class="section-link">Help</a></li>
                                </ul>
                            </div>
                            <div class="tgmenu__action">
                                <ul class="list-wrap">
                                    <li class="header-btn">
                                        <a href="#contact" class="tg-btn">
                                            <img src="{{ asset('front/assets/img/icons/btn_right_arrow.svg') }}"
                                                 alt="icon" class="right_arrow">
                                            <span>
                                                    <img src="assets/img/icons/btn_icon.svg" alt="">
                                                    try it now
                                                </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="tgmobile__menu">
        <nav class="tgmobile__menu-box">
            <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
            <div class="nav-logo">
                <h3 style="">{{ env('APP_NAME') }}</h3>
{{--                <a href="{{ route('index') }}"><img src="assets/img/logo/logo.svg" alt="Logo"></a>--}}
            </div>
            <div class="tgmobile__search">
                <form action="#">
                    <input type="text" placeholder="Search here...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="tgmobile__menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>

        </nav>
    </div>
    <div class="tgmobile__menu-backdrop"></div>
    <!-- End Mobile Menu -->

</header>
<!-- header-area-end -->


<!-- main-area -->
@yield('content')
<!-- main-area-end -->


<!-- footer-area -->
<footer class="footer__area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="copyright-text">
                    <p>Copyright {{ env('APP_NAME') }}
                        - 2025</p>
                </div>
            </div>
{{--            <div class="col-md-6">--}}
{{--                <div class="footer__view-channel">--}}
{{--                    <span>VIP channel:</span>--}}
{{--                    <a href="https://web.telegram.org/" target="_blank" class="tg-btn">--}}
{{--                        <img src="assets/img/icons/btn_right_arrow.svg" alt="icon" class="right_arrow">--}}
{{--                        <span>--}}
{{--                                <img src="assets/img/icons/btn_icon_04.svg" alt="">--}}
{{--                                telegram--}}
{{--                            </span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</footer>
<!-- footer-area-end -->


<!-- JS here -->
<script src="{{ asset('front/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.odometer.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('front/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('front/assets/js/tg-cursor.min.js') }}"></script>
<script src="{{ asset('front/assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('front/assets/js/particles.min.js') }}"></script>
<script src="{{ asset('front/assets/js/particles-config.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.easing.js') }}"></script>
<script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('front/assets/js/main.js') }}"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>گروه فرهنگی و جهادی نورالرضا (ع)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amiri|Reem+Kufi|Harmattan&display=swap" rel="stylesheet">


    <link href="{{ asset('fonts/icomoon/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css" >
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> --}}

    {{-- <link rel="stylesheet" href="css/aos.css"> --}}
    {{-- <link rel="stylesheet" href="css/jquery.fancybox.min.css"> --}}
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('fonts/flaticon/font/flaticon.css') }}" rel="stylesheet" type="text/css" >


    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >

    <style>
        .site-blocks-cover h1 {
            font-weight: 400;
            color: #cacaca;
        }

        @font-face {
            font-family: Parastoo;
            src: url('fonts/Parastoo.eot');
            src: url('fonts/Parastoo.eot?#iefix') format('embedded-opentype'),
            url('fonts/Parastoo.woff2') format('woff2'),
            url('fonts/Parastoo.woff') format('woff'),
            url('fonts/Parastoo.ttf') format('truetype');
            font-weight: normal;
        }

        @font-face {
            font-family: Parastoo;
            src: url('/fonts/Parastoo-Bold.eot');
            src: url('/fonts/Parastoo-Bold.eot?#iefix') format('embedded-opentype'),
            url('/fonts/Parastoo-Bold.woff2') format('woff2'),
            url('/fonts/Parastoo-Bold.woff') format('woff'),
            url('/fonts/Parastoo-Bold.ttf') format('truetype');
            font-weight: bold;
        }

        body {
            direction: rtl !important;
            text-align: right !important;
            font-family: "Harmattan";
            background-color: #171717;
        }

        .nav-link {
            font-size: 20px !important;
        }

        .Nororeza {
            font-family: Amiri
        }

        .small {
            font-family: 'Reem Kufi';
            font-size: 25%;
        }

        .sticky-wrapper.is-sticky .site-navbar {
            background-color: #000000;
            -webkit-box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.6);
            box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.6);
        }

        .items {
            list-style: none;
            text-align: center;
            padding: 0;
        }

        .menus {
            /* height: 100%; */
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: center;
            width: 900px;
        }

        .post-entry h3 a, .project-entry h3 a {
            color: white;
        }

        .btn.btn-primary:hover, .btn.btn-primary:focus, .btn.btn-primary:active {
            color: #fff;
            background-color: transparent !important;
        }

        .btn-primary {
            color: #fff;
            background-color: #ff0000;
            border-color: #ff2d00;
            font-weight: bold;
        }

        .ul-check li:before {
            font-family: "icomoon";
            content: "\e5ca";
            position: absolute;
            right: 0;
            top: .6em;
            font-size: 20px;
            line-height: 0;
        }

        .ul-check li {
            position: relative;
            padding-right: 30px;
            margin-bottom: 10px;
        }

        .input-group > .custom-select:not(:last-child), .input-group > .form-control:not(:last-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;


            border-top-right-radius: 10px !important;
            border-bottom-right-radius: 10px !important;
        }

        .input-group > .input-group-append > .btn, .input-group > .input-group-append > .input-group-text, .input-group > .input-group-prepend:first-child > .btn:not(:first-child), .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child), .input-group > .input-group-prepend:not(:first-child) > .btn, .input-group > .input-group-prepend:not(:first-child) > .input-group-text {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;

            border-top-left-radius: 10px !important;
            border-bottom-left-radius: 10px !important;
        }

    </style>
    @yield('style')
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <!--                    &lt;!&ndash;             <div class="col-2">-->
                    <!--                                  <h1 class="my-0 site-logo"><a href="index.html">Archs</a></h1>-->
                    <!--                                </div> &ndash;&gt;-->
                    <div class="col-12">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                                        <span class="icon-menu h3"></span>
                                    </a>
                                </div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block text-center">
                                    <li>
                                        <a href="#next-session" class="nav-link">مراسم بعدی</a>
                                    </li>

                                    <li>
                                        <a href="#sessions" class="nav-link">آخرین مراسمات</a>
                                    </li>
                                    <li><a href="/jahadi" class="nav-link">گروه جهادی</a></li>
                                    <li><a href="#about" class="nav-link">درباره ما</a></li>
                                    <a href="/donate"
                                       style="line-height: 1 !important; font-size: 20px; border-width: 1px"
                                       class="btn btn-primary btn-sm">نذورات</a>


                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="site-footer border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-1 mb-lg-0">
                    <h3 class="footer-heading mb-4">موقعیت هیئت نورالرضا (ع)</h3>
                    <p>ازگل، خیابان گلستان شرقی، مسجد امام رضا(ع)</p>

                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                        <iframe
                            src="https://www.google.com/maps?q=35.79029318134162, 51.49946853438306&ll=35.79029318134162, 51.49946853438306&z=15&output=embed"
                            frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                    </div>


                </div>
                <div class="col-lg-4">


                    <div class="mb-1">
                        <h3 class="footer-heading mb-4">آخرین فعالیت های جهادی</h3>
                        <div class="block-25">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <figure class="image ml-4">
                                            <img src="images/img_1.jpg" alt="" sty height="100px" width="200px" >
                                        </figure>
                                        <div class="text">
                                            <span class="date">خرداد ۹۸</span>
                                            <h3 class="heading font-weight-light">ساخت دو باب خانه</h3>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <figure class="image ml-4">
                                            <img src="images/img_1.jpg" alt="" class="img-fluid">
                                        </figure>
                                        <div class="text">
                                            <span class="date">خرداد ۹۸</span>
                                            <h3 class="heading font-weight-light">پخش ارزاق حومه تهران</h3>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 mb-1 mb-lg-0">

                    <div class="mb-5">
                        <h3 class="footer-heading mb-2">ثبت نام در سامانه پیامکی</h3>
                        <p>شما میتوانید با وارد کردن شماره همراه خود اطلاعیه هر جلسه را دریافت کنید.</p>

                        <form action="#" method="post" class="form-subscribe">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-white text-white bg-transparent"
                                       placeholder="۰۹۱۲۱۲۳۴۵۶۷" aria-label="Enter Email"
                                       aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2">ارسال</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">در شبکه های اجتماعی</h3>

                            <div>
                                {{--                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>--}}
                                {{--                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>--}}
                                <a target="_blank" href="https://instagram.com/nororeza" class="pl-3 pr-3"><span
                                        class="icon-instagram"></span></a>
                                <a target="_blank" href="https://instagram.com/g_nororeza" class="pl-3 pr-3"><span
                                        class="icon-instagram"></span></a>
                                <a target="_blank" href="https://t.me/nororeza" class="pl-3 pr-3"><span
                                        class="icon-telegram"></span></a>
                                <a target="_blank" href="https://t.me/g_nororeza" class="pl-3 pr-3"><span
                                        class="icon-telegram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row pt-1 mt-1 text-center">
                <div class="col-md-12">
                    <img height="150px" src="/images/logo.png" alt="">
                    <p>
                        تمامی حقوق متعلق به گروه فرهنگی-جهادی نورالرضا (ع) میباشد.
                    </p>
                </div>

            </div>
        </div>
    </footer>


    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>


</body>



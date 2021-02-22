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
    @yield('content')

    {{-- <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script> --}}


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



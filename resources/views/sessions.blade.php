@extends('layouts.app')


{{--<div id="overlayer"></div>--}}
{{--<div class="loader">--}}
{{--    <div class="spinner-border text-primary" role="status">--}}
{{--        <span class="sr-only">لطفا منتظر بمانید</span>--}}
{{--    </div>--}}
{{--</div>--}}
@section('content')

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
        <!-- <div class="site-navbar-top"> -->
        <!-- <div class="container py-3"> -->
        <!-- <div class="row align-items-center"> -->
        <!-- <div class="col-6"> -->
        <!-- <a href="https://instagram.com/nororeza" class="p-2 pl-0"><span class="icon-instagram"></span></a> -->
        <!-- <a href="https://telegram.me/nororeza" class="p-2 pl-0"><span class="icon-telegram"></span></a> -->
        <!-- </div> -->
        <!-- <div class="col-6"> -->
        <!-- <div class="d-flex ml-auto"> -->
        <!--
                        <a href="#" class="d-flex align-items-center">
                          <span class="icon-phone mr-2"></span>
                          <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
                        </a> -->
        <!-- </div> -->
        <!-- </div> -->
        <!-- </div> -->
        <!-- </div> -->
        <!-- </div> -->

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <!--                    &lt;!&ndash;             <div class="col-2">-->
                    <!--                                  <h1 class="my-0 site-logo"><a href="index.html">Archs</a></h1>-->
                    <!--                                </div> &ndash;&gt;-->
                    <div class="col-12">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                              class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

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

    <div class="site-section" id="sessions">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center  d-flex align-items-center">
                    <h2 class="font-weight-bold text-white ml-auto">آرشیو جلسات</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($sessions as $session)
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                        <a href="#" class="d-block figure">
                            <img src="{{$session->cover}}" alt="Image" width="300px" height="300px">
                        </a>
                        <h3><a href="{{route('heyat.show', $session->id)}}">{{$session->title}}</a></h3>
                        <span class="text-muted d-block mb-1">{{$session->description}}</span>
                    </div>
                @endforeach
            </div>
        </div>

    </div>


</div>

<script src="js/jquery-3.3.1.min.js"></script>
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
<script src="js/main.js"></script>



@endsection


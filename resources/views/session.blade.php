@extends('layouts.app')

@section('style')

@endsection

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

    <div class="site-section" id="sessions">
        <div class="container pb-5" style="background-color: rgb(75, 75, 75); border-radius: 15px; min-height: 500px">
            <div class="row justify-content-center ">
                <div class="col-md-12 text-center d-flex align-items-center">
                    <h1 class="font-weight-bold text-white ml-auto m-3">{{$session->title}}</h1>
                </div>
                <div class="col-md-12 text-center mr-5 d-flex align-items-center">
                    <h5 class="font-weight-bold text-white ml-auto text-muted">{{$session->description}}</h5>
                </div>
            </div>
            {{-- <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide col-md-12" data-ride="carousel" dir="ltr">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  @for ($i=1; $i <= $session->photos->count(); $i++)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
                  @endfor
                </ol>
                <div class="carousel-inner justify-content-center">
                    <div class="carousel-item active">
                        <img width="1024px" height="768px" class="d-block w-100" src="{{ asset($session->cover) }}" alt="asdf">
                    </div>
                    @foreach ($session->photos as $photo)
                        <div class="carousel-item">
                            <img width="1024px" height="768px" class="d-block w-100" src="{{ asset($photo->path) }}" alt="asdf">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            </div> --}}
            @if($session->photos->count())
            <div id="carouselExampleIndicators" class="carousel slide m-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($session->photos as $key => $photo)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" @if($key == 0) class="active" @endif></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($session->photos as $key => $photo)
                        <div class="carousel-item justify-content-center @if($key == 0) active @endif">
                            <img height="768px" class="d-block w-100 rounded" src="/{{$photo->path}}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
              </div>

            @endif


            @if($session->sounds->count())
                <div class="row justify-content-center mt-4 rounded">
                    <div class="col-md-12 text-center  justify-content-center align-items-center">
                        <h2 class="font-weight-bold text-white ml-auto">صوت ها</h2>
                    </div>
                    @foreach ($session->sounds as $sound)
                        <div class="col-3 text-center align-items-center mt-4">
                            <h5 class="text-white">{{$sound->title}}</h5>
                            <p class="text-white text-muted">{{$sound->description}}</p>
                        </div>
                        <div class="col-9 text-center mt-4">
                            <audio class="col-8 float-right" controls src="/{{$sound->path}}">
                                Your browser does not support the
                            </audio>
                        </div>
                        <br style="color: aqua"><br>
                    @endforeach
                </div>
            @endif

            @if($session->videos->count())
                <div class="row mt-4">
                    <div class="col-md-12 text-center  justify-content-center align-items-center">
                        <h2 class="font-weight-bold text-white ml-auto">ویدئو ها</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($session->videos as $video)
                        <div class="col-4 mt-3 mb-3">
                            {!!$video->path!!}
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>



    <footer class="site-footer border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-1 mb-lg-0">
                    <h3 class="footer-heading mb-4">موقعیت حسینیه نورالرضا (ع)</h3>
                    <p>خیابان اندرزگو، چهار راه اسدی،خیابان واعظی</p>

                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                        <iframe
                            src="https://www.google.com/maps?q=35.799655,51.437582&ll=35.799655,51.437582&z=15&output=embed"
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
</div>


@endsection


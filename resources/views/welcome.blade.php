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

    <div class="site-blocks-cover overlay" data-aos="fade" id="home-section">

        <div style="
            min-height: 600px;
            height: calc(100vh);
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            background-attachment: fixed;
            background-image: url(images/jahadi.jpg);
            filter: brightness(0.3) blur(3px);
            z-index: 0;
            position: absolute;"></div>
        <div class="container">
            <div style="z-index: 2"
                 class="row align-items-center text-center justify-content-center">
                <div class="col-md-12" style="margin-top: 8em!important;">
                    <a data-fancybox data-ratio="2" href="images/jahadi.MP4" class="play-button d-block">
                        <span class="icon-play"></span>
                    </a>
                    <h1 class="text-uppercase Nororeza">گروه فرهنگی نورالرضا<small class="small">(علیه السلام)</small>
                    </h1>
                    <span class="sub-text mb-3 d-block"><em>پایگاه اطلاع رسانی، حفظ و نشر آثار گروه فرهنگی-جهادی نورالرضا (ع)</em></span>

                </div>


            </div>

        </div>

    </div>


    <div class="site-section" id="pricing-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-bold text-white">مراسم بعدی</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-lg-4 col-md-4 mb-4 mb-lg-0 pricing">
                    <div class="border p-5 text-center rounded">
                        <h3 class="text-white">جشن نیمه شعبان</h3>
                        <p class="text-muted mb-4">حاج امیر عباسی - استاد میرهاشم حسینی</p>
                        <ul class="list-unstyled ul-check text-right success mb-5">
                            <li>پارکینگ</li>
                            <li>سفره احسان</li>

                        </ul>
                        <p><a href="#" class="btn btn-lg btn-primary rounded-0 btn-block">اطلاعیه</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section" id="sessions">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center  d-flex align-items-center">
                    <h2 class="font-weight-bold text-white ml-auto">آخرین جلسات</h2>

                    <a class="btn btn-primary btn-sm" href="/sessions/?type=1">آرشیو همه جلسات</a>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                    <a href="#" class="d-block figure">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <span class="text-muted d-block mb-1">حاج امیر عباسی - استاد میرهاشم حسینی</span>
                    <h3><a href="#">شب شهادت حضرت رقیه‌(ع)</a></h3>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                    <a href="#" class="d-block figure">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <span class="text-muted d-block mb-1">حاج امیر عباسی - استاد میرهاشم حسینی</span>
                    <h3><a href="#">شب شهادت حضرت رقیه‌(ع)</a></h3>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                    <a href="#" class="d-block figure">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <span class="text-muted d-block mb-1">حاج امیر عباسی - استاد میرهاشم حسینی</span>
                    <h3><a href="#">شب شهادت حضرت رقیه‌(ع)</a></h3>
                </div>

            </div>
        </div>
    </div>


    <div class="site-section about-section" id="about">
        <div class="container">
            <div class="row align-items-center mb-5 pb-5">
                <div class="col-lg-6 img-years mb-5 mb-lg-0">
                    <img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-6 ml-auto">
                    <h3 class="mb-4 text-white">تا آخر ایستاده ایم</h3>
                    <p class="mb-4 text-white" style="font-size: 20px">گروه فرهنگی جهادی نورالرضا از سال ۱۳۹۱ با برگزاری
                        اردو های جهادی در مناطق محروم جنوب
                        کرمان و هیئات مذهبی فعالیت خود را آغاز کرد. این گروه از بیش از ۷۰ نیروی جوان و نوجوان از اقشار
                        مختلف دانشجو ، طلبه و دانش آموز تشکیل شده است.
                        اکثریت اعضا سنینی بین ۱۴ تا ۲۵ سال دارند که در کنار این جوانان و نوجوانان پیشکسوتان عرصه اقدامات
                        فرهنگی نیز حضور دارند و به اداره مجموعه کمک می کنند و راهنمایی های لازم را به عمل می آورند.
                        فعالیت های گروه فرهنگی جهادی نورالرضا بر اساس اهداف انقلاب اسلامی و بر مبنای منویات مقام معظم
                        رهبری شکل گرفته است و هدف اصلی این فعالیت ها تربیت جوان مومن انقلابی در خدمت نظام مقدس اسلامی و
                        تحقق فرمایشات ولایت می باشد.

                    <p><a href="#" class="btn btn-primary btn-lg rounded-0">درباره ما بیشتر بدانید</a></p>
                </div>
            </div>


        </div>
    </div>


    {{--    <div class="site-section" id="news-section">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12 text-center">--}}
    {{--                    <span class="sub-title">News &amp; Update</span>--}}
    {{--                    <h2 class="font-weight-bold text-black mb-5">Our Blog Posts</h2>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row mb-5">--}}
    {{--                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">--}}
    {{--                    <a href="#" class="d-block figure">--}}
    {{--                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">--}}
    {{--                    </a>--}}
    {{--                    <span class="text-muted d-block mb-1">29, January 2019</span>--}}
    {{--                    <h3><a href="#">Architectural Art Modern</a></h3>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">--}}
    {{--                    <a href="#" class="d-block figure">--}}
    {{--                        <img src="images/img_2.jpg" alt="Image" class="img-fluid">--}}
    {{--                    </a>--}}
    {{--                    <span class="text-muted d-block mb-1">29, January 2019</span>--}}
    {{--                    <h3><a href="#">Architectural Art Modern</a></h3>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">--}}
    {{--                    <a href="#" class="d-block figure">--}}
    {{--                        <img src="images/img_3.jpg" alt="Image" class="img-fluid">--}}
    {{--                    </a>--}}
    {{--                    <span class="text-muted d-block mb-1">29, January 2019</span>--}}
    {{--                    <h3><a href="#">Architectural Art Modern</a></h3>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--            <div class="row mt-5 text-center">--}}
    {{--                <div class="col-12">--}}
    {{--                    <p><a href="#" class="btn btn-primary btn-lg rounded-0">View All Posts</a></p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="site-section" id="services-section">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-md-7 text-center">--}}
    {{--                    <span class="sub-title">Services</span>--}}
    {{--                    <h2 class="font-weight-bold text-black">Our Services</h2>--}}
    {{--                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, explicabo,--}}
    {{--                        quasi. Magni deserunt sunt labore.</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="row">--}}

    {{--                <div class="col-lg-4 col-md-6 mb-5">--}}
    {{--                    <div class="media custom-media">--}}
    {{--                        <div class="mr-3 icon"><span class="flaticon-interior-design display-4"></span></div>--}}
    {{--                        <div class="media-body">--}}
    {{--                            <h5 class="mt-0">Innovative Structure</h5>--}}
    {{--                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}


    {{--                <div class="col-lg-4 col-md-6 mb-5">--}}
    {{--                    <div class="media custom-media">--}}
    {{--                        <div class="mr-3 icon"><span class="flaticon-step-ladder display-4"></span></div>--}}
    {{--                        <div class="media-body">--}}
    {{--                            <h5 class="mt-0">Arcitectural Design</h5>--}}
    {{--                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-4 col-md-6 mb-5">--}}
    {{--                    <div class="media custom-media">--}}
    {{--                        <div class="mr-3 icon"><span class="flaticon-turned-off display-4"></span></div>--}}
    {{--                        <div class="media-body">--}}
    {{--                            <h5 class="mt-0">Interior Design</h5>--}}
    {{--                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-4 col-md-6 mb-5">--}}
    {{--                    <div class="media custom-media">--}}
    {{--                        <div class="mr-3 icon"><span class="flaticon-window display-4"></span></div>--}}
    {{--                        <div class="media-body">--}}
    {{--                            <h5 class="mt-0">Modern Window Design</h5>--}}
    {{--                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}


    {{--                <div class="col-lg-4 col-md-6 mb-5">--}}
    {{--                    <div class="media custom-media">--}}
    {{--                        <div class="mr-3 icon"><span class="flaticon-measuring display-4"></span></div>--}}
    {{--                        <div class="media-body">--}}
    {{--                            <h5 class="mt-0">Experts Architect</h5>--}}
    {{--                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-4 col-md-6 mb-5">--}}
    {{--                    <div class="media custom-media">--}}
    {{--                        <div class="mr-3 icon"><span class="flaticon-sit-down display-4"></span></div>--}}
    {{--                        <div class="media-body">--}}
    {{--                            <h5 class="mt-0">Sofa Design</h5>--}}
    {{--                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="site-section bg-light" id="contact-section">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-md-7 text-center">--}}
    {{--                    <span class="sub-title">Get In Touch</span>--}}
    {{--                    <h2 class="font-weight-bold text-black">Contact Us</h2>--}}
    {{--                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, explicabo,--}}
    {{--                        quasi. Magni deserunt sunt labore.</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}

    {{--                <div class="col-md-12 col-lg-12">--}}

    {{--                    <form action="#" class="p-5 bg-white">--}}

    {{--                        <div class="row form-group">--}}
    {{--                            <div class="col-md-12 mb-3 mb-md-0">--}}
    {{--                                <label class="font-weight-bold" for="fullname">Full Name</label>--}}
    {{--                                <input type="text" id="fullname" class="form-control" placeholder="Full Name">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row form-group">--}}
    {{--                            <div class="col-md-12">--}}
    {{--                                <label class="font-weight-bold" for="email">Email</label>--}}
    {{--                                <input type="email" id="email" class="form-control" placeholder="Email Address">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}


    {{--                        <div class="row form-group">--}}
    {{--                            <div class="col-md-12">--}}
    {{--                                <label class="font-weight-bold" for="message">Message</label>--}}
    {{--                                <textarea name="message" id="message" cols="30" rows="5" class="form-control"--}}
    {{--                                          placeholder="Say hello to us"></textarea>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row form-group">--}}
    {{--                            <div class="col-md-12">--}}
    {{--                                <input type="submit" value="Send Message" class="btn btn-primary rounded-0 btn-lg">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}


    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

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
                                            <img src="images/img_1.jpg" alt="" class="img-fluid">
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




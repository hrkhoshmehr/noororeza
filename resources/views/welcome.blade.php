@extends('layouts.app')


{{--<div id="overlayer"></div>--}}
{{--<div class="loader">--}}
{{--    <div class="spinner-border text-primary" role="status">--}}
{{--        <span class="sr-only">لطفا منتظر بمانید</span>--}}
{{--    </div>--}}
{{--</div>--}}

@section('style')
<style>

    #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      height: 80%;
      max-width: 700px;
    }

    /* Caption of Modal Image */


    /* Add Animation */
    .modal-content, #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
      from {-webkit-transform:scale(0)}
      to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
      from {transform:scale(0)}
      to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
      margin-top: -35px;
      position: absolute;
      right: 350px;
      color: #f1f1f1;
      font-size: 100px;
      font-weight: bold;
      transition: 0.3s;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
      .modal-content {
        width: 100%;
      }
    }
    </style>
@endsection

@section('content')

<div class="site-wrap">



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

    @if($nextSession != null)
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
                            <h3 class="text-white">{{$nextSession->title}}</h3>
                            <p class="text-muted mb-4">{!! nl2br(e($nextSession->description)) !!}</p>
                            <ul class="list-unstyled ul-check text-right success mb-5">
                                <li>پارکینگ</li>
                                <li>سفره احسان</li>

                            </ul>

                            <img id="myImg" src="{{$nextSession->notification}}" alt="Snow" style="width:50%;max-width:200px">

                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($lastSessions->count() > 0)

        <div class="site-section" id="sessions">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center  d-flex align-items-center">
                        <h2 class="font-weight-bold text-white ml-auto">آخرین جلسات</h2>

                        <a class="btn btn-primary btn-sm" href="/heyat">آرشیو همه جلسات</a>

                    </div>
                </div>
                <div class="row">
                    @foreach ($lastSessions as $lastSession)
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                            <a href="{{$lastSession->getType().'/'.$lastSession->slug}}" class="d-block figure">
                                <img src="{{$lastSession->cover ? $lastSession->cover : 'images/img_1.jpg'}}" alt="Image" width="300px" height="300px" class="rounded">
                            </a>
                            <h3><a href="{{$lastSession->getType().'/'.$lastSession->slug}}">{{$lastSession->title}}</a></h3>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    @endif


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


</div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
</script>

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.js" integrity="sha256-hGEny5XAEHORWP1iW6kubPYV+TdjJ1x8OSC9hRvpwWg=" crossorigin="anonymous"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/main.js"></script>



@endsection




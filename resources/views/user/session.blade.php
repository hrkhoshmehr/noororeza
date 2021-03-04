@extends('layouts.app')

@section('style')
<style>
    .h_iframe-aparat_embed_frame{
        position:relative;
    }
    .h_iframe-aparat_embed_frame .ratio{
        display:block;
        width:100%;
        height:auto;
    }
    .h_iframe-aparat_embed_frame iframe{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        border-radius: 5px;
    }
</style>
@endsection

@section('content')

<div class="site-wrap">



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
                    <div class="col-md-4">
                        <div class="h_iframe-aparat_embed_frame mt-2">
                            <span style="display: block;padding-top: 57%"></span>
                            <iframe
                                src="https://www.aparat.com/video/video/embed/videohash/{{$video->uid}}/vt/frame"
                                allowFullScreen="true"
                                webkitallowfullscreen="true"
                                mozallowfullscreen="true">
                            </iframe>
                        </div>
                        <h5 class="font-weight-bold text-white ml-auto text-muted text-center">{{$video->description}}</h5>
                    </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>




</div>


@endsection


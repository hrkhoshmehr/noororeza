<!doctype html>
<html lang="en" dir="rtl">
    <head>
  	    <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

		<link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    </head>
    <body style="direction: rtl !important; text-align: right !important;">

        <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	                <ul class="list-unstyled components mb-5">
	                    <li>
                            <a href="{{route('admin.event.index')}}">مناسبات</a>
                        </li>
	                    <li>
                            <a href="{{route('admin.session.index')}}">مراسمات</a>
                        </li>
                        <li>
                            <a href="{{route('admin.video.index')}}">ویدیو ها</a>
                        </li>
                        <li>
                            <a href="{{route('admin.sound.index')}}">صوت ها</a>
                        </li>
                        <li>
                            <a href="{{route('admin.photo.index')}}">تصاویر</a>
                        </li>
	                </ul>



	            </div>
    	    </nav>

            <div id="content" class="p-4 p-md-5 float-right">

                @yield('content')
            </div>
        </div>

        <script src="{{asset('js/admin/jquery.min.js')}}"></script>

        <script src="{{asset('js/admin/popper.js')}}"></script>
        <script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/admin/main.js')}}"></script>
    </body>
</html>

@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="/css/persian-datepicker.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="/js/admin/persian-date.js"></script>
    <script src="/js/admin/persian-datepicker.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="card m-5" style="width: 50rem;">
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach

        <div class="card-body">
            <h2>
                ساخت مراسم جدید
            </h2>
            <hr>
            <form enctype="multipart/form-data" action="{{route('admin.session.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>عنوان</label>
                    <input style="font-family: arial" type="text" name="title" class="form-control" placeholder="عنوان">
                </div>
                <div class="form-group">
                    <label>توضیحات</label>
                    <textarea type="text" name="description" class="form-control" placeholder="توضیحات"></textarea>
                </div>
                <div class="form-group">
                    <label>تاریخ</label>
                    <script>
                        $(document).ready(function() {
                            $(".example1").pDatepicker({
                                format: 'X'

                            });
                        });
                        </script>
                    <input class="example1 form-control"   name="date">
                </div>
                <div class="form-group">
                    <label for="type">نوع</label>
                    <select class="form-control" id="type" name="type">
                            <option class="dropdown-item" value="1">هیئت</option>
                            <option class="dropdown-item" value="2">جهادی</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">مناسبت</label>
                    <select class="form-control" id="type" name="event_id">
                        <option class="dropdown-item" value="">متفرقه</option>
                        @foreach ($events as $event)
                            <option class="dropdown-item" value="{{$event->id}}">{{$event->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="cover">کاور</label>
                    <input type="file" name="cover" class="form-control-file" id="cover">
                </div>
                <div class="form-group">
                    <label for="notification">اطلاعیه</label>
                    <input  type="file" name="notification" class="form-control-file" id="notification">
                </div>

                <button class="btn btn-primary" type="submit">بساز</button>
            </form>
    </div>
</div>

@section('js')
<script src="/js/app.js"></script>

@endsection
@endsection

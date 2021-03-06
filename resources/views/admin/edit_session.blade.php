@extends('layouts.admin')

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
                ویرایش مراسم 
            </h2>
            <hr>
            <form enctype="multipart/form-data" action="{{route('admin.session.update', $session->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>عنوان</label>
                    <input value="{{$session->title}}" type="text" name="title" class="form-control" placeholder="عنوان">
                </div>
                <div class="form-group">
                    <label>توضیحات</label>
                    <textarea type="text" name="description" class="form-control" placeholder="توضیحات">{{$session->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>تاریخ</label>
                    <input value="{{$session->date}}" type="date" name="date" class="form-control" placeholder="تاریخ">
                </div>
                <div class="form-group">
                    <label for="type">نوع</label>
                    <select class="form-control" id="type" name="type">
                            <option @if($session->type == 1) selected @endif class="dropdown-item" value="1">هیئت</option>
                            <option @if($session->type == 2) selected @endif class="dropdown-item" value="2">جهادی</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">مناسبت</label>
                    <select class="form-control" id="type" name="event_id">
                        <option class="dropdown-item" value="">متفرقه</option>
                        @foreach ($events as $event)
                            <option @if($session->event_id == $event->id) selected @endif class="dropdown-item" value="{{$event->id}}">{{$event->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="cover">کاور</label>
                    <input type="file" name="cover" class="form-control-file" id="cover">
                </div>
                <div class="form-group">
                    <label for="notification">اطلاعیه</label>
                    <input type="file" name="notification" class="form-control-file" id="notification">
                </div>

                <button class="btn btn-primary" type="submit">بساز</button>
            </form>
    </div>
</div>
@endsection

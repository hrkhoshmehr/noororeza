@extends('layouts.app')

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
                کلیپ جدید
            </h2>
            <hr>
            <form action="{{route('video.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>عنوان</label>
                    <input type="text" name="title" class="form-control" placeholder="عنوان">
                </div>
                <div class="form-group">
                    <label>توضیحات</label>
                    <textarea type="text" name="description" class="form-control" placeholder="توضیحات"></textarea>
                </div>

                <div class="form-group">
                    <label>شناسه</label>
                    <input type="text" name="video_id" class="form-control" placeholder="شناسه">
                </div>
                <div class="form-group">
                    <label>لینک</label>
                    <input type="text" name="path" class="form-control" placeholder="لینک آپارات">
                </div>
                <div class="form-group">
                    <label for="type">مراسم</label>
                    <select class="form-control" id="type" name="session_id">
                        <option class="dropdown-item" value="">متفرقه</option>
                        @foreach ($sessions as $session)
                            <option class="dropdown-item" value="{{$session->id}}">{{$session->title}}</option>
                        @endforeach
                    </select>
                </div>


                <button class="btn btn-primary" type="submit">بساز</button>
            </form>
    </div>
</div>
@endsection

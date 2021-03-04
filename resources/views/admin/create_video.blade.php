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
                کلیپ جدید
            </h2>
            <hr>
            <form action="{{route('admin.video.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>توضیحات</label>
                    <textarea type="text" name="description" class="form-control" placeholder="توضیحات"></textarea>
                </div>

                <div class="form-group">
                    <label>آیدی آپارات</label>
                    <input type="text" name="uid" class="form-control" placeholder="uid">
                </div>
                <div class="form-group">
                    <label for="type">مراسم</label>
                    <select class="form-control" id="type" name="session_id">
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

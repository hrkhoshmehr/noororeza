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
                عکس جدید
            </h2>
            <hr>
            <form enctype="multipart/form-data" action="{{route('admin.photo.update', $photo->id)}}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="type">مراسم</label>
                    <select class="form-control" id="type" name="session_id">
                        @foreach ($sessions as $session)
                            <option @if($photo->session->id == $session->id) selected @endif class="dropdown-item" value="{{$session->id}}">{{$session->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="images">آپلود عکس</label>
                    <input type="file" name="images[]" class="form-control-file" id="images" multiple>
                </div>

                <button class="btn btn-warning" type="submit">ویرایش</button>
            </form>
    </div>
</div>
@endsection

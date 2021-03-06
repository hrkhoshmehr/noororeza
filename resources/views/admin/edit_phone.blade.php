@extends('layouts.admin')

@section('title', 'ویرایش شماره تلفن')

@section('content')
<div class="container">
    <h1>ویرایش شماره تلفن</h1>
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
            <form enctype="multipart/form-data" action="{{route('admin.phone.update', $phone->id)}}" method="POST">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label>شماره</label>
                    <input value="{{$phone->phone}}" type="text" name="phone" class="form-control" placeholder="09121234567">
                </div>

                <button class="btn btn-warning" type="submit">ویرایش</button>
            </form>
    </div>
</div>
@endsection

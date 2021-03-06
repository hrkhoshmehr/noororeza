@extends('layouts.admin')
@section('title', 'ویدیو ها')
    @section('content')

    <div class="container">
        <h1>ویدیو ها</h1>
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
        <a class="btn btn-success float-left" href="{{route('admin.video.create')}}"> جدید</a>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">شناسه</th>
                <th scope="col">توضیحات</th>
                <th scope="col">مراسم</th>
                <th scope="col">لینک</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($videos as $video)
            <tr>
                <td >{{$video->id}}</td>
                <td>{{$video->description}}</td>
                <td><a href="{{$video->session->getType().$video->session->id}}">{{optional($video->session)->title}}</a></td>
                <td><a href="{{'https://www.aparat.com/v/'.$video->uid}}">{{'aparat.com/v/'.$video->uid}}</a></td>
                <td>
                    <form method="POST" action="{{route('admin.video.destroy', $video->id)}}">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <a class="btn btn-warning" href="{{route('admin.video.edit', $video->id)}}">ویرایش</a>
                            <input type="submit" class="btn btn-danger" value="حذف">
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    @endsection

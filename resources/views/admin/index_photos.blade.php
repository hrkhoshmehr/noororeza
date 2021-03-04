@extends('layouts.admin')
    @section('title', 'تصاویر')

    @section('content')

    <div class="container">
        <h1>تصاویر</h1>
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
        <a class="btn btn-success float-left" href="{{route('admin.photo.create')}}">جدید</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">شناسه</th>
                    <th scope="col">مراسم</th>
                    <th scope="col">عکس</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td><a href="{{'/session/'.optional($photo->session)->id}}">{{optional($photo->session)->title}}</a></td>
                    <td><img src="{{asset($photo->path)}}" width="100px" height="100px"></td>
                    <td>
                        <form method="POST" action="{{route('admin.photo.destroy', $photo->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <a class="btn btn-info" href="{{route('admin.photo.show', $photo->id)}}">جزئیات</a>
                                <a class="btn btn-warning" href="{{route('admin.photo.edit', $photo->id)}}">ویرایش</a>
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

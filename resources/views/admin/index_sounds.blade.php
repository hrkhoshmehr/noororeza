@extends('layouts.admin')
@section('title', 'صوت ها')
    @section('content')

    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
        <h1>صوت ها</h1>
        <a class="btn btn-success float-left" href="{{route('admin.sound.create')}}"> جدید</a>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">شناسه</th>
                <th scope="col">عنوان</th>
                <th scope="col">مراسم</th>
                <th scope="col">صوت</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($sounds as $sound)
            <tr>
                <td >{{$sound->id}}</td>
                <td>{{$sound->title}}</td>
                <td>{{$sound->session->getType().$sound->session->id}}</td>
                <td><audio src="{{asset($sound->url)}}"></audio></td>
                <td>
                    <form method="POST" action="{{route('admin.sound.destroy', $sound->id)}}">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <a class="btn btn-warning" href="{{route('admin.sound.edit', $sound->id)}}">ویرایش</a>
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

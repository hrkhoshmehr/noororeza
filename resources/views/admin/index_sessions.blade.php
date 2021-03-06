@extends('layouts.admin')
@section('title', 'مراسمات')
    @section('content')

    <div class="container">
        <h1>مراسمات</h1>
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
        <a class="btn btn-success float-left" href="{{route('admin.session.create')}}"> جدید</a>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">شناسه</th>
                <th scope="col">عنوان</th>
                <th scope="col">نوع</th>
                <th scope="col">مناسبت</th>
                <th scope="col">نام مستعار</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($sessions as $session)
            <tr>
                <td>{{$session->id}}</td>
                <td>{{$session->title}}</td>
                <td>{{$session->getType()}}</td>
                <td>{{$session->event ? $session->event->title : 'متفرقه'}}</td>
                <td>{{$session->slug}}</td>
                <td>
                    <form method="POST" action="{{route('admin.session.destroy', $session->id)}}">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <a class="btn btn-info" href="/{{$session->getType().'/'.$session->id}}">جزئیات</a>
                            <a class="btn btn-warning" href="{{route('admin.session.edit', $session->id)}}">ویرایش</a>
                            <input type="submit" class="btn btn-danger" value="حذف">
                            @if($session->published == 1)
                                <a class="btn btn-outline-success" href="{{'/admin/session/unpublish/'.$session->id}}">عدم انتشار</a>
                            @else
                                <a class="btn btn-success" href="{{'/admin/session/publish/'.$session->id}}">انتشار</a>
                            @endif
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    @endsection

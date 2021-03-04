@extends('layouts.admin')
@section('title', 'مناسبات')
    @section('content')

    <div class="container">
        <h1>مناسبات</h1>
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
        <a class="btn btn-success float-left" href="{{route('admin.event.create')}}"> جدید</a>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">شناسه</th>
                <th scope="col">عنوان</th>
                <th scope="col">نوع</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->title}}</td>
                <td>{{$event->getType()}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('admin.event.show', $event->id)}}">جزئیات</a>
                    <a class="btn btn-warning" href="{{route('admin.event.edit', $event->id)}}">ویرایش</a>
                    <a class="btn btn-danger" href="{{route('admin.event.destroy', $event->id)}}">حذف</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    @endsection

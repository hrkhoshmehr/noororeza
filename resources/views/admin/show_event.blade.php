@extends('layouts.admin')
@section('title', $event->title)
    @section('content')

    <div class="container">
        <h1 class="text-white">مناسبات</h1>
        <a class="btn btn-primary float-right" href="{{route('admin.event.create')}}"> جدید</a>
        <table class="table">
        <thead>
            <tr>
                <th class="text-white" scope="col">مناسبت</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>
                <td class="text-white">{{$event->title}}</td>
                <td>
                    <button class="btn btn-secondary" href="{{route('admin.event.show', $event->id)}}">جزئیات</button>
                    <button class="btn btn-secondary" href="{{route('admin.event.edit', $event->id)}}">ویرایش</button>
                    <button class="btn btn-secondary" href="{{route('admin.event.destroy', $event->id)}}">حذف</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    @endsection

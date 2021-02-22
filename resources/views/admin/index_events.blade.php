@extends('layouts.app')

    @section('content')

    <div class="container">
        <h1 class="text-white">مناسبات</h1>
        <a class="btn btn-primary float-right" href="{{route('event.create')}}"> جدید</a>
        <table class="table">
        <thead>
            <tr>
                <th class="text-white" scope="col">شناسه</th>
                <th class="text-white" scope="col">عنوان</th>
                <th class="text-white" scope="col">نوع</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>
                <td class="text-white">{{$event->id}}</td>
                <td class="text-white">{{$event->title}}</td>
                <td class="text-white">{{$event->type}}</td>
                <td>
                    <button class="btn btn-secondary" href="{{route('event.show', $event->id)}}">جزئیات</button>
                    <button class="btn btn-secondary" href="{{route('event.edit', $event->id)}}">ویرایش</button>
                    <button class="btn btn-secondary" href="{{route('event.destroy', $event->id)}}">حذف</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    @endsection

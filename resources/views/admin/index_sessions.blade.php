@extends('layouts.app')

    @section('content')

    <div class="container">
        <h1 class="text-white">مراسمات</h1>
        <a class="btn btn-primary float-right" href="{{route('session.create')}}"> جدید</a>
        <table class="table">
        <thead>
            <tr>
                <th class="text-white" scope="col">شناسه</th>
                <th class="text-white" scope="col">عنوان</th>
                <th class="text-white" scope="col">مناسبت</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($sessions as $session)
            <tr>
                <td class="text-white">{{$session->id}}</td>
                <td class="text-white">{{$session->title}}</td>
                <td class="text-white">{{optional($session->event)->title}}</td>
                <td>
                    <form method="POST" action="{{route('session.destroy', $session->id)}}">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <a class="btn btn-success" href="{{route('session.show', $session->id)}}">جزئیات</a>
                            <a class="btn btn-warning" href="{{route('session.edit', $session->id)}}">ویرایش</a>
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

@extends('layouts.admin')
    @section('title', 'شماره تلفن ها')

    @section('content')

    <div class="container">
        <h1>شماره تلفن ها</h1>
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">شناسه</th>
                    <th scope="col">شماره</th>
                    <th scope="col">وضعیت</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($phones as $phone)
                <tr>
                    <td>{{$phone->id}}</td>
                    <td>{{$phone->phone}}</td>
                    <td><a href="{{route('admin.phone.active', $phone->id)}}">{{$phone->getStatus()}}</a></td>
                    <td>
                        <form method="POST" action="{{route('admin.phone.destroy', $phone->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <a class="btn btn-warning" href="{{route('admin.phone.edit', $phone->id)}}">ویرایش</a>
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

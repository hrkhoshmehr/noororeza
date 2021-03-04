@extends('layouts.admin')

@section('content')
<div class="container">
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
                ویرایش مناسبت
            </h2>
            <hr>
            <form action="{{route('admin.event.update', $event->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>عنوان</label>
                    <input type="text" value="{{$event->title}}" name="title" class="form-control" placeholder="عنوان">
                </div>
                <div class="form-group">
                    <label for="type">نوع</label>
                    <select class="form-control" id="type" name="type">
                            <option @if($event->type == 1) selected @endif class="dropdown-item" value="1">محرم</option>
                            <option @if($event->type == 2) selected @endif class="dropdown-item" value="2">جهادی</option>
                            <option @if($event->type == 3) selected @endif class="dropdown-item" value="3">فاطمیه</option>
                    </select>
                </div>

                <button class="btn btn-warning" type="submit">ویرایش</button>
            </form>
    </div>
</div>
@endsection

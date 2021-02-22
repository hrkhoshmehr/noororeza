@extends('layouts.app')

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
                ساخت مناسبت جدید
            </h2>
            <hr>
            <form action="{{route('event.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>عنوان</label>
                    <input type="text" name="title" class="form-control" placeholder="عنوان">
                </div>
                <div class="form-group">
                    <label for="type">نوع</label>
                    <select class="form-control" id="type" name="type">
                            <option class="dropdown-item" value="1">محرم</option>
                            <option class="dropdown-item" value="2">جهادی</option>
                            <option class="dropdown-item" value="3">فاطمیه</option>
                    </select>
                </div>

                <button class="btn btn-primary" type="submit">بساز</button>
            </form>
    </div>
</div>
@endsection

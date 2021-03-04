@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true"
                            data-slide-speed="200">
                            <li class="sidebar-toggler-wrapper">
                                <div class="sidebar-toggler">
                                </div>
                            </li>
                            <br>

                            @if( $permissionsAvailableForMenu->contains('dashboard') )
                                <li class="javascript:;" data-routename="dashboard">
                                    <a href="{{url('panel/admin/dashboard')}}">
                                        <i class="icon-home"></i>
                                        <span class="title">داشبورد</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

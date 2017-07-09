@extends('users.layouts.default')
@section('title')
    News Feed | Bitmanity
@endsection('title')

@section('navbar')
    <div id="abus" class="navbar navbar-static-top " style="min-height: 20px;background: #ffffff">
        <div class="text-center">
            <button type="button" class="btn btn-link nav-active m-r-md"><i class="icon icon-home" style="font-size: 20px"></i></button>
            <button type="button" class="btn btn-link m-l-md m-r-md"><i class="icon icon-fire" style="font-size: 20px"></i></button>
            <button type="button" class="btn btn-link m-r-md m-l-md"><i class="icon icon-user-following" style="font-size: 20px"></i></button>
            <button type="button" class="btn btn-link m-r-md m-l-md"><i class="icon icon-folder" style="font-size: 20px"></i></button>
        </div>

    </div>
@endsection('navbar')

@section('content')
        @include('users.includes.other.bpanel')
        @include('users.includes.other.vpanel')
@endsection('content')


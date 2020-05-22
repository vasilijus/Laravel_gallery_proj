@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="/images/temp.png" class="rounded-circle" style="" />
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="p-5"><b>100</b> posts</div>
                <div class="p-5"><b>100</b> followers</div>
                <div class="p-5"><b>100</b> following</div>
            </div>

            <div class=""><b>instalar.com</b></div>
            <div class="">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </div>
            <div class="">
                <a href="#"><b>instalar.com</b></a>
            </div>

        </div>
    </div>

    <div class="row">
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/images/temp.png" class="rounded-circle" style="" />
        </div>
        <div class="col-4">
            <img src="/images/temp.png" class="rounded-circle" style="" />
        </div>
        <div class="col-4">
            <img src="/images/temp.png" class="rounded-circle" style="" />
        </div>
    </div>
</div>

@endsection

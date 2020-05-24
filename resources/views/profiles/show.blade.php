@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage()  }}" class="rounded-circle w-100" style="" />
        </div>
        
        <div class="col-9 pt-5">
            <div class="d-flex  justify-content-between align-item-baseline">

                <div class="d-flex align-items-center">
                    <h2>{{ $user->username }}</h1>
                    
                    <follow-button user-id="{{ $user->id }}"></follow-button>

                </div>
                @can('update', $user->profile)
                    <a href="/p/create" > Add Post</a>
                @endcan
                
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" > Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><b>{{ $user->posts->count() }}</b> posts</div>
                <div class="pr-5"><b>100</b> followers</div>
                <div class="pr-5"><b>100</b> following</div>
            </div>

            <div class=""><b>{{ $user->profile->title }}</b></div>
            <div class="">{{ $user->profile->description }} </div>
            <div class="">
                <a href="#"><b>{{ $user->profile->url }}</b></a>
            </div>

        </div>
    </div>

  
</div>

<div class="row">
</div>

<div class="row pt-5">

    @foreach( $user->posts as $post )
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100" style="" />
            </a>
        </div>
    @endforeach
    
</div>


@endsection

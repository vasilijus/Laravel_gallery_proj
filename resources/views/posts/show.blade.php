@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row">

            

        <div class="row">
            <h1>Post</h1>
        </div>

        <div class="row">
        
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="{{ $post->caption }}" class="w-100" />
            </div>

            <div class="col-4">

                <div>

                    <div class="d-flex align-items-center">

                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-100 rounded-circle" style="max-width:45px;" />
                        </div>

                        <div class="">
                            <div class="font-weight-bold">

                                    <a href="/profile/{{ $post->user->id }}">
                                        <span class="text-dark">{{ $post->user->username }}</span>
                                    </a>

                                    <a href="#" class="pl-3">Follow </a>

                            </div>
                        </div>
                        
                    </div>

                    <hr />

                    <span class="d-flex pt-5">

                        <p>
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark font-weight-bold">{{ $post->user->username }}</span>
                            </a>
                        </p>

                        <p>{{ $post->caption }}</p>       

                        <p>{{ $post->created_at }}</p>

                    </span>

                </div>

            </div>

        </div>

    </div>
</div>


@endsection
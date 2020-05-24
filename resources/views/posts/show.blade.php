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
                <label for="caption">{{ $post->caption }}</label>       

                <div class="">
                    <p>{{ $post->user_id }}</p>
                    <p>{{ $post->created_at }}</p>

                </div>
            </div>

        </div>

    </div>
</div>


@endsection
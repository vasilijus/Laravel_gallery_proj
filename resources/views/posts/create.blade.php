@extends('layouts.app')

@section('content')


<div class="container">

    <form method="POST" enctype="multipart/form-data" action="/p/store" >
    
    @csrf

        <div class="row">

            <div class="col-8 offset-2">
                

                <div class="form-group row">
                    <h1>Add Post</h1>
                </div>

                <div class="form-group row">
                
                    <label for="caption">Post Caption</label>

                    <input type="text" name="caption" class="form-control" 
                        autocomplete autofocus
                        value="{{ old('caption') }}" />

                        <!-- $errors->has('caption')  -->
                    @if ( $errors->has('caption') )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group row">
                
                    <label for="image">Post image</label>

                    <input type="file" class="form-control-file " 
                        id="image" name="image" autocomplete/>


                    @if ( $errors->has('image') )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group row">
                
                    <button class="btn btn-primary" type="submit">Submit</button>

                </div>


            </div>

        </div>

    </form>
    
</div>


@endsection
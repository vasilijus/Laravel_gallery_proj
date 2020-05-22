@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">

        <div class="col-8 offset-2">
            

            <div class="form-group row">
                <h1>Add Post</h1>
            </div>
            
            <div class="form-group row">
            
                <label for="caption">Post Caption</label>

                <input type="text" class="form-control }}" 
                    caption="caption" autocomplete/>
                    <!-- $errors->has('caption')  -->
                @if ( $errors )
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                @endif

            </div>

            <div class="form-group row">
            
                <label for="image">Post image</label>

                <input type="file" class="form-control-file }}" 
                    id="image" name="image" autocomplete/>
                    <!-- $errors->has('image')  -->
                @if ( $errors )
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif

            </div>

            <div class="form-group row">
            

                <input type="button" value="Submit">


            </div>


        </div>

    </div>
</div>


@endsection
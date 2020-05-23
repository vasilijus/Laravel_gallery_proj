@extends('layouts.app')

@section('content')


<div class="container">

    <form method="POST" enctype="multipart/form-data" action="/profile/{{ $user->id }}" >
    
    @csrf
    @method('PATCH')

        <div class="row">

            <div class="col-8 offset-2">
                

                <div class="form-group row">
                    <h1>Edit User</h1>
                </div>

                <div class="form-group row">
                
                    <label for="caption">Name</label>

                    <input type="text" name="name" class="form-control" 
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
                
                    <label for="caption">Username</label>

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
                
                    <label for="caption">Email</label>

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
                
                    <button class="btn btn-primary" type="submit">Submit</button>

                </div>


            </div>

        </div>

    </form>
    
</div>


@endsection
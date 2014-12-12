@extends('layouts.default')
@section('content')
<div class="col-xs-6">
      {{ Form::open(array('url' => route("wishlists.store"), 'role'=>'form')) }}

            {{ Form::hidden('id',($id),array('class'=>'form-control')) }}
    <div class="form-group">
        
            {{ Form::label('wish_1', 'Wish 1') }}
            {{ Form::text('wish_1', Input::old('wish_1'),array('class'=>'form-control')) }}
        
    </div>

    <div class="form-group">
        
            {{ Form::label('wish_2', 'Wish 2') }}
            {{ Form::text('wish_2', Input::old('wish_2'),array('class'=>'form-control')) }}
        
    </div>
    <div class="form-group">
        
            {{ Form::label('wish_3', 'Wish 3') }}
            {{ Form::text('wish_3', Input::old('wish_3'),array('class'=>'form-control')) }}
        
    </div>

  

    <!-- Login button -->
    <div class="form-group">
            {{ Form::submit('Save', array('class' => 'btn btn-success')) }}
    </div>

{{ Form::close() }}
    </div>
@stop
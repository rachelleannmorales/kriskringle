@extends('layouts.default')
@section('content')
<div class="col-xs-6">
      {{ Form::open(array('url' => route("logins.store"), 'role'=>'form')) }}

    <div class="form-group">
        
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username', Input::old('username'),array('class'=>'form-control')) }}
        
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}
            {{ Form::password('password',array('class'=>'form-control')) }}
    </div>

    <!-- Login button -->
    <div class="form-group">
            {{ Form::submit('Login', array('class' => 'btn btn-success')) }}
    </div>

{{ Form::close() }}
    </div>
@stop
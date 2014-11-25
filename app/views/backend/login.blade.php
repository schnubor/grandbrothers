@extends('layout.default')

@section('content')
    <div id="login-form" class="col-md-4 col-md-offset-4 well">
        <legend>Backend Access</legend>

        @include('layout.partials.errors')

        {{ Form::open(['route' => 'login_path', 'method' => 'POST']) }}
            <div class="form-group">
                {{ Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) }}
            </div>
            {{ Form::submit('Sign in', ['class' => 'btn btn-primary pull-right']) }}
        {{ Form::close() }}
    </div>
@stop
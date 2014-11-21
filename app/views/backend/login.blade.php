@extends('layout.default')

@section('content')
    <div class="col-md-4 col-md-offset-4 well">
        <legend>Sign in</legend>
        {{ Form::open(['route' => 'login_path']) }}
            <div class="form-group">
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>
            {{ Form::submit('Sign in', ['class' => 'btn btn-primary pull-right']) }}
        {{ Form::close() }}
    </div>
@stop
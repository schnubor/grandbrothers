@extends('layout.default')

@section('content')
  <div class="jumbotron">
    <div class="container">
      <h1>Backend</h1>
      <p>Manage texts, tourdates and pictures all by yourself.</p>
      <button class="btn btn-default"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Show Site</button>
      <button class="btn btn-default"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</button>
    </div>
  </div>

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> News</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Live Dates</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admins</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <div class="well clearfix">
              <legend>Add new admin</legend>

              @include('layout.partials.errors')

              {{ Form::open(['route' => 'store-user'])}}
                <div class="form-group">
                  {{ Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                  {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                  {{ Form::submit('Create', ['class' => 'btn btn-primary pull-right']) }}
                </div>
              {{ Form::close() }}
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
            <table class="table table-striped">
              @foreach($users as $user)
              <tr>
                <td>#{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>
                  {{ Form::open(array('route' => array('delete-user', $user->id), 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> delete', array('class' => 'btn btn-sm btn-default', 'style' => 'margin-left: 10px', 'type' => 'submit')) }}
                  {{ Form::close() }}
                </td>
              </tr>
              @endforeach
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
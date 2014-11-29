@extends('layout.default')

@section('content')
  <div class="jumbotron">
    <div class="container">
      <h1>Backend</h1>
      <p>Manage news, dates and admins all by yourself.</p>
      <a href="{{ URL::route('home') }}" class="btn btn-default"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Show Site</a>
      <a href="{{ URL::route('logout') }}" class="btn btn-default"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
      <small>logged in as {{ $activeUser->username }}</small>
    </div>
  </div>

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> News</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <div class="well clearfix">
              <legend>Add new post</legend>

              @include('layout.partials.errors')

              {{ Form::open(['route' => 'news.store'])}}
                <div class="form-group">
                  {{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                  {{ Form::textarea('body', Input::old('body'), ['class' => 'form-control', 'placeholder' => 'Body', 'required' => 'required']) }}
                </div>
                {{ Form::hidden('author', $activeUser->username) }}
                <div class="form-group">
                  {{ Form::submit('Post', ['class' => 'btn btn-primary pull-right']) }}
                </div>
              {{ Form::close() }}
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
            <table class="table table-striped">
              @foreach($posts as $post)
              <tr>
                <td>#{{ $post->id }}</td>
                <td><strong>{{ $post->title }}</strong></td>
                <td>by {{ $post->author }}</td>
                <td>
                  {{ Form::open(['route' => ['news.destroy', $post->id], 'class' => 'pull-right', 'method' => 'delete']) }}
                    {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> delete', ['class' => 'btn btn-sm btn-default', 'style' => 'margin-left: 10px', 'type' => 'submit']) }}
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

              {{ Form::open(['route' => 'user.store'])}}
                <div class="form-group">
                  {{ Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                  {{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                  {{ Form::text('password', Input::old('password'), ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) }}
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
                <td>{{ $user->email }}</td>
                <td>
                  {{ Form::open(['route' => ['user.destroy', $user->id], 'class' => 'pull-right', 'method' => 'delete']) }}
                    {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> delete', ['class' => 'btn btn-sm btn-default', 'style' => 'margin-left: 10px', 'type' => 'submit']) }}
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
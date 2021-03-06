@extends('layout.backend')

@section('content')
  <div class="jumbotron">
    <div class="container">
      <h1>Backend</h1>
      <p>Manage news, dates and admins all by yourself.</p>
      <a href="{{ URL::route('home') }}" class="btn btn-default"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Show Site</a>
      <a href="{{ URL::route('logout') }}" class="btn btn-default"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
      <small>logged in as {{ $activeUser->username }}</small>
      @include('layout.partials.errors')
    </div>
  </div>

  <!-- News -->

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> News</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-5">
            <div class="well clearfix">
              <legend>Add News Post</legend>

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
          <div class="col-md-7">
            <div class="row">
            <table class="table table-striped">
              @foreach($posts as $post)
              <tr>
                <td>#{{ $post->id }}</td>
                <td><strong>{{ $post->title }}</strong></td>
                <td>{{ $post->created_at }} by {{ $post->author }}</td>
                <td>

                  {{ Form::open(['route' => ['news.destroy', $post->id], 'class' => 'pull-right', 'method' => 'delete']) }}
                    {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> delete', ['class' => 'btn btn-sm btn-default', 'style' => 'margin-left: 10px', 'type' => 'submit']) }}
                  {{ Form::close() }}
                  <button class="btn-default btn btn-sm pull-right" data-toggle="modal" data-target="#newsModal" data-id="{{ $post->id }}" data-title="{{ $post->title }}" data-body="{{ e($post->body) }}"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                </td>
              </tr>
              @endforeach
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Live Dates -->

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Live Dates</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-4">
            <div class="well clearfix">
              <legend>Add Live Gig</legend>

              {{ Form::open(['route' => 'date.store'])}}
                <div class="form-group">
                  {{ Form::text('date', Input::old('date'), ['class' => 'form-control', 'placeholder' => 'Date', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                  {{ Form::text('country', Input::old('country'), ['class' => 'form-control', 'placeholder' => 'Country']) }}
                </div>
                <div class="form-group">
                  {{ Form::text('city', Input::old('city'), ['class' => 'form-control', 'placeholder' => 'City']) }}
                </div>
                <div class="form-group">
                  {{ Form::text('location', Input::old('location'), ['class' => 'form-control', 'placeholder' => 'Location']) }}
                </div>
                <div class="form-group">
                  {{ Form::submit('Post', ['class' => 'btn btn-primary pull-right']) }}
                </div>
              {{ Form::close() }}
            </div>

            <div class="well clearfix">
              <legend>Poster</legend>

              <img src="/images/poster.jpg" alt="Gig image" width="100%"/>

              {{ Form::open(['route' => 'image.store', 'files' => true]) }}
                <div class="form-group">
                  <label for="poster"></label>
                  <input type="file" id="poster" name="poster">
                  <p class="help-block">JPG, 1280 x 1920 px, max 2MB</p>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                </div>
              {{ Form::close() }}
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
            <table class="table table-striped">
              @foreach($dates as $date)
              <tr>
                <td>#{{ $date->id }}</td>
                <td><strong>{{ $date->date }}</strong></td>
                <td>{{ $date->country }}</td>
                <td>{{ $date->city }}</td>
                <td>{{ $date->location }}</td>
                <td>
                  {{ Form::open(['route' => ['date.destroy', $date->id], 'class' => 'pull-right', 'method' => 'delete']) }}
                    {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> delete', ['class' => 'btn btn-sm btn-default', 'style' => 'margin-left: 10px', 'type' => 'submit']) }}
                  {{ Form::close() }}
                  <button class="btn-default btn btn-sm pull-right" data-toggle="modal" data-target="#datesModal" data-id="{{ $date->id }}" data-date="{{ $date->date }}" data-country="{{ e($date->country) }}" data-city="{{ e($date->city) }}" data-location="{{ e($date->location) }}"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                </td>
              </tr>
              @endforeach
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Users -->

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

  @include('backend.modals.news')
  @include('backend.modals.dates')
@stop

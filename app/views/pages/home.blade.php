@extends('layout.default')

@section('content')
  <div id="left">
    <h2>News</h2>
    <ul>
      @foreach($posts as $post)
        <li>
          <h3>{{ $post->title }}</h3>
          <small>by {{ $post->author }}</small>
          <p>{{ $post->body }}</p>
        </li>
      @endforeach
    </ul>
  </div><!-- EO#left --><div id="right">
    <h2>Dates</h2>
    <ul>
      @foreach($dates as $date)
        <li>
          <h3>{{ $date->title }}</h3>
          <h4>{{ $date->date }}, {{ $date->location }}, {{ $date->price }}€</h4>
          <p>{{ $date->body }}</p>
        </li>
      @endforeach
    </ul>
  </div><!-- EO#right -->
@stop
@extends('layout.default')

@section('content')
  <div id="left">
    <section class="welcome left"></section>
    <section class="news left padding">
      <h2>NEWS</h2>
      <ul>
        @foreach($posts as $post)
          <li>
            <h3>{{ $post->title }}</h3>
            <small>by {{ $post->author }}</small>
            <p>{{ $post->body }}</p>
          </li>
        @endforeach
      </ul>
    </section>
  </div><!-- EO#left -->
  <div id="right">
    <section class="gigs right padding">
      <h2>LIVE</h2>
      <ul>
        @foreach($dates as $date)
          <li>
            <h3>{{ $date->title }}</h3>
            <h4>{{ $date->date }}, {{ $date->location }}, {{ $date->price }}€</h4>
            <p>{{ $date->body }}</p>
          </li>
        @endforeach
      </ul>
    </section>
    <section class="welcome right"></section>
  </div><!-- EO#right -->
@stop
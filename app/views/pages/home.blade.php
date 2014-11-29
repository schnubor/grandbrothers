@extends('layout.default')

@section('content')
    <div class="container">
        <h1>Home</h1>
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
        <h2>Dates</h2>
    </div>
@stop
@extends('layout.default')

@section('content')
  <div id="left">
    <section class="welcome left">
      <h1>Grandbrothers</h1>
    </section>
    <section class="news">
      <div class="content">
        <h2>News</h2>
        <ul>
          @foreach($posts as $post)
            <li>
              <h3>{{ $post->title }}</h3>
              <small>posted {{ $post->created_at }} by {{ $post->author }}</small>
              <p>{{ $post->body }}</p>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
    <section class="pic pic1">
      <?= image_tag('portrait_blue.jpg', ['alt' => 'portrait']) ?>
    </section>
  </div><!-- EO#left -->
  <div id="right">
    <section class="filler"></section>
    <section class="pic pic2">
      <?= image_tag('portrait_red.jpg', ['alt' => 'portrait']) ?>
    </section>
    <section class="gigs">
      <div class="content">
        <h2>Live</h2>
        <ul>
          @foreach($dates as $date)
            <li>
              <h3>{{ $date->title }}</h3>
              <h4>{{ $date->date }}, {{ $date->location }}, {{ $date->price }}€</h4>
              <p>{{ $date->body }}</p>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
    <section class="music">
      <div class="content">
        <h2>Music</h2>
        <iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/16702214&amp;color=bd3b20&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
      </div>
    </section>
    <section class="info">
      <div class="content">
        <h2>Info</h2>
        <p class="description">
          The infos...
        </p>
      </div>
    </section>
    <section class="welcome right"></section>
  </div><!-- EO#right -->
@stop
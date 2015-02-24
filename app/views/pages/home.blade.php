@extends('layout.default')

@section('content')
<div id="wrapper">
  <!-- Left Side -->
  <div id="left">
    <section class="welcome left"></section>
    <section class="listen left"></section>
    <section class="news left">
      <div class="content">
        @if(isset($post))
          <h3>{{ $post->title }}</h3>
          <small>{{ date("l d. F Y",strtotime($post->created_at)) }}</small>
          <p>{{ $post->body }}</p>
        @endif
      </div>
    </section>
    <section class="gigs left"></section>
    <section class="info left">
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae dolorem modi nam veniam rerum doloremque, illum harum natus incidunt numquam necessitatibus animi, autem quidem accusantium eum mollitia. Voluptatum, nobis, placeat.</p>
      </div>
    </section>
    <section class="contact left"></section>
  </div>

  <!-- Right Side -->

  <div id="right">
    <section class="contact right">
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias quaerat itaque quo voluptatum fugit harum odit, dolorum nisi repellendus odio eveniet sapiente praesentium eius tempore sunt non rerum, delectus amet.</p>
      </div>
    </section>
    <section class="info right"></section>
    <section class="gigs right">
      <div class="content">
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
    <section class="news right"></section>
    <section class="listen right">
      <iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/16702214&amp;color=bd3b20&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
    </section>
    <section class="welcome right"></section>
  </div><!-- EO#right -->
</div>
@stop
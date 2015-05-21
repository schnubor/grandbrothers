@extends('layout.default')

@section('content')
<div id="wrapper">
  <!-- Left Side -->
  <div id="left">
    <section id="Home" class="welcome left"></section>
    <section id="Music" class="listen left"></section>
    <section id="News" class="news left textSection">
      <div class="content centered">
        @if(isset($posts))
          <div class="slider">
            <ul>
              @foreach($posts as $post)
                <li>
                  <h3>{{ $post->title }}</h3>
                  <small>{{ date("l d. F Y",strtotime($post->created_at)) }}</small>
                  <p>{{ $post->body }}</p>
                </li>
              @endforeach
            </ul>
          </div>
          
        @else
          <h3>Currently no news.</h3>
          <small>Please check back later.</small>
        @endif
      </div>
    </section>
    <section id="Live" class="gigs left"></section>
    <section id="Info" class="info left textSection">
      <div class="content centered">
        <p>The Grandbrothers duo is made up of Erol Sarp and Lukas Vogel, two German musicians who met while attending university in Dusseldorf. Together, the pair combine synthesis, rhythmic programming, and live piano to craft modern classical hybrid compositions that would sit nicely alongside much of Nils Frahm's and the Erased Tapes' catalog.</p>
        <p><em>- XLR8R, 2015</em></p>
      </div>
    </section>
    <section id="Contact" class="contact left"></section>
  </div>

  <!-- Right Side -->

  <div id="right">
    <section class="contact right textSection">
      <div class="content centered">
        <!--<div class="film">
          <img src="/assets/film_logo_black.png" alt="FILM Logo" width="50px">
        </div>-->
        <ul>
          <li>
            <h4>Label:</h4>
            <p>FILM <br><a href="mailto:office@film-recordings.com">office@film-recordings.com</a></p>
          </li>
          <li>
            <h4>Management:</h4>
            <p>Dominik Grötz <br><a href="mailto:dominik@film-recordings.com">dominik@film-recordings.com</a></p>
          </li>
          <li>
            <h4>Booking:</h4>
            <p>Daniel W. Best <br><a href="mailto:daniel@film-recordings.com">daniel@film-recordings.com</a></p>
          </li>
          <li><p>–</p></li>
          <li>
            <h4>Grandbrothers:</h4>
            <p>Erol Sarp &amp; Lukas Vogel <br><a href="mailto:mail@grandbrothers.de">mail@grandbrothers.de</a></p>
          </li>
        </ul>
        
      </div>
    </section>
    <section class="info right"></section>
    <section class="gigs right textSection">
      <div class="content centered">
        <ul>
          @foreach($dates as $date)
            <li>
                {{ $date->date }}, {{ $date->country }} {{ $date->city }} <br>
                {{ $date->location }}
            </li>
          @endforeach
        </ul>
      </div>
    </section>
    <section class="news right"></section>
    <section class="listen right textSection">
      <div class="centered">
        <iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/16702214&amp;color=bd3b20&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
      </div>
    </section>
    <section class="welcome right"></section>
  </div><!-- EO#right -->
</div>
@stop
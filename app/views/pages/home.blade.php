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
        <p>Grandbrothers are Erol Sarp and Lukas Vogel. After meeting at university in Dusseldorf, Erol and Lukas formed Grandbrothers to tie together their respective musical backgrounds and disciplines: Erol is a trained jazz pianist, while by day Lukas constructs synthesizers at Access Music. Together, they create a sound that combines classical composition with modern, experimental production and sound design. <br><br>
 
Their first song, ‘Ezra Was Right’, earned an early supporter in the esteemed Gilles Peterson, who included the track on his Bubblers 10 compilation and played it numerous times on his Worldwide radio show for BBC Radio 6 Music, with the song eventually being voted #7 by listeners in his end-of-year poll in 2013. A full EP on FILM followed – backed by remixes from legendary Manchester DJ Greg Wilson, Optimo’s JD Twitch, and Kim Brown – which sold out its initial run within ten days. <br><br>
 
Now, Grandbrothers present their debut album, Dilation. The product of two years work, Dilation builds on some of the ideas established on ‘Ezra Was Right’ while exploring further elements of minimalism, ambient music, IDM, and techno. Tracks start as repeated two or three note patterns, which gradually develop into sweeping, cinematic soundscapes, recalling the structural and rhythmic qualities club music as much as it does the work of a composer like Steve Reich, as well as Ryuichi Sakamoto’s collaborations with Alva Noto. <br><br>
 
Surprisingly, there are no synthetic sounds on Dilation: Erol and Lukas deliberately restrict themselves to the sounds of the grand piano across the album. “We wanted to make modern-sounding music using classical instruments,” Lukas explains, “Instruments with a lot of history.” <br><br>
 
To achieve this modern sound, Lukas developed an unusual system for playing the piano. Drawing on his technical background, he created a series of electromechanical hammers that could be controlled via laptop (on software that he designed himself, no less) to ‘play’ the piano. This process allowed the duo to discover new, previously unknown sounds – sounds that couldn’t be achieved through conventional playing – which give the record its unique sonic qualities. <br><br>
 
“'Dilation' is a physical term for expansion and widening,” Erol says, “We see the project as an experiment: how far you can go with a piano? How much you can get out of it, soundwise?” <br><br>
 
With further manipulation using loops, effects, and amplification, Dilation is an album that covers an extraordinary range of sounds despite coming from such a small, unorthodox setup. <br><br>
 
Classical, yet forward-thinking; expressive and emotional, yet with one foot on the dancefloor.</p>
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title>Grandbrothers</title>
  <meta name="description" content="Grandbrothers is a piano / experimental duo from Düsseldorf." />
  <link rel="canonical" href="http://www.grandbrothersmusic.com/" />
  <meta property="og:title" content="Grandbrothers" />
  <meta property="og:site_name" content="Grandbrothers – official homepage"/>
  <meta property="og:url" content="http://www.grandbrothersmusic.com/" />
  <meta property="og:image" content="http://www.grandbrothersmusic.com/assets/fb_image.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="The Grandbrothers duo is made up of Erol Sarp and Lukas Vogel, two German musicians who met while attending university in Dusseldorf. Together, the pair combine synthesis, rhythmic programming, and live piano to craft modern classical hybrid compositions that would sit nicely alongside much of Nils Frahm's and the Erased Tapes' catalog." />

  <?= stylesheet_link_tag() ?>
  <?= javascript_include_tag() ?>

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1916928361905957'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1916928361905957&ev=PageView&noscript=1"
  /></noscript>
  <!-- DO NOT MODIFY -->
  <!-- End Facebook Pixel Code -->

  <!--Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-102119625-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>
<body>
  <!-- Loading -->
  <div id="loading" class="js-loading"></div>

  <h1 id="siteTitle"><a href="#Home" class="page-scroll"><img src="/assets/logo.png" alt="Logo"></a></h1>

  <!-- Navigation -->
  @include('layout.partials.nav')

  <!-- Page Content -->
  @yield('content')

</body>
</html>
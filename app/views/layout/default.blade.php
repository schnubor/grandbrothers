<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title>Grandbrothers</title>
  <meta name="description" content="The Grandbrothers duo is made up of Erol Sarp and Lukas Vogel, two German musicians who met while attending university in Dusseldorf. Together, the pair combine synthesis, rhythmic programming, and live piano to craft modern classical hybrid compositions that would sit nicely alongside much of Nils Frahm's and the Erased Tapes' catalog." />

  <meta property="og:title" content="Grandbrothers" />
  <meta property="og:site_name" content="Grandbrothers Homepage"/>
  <meta property="og:url" content="http://www.grandbrothers.de" />
  <meta property="og:image" content="http://www.grandbrothers.de/assets/fb_image.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="The Grandbrothers duo is made up of Erol Sarp and Lukas Vogel, two German musicians who met while attending university in Dusseldorf. Together, the pair combine synthesis, rhythmic programming, and live piano to craft modern classical hybrid compositions that would sit nicely alongside much of Nils Frahm's and the Erased Tapes' catalog." />

  <?= stylesheet_link_tag() ?>
  <?= javascript_include_tag() ?>
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
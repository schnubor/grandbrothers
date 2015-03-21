<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Grandbrothers</title>
  <?= stylesheet_link_tag() ?>
  <?= javascript_include_tag() ?>
</head>
<body>
  <!-- Loading -->
  <div id="loading" class="js-loading"></div>

  <h1 id="siteTitle"><a href="#Home" class="page-scroll">Grandbrothers</a></h1>

  <!-- Navigation -->
  @include('layout.partials.nav')

  <!-- Page Content -->
  @yield('content')

</body>
</html>
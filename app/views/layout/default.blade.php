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

  <!-- Navigation -->
  @include('layout.partials.nav')

  <!-- Page Content -->
  @yield('content')

  <!-- Footer -->
  <footer>
    <h3>Le Footer</h3>
  </footer>
</body>
</html>
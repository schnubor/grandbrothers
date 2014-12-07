<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Grandbrothers</title>
  <?= stylesheet_link_tag() ?>
  <?= javascript_include_tag() ?>
</head>
<body>
  <!-- Navigation -->
  @include('layout.partials.nav')

  <!-- Page Content -->
  @yield('content')
</body>
</html>
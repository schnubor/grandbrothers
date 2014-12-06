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
  <nav>
    <ul>
      <li>News</li>
      <li>Info</li>
      <li>Music</li>
      <li>Live</li>
      <li>Contact</li>
    </ul>
  </nav>
  @yield('content')
</body>
</html>
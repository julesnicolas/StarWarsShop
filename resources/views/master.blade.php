<!doctype html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>@yield('titre')</title>
      <link rel="stylesheet" href="{{ URL::asset('assets\Skeleton-2.0.4\css\normalize.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('assets\Skeleton-2.0.4\css\skeleton.css') }}">
  <body>
    <!-- .container is main centered wrapper -->
    <div class="container">
      <div class="header">

      </div>
      <div class="main">
        @yield('contenu')
      </div>
      <div class="footer">

      </div>
    </div>

  <!-- Note: columns can be nested, but it's not recommended since Skeleton's grid has %-based gutters, meaning a nested grid results in variable with gutters (which can end up being *really* small on certain browser/device sizes) -->
  </body>
</html>

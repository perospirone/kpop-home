<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kpop Home</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div id="app">
    <router-view></router-view>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

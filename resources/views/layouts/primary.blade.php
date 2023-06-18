<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIPPROSI</title>
  {{-- My Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&family=Inter:wght@400;500;600&family=Lexend:wght@500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  {{-- Bootstrap --}}
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  {{-- My CSS --}}
  <link rel="stylesheet" href="/css/style.css">
<body style="background-color: #f6f1f1">
  @include('partials.navbar')

  @include('partials.sidebar')

  @include('partials.header')

  @include('partials.rounded-container')

  <script src="/js/sidebar.js"></script>
  <script src="/js/notification.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  @yield('myscript')
</body>
</html>
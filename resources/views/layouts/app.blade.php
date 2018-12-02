<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>your-name.com</title>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  </head>
  <body class="font-sans antialiased leading-tight bg-primary2">
    <script>
      let env = {
        api: "{{ env('NETWORK_PORTFOLIO_URL', 'http://network-portfolio.test/api/')}}",
        user_id: {{ env('NETWORK_PORTFOLIO_USER_ID')}},
      }
    </script>
    <div id="app">
      <app-header></app-header>
      @yield('body')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>

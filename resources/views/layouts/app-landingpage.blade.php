
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    @include('includes.landingpage.style')
    @stack('addon-style')
</head>
<body>

    @include('includes.landingpage.navbar')
    @yield('content')
    @include('includes.landingpage.footer')
    @include('includes.landingpage.script')
    @stack('addon-script')

  </body>
</html>

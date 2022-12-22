<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ICON  -->
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">
    <!-- Styles -->
    @vite('resources/js/app.js')
    <title>DC COMICS</title>
</head>
<body>
    <!-- HEADER -->
    @include('partials.header')


    <!-- CONTENT PAGE -->

    @yield('content')


    <!-- FOOTER -->

    @include('partials.footer')
</body>
</html>
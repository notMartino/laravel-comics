<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/2e0cc00556.js" crossorigin="anonymous"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    {{-- Local links --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    @include('components.header')

    @yield('content')

    @include('components.footer')
</body>
</html>
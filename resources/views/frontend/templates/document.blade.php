<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="theme-color" content="">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @include('frontend.layouts.styles')

    <!-- Marquiz script start -->
    <script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Marquiz.init({
                id: '5c162701ce1bf10055e81243',
                autoOpen: false,
                autoOpenFreq: 'once',
                openOnExit: false
            });
        });
    </script>
    <!-- Marquiz script end -->

    <title>{{ $page_title }}</title>
</head>
<body>

@yield('template')

@include('frontend.layouts.scripts')

</body>
</html>
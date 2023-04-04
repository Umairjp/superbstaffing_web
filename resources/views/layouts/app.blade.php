<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superb Staffing | @yield('title')</title>
    <link href="{{ asset('front/assets/css/m-style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/responsive-style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @yield('css')
</head>

<body>
    @include('layouts.header')
    @include('layouts.sidebar')

    <div class="body-wrapper">
        <div class="content">
            @yield('content')
        </div>
    </div>

    @yield('script')

    <script src="{{ asset('front/assets/js/mlib.js') }}"></script>
    <script src="{{ asset('front/assets/js/functions.js') }}"></script>
</body>

</html>

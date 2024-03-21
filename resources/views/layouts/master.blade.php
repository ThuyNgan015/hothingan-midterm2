<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\style.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\tiny-slider.css')}}">
    @yield('css')
</head>
<body>
    @include('blocks.header')
    <main>
        @yield('content')
    </main>
    @include('blocks.footer')
    <script src="{{asset('assets\js\bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets\js\custom.js')}}"></script>
    <script src="{{asset('public\assets\js\tiny-slider.js')}}"></script>
    @yield('js')
    @stack('script')
</body>
</html>
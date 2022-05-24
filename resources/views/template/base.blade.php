<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI</title>
    <link rel="stylesheet" href="{{asset('/assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/demo_1/style.css')}}">
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}" />
    @stack('css')
</head>
<body>
<div class="main-wrapper">
    @include('template.component.sidebar')

    <div class="page-wrapper">
        @include('template.component.navbar')

        <div class="page-content">
            @yield('content')
        </div>

        @include('template.component.footer')
    </div>
</div>

<script src="{{asset('/assets/vendors/core/core.js')}}"></script>
<script src="{{asset('/assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('/assets/js/template.js')}}"></script>
@stack('js')
</body>
</html>

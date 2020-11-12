<?php $needSideMenu =  true ?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
</head>
<body>
{{--Show message if IE < 11--}}
<div id="app">
    <div class="container">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <div class="notification is-{{ $msg }} appear-disappear-fade" v-cloak>
                    <span class="delete" onclick="console.log(this.parentElement.remove())"></span>
                    {!! Session::get('alert-' . $msg) !!}
                </div>
            @endif
        @endforeach

        @yield('content')
    </div>
</div>
@routes
<script src="{{ mix('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>

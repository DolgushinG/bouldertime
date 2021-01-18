<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bouldertime &mdash; Blog about climbing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('/favicon.svg')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link href="{{ asset('fonts/icomoon/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('fonts/flaticon/font/flaticon.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.2.3/jquery.min.js"></script>

</head>
<body>
@foreach(App\Alert::all() as $Alert)
    @if($Alert->status)
        @include('layouts.alert')
    @endif
@endforeach

@include('layouts.nav')
@include('preloader')


@yield('content')
@include('layouts.footer')

</body>
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>


</html>

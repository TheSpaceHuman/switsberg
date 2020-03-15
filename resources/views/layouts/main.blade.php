<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="/">
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="google-site-verification" content="W6_vqxRx84KpU_Vlst_wiD9Sx57Ks-hyap9QQRYHEn0" />
    <meta name="keywords" content="@yield('keywords', 'keywords')"/>
    <meta name="description" content="@yield('description', 'description')"/>
    <meta name="author" content="TheSpaceHuman"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title  -->
    <title>@yield('title', 'Title')</title>

    <!-- Bootstrap CSS-->
    <link href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="{{ url('assets/vendors/font-awesome/css/font-awesome.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!-- IE 9-->
    <!-- Vendors-->
    <link rel="stylesheet" href="{{ url('assets/vendors/flexslider/flexslider.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/swipebox/css/swipebox.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/slick/slick.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/slick/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/pageloading/css/component.min.css') }}">
    <!-- Font-icon-->
    <link rel="stylesheet" href="{{ url('assets/fonts/font-icon/style.css') }}">
    <!-- Style-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/elements.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/extra.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/widget.css') }}">
    <!--link#colorpattern(rel='stylesheet', type='text/css', href='assets/css/color/colordefault.css')-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/responsive.css') }}">
    <!----Update-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/jquery.growl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/update.css') }}">
    <!-- Google Font-->
{{--    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">--}}

    <!-- Script Loading Page-->
    <script src="{{ url('assets/vendors/html5shiv.js') }}"></script>
    <script src="{{ url('assets/vendors/respond.min.js') }}"></script>
    <script src="{{ url('assets/vendors/pageloading/js/snap.svg-min.js') }}"></script>
    <script src="{{ url('assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js') }}"></script>

{{--    <link rel="stylesheet" href="{{ url('css/style.css') }}">--}}
{{--    <script src="{{ url('js/beforeScripts.js') }}"></script>--}}

    {!! setting('site.head') !!}

</head>
<body>
{{--sprite--}}
<svg width="0" height="0" class="hidden">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="48.3 0 59 56.7" id="tools">
        <path d="M67.4 43.8c4.7-5.9 8.2-9.7 10.8-11.8l5.4-4.4c4.6-3.8 8.9-6.3 13.6-8.2 2.3.1 4.6-.6 6.4-2.1 2.1-1.8 3.4-4.4 3.3-7.2 0-.3-.2-.8-.5-1-.4-.3-.8-.2-1.1-.1l-6 2.7c-1.4-.8-2.1-2.4-1.9-4.1l5.9-2.8c.3-.1.5-.4.7-.8.1-.4-.1-.8-.4-1-4-3.2-9.5-2.7-12.9 1.1-1.1 1.4-1.9 3-2.1 4.6-2.7 4.3-6.1 8-10.8 11.8l-5.4 4.4c-.9.7-2 1.5-3.4 2.4-.1 0-.3.1-.4.2-.1 0-.1.1-.1.1-2.5 1.6-5.7 3.4-9.7 5.5-2.3-.1-4.6.6-6.4 2.1-2.1 1.8-3.4 4.4-3.3 7.2 0 .3.2.8.5 1 .4.3.8.2 1.1.1l6-2.7c1.5.9 2.2 2.5 2 4.2l-5.9 2.7c-.3.1-.5.4-.7.8 0 .3 0 .6.2.8.1.1.1.2.1.1 4 3.2 9.5 2.7 12.9-1.1 1.1-1.2 1.8-2.8 2.1-4.5zm-.1-3.5c-.2-.8-.3-1.5-.8-2.2-1.1-1.8-2.5-3.2-4.4-4 1-.6 2-1.1 2.9-1.6l1.5 1.8c.4.5 1.1.6 1.6.2.5-.4.6-1.1.2-1.6l-1.2-1.5c.7-.4 1.4-.8 2-1.2l1 1.2c.4.5 1.1.6 1.6.2.5-.4.6-1.1.2-1.6l-.9-1c1.1-.7 2-1.4 2.8-2.1l5.4-4.4c3.8-3.2 7-6.3 9.5-9.8.3.7.4 1.3.7 2 .7 1.3 1.7 2.4 2.9 3.2.4.3.8.5 1.2.7-3.9 1.8-7.6 4.3-11.4 7.4l-5.4 4.4c-2.3 1.8-5.3 5.1-9.4 9.9zm33-36.7l-4.4 2.1c-.3.1-.6.4-.7.8l-.1.6c-.4 2.6.8 5.2 3 6.5l.5.4c.3.2.7.2 1.1 0l4.7-2.1c-.4 1.4-1.1 2.5-2.2 3.5-1.6 1.3-3.7 1.9-5.7 1.4-2-.4-3.8-1.7-4.7-3.6-1.4-2.4-1-5.6.8-7.7 1.9-2.2 5-3 7.7-1.9zM55.8 48.8l4.4-2c.3-.1.5-.4.7-.8l.1-.7c.3-1.9-.2-3.7-1.4-5.2-.4-.5-1-1-1.5-1.5l-.5-.3c-.3-.2-.7-.2-1.1 0l-4.7 2.1c.4-1.4 1.1-2.5 2.2-3.5 1.4-1.1 3.1-1.7 5-1.6h.2c.7.1 1.3.2 1.9.5 1.4.6 2.6 1.7 3.4 3.2.6 1.1.9 2.6.8 3.9v.3c-.2 1.3-.7 2.5-1.6 3.6-2 2.4-5.2 3.1-7.9 2z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="48.3 0 59 56.7" id="watches">
        <path d="M82.3 5.9c0-.5-.4-.9-.9-.9H72c-.5 0-.9.4-.9.9s.4.9.9.9h9.4c.5 0 .9-.4.9-.9zM71 51.1c0 .5.4.9.9.9h9.4c.5 0 .9-.4.9-.9s-.4-.9-.9-.9h-9.4c-.5 0-.9.4-.9.9z"></path>
        <path d="M97.4 25.7h-2.1c-.7-4.6-3-8.7-6.6-11.7L86.3 2.5C86 1.2 84.9.2 83.5.2H69.7c-1.3 0-2.5 1-2.8 2.3L64.6 14c-4.3 3.6-6.8 8.9-6.8 14.5s2.5 10.9 6.8 14.5l2.3 11.5c.3 1.3 1.4 2.3 2.8 2.3h13.9c1.3 0 2.5-1 2.8-2.3L88.6 43c3.6-3 5.9-7.1 6.6-11.7h2.1c1 0 1.9-.8 1.9-1.9v-1.9c.1-1-.8-1.8-1.8-1.8zM68.8 2.8c.1-.4.5-.8.9-.8h13.9c.5 0 .8.3.9.8l1.9 9.5c-6-3.7-13.6-3.7-19.6 0l2-9.5zm15.7 51.3c-.1.4-.5.8-.9.8H69.7c-.4 0-.8-.3-.9-.8l-1.9-9.5c6 3.7 13.6 3.7 19.6 0l-2 9.5zm-7.9-8.6c-9.4 0-17-7.6-17-17s7.6-17 17-17 17 7.6 17 17-7.6 16.9-17 17zm20.8-16.1h-1.9v-1.8h1.9v1.8z"></path>
        <path d="M89.7 36c2.7-4.6 2.7-10.3 0-14.9V21s0-.1-.1-.1c-1.3-2.2-3.2-4.1-5.4-5.4l-.1-.1H84c-4.6-2.7-10.3-2.7-14.9 0H69s-.1 0-.1.1c-2.2 1.3-4.1 3.2-5.4 5.4l-.1.1v.1c-2.7 4.6-2.7 10.3 0 14.9v.1l.1.1c1.3 2.2 3.1 4 5.4 5.3l.1.1h.1c4.6 2.6 10.3 2.6 14.9 0h.1s.1 0 .1-.1c2.2-1.3 4-3.1 5.4-5.3 0-.1.1-.1.1-.2zM84 39.4l-.5-.8c-.2-.3-.5-.5-.8-.5-.3 0-.7.2-.8.5-.2.3-.2.7 0 .9l.4.8c-1.5.7-3.1 1.2-4.8 1.3v-.9c0-.5-.4-.9-.9-.9s-.9.4-.9.9v.9c-1.7-.1-3.3-.6-4.8-1.3l.4-.8c.3-.5.1-1-.3-1.3-.4-.3-1-.1-1.3.3l-.5.8c-1.4-.9-2.6-2.1-3.5-3.5l.8-.5c.3-.2.5-.5.5-.8 0-.3-.2-.7-.5-.8-.3-.2-.7-.2-.9 0l-.8.4c-.7-1.5-1.2-3.1-1.3-4.8h.9c.5 0 .9-.4.9-.9s-.4-.9-.9-.9h-.9c.1-1.7.6-3.3 1.3-4.8l.8.4c.3.2.7.2.9 0 .3-.2.5-.5.5-.8 0-.3-.2-.7-.5-.8l-.8-.5c.9-1.4 2.1-2.6 3.5-3.5l.5.8c.2.3.5.5.8.5.3 0 .7-.2.8-.5.2-.3.2-.7 0-.9l-.4-.8c1.5-.7 3.1-1.2 4.8-1.3v.9c0 .5.4.9.9.9s.9-.4.9-.9v-.9c1.7.1 3.3.6 4.8 1.3l-.4.8c-.2.3-.2.7 0 .9.2.3.5.5.8.5.3 0 .7-.2.8-.5l.5-.8c1.4.9 2.6 2.1 3.5 3.5l-.8.5c-.3.2-.5.5-.5.8 0 .3.2.7.5.8.3.2.7.2.9 0l.8-.4c.7 1.5 1.2 3.1 1.3 4.8h-.9c-.5 0-.9.4-.9.9s.4.9.9.9h.9c-.1 1.7-.6 3.3-1.3 4.8l-.8-.4c-.5-.3-1-.1-1.3.3-.3.4-.1 1 .3 1.3l.8.5c-.8 1.5-2 2.7-3.4 3.6z"></path>
        <path d="M77.6 28.1V20c0-.5-.4-.9-.9-.9s-.9.4-.9.9v8.5c0 .2.1.5.3.7l6.6 6.6c.4.4 1 .4 1.3 0 .4-.4.4-1 0-1.3l-6.4-6.4z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="48.3 0 59 56.7" id="gun">
        <path d="M59.8 42.9c1 0 1.9-.8 1.9-1.9s-.8-1.9-1.9-1.9-1.9.9-1.9 1.9.9 1.9 1.9 1.9zm3.8-9.4c1 0 1.9-.8 1.9-1.9 0-1-.8-1.9-1.9-1.9-1 0-1.9.8-1.9 1.9s.9 1.9 1.9 1.9zm3.8-14.2H56.1c-.6 0-.9.4-.9.9 0 .6.4.9.9.9h11.3c.6 0 .9-.4.9-.9s-.3-.9-.9-.9zm0-3.8H56.1c-.6 0-.9.4-.9.9s.4.9.9.9h11.3c.6 0 .9-.4.9-.9s-.3-.9-.9-.9z"></path>
        <path d="M105.1 9.9h-1.9V8c0-.6-.4-.9-.9-.9h-5.7c-.6 0-.9.4-.9.9v1.9h-33V8c0-.6-.4-.9-.9-.9h-5.7c-.6 0-.9.4-.9.9v1.9h-4.7c-.6 0-.9.4-.9.9v2.8c0 .3.1.5.2.6l1 1.4c.8 1 .8 2.5 0 3.6l-1 1.4c-.1.2-.2.4-.2.6V24c0 .6.4.9.9.9H54c.9 0 1.8.5 2.3 1.2.5.8.5 1.7.1 2.5L50 41.4c-1.1 2.5-.7 5.4 1 7.5 1.3 1.6 3.4 2.5 5.7 2.5h10.7c1.7 0 3.2-1 4-2.5.8-1.5.5-3.3-.7-4.6l-1.2-1.4c-.1-.2-.2-.5-.2-.7l2.5-7.7h5c4.2 0 7.6-3.4 7.7-7.6V25H90c.6 0 .9-.4.9-.9h11.3c.6 0 .9-.4.9-.9v-2.8h1.9c.6 0 .9-.4.9-.9v-8.7c.2-.6-.2-.9-.8-.9zm-7.5-1h3.8v.9h-3.8v-.9zm-13.2 2.9v3.8H73.1v-3.8h11.3zM57 8.9h3.8v.9H57v-.9zM68 44c.1.1 1.3 1.5 1.3 1.5.7.8.8 1.7.4 2.6-.5.8-1.2 1.4-2.3 1.4H56.7c-1.7 0-3.2-.8-4.2-1.9-1.2-1.6-1.5-3.7-.8-5.5L58 29.7c.8-1.4.7-3.1-.2-4.4-.1-.1-.1-.2-.2-.3h3.5l-7.8 18.1c-.5 1.1-.2 2.5.6 3.4.7.7 1.6 1.1 2.7 1.1h4.5c1.2 0 2.4-.8 2.6-1.9L70.8 25h1.9s-5.3 16.9-5.3 17c-.1.7.1 1.5.6 2zm.9-19l-6.6 20.1c-.2.4-.6.7-1 .7h-4.5c-.6 0-1-.2-1.2-.4-.4-.5-.5-1-.3-1.5l8-18.9h5.6zm13.6 1.8c0 3.2-2.5 5.8-5.8 5.8h-4.4l1.7-5.4c.8 1.5 2 2.3 4.4 3.1.1.1.2.1.3.1.4 0 .8-.3.8-.8.2-.6-.1-1-.6-1.2-2.7-.9-3.3-1.7-3.8-3.3V25h7.3v1.8zm18.9-4.7H91c0-1 .8-1.9 1.9-1.9h8.5v1.9zm2.8-3.7H92.9c-2.1 0-3.8 1.7-3.8 3.8v.9H51.4v-1.5l.8-1.2c1.3-1.7 1.3-4.2 0-5.9l-.8-1.1v-1.6h19.8v4.7c0 .6.4.9.9.9h13.2c.6 0 .9-.4.9-.9v-4.7h18v6.6z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="48.3 0 59 56.7" id="individual">
        <path d="M70.9 33.3h-5.5c-.5 0-.9-.4-.9-.9V16.6c0-.5.4-.9.9-.9h5.5c.5 0 .9.4.9.9v15.7c0 .6-.4 1-.9 1zm-4.6-1.9H70V17.6h-3.7v13.8z"></path>
        <path d="M85.7 33.3H77c-2.4 0-4.7-.7-6.6-2-.3-.2-.4-.5-.4-.8v-12c0-.5.4-.9.9-.9h.9c2.6 0 4.6-2.1 4.6-4.6v-2.8c0-.5.4-.9.9-.9h1.8c1.5 0 2.8 1.2 2.8 2.8v4.6h6.4c1.5 0 2.7 1.1 2.9 2.5.1.8-.2 1.6-.8 2.2-.1.1-.3.3-.5.4.2.4.4.9.4 1.4 0 .7-.3 1.5-.8 2-.1.1-.3.3-.5.4.2.4.4.9.4 1.4 0 .7-.3 1.5-.8 2-.1.1-.3.3-.5.4.2.4.4.9.4 1.4 0 1.2-1.3 2.5-2.8 2.5zM71.8 30c1.6.9 3.4 1.4 5.2 1.4h8.7c.2 0 .5-.1.6-.3.2-.2.3-.4.3-.7 0-.5-.4-.9-.9-.9s-.9-.4-.9-.9.4-.9.9-.9h.9c.2 0 .5-.1.6-.3.2-.2.3-.4.3-.7 0-.5-.4-.9-.9-.9s-.9-.4-.9-.9.4-.9.9-.9h.9c.2 0 .5-.1.6-.3.2-.2.3-.4.3-.7 0-.5-.4-.9-.9-.9s-.9-.4-.9-.9.4-.9.9-.9h.9c.2 0 .5-.1.6-.3.2-.2.3-.5.3-.7-.1-.5-.5-.9-1-.8H81c-.5 0-.9-.4-.9-.9V12c0-.5-.4-.9-.9-.9h-.9v1.8c0 3.6-2.9 6.5-6.5 6.5V30zm17.6-16.6c-.3 0-.5-.1-.7-.3l-.8-.8c-.3-.2-.4-.6-.3-.9.1-.3.3-.6.6-.7s.7 0 .9.2l.9.9c.3.3.3.7.2 1-.1.4-.4.7-.8.6z"></path>
        <path d="M100.2 26c-.3-.6-.5-1.3-.6-2 .1-.7.3-1.3.6-1.9.6-1 .8-2.3.7-3.4-.4-1.1-1.1-2.1-2.1-2.8-.5-.4-1-.9-1.4-1.5-.2-.7-.3-1.4-.3-2 .1-1.2-.2-2.3-.9-3.3-.8-.8-1.9-1.4-3.1-1.6-.7-.1-1.3-.4-1.9-.8-.5-.5-.9-1.1-1.2-1.7-.5-1.1-1.2-2-2.2-2.6-1.1-.4-2.3-.4-3.4-.1-.7.2-1.4.2-2.1.1-.6-.2-1.2-.6-1.8-1-.9-.8-2-1.3-3.2-1.4-1.2.1-2.2.6-3.1 1.4-.5.5-1.2.8-1.8 1-.7.1-1.4 0-2.1-.1-1.1-.3-2.3-.3-3.4.1-1 .6-1.8 1.6-2.3 2.7-.3.6-.7 1.2-1.1 1.7-.6.4-1.2.6-1.9.8-1.2.2-2.2.8-3 1.6-.6 1-.9 2.2-.9 3.3 0 .7-.1 1.4-.3 2-.4.5-.8 1-1.4 1.4-1 .7-1.7 1.7-2.1 2.8-.1 1.1.1 2.3.7 3.3.3.6.5 1.3.6 2-.1.7-.3 1.3-.6 1.9-.6 1-.8 2.2-.7 3.4.4 1.1 1.1 2.1 2.1 2.8.5.4 1 .9 1.4 1.5.2.7.3 1.4.3 2 0 1.3.3 2.4.9 3.4.3.4.7.7 1.1.9l-4.4 7.7c-.2.3-.2.6 0 .9.2.3.5.5.8.5H63l3.5 6c.2.3.5.5.8.5.3 0 .6-.2.8-.5l5.2-8.9c.3.2.6.4 1 .7.9.8 2 1.3 3.2 1.4 1.2-.1 2.2-.6 3.1-1.4.4-.3.7-.5 1-.7l5.2 8.9c.2.3.5.5.8.5.3 0 .6-.2.8-.5l3.5-6h6.9c.3 0 .6-.2.8-.5.2-.3.2-.6 0-.9l-4.4-7.7c.4-.2.8-.5 1.1-.9.6-1 .9-2.2.9-3.3 0-.7.1-1.4.3-2 .4-.6.8-1.1 1.4-1.5 1-.7 1.7-1.7 2.1-2.8 0-1.2-.3-2.4-.8-3.4zM67.3 52.6l-2.9-5.1c-.2-.3-.5-.5-.8-.5h-5.9l3.8-6.5.2.1c.7.1 1.3.4 1.9.8.5.5.9 1.1 1.2 1.7.5 1.1 1.2 2 2.2 2.6 1.1.4 2.3.4 3.4.1.3-.1.6-.1.9-.1l-4 6.9zm29.8-5.5h-5.9c-.3 0-.6.2-.8.5l-2.9 5.1-4.1-7c.3 0 .6.1 1 .1 1.1.3 2.3.3 3.4-.1 1-.6 1.8-1.6 2.3-2.7.3-.6.7-1.2 1.1-1.7.6-.4 1.2-.6 1.9-.8h.2l3.8 6.6zM99 29c-.3.7-.8 1.4-1.5 1.8-.7.6-1.4 1.3-1.8 2.1-.3.9-.5 1.8-.5 2.7.1.8-.1 1.6-.5 2.3-.6.5-1.3.8-2.1 1-.9.2-1.8.6-2.6 1.1-.7.6-1.2 1.4-1.6 2.2-.3.7-.8 1.4-1.4 1.9-.7.2-1.5.2-2.3 0-.9-.2-1.9-.3-2.8-.1-.9.3-1.8.7-2.5 1.3-.6.5-1.3.9-2 1-.8-.2-1.5-.5-2.1-1.1-.7-.6-1.5-1-2.4-1.3-.3-.1-.6-.1-.9-.1-.6 0-1.2.1-1.9.2-.8.2-1.6.2-2.3 0-.6-.5-1.1-1.1-1.4-1.8-.4-.8-.9-1.6-1.6-2.2-.8-.5-1.6-.9-2.5-1.1-.8-.1-1.5-.5-2.1-1-.4-.7-.5-1.5-.5-2.3 0-.9-.2-1.9-.5-2.8-.5-.8-1.1-1.5-1.8-2.1-.7-.5-1.2-1.1-1.5-1.8 0-.8.2-1.6.6-2.3.2-.8.5-1.6.5-2.6-.1-.9-.3-1.9-.7-2.7-.4-.7-.6-1.5-.6-2.2.3-.7.8-1.4 1.5-1.8.7-.6 1.4-1.3 1.8-2.1.3-.9.5-1.8.5-2.7-.1-.8.1-1.6.5-2.3.6-.5 1.3-.8 2.1-1 .9-.2 1.8-.6 2.6-1.1.7-.6 1.2-1.4 1.6-2.2.3-.7.8-1.4 1.4-1.9.7-.2 1.5-.2 2.3 0 .9.2 1.9.3 2.8.1.9-.3 1.8-.7 2.5-1.3.6-.5 1.3-.9 2-1 .8.2 1.5.5 2.1 1.1.7.6 1.5 1 2.4 1.3.9.1 1.9.1 2.8-.1.8-.2 1.6-.2 2.3 0 .6.5 1.1 1.1 1.4 1.8.4.8.9 1.6 1.6 2.2.8.5 1.6.9 2.5 1.1.8.1 1.5.5 2.1 1 .4.7.5 1.5.5 2.3 0 .9.2 1.9.5 2.8.5.8 1.1 1.5 1.8 2.1.7.5 1.2 1.1 1.5 1.8 0 .8-.2 1.6-.6 2.3-.4.8-.7 1.7-.7 2.6.1.9.3 1.9.7 2.7.6.6.8 1.4.8 2.2z"></path>
        <path d="M90.8 14.1c-.4.3-.5.9-.3 1.3 4.4 6.7 3 15.5-3.1 20.6-6.1 5.1-15.1 4.8-20.9-.7-5.8-5.5-6.5-14.4-1.8-20.8 4.8-6.4 13.6-8.2 20.4-4.2.3.2.7.2 1 0 .3-.2.5-.5.5-.8 0-.3-.2-.7-.5-.8-7.7-4.5-17.5-2.4-22.9 4.7-5.3 7.1-4.5 17.1 2 23.2 6.5 6.1 16.5 6.4 23.3.7 6.8-5.7 8.3-15.6 3.4-23.1-.1-.2-.3-.4-.6-.4 0 .2-.3.2-.5.3z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="48.3 0 59 56.7" id="invisible">
        <path d="M55.6 12.4v30.9c0 1.1.9 1.9 1.9 1.9H98c1.1 0 1.9-.9 1.9-1.9V12.4c0-1.1-.9-1.9-1.9-1.9H57.6c-1.1 0-2 .8-2 1.9zm2 30.9v-9.5l13.6-13.3 17.1 16.7c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4l-7.1-6.9 6.4-6.2 9.2 9v11.6H57.6zM98.1 29l-8.5-8.3c-.4-.4-1-.4-1.4 0l-7.1 6.9-9.3-9.1c-.4-.4-1-.4-1.4 0L57.6 31.1V12.4h40.5V29zM50.8 9.5h1.9c1.1 0 1.9-.9 1.9-1.9h2.9c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-2.9c0-1.1-.9-1.9-1.9-1.9h-1.9c-1.1 0-1.9.9-1.9 1.9v1.9c0 1.1.8 2 1.9 2zm0-3.8h1.9v1.9h-1.9V5.7zm54.1-2H103c-1.1 0-1.9.9-1.9 1.9h-1c-.5 0-1 .4-1 1 0 .5.4 1 1 1h1c0 1.1.9 1.9 1.9 1.9v2.9c0 .5.4 1 1 1 .5 0 1-.4 1-1V9.5c1.1 0 1.9-.9 1.9-1.9V5.7c-.1-1.1-1-2-2-2zm-2 3.9V5.7h1.9v1.9h-1.9zm2 38.6H103c-1.1 0-1.9.9-1.9 1.9h-2.9c-.5 0-1 .4-1 1 0 .5.4 1 1 1h2.9c0 1.1.9 1.9 1.9 1.9h1.9c1.1 0 1.9-.9 1.9-1.9v-1.9c0-1.2-.9-2-1.9-2zm-2 3.8v-1.9h1.9V50h-1.9zm-52.1 2h1.9c1.1 0 1.9-.9 1.9-1.9h1c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-1c0-1.1-.9-1.9-1.9-1.9v-2.9c0-.5-.4-1-1-1-.5 0-1 .4-1 1v2.9c-1.1 0-1.9.9-1.9 1.9V50c.1 1.1.9 2 2 2zm0-3.9h1.9V50h-1.9v-1.9zM96.2 7.6c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9c-.5 0-1 .4-1 1 0 .5.4 1 1 1h3.9zM73 7.6c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9c-.5 0-1 .4-1 1 0 .5.4 1 1 1H73zm-7.7 0c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9c-.5 0-1 .4-1 1 0 .5.4 1 1 1h3.9zm15.4 0c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9c-.5 0-1 .4-1 1 0 .5.4 1 1 1h3.9zm7.7 0c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9c-.5 0-1 .4-1 1 0 .5.4 1 1 1h3.9zm15.5 13.5c.5 0 1-.4 1-1v-3.9c0-.5-.4-1-1-1-.5 0-1 .4-1 1v3.9c0 .6.5 1 1 1zm-1 14.5c0 .5.4 1 1 1 .5 0 1-.4 1-1v-3.9c0-.5-.4-1-1-1-.5 0-1 .4-1 1v3.9zm0 7.7c0 .5.4 1 1 1 .5 0 1-.4 1-1v-3.9c0-.5-.4-1-1-1-.5 0-1 .4-1 1v3.9zm0-15.5c0 .5.4 1 1 1 .5 0 1-.4 1-1V24c0-.5-.4-1-1-1-.5 0-1 .4-1 1v3.8zM67.2 48.1c-.5 0-1 .4-1 1 0 .5.4 1 1 1h3.9c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9zm7.7 0c-.5 0-1 .4-1 1 0 .5.4 1 1 1h3.9c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9zm-15.4 0c-.5 0-1 .4-1 1 0 .5.4 1 1 1h3.9c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9zm30.9 0c-.5 0-1 .4-1 1 0 .5.4 1 1 1h3.9c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9zm-7.7 0c-.5 0-1 .4-1 1 0 .5.4 1 1 1h3.9c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-3.9zm-30-20.3c0-.5-.4-1-1-1-.5 0-1 .4-1 1v3.9c0 .5.4 1 1 1 .5 0 1-.4 1-1v-3.9zm-.9 6.8c-.5 0-1 .4-1 1v3.9c0 .5.4 1 1 1 .5 0 1-.4 1-1v-3.9c-.1-.6-.5-1-1-1zm.9-14.5c0-.5-.4-1-1-1-.5 0-1 .4-1 1V24c0 .5.4 1 1 1 .5 0 1-.4 1-1v-3.9zm0-7.7c0-.5-.4-1-1-1-.5 0-1 .4-1 1v3.9c0 .5.4 1 1 1 .5 0 1-.4 1-1v-3.9z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="48.3 0 59 56.7" id="jewerly">
        <path d="M106 21.4s0-.1 0 0c-.1-.1-.1-.2-.2-.3L94.5 8.8l-.2-.2c-.2-.1-.3-.1-.5-.1H61.7c-.2 0-.4 0-.5.1-.1 0-.1.1-.2.2L49.7 21.1s0 .1-.1.1c0 .1-.1.1-.1.2s0 .1-.1.2v.6c0 .1.1.1.1.2 0 0 0 .1.1.1l27.4 34h.1l.1.1s.1 0 .1.1h.6s.1 0 .1-.1l.1-.1h.1l27.4-34c0-.1.1-.1.1-.2v-.1c0-.1.1-.2.1-.3v-.1c.3-.2.3-.3.2-.4zM94 11l9 9.8H88l6-9.8zm-1.9-.6L86.2 20l-6.7-9.6h12.6zm-7.7 10.4H71l6.7-9.7 6.7 9.7zm-8.5-10.4L69.3 20l-5.9-9.6h12.5zm3.8 41.4l4-15.6c.1-.3 0-.7-.2-.9s-.6-.3-.9-.2c-.3.1-.6.4-.7.7L77.8 52l-4.1-16.3c-.1-.3-.3-.6-.7-.7-.3-.1-.7 0-.9.2-.2.2-.3.6-.2.9l4 15.6-24.2-30L61.5 11l6 9.8H55.1c-.5 0-.9.4-.9.9s.4.9.9.9h13.4l2.4 9.7c.1.4.5.7.9.7h.2c.2-.1.5-.2.6-.4.1-.2.2-.5.1-.7l-2.2-9.2H85l-2.2 9.2c-.1.2 0 .5.1.7.1.2.3.4.6.4h.2c.4 0 .8-.3.9-.7l2.4-9.7h16.2L79.7 51.8zm-18.9-1.9l-3.1-1.5-1.5-3.1c-.2-.3-.5-.5-.9-.5s-.7.2-.9.5L53 48.4l-3.1 1.5c-.3.2-.5.5-.5.9s.2.7.5.9l3.1 1.5 1.5 3.1c.2.3.5.5.9.5s.7-.2.9-.5l1.5-3.1 3.1-1.5c.3-.2.5-.5.5-.9s-.3-.8-.6-.9zm-4.2 1.6c-.2.1-.3.2-.4.4l-.8 1.6-.8-1.6c-.1-.2-.2-.3-.4-.4l-1.6-.8 1.6-.8c.2-.1.3-.2.4-.4l.8-1.6.8 1.6c.1.2.2.3.4.4l1.6.8-1.6.8zM94.7 6.8l3.1 1.5 1.5 3.1c.2.3.5.5.9.5s.7-.2.9-.5l1.5-3.1 3.1-1.5c.3-.2.5-.5.5-.9s-.2-.7-.5-.9l-3.1-1.5-1.6-3c-.2-.3-.5-.5-.9-.5s-.7.2-.9.5l-1.5 3.1-3.1 1.5c-.3.2-.5.5-.5.9 0 .3.2.7.6.8zm4.2-1.6c.2-.1.3-.2.4-.4l.8-1.6.8 1.6c.1.2.2.3.4.4l1.7.8-1.6.8c-.2.1-.3.2-.4.4l-.8 1.6-.8-1.6c-.1-.2-.2-.3-.4-.4L97.3 6l1.6-.8zm3.5 42.8l-3.1-1.5-1.5-3.1c-.2-.3-.5-.5-.9-.5s-.7.2-.9.5l-1.5 3.1-3 1.5c-.3.2-.5.5-.5.9s.2.7.5.9l3.1 1.5 1.5 3.1c.2.3.5.5.9.5s.7-.2.9-.5l1.5-3.1 3.1-1.5c.3-.2.5-.5.5-.9-.1-.4-.3-.8-.6-.9zm-4.2 1.6c-.2.1-.3.2-.4.4l-.8 1.7-.8-1.6c-.1-.2-.2-.3-.4-.4l-1.6-.8 1.6-.8c.2-.1.3-.2.4-.4l.8-1.6.8 1.6c.1.2.2.3.4.4l1.6.8-1.6.7z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="48.3 0 59 56.7" id="money">
        <path d="M105.2 15L53.3 6.7v4.4l-3-.2V15h-2v34.5h58.9V15h-2zM55.4 9.1l27.2 4.4-27.2-2.2V9.1zm-3.1 4l1 .1 6.9.5L76.7 15H52.3v-1.9zm52.9 34.4H50.3V17.1h54.8v30.4z"></path>
        <path d="M54.9 25.2c2 0 3.6-1.6 3.6-3.6S56.9 18 54.9 18s-3.6 1.6-3.6 3.6 1.6 3.6 3.6 3.6zm0-5.1c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5c-.1-.8.6-1.5 1.5-1.5zM97 21.6c0 2 1.6 3.6 3.6 3.6s3.6-1.6 3.6-3.6-1.6-3.6-3.6-3.6c-2 .1-3.6 1.7-3.6 3.6zm5.1 0c0 .8-.7 1.5-1.5 1.5s-1.5-.7-1.5-1.5.7-1.5 1.5-1.5 1.5.7 1.5 1.5zM54.9 39.4c-2 0-3.6 1.6-3.6 3.6s1.6 3.6 3.6 3.6 3.6-1.6 3.6-3.6c-.1-2-1.7-3.6-3.6-3.6zm0 5.1c-.8 0-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5 1.5.7 1.5 1.5-.7 1.5-1.5 1.5zm45.7-5.1c-2 0-3.6 1.6-3.6 3.6s1.6 3.6 3.6 3.6 3.6-1.6 3.6-3.6c-.1-2-1.7-3.6-3.6-3.6zm0 5.1c-.8 0-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5 1.5.7 1.5 1.5-.7 1.5-1.5 1.5z"></path>
        <path d="M80.3 46.3c.1 0 .3 0 .4-.1.4-.1.7-.2 1.1-.3.2-.1.3-.1.5-.2s.4-.2.6-.2c.2-.1.4-.1.5-.2l.6-.3c.3-.1.5-.3.8-.4 0 0 .1 0 .1-.1H96V43c0-2.5 2.1-4.6 4.6-4.6h.4l1.1.1V26.1l-1.1.1h-.4c-2.5 0-4.6-2.1-4.6-4.6v-.4l.1-1.1H85c-2.1-1.3-4.6-2-7.3-2s-5.2.8-7.3 2H59.3l.1 1.1v.4c0 2.5-2.1 4.6-4.6 4.6h-.4l-1.1-.1v12.4l1.1-.1h.4c2.5 0 4.6 2.1 4.6 4.6v.4l-.1 1.1h11.1c.2.1.3.2.5.3.1 0 .1.1.2.1.3.2.7.3 1 .5.1 0 .2.1.2.1.4.2.8.3 1.2.4.4.1.8.2 1.3.3.1 0 .2 0 .3.1.3.1.7.1 1 .2h.4c.4 0 .9.1 1.3.1s.9 0 1.3-.1h.4c.2-.1.5-.2.8-.2zm-5.4-2.2h-.2c-.3-.1-.7-.2-1-.3-.1-.1-.3-.1-.4-.2-.2-.1-.5-.2-.7-.3-.1-.1-.2-.1-.3-.2l2.7-1.3c.6-.3.9-.9.9-1.5v-1.7l-.6-.3c-1.3-.6-2.1-1.6-2.6-3.3l-.1-.5-.6-.1c-.3-.1-.5-.4-.5-.7v-.9c0-.3.2-.6.4-.7l.5-.3.1-.5c.1-.8.3-1.6.5-2.2.1-.3.2-.5.3-.7.3-.6.4-.9.4-1.5 1 .5 2.2.7 3.5.6h.4c3.2 0 4.8 1.2 5.1 3.8l.1.5.5.2c.2.1.4.3.4.7v.9c0 .3-.2.6-.5.7l-.5.2-.1.5c-.4 1.7-1.3 2.7-2.6 3.3l-.6.3v1.7c0 .6.4 1.2.9 1.5l2.8 1.4s-.1 0-.1.1c-.4.2-.7.3-1.1.4h-.1c-2.3.9-4.7 1-6.9.4zm12.8-22H94c.2 3.2 2.8 5.8 6.1 6.1v8.2c-3.2.2-5.8 2.8-6.1 6.1h-6.3c.2-.2.3-.4.5-.5l.5-.5.2-.2c1.7-2.1 2.7-4.6 3-7.3v-.1c0-.5.1-1 .1-1.4 0-.5 0-1-.1-1.5v-.1c-.3-2.7-1.3-5.2-3-7.3l-.2-.2c-.1-.2-.3-.3-.5-.5-.2-.4-.3-.5-.5-.8 0 .1 0 0 0 0zm-3.5-.1c.8.5 1.6 1.2 2.3 1.8l.3.3c.2.2.4.5.6.7.1.1.2.3.3.4.2.3.4.5.5.8.1.1.2.2.2.4l.6 1.2c.1.2.1.3.2.5l.3.9c0 .2.1.3.1.5.1.3.1.6.2.9 0 .1.1.3.1.4.1.5.1.9.1 1.4s0 1-.1 1.4c0 .2 0 .3-.1.4 0 .3-.1.6-.2.9 0 .2-.1.3-.1.5l-.3.9c-.1.2-.1.3-.2.5l-.6 1.2c-.1.1-.1.2-.2.4-.2.3-.3.5-.5.8-.1.1-.2.3-.3.4-.2.3-.4.5-.6.7l-.3.3c-.5.5-1 .9-1.6 1.4-.2-.1-.3-.2-.5-.3l-3.1-1.6V40c1.4-.8 2.4-2.1 3-3.8.9-.5 1.4-1.4 1.4-2.4v-.9c0-.8-.4-1.6-1-2.1-.4-2.4-2-5.1-7.1-5.1H77c-.7.1-1.8 0-2.8-.6-.4-.2-.6-.5-.8-.7-.3-.4-.9-.6-1.4-.4-.5.2-.8.7-.7 1.2 0 .3.1.7.2 1.1.2.8.2.8-.1 1.3-.1.2-.2.4-.3.8-.3.7-.5 1.5-.6 2.3-.6.5-1 1.3-1 2.1v.9c0 1 .6 1.9 1.4 2.4.6 1.8 1.6 3 3 3.8v.2l-3.3 1.6c-.1.1-.2.1-.3.2-.5-.4-1-.8-1.4-1.2l-.3-.3c-.2-.2-.4-.5-.6-.7-.1-.1-.2-.3-.3-.4-.2-.3-.4-.5-.5-.8-.1-.1-.2-.2-.2-.4l-.6-1.2c-.1-.2-.1-.3-.2-.5l-.3-.9c0-.2-.1-.3-.1-.5-.1-.3-.1-.6-.2-.9 0-.1-.1-.3-.1-.4-.1-.5-.1-.9-.1-1.4s0-1 .1-1.4c0-.2 0-.3.1-.4 0-.3.1-.6.2-.9 0-.2.1-.3.1-.5l.3-.9c.1-.2.1-.3.2-.5l.6-1.2c.1-.1.1-.2.2-.4.2-.3.3-.5.5-.8.1-.1.2-.3.3-.4.2-.3.4-.5.6-.7l.3-.3c.7-.7 1.4-1.3 2.3-1.8 1.9-1.2 4.1-1.9 6.5-1.9 2.4-.1 4.6.6 6.5 1.8zM61.4 42.5c-.2-3.2-2.8-5.8-6.1-6.1v-8.2c3.2-.2 5.8-2.8 6.1-6.1h6.3c-.2.2-.3.4-.5.5l-.5.5-.2.2c-1.7 2.1-2.7 4.6-3 7.3v.1c0 .5-.1 1-.1 1.4 0 .5 0 1 .1 1.5v.1c.3 2.7 1.3 5.2 3 7.3l.2.2c.1.2.3.3.5.5s.3.4.5.5l-6.3.3z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="48.3 0 59 56.7" id="premium">
        <path d="M80.8 17.8l-2-6.2-2 6.2h-6.5l5.3 3.8-2 6.2 5.3-3.8 5.3 3.8-2-6.2 5.3-3.8h-6.7zm-.4 5.1l-1.7-1.2-1.7 1.2.7-2-1.7-1.2h2.1l.7-2 .7 2h2.1l-1.7 1.2.5 2z"></path>
        <path d="M97.9 23.9c.8-.9 1.4-2 1.5-3.2-.1-1.2-.7-2.3-1.5-3.2-.4-.5-.8-1-1-1.6-.1-.7-.1-1.4 0-2 .3-1.2.2-2.4-.3-3.4-.7-1-1.7-1.7-2.9-2-.6-.2-1.2-.5-1.7-.9-.4-.5-.7-1.1-.9-1.7-.3-1.2-1-2.2-2-2.9-1.1-.5-2.3-.6-3.4-.3-.7.1-1.3.2-2 0-.6-.2-1.2-.6-1.6-1-.9-.8-2-1.4-3.2-1.5-1.2.1-2.3.7-3.2 1.5-.5.4-1 .8-1.6 1-.7.1-1.4.1-2 0-1.2-.3-2.4-.2-3.4.3-1 .7-1.7 1.7-2 2.9-.2.6-.5 1.2-.9 1.7-.5.4-1.1.7-1.7.9-1.2.3-2.2 1-2.9 2-.5 1.1-.6 2.3-.3 3.4.1.7.2 1.3 0 2-.2.6-.6 1.2-1 1.6-.8.9-1.4 2-1.5 3.2.1 1.2.7 2.3 1.5 3.2.4.5.8 1 1 1.6.1.7.1 1.4 0 2-.3 1.2-.2 2.4.3 3.4.7 1 1.7 1.7 2.9 2 .6.2 1.2.5 1.7.9.4.5.7 1.1.9 1.7l.1.3v20.7L79 52.4l12 4.3V36c0-.1.1-.2.1-.3.2-.6.5-1.2.9-1.7.5-.4 1.1-.7 1.7-.9 1.2-.3 2.2-1 2.9-2 .5-1.1.6-2.3.3-3.4-.1-.7-.2-1.3 0-2 .2-.8.6-1.3 1-1.8zm-8.8 23h-2.8v1.9h2.8v5.3L79.7 51v-6.8h-1.9V51l-9.4 3.1v-9H75v-1.9h-6.6v-4.6c1.1.5 2.3.6 3.4.3.7-.1 1.3-.2 2 0 .6.2 1.2.6 1.6 1 .9.8 2 1.4 3.2 1.5 1.2-.1 2.3-.7 3.2-1.5.5-.4 1-.8 1.6-1 .7-.1 1.4-.1 2 0 1.2.3 2.4.2 3.4-.3v8.3zm7.3-24.2c-.6.7-1 1.5-1.3 2.3-.2.9-.2 1.8 0 2.7.2.7.2 1.5-.1 2.3-.5.6-1.2 1-2 1.2-.9.3-1.7.8-2.4 1.4-.6.7-1.1 1.5-1.4 2.4-.2.8-.6 1.4-1.2 2-.7.2-1.5.3-2.3.1-.9-.2-1.8-.2-2.7 0-.8.3-1.6.7-2.3 1.3-.6.6-1.3.9-2.1 1.1-.8-.2-1.5-.5-2.1-1.1-.7-.6-1.5-1-2.3-1.3-.4-.1-.8-.1-1.1-.1-.5 0-1.1.1-1.6.1-.7.2-1.5.2-2.3-.1-.6-.5-1-1.2-1.2-2-.3-.9-.8-1.7-1.4-2.4-.7-.6-1.5-1.1-2.4-1.4-.8-.2-1.4-.6-2-1.2-.2-.7-.3-1.5-.1-2.3.2-.9.2-1.8 0-2.7-.3-.8-.7-1.6-1.3-2.3-.6-.6-.9-1.3-1.1-2.1.2-.8.5-1.5 1.1-2.1.6-.7 1-1.5 1.3-2.3.2-.9.2-1.8 0-2.7-.2-.7-.2-1.5.1-2.3.5-.6 1.2-1 2-1.2.9-.3 1.7-.8 2.4-1.4.6-.7 1.1-1.5 1.4-2.4.2-.8.6-1.4 1.2-2 .7-.2 1.5-.3 2.3-.1.9.2 1.8.2 2.7 0 1-.1 1.8-.5 2.5-1.1.5-.6 1.3-1 2-1.1.8.1 1.5.5 2.1 1.1.7.6 1.5 1 2.3 1.3.9.2 1.8.2 2.7 0 .7-.2 1.5-.2 2.3.1.6.5 1 1.2 1.2 2 .3.9.8 1.7 1.4 2.4.7.6 1.5 1.1 2.4 1.4.8.2 1.4.6 2 1.2.2.7.3 1.5.1 2.3-.2.9-.2 1.8 0 2.7.3.8.7 1.6 1.3 2.3.6.6.9 1.3 1.1 2.1-.2.6-.6 1.4-1.2 1.9z"></path>
        <path d="M78.7 5.6c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15c.1-8.2-6.7-15-15-15zm13.2 15.1c0 5.4-3.3 10.2-8.3 12.2-6.7 2.7-14.4-.6-17.1-7.3-2.7-6.7.6-14.4 7.3-17.1 6.8-2.7 14.5.5 17.2 7.3.6 1.5.9 3.2.9 4.9zm-9.4 26.2h1.9v1.9h-1.9z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="48.3 0 59 56.7" id="security">
        <path d="M99 6.5L81.1 1.2c-1.4-.4-2.9-.4-4.3 0L58.9 6.5c-1.3.4-2.2 1.6-2.2 3v14.8c0 6.9 2 13.5 5.9 19.1 3.8 5.5 9 9.7 15.2 12.3.4.2.8.2 1.2.2.4 0 .8-.1 1.2-.2 6.2-2.5 11.4-6.7 15.2-12.3 3.9-5.6 5.9-12.3 5.9-19.1V9.5c0-1.4-1-2.7-2.3-3zm.1 17.7c0 6.5-1.9 12.7-5.6 18.1-3.5 5.2-8.5 9.2-14.3 11.6-.2.1-.3.1-.5 0-5.8-2.4-10.8-6.4-14.4-11.6-3.7-5.3-5.6-11.6-5.6-18.1V9.1c0-.3.2-.5.5-.6l18.3-5.4c.5-.1 1-.2 1.4-.2.5 0 1 .1 1.4.2l18.3 5.4c.3.1.5.3.5.6v15.1z"></path>
        <path d="M92.9 12L79.5 8.1c-.3-.1-.7-.1-1.1 0L65.1 12c-.8.2-1.3 1-1.3 1.8v10.5c0 5.5 1.7 10.9 4.9 15.4 2.5 3.5 5.7 6.4 9.5 8.4.3.1.6.2.9.2.3 0 .6-.1.9-.2 3.8-2 7-4.9 9.5-8.4 3.2-4.5 4.9-9.8 4.9-15.4V13.8c-.2-.8-.8-1.6-1.5-1.8zm-1 12.2c0 5.1-1.5 10-4.5 14.2-2.2 3.1-5.1 5.8-8.5 7.6-3.3-1.8-6.3-4.4-8.5-7.6-2.9-4.2-4.5-9.1-4.5-14.2V14l13-3.8 13 3.8v10.2z"></path>
    </symbol>
</svg>

<div id="pagewrap" class="pagewrap">
    <div id="html-content" class="wrapper-content">
        @yield('header')

        @yield('content')

        @yield('footer')

        <a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <div id="loader"
         data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z"
         class="pageload-overlay">
        <div class="loader-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60"
                 preserveaspectratio="none">
                <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
            </svg>
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
            <div class="sk-circle sk-circle-out">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery-->
<script src="{{ url('assets/vendors/jquery-1.10.2.min.js') }}"></script>
<!-- Bootstrap JavaScript-->
<script src="{{ url('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Vendors-->
<script src="{{ url('assets/vendors/flexslider/jquery.flexslider-min.js') }}"></script>
<script src="{{ url('assets/vendors/swipebox/js/jquery.swipebox.min.js') }}"></script>
<script src="{{ url('assets/vendors/slick/slick.min.js') }}"></script>
<script src="{{ url('assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('assets/vendors/jquery-countTo/jquery.countTo.min.js') }}"></script>
<script src="{{ url('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ url('assets/vendors/parallax/parallax.min.js') }}"></script>
<script src="{{ url('assets/vendors/gmaps/gmaps.min.js') }}"></script>
<script src="{{ url('assets/vendors/audiojs/audio.min.js') }}"></script>
<script src="{{ url('assets/vendors/vide/jquery.vide.min.js') }}"></script>
<script src="{{ url('assets/vendors/pageloading/js/svgLoader.min.js') }}"></script>
<script src="{{ url('assets/vendors/pageloading/js/classie.min.js') }}"></script>
<script src="{{ url('assets/vendors/pageloading/sidebartransition/js/sidebarEffects.min.js') }}"></script>
<script src="{{ url('assets/vendors/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ url('assets/vendors/wowjs/wow.min.js') }}"></script>
<script src="{{ url('assets/vendors/skrollr.min.js') }}"></script>
<script src="{{ url('assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"
        integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
        crossorigin="anonymous"></script>
<!-- Own script-->
<script src="{{ url('assets/js/layout.js') }}"></script>
<script src="{{ url('assets/js/elements.js') }}"></script>
<script src="{{ url('assets/js/widget.js') }}"></script>
<!--UPDATE-->
<script src="{{ url('assets/js/jquery.growl.js') }}"></script>

{{--<script src="{{ url('js/afterScripts.js') }}"></script>--}}

@include('partials.notifications.alert')

</body>
</html>
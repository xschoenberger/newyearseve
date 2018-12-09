<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>N.Y.E @ schoenbergers'</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="New Year's Eve at schoenbergers'. Celebrating New Year's Eve and our new apartment. Come as you are.">
        <meta property="og:title" content="New Year's at schoenbergers'">
        <meta property="og:url" content="https://newyearseve.ineffable.at"/>
        <meta property="og:description" content="New Year's Eve at schoenbergers'. Celebrating New Year's Eve and our new apartment. Come as you are.">
        <meta property="og:image" content="{{ asset("imgs/NYE_logo_hxyds.png") }}">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="icon" href="/imgs/icons/fireworks.png">
    </head>
    <body>
        @include("partials.alerts")
        @yield("content")
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
        @if(Route::has("enter"))
            <script src="https://jackrugile.com/lab/fireworks-v2/js/dat.gui.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        @endif
        <script src="/js/app.js"></script>
    </body>
</html>

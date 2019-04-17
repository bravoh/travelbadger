<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>TravelBadger - Making your travels easy</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @include("partials.styles")
</head>
<body>
@include("partials.nav")
<div class="_pos-r">
    <div class="theme-hero-area _h-desk-100vh">
        @yield("content")
    </div>
    @include("partials.footer")
</div>
</body>
@include("partials.scripts")
</body>
</html>

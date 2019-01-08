<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>BION - Оценочная компания в Казахстане</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/mobile.css">
    <link rel="stylesheet" href="/css/desktop.css">
    <link rel="stylesheet" href="/css/vendor/lightbox.min.css">
    <link rel="stylesheet" href="css/header.min.css">


</head>
<body>
<!-- CLick sounds -->
<audio controls id="audio">  
    <source src="/audio/click.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
<!-- End of CLick sounds -->

<div class="firstbg"></div>
<div class="secondbg"></div>

@yield('content')

<footer>
    {!! $footer !!}
</footer>


@include('frontend.partials.vue_templates')





<script src="/js/vendor/jquery-3.3.1.min.js"></script>
<script src="/js/vendor/popper.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="/js/vendor/slick.min.js"></script>
<script src="/js/vendor/vue.js"></script>
<script src="/js/vendor/jquery.spincrement.min.js"></script>
<script src="/js/vendor/lightbox.min.js"></script>
<script src="/js/templates.js"></script>
<script src="/js/app.js"></script>

</body>

</html>
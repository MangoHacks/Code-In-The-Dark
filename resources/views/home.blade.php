<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="js/codemirror/codemirror.css">
    <link rel="stylesheet" href="js/codemirror/dark-theme.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/extended.css">
</head>
<body>

<header id="header">
    <div id="logo" title="Double click to submit!">
        lights!
    </div>

    <div id="sponsors">
        <a href="#" class="open-assets">Assets Panel</a>
        <img src="img/logo.png" alt="Code In The Dark">
    </div>
</header>

<form action='/
' method='post'>
    {{ csrf_field() }}
    <input type="hidden" name="round" value="1" />
    <input type="hidden" name="start" value="2015-09-16 21:56:42 +0000" />
    <input type="hidden" name="name" id="name" value="" />
    <textarea name="html" id="code"><!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
    </style>
</head>
<body>
</body>
</html></textarea>
</form>
<div class="assets_panel">
    <a href="#" class="close-button">✖</a>
    @include('assets_panel')
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="js/codemirror/codemirror.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>

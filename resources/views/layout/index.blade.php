<!DOCTYPE html>
<html lang="fa">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/index_files/style.css" type="text/css" rel="stylesheet">
    @yield ("style")
    <link href="/index_files/bootstrap-datepicker.css" type="text/css" rel="stylesheet">
    <link href="http://travelgo.iranneginhotel.ir/images/favicon.png" rel="shortcut icon" type="image/png">
    <title>برو سفر</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>

    @include("layout.header")


    @yield ("content")


    @include("layout.footer")

<script src="/index_files/jquery.min.js" type="text/javascript" wfd-invisible="true"></script>
<script src="/index_files/popper.min.js" type="text/javascript" wfd-invisible="true"></script>
<script src="/index_files/bootstrap.min.js" type="text/javascript" wfd-invisible="true"></script>
<script src="/index_files/owl.carousel.min.js" type="text/javascript" wfd-invisible="true"></script>
<script src="/index_files/slick.js" type="text/javascript" wfd-invisible="true"></script>
<script src="/index_files/swiper.min.js" type="text/javascript" wfd-invisible="true"></script>
<script src="/index_files/main.js" type="text/javascript" wfd-invisible="true"></script>
<script src="/index_files/jquery.fancybox.min.js" type="text/javascript" wfd-invisible="true"></script>
<script src="/index_files/bootstrap-datepicker.min.js" type="text/javascript" wfd-invisible="true"></script>

@yield ("javascript")

</body>

</html>

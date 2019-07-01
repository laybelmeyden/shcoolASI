<!DOCTYPE html>
<html>

<head>
  <title>ANO</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="IT СМЕНА 2018
ПО ИНФОРМАЦИОННЫМ ТЕХНОЛОГИЯМ И ТЕХНИЧЕСКИМ ВИДАМ СПОРТА"/>
  <META NAME="keywords" CONTENT="IT СМЕНА 2018
ПО ИНФОРМАЦИОННЫМ ТЕХНОЛОГИЯМ И ТЕХНИЧЕСКИМ ВИДАМ СПОРТА">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="SHORTCUT ICON" href="assets/img/air_fav.png" type="image/x-icon">

  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="IT СМЕНА 2018
ПО ИНФОРМАЦИОННЫМ ТЕХНОЛОГИЯМ И ТЕХНИЧЕСКИМ ВИДАМ СПОРТА" />
  <meta property="og:description" content="IT СМЕНА 2018
ПО ИНФОРМАЦИОННЫМ ТЕХНОЛОГИЯМ И ТЕХНИЧЕСКИМ ВИДАМ СПОРТА" />
  <meta property="og:image" href=""  />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="IT СМЕНА 2018
ПО ИНФОРМАЦИОННЫМ ТЕХНОЛОГИЯМ И ТЕХНИЧЕСКИМ ВИДАМ СПОРТА" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="assets/owl-carousel/assets/owl.carousel.min.css" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">      
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>

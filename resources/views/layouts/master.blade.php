<!DOCTYPE html>
<html>

<head>
  <title>Интерактивная школа волонтеров краеведческой работы <br>Сибирского федерального округа</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="Интерактивная школа волонтеров краеведческой работы Сибирского федерального округа"/>
  <META NAME="keywords" CONTENT="Интерактивная школа волонтеров краеведческой работы Сибирского федерального округа">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="SHORTCUT ICON" href="assets/img/air_fav.png" type="image/x-icon">

  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Интерактивная школа волонтеров краеведческой работы Сибирского федерального округа" />
  <meta property="og:description" content="Интерактивная школа волонтеров краеведческой работы Сибирского федерального округа" />
  <meta property="og:image" href="https://itvolonter.ru/storage/news/August2019/Sbpp4AedkB2avsg30URN.jpg"  />
  <meta property="og:url" content="https://itvolonter.ru/storage/news/August2019/Sbpp4AedkB2avsg30URN.jpg" />
  <meta property="og:site_name" content="Интерактивная школа волонтеров краеведческой работы Сибирского федерального округа" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">  
    <link rel="stylesheet" href="assets/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl-carousel/assets/owl.theme.default.min.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>

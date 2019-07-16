@extends('layouts.master')

@section('content')

<div id="fh5co-hero-carousel" class="carousel slide header crsl_one" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img class="d-block w-100 home-bg" src="assets/img/img221.png">

                <div class="carousel-caption d-md-block">
                    <h1>Интерактивная школа волонтеров краеведческой работы</h1>
                    <h1>Сибирского федерального округа</h1>

                </div>


            </div>
            <div class="scroll-button">
                <a href="#about-us" class="page-scroll">
                    <img src="assets/img/arrows-down.png" alt="arrow down" />
                </a>

            </div>
        </div>
    </div>


    <div class="container-fluid fh5co-about-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <svg class="back-bg" viewBox="0 0 535 618">
                        <defs>
                            <linearGradient id="PSgrad_0" x1="0%" x2="100%" y1="0%" y2="0%">
                                <stop offset="0%" stop-color="rgb(88,192,255)" stop-opacity="1" />
                                <stop offset="100%" stop-color="rgb(18,112,228)" stop-opacity="1" />
                            </linearGradient>

                        </defs>
                        <path fill-rule="evenodd" fill="rgb(18, 112, 228)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                        <path fill="url(#PSgrad_0)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                    </svg>

                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <div>
                            <img src="assets/img/Penetration-Testing-vs-Vulnerability-Scanning.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-us-content">
                        <h2>О Нас</h2>
                        <p>Интерактивные школы краеведческой работы стартуют в Сибири

Агентство стратегических инноваций в июле запускает проект «Интерактивная школа волонтеров краеведческой работы Сибирского Федерального округа», который стал победителем конкурса Роспатриотцентра на предоставление субсидий из федерального бюджета и проводится в рамках реализации государственной программы "Патриотическое воспитание граждан Российской Федерации на 2016 - 2020 годы".

Уникальность проекта заключается в том, что обучение проходит с использованием инновационных технологий и современных технических средств обучения. Проект реализуется на территории двух регионов Сибирского Федерального округа: Омской и Томская областях. В рамках проекта будет проведено две региональные школы в столицах указанных субъектов РФ. Минимальное количество участников каждой школы – 75 человек. Волонтеры пройдут обучение по использованию в краеведческой работе, популяризации исторических и географических знаний следующих технологий и технических средств:

- аэронавигационная съемка с использованием беспилотных мультироторных летательных аппаратов;

- исследование акватории водоемов с использованием телеуправляемых необитаемых подводных аппаратов;

- виртуальные музеи и применение технологий виртуальной (VR), дополненной (AR) и смешанной реальности (MR) в изучении среды обитания;

- реализация проектов краеведческой и патриотической тематики на базе современных средств образовательной робототехники;

- использование интерактивных технологий и тематических игр в краеведении.

По итогам работы интерактивной школы будут сформированы и изданы методические рекомендации по использованию инновационных технических средств обучения в краеведческой работе, а также видеокурс по применению современных технологий в подготовке волонтеров для краеведческой работы, патриотического воспитания, популяризации исторического и географического образования.</p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co-news" id="news_1">
        <div class="container">
            <h2>Новости</h2>
            <div class="row">
                <div class="owl-carousel owl-carousel2 owl-theme">
                @foreach ($news as $new)
                    <a href="/new{{ $new->id }}">
                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="/storage/{{ $new->img }}" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>{{ $new -> main_title}}</h5>
                                <p class="card-text">{{ $new -> mini_title }}</p>
                            </div>
                        </div>
                    </div>
                    </a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid fh5co-news" id="news">
        <div class="container">
            <h2>Эксперты</h2>
            <div class="row">
                <div class="owl-carousel owl-carousel2 owl-theme">
                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="assets/img/news1.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>How to take a Awosome photo Of
                                    Groups! </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="assets/img/news2.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>How to take a Awosome photo Of
                                    Groups! </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="assets/img/news3.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>How to take a Awosome photo Of
                                    Groups! </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->
</body>
@endsection

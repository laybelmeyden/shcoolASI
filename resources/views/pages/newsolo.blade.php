@extends('layouts.master')

@section('content')
<div id="fh5co-hero-carousel" class="carousel slide header crsl_one crsl_two" data-ride="carousel">
        
</div>


    <div class="container-fluid fh5co-about-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 solo_blade">
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
                        <img src="/storage/{{ $solo->img }}" alt="" class="img-fluid" />
                    </div>
                </div>
                </div>
                <div class="col-lg-8">
                <div class="about-us-content">
                    <h2>{{ $solo -> main_title }}</h2>
                    <p>{!! $solo -> body !!}</p>
                    <!-- <a href="#" class="read-more">Read More</a> -->
                </div>
                </div>


                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-6">
            <img class="img_solo" src="/storage/{{ $solo->img }}" alt="">
            <img class="line_news" src="assets/img/Rectanglesolonews.png" alt="">
        </div>
        <div class="col-xl-6">
            <p class="news_solo_title">{{ $solo -> main_title }}</p>
        </div>
        <div class="col-xl-12 news_solo_body">
            <p>{!! $solo -> body !!}</p>
        </div>
    </div>
</div>
@endsection
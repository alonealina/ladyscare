@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="ranking_title">NEWS</div>

<img src="{{ asset('img/news_banner.png') }}" class="news_banner">

<div class="top_news_flex">
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
            <div class="top_news_date_gray">2023.08.18</div>
        </div>
    </a>
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
            <div class="top_news_date_gray">2023.08.18</div>
        </div>
    </a>
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
            <div class="top_news_date_gray">2023.08.18</div>
        </div>
    </a>
</div>

<div class="top_news_flex">
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
            <div class="top_news_date_gray">2023.08.18</div>
        </div>
    </a>
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
            <div class="top_news_date_gray">2023.08.18</div>
        </div>
    </a>
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
            <div class="top_news_date_gray">2023.08.18</div>
        </div>
    </a>
</div>

<div class="top_news_flex">
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
            <div class="top_news_date_gray">2023.08.18</div>
        </div>
    </a>
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
            <div class="top_news_date_gray">2023.08.18</div>
        </div>
    </a>
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
            <div class="top_news_date_gray">2023.08.18</div>
        </div>
    </a>
</div>




@endsection


@section('content_sp')





<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/work.js') }}"></script>


@endsection
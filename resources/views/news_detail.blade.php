@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="ranking_title">NEWS</div>

<img src="{{ asset('img/news_banner.png') }}" class="news_banner">

<div class="news_detail_div">
    <div class="top_news_date_gray">2023.08.18</div>
    <div class="news_detail_title">ニュースタイトルニュースタイトルニュースタイトルニュースタイトル</div>
    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ ストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
</div>


@endsection


@section('content_sp')

<div class="page_title_sp_en">NEWS</div>

<div class="news_detail_title">ニュースタイトルニュースタイトルニュースタイトルニュースタイトル</div>

<img src="{{ asset('img/news_banner_sp.png') }}" class="news_banner" style="margin: 0 auto 0px">

<div class="news_detail_div">
    <div class="top_news_date_gray">2023.08.18</div>
    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
</div>


<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/work.js') }}"></script>


@endsection
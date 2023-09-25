@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="ranking_title">RANKING</div>

<div class="trouble_detail_flex">
    <div class="ranking_img_div">
        <img src="{{ asset('img/rank1.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_detail_img">
    </div>
    <div class="trouble_detail_content">
        <div class="trouble_item_name">商品名</div>
        <div class="trouble_item_text">商品名</div>
        <div class="trouble_item_text">￥1,000</div>
        <div class="trouble_item_pink">韓国での信頼度No.1デリケートゾーンのオールインワンクリーム</div>
        <div class="trouble_item_text">
            商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文
        </div>
    </div>
</div>

<div class="trouble_detail_flex">
    <div class="ranking_img_div">
        <img src="{{ asset('img/rank2.png') }}" class="rank_img">
        <img src="{{ asset('img/item4.png') }}" class="ranking_detail_img">
    </div>
    <div class="trouble_detail_content">
        <div class="trouble_item_name">商品名</div>
        <div class="trouble_item_text">商品名</div>
        <div class="trouble_item_text">￥1,000</div>
        <div class="trouble_item_pink">韓国での信頼度No.1デリケートゾーンのオールインワンクリーム</div>
        <div class="trouble_item_text">
            商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文
        </div>
    </div>
</div>

<div class="trouble_detail_flex">
    <div class="ranking_img_div">
        <img src="{{ asset('img/rank3.png') }}" class="rank_img">
        <img src="{{ asset('img/item5.png') }}" class="ranking_detail_img">
    </div>
    <div class="trouble_detail_content">
        <div class="trouble_item_name">商品名</div>
        <div class="trouble_item_text">商品名</div>
        <div class="trouble_item_text">￥1,000</div>
        <div class="trouble_item_pink">韓国での信頼度No.1デリケートゾーンのオールインワンクリーム</div>
        <div class="trouble_item_text">
            商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文
        </div>
    </div>
</div>

<div class="top_rank3">
    <a href="" class="top3_item_a">
        <img src="{{ asset('img/rank4.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top3_item_a">
        <img src="{{ asset('img/rank5.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top3_item_a">
        <img src="{{ asset('img/rank6.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
</div>

<div class="top_rank_other2">
    <a href="" class="top_rank_other_a">
        <img src="{{ asset('img/rank7.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top_rank_other_a">
        <img src="{{ asset('img/rank8.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top_rank_other_a">
        <img src="{{ asset('img/rank9.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top_rank_other_a">
        <img src="{{ asset('img/rank10.png') }}" class="rank_img">
        <img src="{{ asset('img/item5.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>

</div>





@endsection


@section('content_sp')





<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/work.js') }}"></script>


@endsection
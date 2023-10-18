@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="ranking_title">RANKING</div>

<div class="trouble_detail_flex">
    <a href="{{ route('item_detail') }}" class="ranking_img_a">
        <img src="{{ asset('img/rank1.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_detail_img">
    </a>
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
    <a href="{{ route('item_detail') }}" class="ranking_img_a">
        <img src="{{ asset('img/rank2.png') }}" class="rank_img">
        <img src="{{ asset('img/item4.png') }}" class="ranking_detail_img">
    </a>
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
    <a href="{{ route('item_detail') }}" class="ranking_img_a">
        <img src="{{ asset('img/rank3.png') }}" class="rank_img">
        <img src="{{ asset('img/item5.png') }}" class="ranking_detail_img">
    </a>
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
    <a href="{{ route('item_detail') }}" class="top3_item_a">
        <img src="{{ asset('img/rank4.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top3_item_a">
        <img src="{{ asset('img/rank5.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top3_item_a">
        <img src="{{ asset('img/rank6.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
</div>

<div class="top_rank_other2">
    <a href="{{ route('item_detail') }}" class="top_rank_other_a">
        <img src="{{ asset('img/rank7.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top_rank_other_a">
        <img src="{{ asset('img/rank8.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top_rank_other_a">
        <img src="{{ asset('img/rank9.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top_rank_other_a">
        <img src="{{ asset('img/rank10.png') }}" class="rank_img">
        <img src="{{ asset('img/item5.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>

</div>





@endsection


@section('content_sp')

<div class="ranking_wrapper">
    <h2>RANKING</h2>
    <div class="trouble_detail_card ranking_item">
        <img src="{{ asset('img/rank1_sp.svg') }}" class="ranknum_img_top3">
        <h3>韓国での信頼度No.1<br>デリケートゾーンのオールインワンクリーム</h3>
        <img src="{{ asset('img/item5.png') }}" class="trouble_detail_img">
        <div class="trouble_detail_item">
            <div class="trouble_detail_itemname">
                <p>商品名</p>
                <p class="itemname_bottom">Product Name</p>
            </div>
            <p>￥1,000</p>
        </div>
        <div class="trouble_item_text">
            <p>商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文</p>
        </div>
    </div>
    <div class="trouble_detail_card ranking_item">
        <img src="{{ asset('img/rank2_sp.svg') }}" class="ranknum_img_top3">
        <h3>韓国での信頼度No.1<br>デリケートゾーンのオールインワンクリーム</h3>
        <img src="{{ asset('img/item5.png') }}" class="trouble_detail_img">
        <div class="trouble_detail_item">
            <div class="trouble_detail_itemname">
                <p>商品名</p>
                <p class="itemname_bottom">Product Name</p>
            </div>
            <p>￥1,000</p>
        </div>
        <div class="trouble_item_text">
            <p>商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文</p>
        </div>
    </div>
    <div class="trouble_detail_card ranking_item">
        <img src="{{ asset('img/rank3_sp.svg') }}" class="ranknum_img_top3">
        <h3>韓国での信頼度No.1<br>デリケートゾーンのオールインワンクリーム</h3>
        <img src="{{ asset('img/item5.png') }}" class="trouble_detail_img">
        <div class="trouble_detail_item">
            <div class="trouble_detail_itemname">
                <p>商品名</p>
                <p class="itemname_bottom">Product Name</p>
            </div>
            <p>￥1,000</p>
        </div>
        <div class="trouble_item_text">
            <p>商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文商品紹介文</p>
        </div>
    </div>
    <div class="ranking_wrapper_2row">
        <a href="{{ route('item_detail') }}" class="pickup_item">
            <img src="{{ asset('img/rank4.png') }}" class="runknum_img">
            <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
            <p>商品名</p>
            <p>￥1,000</p>
        </a>
        <a href="{{ route('item_detail') }}" class="pickup_item">
            <img src="{{ asset('img/rank5.png') }}" class="runknum_img">
            <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
            <p>商品名</p>
            <p>￥1,000</p>
        </a>
        <a href="{{ route('item_detail') }}" class="pickup_item">
            <img src="{{ asset('img/rank6.png') }}" class="runknum_img">
            <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
            <p>商品名</p>
            <p>￥1,000</p>
        </a>
        <a href="{{ route('item_detail') }}" class="pickup_item">
            <img src="{{ asset('img/rank7.png') }}" class="runknum_img">
            <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
            <p>商品名</p>
            <p>￥1,000</p>
        </a>
        <a href="{{ route('item_detail') }}" class="pickup_item">
            <img src="{{ asset('img/rank8.png') }}" class="runknum_img">
            <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
            <p>商品名</p>
            <p>￥1,000</p>
        </a>
        <a href="{{ route('item_detail') }}" class="pickup_item">
            <img src="{{ asset('img/rank9.png') }}" class="runknum_img">
            <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
            <p>商品名</p>
            <p>￥1,000</p>
        </a>
        <a href="{{ route('item_detail') }}" class="pickup_item">
            <img src="{{ asset('img/rank10.png') }}" class="runknum_img">
            <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
            <p>商品名</p>
            <p>￥1,000</p>
        </a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/work.js') }}"></script>

@endsection
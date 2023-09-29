@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="trouble_div">
    <div class="trouble_title">TROUBLE<span class="category_ja">お悩みから探す</span></div>

    <div class="trouble_detail_title">気になる黒ずみや嫌なニオイ</div>
    <div class="trouble_detail_text">
        なかなか周りにはきけないけど、デリケートゾーンの黒ずみ、ニオイでお悩みのは方多いのではないでしょうか？<br>
        そんなあなたへ韓国からの心強いケアアイテムをご紹介。
    </div>

    <div class="trouble_detail_flex">
        <a href="{{ route('item_detail') }}"><img src="{{ asset('img/item3.png') }}" class="trouble_detail_img"></a>
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
        <img src="{{ asset('img/item4.png') }}" class="trouble_detail_img">
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
        <img src="{{ asset('img/item5.png') }}" class="trouble_detail_img">
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

    <div class="trouble_detail_blue">お悩みから探す</div>

    <div class="trouble_link_flex">
        <a href="" class="trouble_link_a">おりもの量の増加</a>
        <a href="" class="trouble_link_a">美肌効果を得たい</a>
        <a href="" class="trouble_link_a">かぶれやかゆみ、乾燥による<br>お肌のトラブル</a>
        <a href="" class="trouble_link_a">年齢や疲れによるたるみ</a>

    </div>

    <img src="{{ asset('img/trouble_bar.png') }}" class="trouble_bar">

</div>



@endsection


@section('content_sp')





<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/work.js') }}"></script>


@endsection
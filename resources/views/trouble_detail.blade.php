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
        <img src="{{ asset('img/item3.png') }}" class="trouble_detail_img">
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

<div class="work1_sp">
<img src="{{ asset('img/work1_sp.png') }}" class="work_img_sp1" id="main_img">
</div>

<div id="coffee_sp"></div>
<div id="work2" style="height: 140vw;padding-top:50px;">
    <img src="{{ asset('img/work2_icon.png') }}"  class="work_img" id="work2_icon" style="right: 4vw;width: 10vw;">
    <img src="{{ asset('img/work2_title.png') }}" class="work_img" id="work2_title" style="right: 18vw;width: 8vw;">
    <img src="{{ asset('img/work2_text.png') }}"  class="work_img" id="work2_text" style="left: 15vw;width: 50vw;">
</div>
<img src="{{ asset('img/work2_img.png') }}"   class="work_img" id="work2_img_sp">

<div id="wall_sp"></div>
<div class="work_bar_sp" id="work3_bar"></div>
<div id="work3" style="height: 80vw;">
    <img src="{{ asset('img/work3_text.png') }}"   class="work_img" id="work3_text" style="left: 10vw;width: 18vw;margin-top: 15vw;">
    <img src="{{ asset('img/work3_title.png') }}"  class="work_img" id="work3_title" style="left: 53vw;width: 8vw;">
    <img src="{{ asset('img/work3_green1.png') }}" class="work_img" id="work3_green1" style="left: 35vw;;width: 10vw;">
    <img src="{{ asset('img/work3_green2.png') }}" class="work_img" id="work3_green2" style="left: 35vw;;width: 10vw;">
</div>
<img src="{{ asset('img/work3_img.png') }}"    class="work_img" id="work3_img_sp">

<div id="stair_sp"></div>
<div class="work_bar_sp" id="work4_bar_sp"></div>
<div id="work4" style="height: 98vw;">
    <img src="{{ asset('img/work4_text.png') }}"   class="work_img" id="work4_text" style="right: 71vw;width: 23vw;">
    <img src="{{ asset('img/work4_title.png') }}"  class="work_img" id="work4_title" style="right: 40vw;width: 8vw;">
    <img src="{{ asset('img/work4_green1.png') }}" class="work_img" id="work4_green1" style="right: 55vw;width: 10vw;">
    <img src="{{ asset('img/work4_green2.png') }}" class="work_img" id="work4_green2" style="right: 55vw;width: 10vw;">
</div>
<img src="{{ asset('img/work4_img.png') }}"    class="work_img" id="work4_img_sp">

<div id="glass_sp"></div>
<div class="work_bar_sp" id="work5_bar_sp"></div>
<div id="work5" style="height: 80vw;">
    <img src="{{ asset('img/work5_title.png') }}"  class="work_img" id="work5_title" style="left: 53vw;width: 8vw;">
    <img src="{{ asset('img/work5_green1.png') }}" class="work_img" id="work5_green1" style="left: 35vw;;width: 10vw;">
    <img src="{{ asset('img/work5_green2.png') }}" class="work_img" id="work5_green2" style="left: 35vw;;width: 10vw;">
</div>
<img src="{{ asset('img/work5_img.png') }}"    class="work_img" id="work5_img_sp">

<div id="bunny_sp"></div>
<div class="work_bar_sp" id="work6_bar_sp"></div>
<div id="work6" style="height: 98vw;">
    <img src="{{ asset('img/work6_text.png') }}"   class="work_img" id="work6_text" style="right: 70vw;width: 24vw;">
    <img src="{{ asset('img/work6_title.png') }}"  class="work_img" id="work6_title" style="right: 40vw;width: 8vw;">
    <img src="{{ asset('img/work6_green1.png') }}" class="work_img" id="work6_green1" style="right: 55vw;width: 10vw;">
    <img src="{{ asset('img/work6_green2.png') }}" class="work_img" id="work6_green2" style="right: 55vw;width: 10vw;">
</div>
<img src="{{ asset('img/work6_img.png') }}"    class="work_img" id="work6_img_sp">

<div id="detail_sp"></div>
<div class="work_bar_sp" id="work7_bar"></div>
<div id="work7" style="height: 232vw;">
    <img src="{{ asset('img/work2_icon.png') }}"  class="work_img" id="work7_icon" style="right: 8vw;width: 13vw;margin-top: 5vw;">
    <img src="{{ asset('img/work7_title.png') }}" class="work_img" id="work7_title" style="right:25vw; width:8vw;">
    <a href="https://www.instagram.com/_usagicoffee/?igshid=YmMyMTA2M2Y%3D" target="_blank"><img src="{{ asset('img/insta.png') }}" class="work_img" id="work7_insta" style="right: 25vw;width: 8vw;margin-top: 88vw;"></a>
    <img src="{{ asset('img/work7_detail1.png') }}" class="work_img" id="work7_detail1" style="right:40vw; width:4vw;">
    <a href="https://goo.gl/maps/JAB6bUo7ViU3zKKR7" target="_blank"><img src="{{ asset('img/work7_detail2.png') }}" class="work_img" id="work7_detail2" style="right:47vw; width:4vw;"></a>
    <img src="{{ asset('img/work7_detail3.png') }}" class="work_img" id="work7_detail3" style="right:55vw; width:4vw;">
    <img src="{{ asset('img/work7_detail4.png') }}" class="work_img" id="work7_detail4" style="right:62vw; width:4vw;">
    <iframe id="work7_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.7847200501883!2d135.7499439511067!3d35.01209377388759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001092c24759437%3A0x36f0578ee072c303!2z5YWO54-I55Cy!5e0!3m2!1sja!2sjp!4v1670495684635!5m2!1sja!2sjp" 
         style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/work.js') }}"></script>


@endsection
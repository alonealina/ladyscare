@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="trouble_div">
    <div class="trouble_title">TROUBLE<span class="category_ja">お悩みから探す</span></div>

    <div class="trouble_flex">
        <div class="trouble_list">
            <a href="{{ route('trouble_detail') }}" class="trouble_a">気になる黒ずみや嫌なニオイ</a>
            <a href="" class="trouble_a">おりもの量の増加</a>
            <a href="" class="trouble_a">美肌効果を得たい</a>
            <a href="" class="trouble_a">かぶれやかゆみ、乾燥による<br>お肌のトラブル</a>
            <a href="" class="trouble_a">年齢や疲れによるたるみ</a>
        </div>
        <img src="{{ asset('img/trouble_main_img.png') }}" class="trouble_main_img">
    </div>

    <img src="{{ asset('img/trouble_bar.png') }}" class="trouble_bar">

    <div class="trouble_flex2">
        <img src="{{ asset('img/window1.png') }}" class="window_img" style="height: 45.3vw;">
        <img src="{{ asset('img/window2.png') }}" class="window_img" style="height: 45.3vw;">
        <img src="{{ asset('img/window3.png') }}" class="window_img">
    </div>

</div>



@endsection


@section('content_sp')

<div class="trouble_div">
    <div class="trouble_title">
        <h2>TROUBLE</h2>
        <h3>お悩みから探す</h3>
    </div>
    <div class="trouble_wrapper">
        <img src="{{ asset('img/trouble_main_img.png') }}" class="trouble_main_img">
        <div class="trouble_list">
            <a href="{{ route('trouble_detail') }}" class="trouble_a">気になる黒ずみや嫌なニオイ</a>
            <a href="" class="trouble_a">おりもの量の増加</a>
            <a href="" class="trouble_a">美肌効果を得たい</a>
            <a href="" class="trouble_a">かぶれやかゆみ<br>乾燥によるお肌のトラブル</a>
            <a href="" class="trouble_a">年齢や疲れによるたるみ</a>
        </div>        
    </div>

    @include('item.consultation')

</div>

@endsection
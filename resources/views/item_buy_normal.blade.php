@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="item_flex">
        <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img">
        <div>
            <div class="item_detail_name">Care Female デリケート専用美容液</div>
            <div class="item_detail_price">
                数量：1<br>
                小計：1,800円<br>
                送料：500円<br>
                合計：2480円
            </div>
        </div>
    </div>

    <div class="item_flex">
        <div class="">
            <div class="item_detail_sum">
                商品合計<span style="float:right;">39,400円</span><br>
                送料<span style="float:right;">550円</span>
            </div>
            <div class="item_detail_sum">合計(税込)<span style="float:right;">40,350円</span></div>
        </div>
        <div class="buy_btn_flex">
            <a href="{{ route('login') }}" class="buy_btn_black" style="padding: 1.25vw; margin:0;">ログインして購入</a>
            <a href="{{ route('member_regist') }}" class="buy_btn_white" style="padding: 1.25vw; margin:0;">会員登録して購入</a>
            <a href="{{ route('not_member_form') }}" class="buy_flex_text">会員登録せずに購入</a>
        </div>


    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/pass_rev.js') }}"></script>


@endsection


@section('content_sp')
<div class="item_flex">
    <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img">
    <div>
        <div class="item_detail_name">Care Female デリケート専用美容液</div>
        <div class="item_detail_price">
            数量：1<br>
            小計：1,800円<br>
            送料：500円<br>
            合計：2480円
        </div>
    </div>
</div>


<div class="">
    <div class="item_detail_sum">
        商品合計<span style="float:right;">39,400円</span><br>
        送料<span style="float:right;">550円</span>
    </div>
    <div class="item_detail_sum">合計(税込)<span style="float:right;">40,350円</span></div>
</div>

<a href="{{ route('member_regist') }}" class="send_btn send_btn_white" style="margin:20px auto;">会員登録して購入</a>
<a href="{{ route('login') }}" class="send_btn" style="margin:20px auto;">ログインして購入</a>
<a href="{{ route('not_member_form') }}" class="buy_flex_text">会員登録せずに購入</a>

<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
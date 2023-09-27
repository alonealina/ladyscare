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
            <a href="{{ route('paymethod_select') }}" class="buy_btn_black">ご登録の住所に配送<br><span style="font-size:1.1vw;">(お支払方法選択へ)</span></a>
            <a href="{{ route('member_edit') }}" class="buy_btn_white">未登録の住所に配送<br><span style="font-size:1.1vw;">(配送先入力へ)</span></a>
        </div>


    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/pass_rev.js') }}"></script>


@endsection


@section('content_sp')
<div class="contact_div_sp">
    <form name="mail_form" action="{{ route('mail_send') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="page_title_sp">CONTACT</div>

        <div class="contact_name">Name</div>
        <input class="form_text_sp" placeholder="" name="name" type="text" id="name">

        <div class="contact_name">Phone number</div>
        <input class="form_text_sp" placeholder="" name="tel" type="text" id="tel">

        <div class="contact_name">E-mail</div>
        <input class="form_text_sp" placeholder="" name="mail" type="text" id="mail">

        <div class="contact_name">Messsge</div>
        <textarea class="form_textarea_sp" name="content" id="content"></textarea>
        <div class="error_message_sp" id="error_message"></div>
        <div class="send_button" style="margin-top:20px;">
            <a href="#" onclick="clickMailButton()" style="margin:auto;">SEND</a>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
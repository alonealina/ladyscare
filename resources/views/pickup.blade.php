@extends('layouts.app')

@section('content')
<div class="pickup_div">
    <div class="pickup_title">PICK UP</div>

    <div class="category_flex">
        <a href="" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="" class="category_item_a">
            <img src="{{ asset('img/item4.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="" class="category_item_a">
            <img src="{{ asset('img/item5.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
    </div>


</div>


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
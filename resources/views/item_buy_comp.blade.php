@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">ご注文内容確認</span></div>
    <div class="pay_comp_div">

        ご注文ありがとうございます。<br>
        ご入力いただいたメールアドレスにご注文確定メールが届きましたら<br>
        お支払いをお願いいたします。

        <a href="{{ route('item_buy_comp') }}" class="buy_btn_black" style="padding: 1.25vw; margin: 2vw auto;">TOPに戻る</a>


    </div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/login.js') }}"></script>


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
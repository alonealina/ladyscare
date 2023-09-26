@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">パスワード再設定</span></div>

    <form name="login_form" action="{{ route('pass_rev_method') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="login_div">
            <div class="contact_name">パスワード</div>
            <input class="contact_text" placeholder="" name="pass" type="password" id="pass">
        </div>
        <div class="login_div">
            <div class="contact_name">パスワード確認</div>
            <input class="contact_text" placeholder="" name="pass_confirm" type="password" id="pass_confirm">
        </div>
        <a href="#!" onclick="clickLoginButton()" class="send_btn" style="width:30vw;">ログイン</a>

        <div class="error_message" id="error_message"></div>
    </form>

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
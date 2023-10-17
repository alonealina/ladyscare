@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">お問い合わせ</div>

    <form name="mail_form" action="{{ route('mail_send') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="contact_div">
            <div class="contact_name">お名前</div>
            <input class="contact_text" placeholder="" name="name" type="text" id="name">
        </div>
        <div class="contact_div">
            <div class="contact_name">メールアドレス</div>
            <input class="contact_text" placeholder="" name="mail" type="text" id="mail">
        </div>
        <div class="contact_div">
            <div class="contact_name">お問い合わせ内容</div>
            <textarea class="contact_textarea" placeholder="" name="content" id="content"></textarea>
        </div>
        <input type="hidden" name="recaptchaToken" id="recaptchaToken">
        <div class="g-recaptcha mt-3" data-sitekey="6Lc8TFonAAAAAKJqDjHHXEF-E9R-ODofyBtg6GMj" data-callback="callback_recaptcha"></div>
        <a href="#!" onclick="clickMailButton()" class="send_btn">送信</a>
        <div class="error_message" id="error_message"></div>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>


@endsection


@section('content_sp')
<div class="page_title_sp">お問い合わせ</div>

<form name="mail_form" action="{{ route('mail_send') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="contact_div">
        <input class="contact_text" placeholder="お名前" name="name" type="text" id="name">
    </div>
    <div class="contact_div">
        <input class="contact_text" placeholder="メールアドレス" name="mail" type="text" id="mail">
    </div>
    <div class="contact_div">
        <textarea class="contact_textarea" placeholder="お問い合わせ内容" name="content" id="content"></textarea>
    </div>
    <input type="hidden" name="recaptchaToken" id="recaptchaToken">
    <div class="g-recaptcha mt-3" data-sitekey="6Lc8TFonAAAAAKJqDjHHXEF-E9R-ODofyBtg6GMj" data-callback="callback_recaptcha"></div>
    <a href="#!" onclick="clickMailButton()" class="send_btn">送信</a>
    <div class="error_message" id="error_message"></div>
</form>
<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
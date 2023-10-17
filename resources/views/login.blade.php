@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">ログイン</span></div>

    <form name="login_form" action="{{ route('login_method') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="login_div">
            <div class="contact_name">メールアドレス</div>
            <input class="contact_text" placeholder="" name="mail" type="text" id="mail">
        </div>
        <div class="login_div">
            <div class="contact_name">パスワード</div>
            <input class="contact_text" placeholder="" name="pass" type="password" id="pass">
        </div>
        <a href="#!" onclick="clickLoginButton()" class="send_btn" style="width:30vw;">ログイン</a>

        <a href="{{ route('reminder') }}" class="reminder_link">パスワードをお忘れですか？</a>
        <div class="error_message" id="error_message"></div>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/login.js') }}"></script>


@endsection


@section('content_sp')
<div class="page_title_sp">ログイン</div>

<div class="reminder_text">ご登録のメールアドレスを入力して送信してください。</div>
<form name="login_form" action="{{ route('reminder_send') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="login_div">
        <div class="contact_name">メールアドレス</div>
        <input class="contact_text" placeholder="" name="mail" type="text" id="mail">
    </div>
    <div class="login_div">
        <div class="contact_name">パスワード</div>
        <input class="contact_text" placeholder="" name="pass" type="password" id="pass">
    </div>
    <a href="#!" onclick="clickLoginButton()" class="send_btn">ログイン</a>

    <a href="{{ route('reminder') }}" class="reminder_link">パスワードをお忘れですか？</a>
    <div class="error_message" id="error_message"></div>
</form>
<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/login.js') }}"></script>

@endsection
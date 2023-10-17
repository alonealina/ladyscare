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
        <a href="#!" onclick="clickLoginButton()" class="send_btn" style="width:30vw;">再設定</a>

        <div class="error_message" id="error_message"></div>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/pass_rev.js') }}"></script>


@endsection


@section('content_sp')
<div class="page_title_sp">パスワード再設定</div>

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
    <a href="#!" onclick="clickLoginButton()" class="send_btn">再設定</a>

    <div class="error_message" id="error_message"></div>
</form>
<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/pass_rev.js') }}"></script>

@endsection
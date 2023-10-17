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
<div class="page_title_sp">ご注文内容確認</div>

<div class="mail_comp">
    ご注文ありがとうございます。<br>
    ご入力いただいたメールアドレスにご注文確定メールが届きましたらお支払いをお願いいたします。
</div>

<a href="{{ route('index') }}" class="send_btn">TOPに戻る</a>

<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
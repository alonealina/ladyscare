@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="comp_text">ご入力いただいたメールアドレス宛に、パスワードの再設定用URLを送信します。<br>受信までしばらくお待ちください。</div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

@endsection


@section('content_sp')
<div class="page_title_sp">ログイン</div>

<div class="mail_comp">ご入力いただいたメールアドレス宛に、<br>パスワードの再設定用URLを送信します。<br>受信までしばらくお待ちください。</div>

<a href="{{ route('index') }}" class="send_btn">TOPに戻る</a>

<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
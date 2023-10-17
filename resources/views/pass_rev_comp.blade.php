@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">パスワード再設定</span></div>

    <div class="comp_text">パスワードを再設定しました。<br>元の画面に戻ります。</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/pass_rev.js') }}"></script>


@endsection


@section('content_sp')
<div class="page_title_sp">パスワード再設定</div>

<div class="mail_comp" style="text-align:center;">パスワードを再設定しました。<br>元の画面に戻ります。</div>

<a href="{{ route('index') }}" class="send_btn">TOPに戻る</a>

<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
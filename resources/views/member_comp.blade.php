@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">会員登録</div>
    <div class="comp_text">※会員登録はまだ完了していません※<br>自動返信メールに記載されているURLより本登録を完了して下さい。</div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

@endsection


@section('content_sp')
<div class="page_title_sp">会員登録</div>

<div class="mail_comp">※会員登録はまだ完了していません<br>※自動返信メールに記載されているURLより<br>本登録を完了して下さい。</div>

<a href="{{ route('index') }}" class="send_btn">TOPに戻る</a>

<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
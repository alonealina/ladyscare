@extends('layouts.app')

@section('content')

<div class="category_div">
    <div class="category_title">お問い合わせ</span></div>

    <div class="comp_text">お問い合わせありがとうございます。<br>返信が届くまで3営業程度かかる場合がございますので<br>しばらくお待ちください。</div>

</div>

@endsection


@section('content_sp')
<div class="page_title_sp">お問い合わせ</div>

<div class="mail_comp">お問い合わせありがとうございます。<br>返信が届くまで3営業程度かかる場合がございますので<br>しばらくお待ちください。</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>



@endsection
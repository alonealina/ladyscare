@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">ログイン</span></div>

    <div class="reminder_text">ご登録のメールアドレスを入力して送信してください。</div>
    <form name="login_form" action="{{ route('reminder_send') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="login_div">
            <div class="contact_name">メールアドレス</div>
            <input class="contact_text" placeholder="" name="mail" type="text" id="mail">
        </div>
        <a href="#!" onclick="clickReminderButton()" class="send_btn" style="width:30vw;">送信</a>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/reminder.js') }}"></script>


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
    <a href="#!" onclick="clickReminderButton()" class="send_btn">送信</a>
</form>
<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/reminder.js') }}"></script>


@endsection
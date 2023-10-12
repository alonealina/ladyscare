@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">マイページ</div>
    <div class="mypage_myname">会員名 様</div>
</div>

<div class="mypage_point_div">保有ポイント<span>0000　pt</span></div>


<div class="pay_confirm_div">

    お客様情報<br><br>
    田中美麗<br>
    105-0011, 東京都, 港区芝公園<br>
    +81 0334335111<br>
    example@info.com
    <a href="#!" class="mypage_edit_a">変更</a>

    <div class="gray_line"></div>

    お支払い方法<br><br>選択した方法が表示されます

    <a href="#!" class="mypage_edit_a">変更</a>

    <div class="gray_line"></div>

    配送方法<br><br>日本郵便

    <a href="#!" class="mypage_edit_a">変更</a>

    <div class="gray_line"></div>

    <div class="mypage_flex">
        <a href="{{ route('fav') }}" class="mypage_btn_a"><img src="{{ asset('img/mypage_btn1.png') }}"></a>
        <a href="{{ route('history') }}" class="mypage_btn_a"><img src="{{ asset('img/mypage_btn2.png') }}"></a>
        <a href="{{ route('subsc_item') }}" class="mypage_btn_a"><img src="{{ asset('img/mypage_btn3.png') }}"></a>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/login.js') }}"></script>


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
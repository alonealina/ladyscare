@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">お客様情報変更</div>

    <form name="regist_form" action="{{ route('member_comp') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="contact_div">
            <div class="contact_name">メールアドレス*</div>
            <input class="contact_text" placeholder="" name="mail" type="text" id="mail">
        </div>

        <div class="contact_div">
            <div class="contact_name">お名前*</div>
            <input class="contact_text" placeholder="" name="name" type="text" id="name">
        </div>
        <div class="contact_div">
            <div class="contact_name">フリガナ*</div>
            <input class="contact_text" placeholder="" name="kana" type="text" id="kana">
        </div>
        <div class="form_flex">
            <div class="contact_div_short">
                <div class="contact_name">郵便番号*</div>
                {{ Form::text('zip', old('zip'), ['id' => 'zip', 'class' => 'contact_text', 'maxlength' => 7, 'placeholder' => '0000000',
                    'onkeyup' => "AjaxZip3.zip2addr(this, '', 'pref', 'city', 'address')"]) }}
            </div>
            <div class="contact_div_short">
                <div class="contact_name">都道府県*</div>
                <select name="pref" class="contact_text" id="pref">
                    @foreach (config('const.Prefs') as $name)
                    <option value="{{ $name }}"
                        @if(old('pref') == $name) selected @endif >{{ $name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="contact_div">
            <div class="contact_name">市区町村*</div>
            {{ Form::text('city', old('city'), ['id' => 'city', 'class' => 'contact_text', 'maxlength' => 100, 'placeholder' => '']) }}
        </div>
        <div class="contact_div">
            <div class="contact_name">ご住所*</div>
            {{ Form::text('address', old('address'), ['id' => 'address', 'class' => 'contact_text', 'maxlength' => 100, 'placeholder' => '']) }}
        </div>

        <div class="form_flex">
            <div class="contact_div_short">
                <div class="contact_name">生年月日</div>
                {{ Form::text('birthday', old('birthday'), ['class' => 'contact_text', 'maxlength' => 20, 'placeholder' => '']) }}
            </div>
            <div class="contact_div_short">
                <div class="contact_name">電話番号*</div>
                {{ Form::text('tel', old('tel'), ['id' => 'tel', 'class' => 'contact_text', 'maxlength' => 15, 'placeholder' => '']) }}
            </div>
        </div>

        <div style="width: 40vw; margin: auto;">会員情報に反映しますか？</div>
        <div class="buy_btn_flex" style="width: 40vw; margin: 1vw auto;">
            <a href="#!" class="buy_btn_white" style="padding: 1.25vw; margin: 1vw auto; width:19vw;">反映しない</span></a>
            <a href="#!" class="buy_btn_black" style="padding: 1.25vw; margin: 1vw auto; width:19vw;">反映する</a>
        </div>

        <div class="error_message" id="error_message"></div>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/member_regist.js') }}"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

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
@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">お届け先情報変更</div>

    <form name="regist_form" action="{{ route('history') }}" method="post" enctype="multipart/form-data">
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
            <a href="{{ route('history') }}" class="buy_btn_white" style="padding: 1.25vw; margin: 1vw auto; width:19vw;">反映しないで確定</span></a>
            <a href="{{ route('history') }}" class="buy_btn_black" style="padding: 1.25vw; margin: 1vw auto; width:19vw;">反映して確定</a>
        </div>

        <div class="error_message" id="error_message"></div>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/member_regist.js') }}"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

@endsection


@section('content_sp')
<div class="page_title_sp">お届け先情報変更</div>

<form name="regist_form" action="{{ route('history') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="contact_div">
        <div class="contact_name">メールアドレス</div>
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
            <div class="contact_name">電話番号*</div>
            {{ Form::text('tel', old('tel'), ['id' => 'tel', 'class' => 'contact_text', 'maxlength' => 15, 'placeholder' => '']) }}
        </div>
    </div>

    <div style="font-size: 12px; margin-top: 40px; text-align:center;">会員情報に反映しますか？</div>
    <a href="{{ route('history') }}" class="send_btn send_btn_white" style="margin:10px auto 20px;">反映しないで確定</a>
    <a href="{{ route('history') }}" class="send_btn" style="margin:20px auto;">反映して確定</a>
</form>
<div class="contact_bottom_padding"></div>



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">お客様情報</div>

    <form name="regist_form" action="{{ route('paymethod_select') }}" enctype="multipart/form-data">
        @csrf
        <div class="contact_div">
            <div class="contact_name">
                Eメールアドレスを入力してください。<br>
                アカウントをお持ちのお客様は、ログインが必要です。<br>
                アカウントをお持ちでないお客様は、登録せずにご購入いただけます。*
            </div>
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

        <div class="contact_div">
            <div class="contact_name" style="font-size:20px; font-weight: bold;">配送方法</div>

            <div class="contact_name">
                日本郵便<br>
                5営業日以内（土日祝を除く）に商品を発送いたします。
            </div>

            <a href="#!" onclick="clickRegistButton()" class="buy_btn_black" style="padding: 1.25vw; margin: 1vw auto; width:19vw;">お支払方法選択へ</a>

            <div class="error_message" id="error_message"></div>

        </div>

    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/not_member_form.js') }}"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

@endsection


@section('content_sp')
<div class="page_title_sp">お客様情報</div>

<form name="regist_form" action="{{ route('member_comp') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="contact_div">
        <div class="contact_name">
            Eメールアドレスを入力してください。<br>
            アカウントをお持ちのお客様は、ログインが必要です。<br>
            アカウントをお持ちでないお客様は、<br>登録せずにご購入いただけます。
        </div>
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

    <div class="contact_div">
        <div class="contact_name" style="font-size:15px; font-weight: bold;">配送方法</div>

        <div class="contact_name">
            日本郵便<br>
            5営業日以内（土日祝を除く）に商品を発送いたします。
        </div>
        <a href="#!" onclick="clickRegistButton()" class="send_btn" style="margin:20px auto;">お支払方法選択へ</a>

        <div class="error_message" id="error_message"></div>

    </div>

</form>
<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/not_member_form.js') }}"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

@endsection
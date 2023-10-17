@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">会員登録</div>

    <form name="regist_form" action="{{ route('member_comp') }}" method="post" enctype="multipart/form-data">
        @csrf
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
        <div class="contact_div">
            <div class="contact_name">メールアドレス*</div>
            <input class="contact_text" placeholder="" name="mail" type="text" id="mail">
        </div>
        <div class="contact_div">
            <div class="contact_name">パスワード*</div>
            <input class="contact_text" placeholder="" name="pass" type="password" id="pass">
        </div>
        <div class="contact_div">
            <div class="contact_name">パスワード確認*</div>
            <input class="contact_text" placeholder="" name="pass_confirm" type="password" id="pass_confirm">
        </div>

        <div class="check_flex">
            <input type="checkbox" class="checkbox_pink">
            <a href="#!" class="check_text">プライバシーポリシーに記載されているニュースレターやその他のマーケティングコミュニケーションの配信を希望する。</a>
        </div>
        <div class="check_flex">
            <input type="checkbox" class="checkbox_pink">
            <a href="#!" class="check_text">私はプライバシーポリシーを確認し、同意します。</a>
        </div>

        <a href="#!" onclick="clickRegistButton()" class="send_btn">ご入力情報確認へ</a>
        <div class="error_message" id="error_message"></div>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/member_regist.js') }}"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

@endsection


@section('content_sp')
<div class="page_title_sp">会員登録</div>
<form name="regist_form" action="{{ route('member_comp') }}" method="post" enctype="multipart/form-data">
    @csrf
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
    <div class="contact_div">
        <div class="contact_name">メールアドレス*</div>
        <input class="contact_text" placeholder="" name="mail" type="text" id="mail">
    </div>
    <div class="contact_div">
        <div class="contact_name">パスワード*</div>
        <input class="contact_text" placeholder="" name="pass" type="password" id="pass">
    </div>
    <div class="contact_div">
        <div class="contact_name">パスワード確認*</div>
        <input class="contact_text" placeholder="" name="pass_confirm" type="password" id="pass_confirm">
    </div>

    <div class="check_flex" style="margin-top: 50px;">
        <input type="checkbox" class="checkbox_pink">
        <a href="#!" class="check_text">プライバシーポリシーに記載されているニュースレターやその他のマーケティングコミュニケーションの配信を希望する。</a>
    </div>
    <div class="check_flex">
        <input type="checkbox" class="checkbox_pink">
        <a href="#!" class="check_text">私はプライバシーポリシーを確認し、同意します。</a>
    </div>

    <a href="#!" onclick="clickRegistButton()" class="send_btn">上記で登録</a>
    <div class="error_message" id="error_message"></div>
</form>

<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/member_regist.js') }}"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

@endsection
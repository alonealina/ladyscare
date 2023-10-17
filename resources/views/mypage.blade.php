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

<div class="page_title_sp">マイページ</div>
<div class="mypage_myname">会員名 様</div>

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


    <a href="{{ route('fav') }}" class="mypage_btn_a"><img src="{{ asset('img/mypage_btn1.png') }}"></a>
    <a href="{{ route('history') }}" class="mypage_btn_a"><img src="{{ asset('img/mypage_btn2.png') }}"></a>
    <a href="{{ route('subsc_item') }}" class="mypage_btn_a"><img src="{{ asset('img/mypage_btn3.png') }}"></a>


</div>

<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">定期購入中の商品</div>
    <div class="subsc_item_quantity">件数:　1件</div>
    <div class="subsc_item_flex">
        <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img">
        <div>
            <div class="item_detail_name">Care Female デリケート専用美容液</div>
            <div class="item_detail_price">
                数量：1<br>
                小計：1,800円<br>
                送料：500円<br>
                合計：2480円
            </div>
        </div>
    </div>
    <div class="subsc_item_line"></div>

    <div class="subsc_item_flex2">
        <div>
            お客様情報<br><br>
            田中美麗<br>
            105-0011, 東京都, 港区芝公園<br>
            +81 0334335111<br>
            example@info.com
        </div>
        <a href="#!" class="subsc_item_a" style="top: 3vw;">変更</a>
    </div>
    <div class="subsc_item_line"></div>

    <div class="subsc_item_flex2">
        <div>
            お支払い方法<br><br>銀行振込
        </div>
        <a href="#!" class="subsc_item_a" style="top: 1vw;">変更</a>
    </div>
    <div class="subsc_item_line"></div>

    <a href="#!" onclick="clickSkipBtn()" class="subsc_item_btn_w">お届けスキップ</a>
    <a href="#!" onclick="clickCancelBtn()" class="subsc_item_btn_b">定期購入を解約する</a>
</div>

<div class="popup_bg" id="popup_bg" hidden>
    <div class="sample-popup-content">
        <div class="popup_title">お届けスキップ</div>
        <div id="popup_text">今回のお届けをスキップしますか。</div>
        <div class="popup_red">次回のお届けは0000年00月00日になります</div>

        <div class="popup_item_flex">
            <img src="{{ asset('img/item_sample.png') }}" class="popup_img">
            <div>
                <div class="popup_detail_name">Care Female デリケート専用美容液</div>
                <div class="popup_detail_price">
                    数量：1<br>
                    小計：1,800円<br>
                    送料：500円<br>
                    合計：2480円
                </div>
            </div>
        </div>
        <div class="popup_btn_flex" id="popup_btn_flex">
            <a href="#!" onclick="clickCloseBtn()" class="">いいえ</a>
            <a href="#!" onclick="clickYesBtn()" class="">はい</a>
        </div>
        <a href="{{ route('subsc_item_skip') }}" class="popup_back_btn" id="popup_back_btn" hidden>戻る</a>
    </div>
</div>

<div class="popup_bg" id="popup_bg_cancel" hidden>
    <div class="sample-popup-content">
        <div class="popup_title">定期購入を解約</div>
        <div id="popup_text_cancel">こちらの商品の定期購入を解約しますか。</div>
        <div class="popup_red">最終お届けは0000年00月00日になります。</div>

        <div class="popup_item_flex">
            <img src="{{ asset('img/item_sample.png') }}" class="popup_img">
            <div>
                <div class="popup_detail_name">Care Female デリケート専用美容液</div>
                <div class="popup_detail_price">
                    数量：1<br>
                    小計：1,800円<br>
                    送料：500円<br>
                    合計：2480円
                </div>
            </div>
        </div>
        <div class="popup_btn_flex" id="popup_btn_flex_cancel">
            <a href="#!" onclick="clickCancelCloseBtn()" class="">いいえ</a>
            <a href="#!" onclick="clickCancelYesBtn()" class="">はい</a>
        </div>
        <a href="{{ route('index') }}" class="popup_back_btn" id="popup_back_btn_cancel" hidden>戻る</a>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/subsc_item.js') }}"></script>


@endsection


@section('content_sp')
<div class="page_title_sp">定期購入中の商品</div>
<div class="subsc_item_quantity">件数:　1件</div>

<div class="item_flex">
    <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img">
    <div>
        <div class="item_detail_name">Care Female デリケート専用美容液</div>
        <div class="item_detail_price">
            数量：1<br>
            小計：1,800円<br>
            送料：500円<br>
            合計：2480円
        </div>
    </div>
</div>
<div class="subsc_item_line"></div>

<div class="subsc_item_flex2">
    <div>
        お客様情報<br><br>
        田中美麗<br>
        105-0011, 東京都, 港区芝公園<br>
        +81 0334335111<br>
        example@info.com
    </div>
    <a href="#!" class="subsc_item_a" style="top: 90px;">変更</a>
</div>
<div class="subsc_item_line"></div>

<div class="subsc_item_flex2">
    <div>
        お支払い方法<br><br>銀行振込
    </div>
    <a href="#!" class="subsc_item_a" style="top: 35px;">変更</a>
</div>
<div class="subsc_item_line"></div>

<a href="#!" onclick="clickSkipBtn()" class="send_btn send_btn_white" style="margin:50px auto 20px;">お届けスキップ</a>
<a href="#!" onclick="clickCancelBtn()" class="send_btn" style="margin:20px auto;">定期購入を解約する</a>

<div class="contact_bottom_padding"></div>

<div class="popup_bg" id="popup_bg" hidden>
    <div class="sample-popup-content">
        <div class="popup_title">お届けスキップ</div>
        <div id="popup_text" style="font-size: 12px; margin-bottom: 20px;">今回のお届けをスキップしますか。</div>

        <div class="popup_item_flex">
            <img src="{{ asset('img/item_sample.png') }}" class="popup_img">
            <div>
                <div class="popup_detail_name">Care Female デリケート専用美容液</div>
                <div class="popup_detail_price">
                    数量：1<br>
                    小計：1,800円<br>
                    送料：500円<br>
                    合計：2480円
                </div>
            </div>
        </div>
        <div class="popup_red">次回のお届けは0000年00月00日になります</div>

        <div class="popup_btn_flex" id="popup_btn_flex">
            <a href="#!" onclick="clickCloseBtn()" class="">いいえ</a>
            <a href="#!" onclick="clickYesBtn()" class="">はい</a>
        </div>
        <a href="{{ route('subsc_item_skip') }}" class="popup_back_btn" id="popup_back_btn" hidden>戻る</a>
    </div>
</div>

<div class="popup_bg" id="popup_bg_cancel" hidden>
    <div class="sample-popup-content">
        <div class="popup_title">定期購入を解約</div>
        <div id="popup_text_cancel" style="font-size: 12px; margin-bottom: 20px;">こちらの商品の定期購入を解約しますか。</div>

        <div class="popup_item_flex">
            <img src="{{ asset('img/item_sample.png') }}" class="popup_img">
            <div>
                <div class="popup_detail_name">Care Female デリケート専用美容液</div>
                <div class="popup_detail_price">
                    数量：1<br>
                    小計：1,800円<br>
                    送料：500円<br>
                    合計：2480円
                </div>
            </div>
        </div>
        <div class="popup_red">最終お届けは0000年00月00日になります。</div>

        <div class="popup_btn_flex" id="popup_btn_flex_cancel">
            <a href="#!" onclick="clickCancelCloseBtn()" class="">いいえ</a>
            <a href="#!" onclick="clickCancelYesBtn()" class="">はい</a>
        </div>
        <a href="{{ route('index') }}" class="popup_back_btn" id="popup_back_btn_cancel" hidden>戻る</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/subsc_item.js') }}"></script>

@endsection
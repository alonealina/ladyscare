@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="item_detail_div">
    <div class="category_title" style="padding-left:3vw;">注文履歴</div>

    <div class="tab_flex">
        <a href="#!" id="before" onclick="clickBefore()" class="item_detail_tab item_current" style="width:40vw;">発送前</a>
        <a href="#!" id="after" onclick="clickAfter()" class="item_detail_tab" style="width:40vw;">発送済み</a>
    </div>
    <div class="history_before_content">
        <div class="history_quantity">件数:　4件</div>

        <div class="history_states_flex">
            <div class="history_states_red">支払い待ち<span>（コンビニ決済）</span></div>
            <img src="{{ asset('img/history_bar1.png') }}" class="history_bar_img">
        </div>

        <div class="history_flex">
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
            <div class="history_flex_btn_list">
                <a href="{{ route('address_change') }}" class="history_flex_btn">お届け先変更</a>
                <a href="#!" onclick="clickCancelBtn()" class="history_flex_btn">キャンセル</a>
            </div>
        </div>

        <div class="history_line"></div>


        <div class="history_states_flex">
            <div class="history_states"><span>支払い済み</span>発送完了</div>
            <img src="{{ asset('img/history_bar2.png') }}" class="history_bar_img">
        </div>

        <div class="history_flex">
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
            <div class="history_flex_btn_list">
                <a href="{{ route('address_change') }}" class="history_flex_btn">お届け先変更</a>
                <a href="#!" onclick="clickCancelBtn()" class="history_flex_btn">キャンセル</a>
            </div>
        </div>

        <div class="history_line"></div>


        <div class="history_states_flex">
            <div class="history_states"><span>支払い済み</span>配達中</div>
            <img src="{{ asset('img/history_bar3.png') }}" class="history_bar_img">
        </div>

        <div class="history_flex">
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
            <div class="history_flex_btn_list">
                <a href="{{ route('address_change') }}" class="history_flex_btn">お届け先変更</a>
                <a href="#!" onclick="clickCancelBtn()" class="history_flex_btn">キャンセル</a>
            </div>
        </div>

        <div class="history_line"></div>


        <div class="history_states_flex">
            <div class="history_states"><span>代金引換</span>発送準備中</div>
            <img src="{{ asset('img/history_bar1.png') }}" class="history_bar_img">
        </div>

        <div class="history_flex">
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
            <div class="history_flex_btn_list">
                <a href="{{ route('address_change') }}" class="history_flex_btn">お届け先変更</a>
                <a href="#!" onclick="clickCancelBtn()" class="history_flex_btn">キャンセル</a>
            </div>
        </div>
    </div>


    <div class="history_after_content" style="display:none;">
        <div class="history_quantity">件数:　1件</div>

        <div class="history_states_flex">
            <div class="history_states"><span>支払い済み</span>配達完了</div>
            <img src="{{ asset('img/history_bar4.png') }}" class="history_bar_img">
        </div>

        <div class="history_flex">
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
            <div class="history_flex_review_list">
                <img src="{{ asset('img/history_review.png') }}" class="history_review_img">
                <a href="#!" class="history_flex_btn">レビューを書く</a>
            </div>
        </div>

        <div class="history_line"></div>



    </div>

</div>

<div class="popup_bg" id="popup_bg_cancel" hidden>
    <div class="sample-popup-content">
        <div class="popup_title">注文キャンセル</div>
        <div id="popup_text_cancel" style="margin-bottom: 3vw;">こちらの商品の注文をキャンセルしますか</div>

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
        <a href="{{ route('history') }}" class="popup_back_btn" id="popup_back_btn_cancel" hidden>戻る</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/history.js') }}"></script>


@endsection


@section('content_sp')

<div class="page_title_sp">注文履歴</div>

<div class="tab_flex">
    <a href="#!" id="before" onclick="clickBefore()" class="item_detail_tab item_current" style="width:46vw;">発送前</a>
    <a href="#!" id="after" onclick="clickAfter()" class="item_detail_tab" style="width:46vw;">発送済み</a>
</div>
<div class="history_before_content">
    <div class="history_quantity">件数:　4件</div>


    <div class="history_states_red">支払い待ち<span>（コンビニ決済）</span></div>
    <img src="{{ asset('img/history_bar1.png') }}" class="history_bar_img">

    <div class="history_flex">
        <div class="subsc_item_flex">
            <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img_sp">
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
        <div class="history_flex_btn_list">
            <a href="{{ route('address_change') }}" class="history_flex_btn">お届け先変更</a>
            <a href="#!" onclick="clickCancelBtn()" class="history_flex_btn">キャンセル</a>
        </div>
    </div>

    <div class="history_line"></div>



    <div class="history_states"><span>支払い済み</span>発送完了</div>
    <img src="{{ asset('img/history_bar2.png') }}" class="history_bar_img">


    <div class="history_flex">
        <div class="subsc_item_flex">
            <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img_sp">
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
        <div class="history_flex_btn_list">
            <a href="{{ route('address_change') }}" class="history_flex_btn">お届け先変更</a>
            <a href="#!" onclick="clickCancelBtn()" class="history_flex_btn">キャンセル</a>
        </div>
    </div>

    <div class="history_line"></div>



    <div class="history_states"><span>支払い済み</span>配達中</div>
    <img src="{{ asset('img/history_bar3.png') }}" class="history_bar_img">


    <div class="history_flex">
        <div class="subsc_item_flex">
            <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img_sp">
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
        <div class="history_flex_btn_list">
            <a href="{{ route('address_change') }}" class="history_flex_btn">お届け先変更</a>
            <a href="#!" onclick="clickCancelBtn()" class="history_flex_btn">キャンセル</a>
        </div>
    </div>

    <div class="history_line"></div>



    <div class="history_states"><span>代金引換</span>発送準備中</div>
    <img src="{{ asset('img/history_bar1.png') }}" class="history_bar_img">


    <div class="history_flex">
        <div class="subsc_item_flex">
            <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img_sp">
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
        <div class="history_flex_btn_list">
            <a href="{{ route('address_change') }}" class="history_flex_btn">お届け先変更</a>
            <a href="#!" onclick="clickCancelBtn()" class="history_flex_btn">キャンセル</a>
        </div>
    </div>
</div>


<div class="history_after_content" style="display:none;">
    <div class="history_quantity">件数:　1件</div>


    <div class="history_states"><span>支払い済み</span>配達完了</div>
    <img src="{{ asset('img/history_bar4.png') }}" class="history_bar_img">


    <div class="history_flex">
        <div class="subsc_item_flex">
            <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img_sp">
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
        <div class="history_flex_review_list">
            <img src="{{ asset('img/history_review.png') }}" class="history_review_img">
            <a href="#!" class="history_flex_btn">レビューを書く</a>
        </div>
    </div>

    <div class="history_line"></div>



</div>



<div class="popup_bg" id="popup_bg_cancel" hidden>
    <div class="sample-popup-content">
        <div class="popup_title">注文キャンセル</div>
        <div id="popup_text_cancel" style="margin-bottom: 3vw;">こちらの商品の注文をキャンセルしますか</div>

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
        <a href="{{ route('history') }}" class="popup_back_btn" id="popup_back_btn_cancel" hidden>戻る</a>
    </div>
</div>

<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/history.js') }}"></script>



@endsection
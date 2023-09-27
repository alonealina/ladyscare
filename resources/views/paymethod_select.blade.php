@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">お支払方法選択</span></div>
    <div class="pay_div">
        <input type="radio" class="radio_pink" name="" value="銀行振込">銀行振込<br>
        <input type="radio" class="radio_pink" name="" value="クレジットカード">クレジットカード<br>
        <input type="radio" class="radio_pink" name="" value="代金引換">代金引換<span class="charge_span">(手数料250円税込)</span><br>
        <input type="radio" class="radio_pink" name="" value="コンビニ後払い">コンビニ後払い<span class="charge_span">(手数料250円税込)</span><br>
        <input type="radio" class="radio_pink" name="" value="Paidy後払い">Paidy後払い<span class="charge_span">(手数料250円税込)</span><br>
        <input type="radio" class="radio_pink" name="" value="バーコード決済">バーコード決済<br>
        <input type="radio" class="radio_pink" name="" value="キャリア決済">キャリア決済<br>

        <div class="buy_btn_flex" style="margin: 0;">
            <a href="#" class="buy_btn_white" style="padding: 1.25vw;" onclick="history.back()">戻る</span></a>
            <a href="{{ route('item_buy_comp') }}" class="buy_btn_black" style="padding: 1.25vw;">ご注文内容確認へ</a>
        </div>

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
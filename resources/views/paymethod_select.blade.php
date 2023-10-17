@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">お支払方法選択</span></div>
    <div class="pay_div">
        <input type="radio" class="radio_pink" name="method" value="銀行振込">銀行振込<br>
        <input type="radio" class="radio_pink" name="method" value="クレジットカード">クレジットカード<br>
        <input type="radio" class="radio_pink" name="method" value="代金引換">代金引換<span class="charge_span">(手数料250円税込)</span><br>
        <input type="radio" class="radio_pink" name="method" value="コンビニ後払い">コンビニ後払い<span class="charge_span">(手数料250円税込)</span><br>
        <input type="radio" class="radio_pink" name="method" value="Paidy後払い">Paidy後払い<span class="charge_span">(手数料250円税込)</span><br>
        <input type="radio" class="radio_pink" name="method" value="バーコード決済">バーコード決済<br>
        <input type="radio" class="radio_pink" name="method" value="キャリア決済">キャリア決済<br>

        <div class="buy_btn_flex" style="margin: 0;">
            <a href="#" class="buy_btn_white" style="padding: 1.25vw;" onclick="history.back()">戻る</a>
            <a href="{{ route('item_buy_comp') }}" class="buy_btn_black" style="padding: 1.25vw;">ご注文内容確認へ</a>
        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/login.js') }}"></script>


@endsection


@section('content_sp')
<div class="page_title_sp">お支払方法選択</div>

<div class="pay_div">
    <input type="radio" class="radio_pink" name="method" value="銀行振込">銀行振込<br>
    <input type="radio" class="radio_pink" name="method" value="クレジットカード">クレジットカード<br>
    <input type="radio" class="radio_pink" name="method" value="代金引換">代金引換<span class="charge_span">(手数料250円税込)</span><br>
    <input type="radio" class="radio_pink" name="method" value="コンビニ後払い">コンビニ後払い<span class="charge_span">(手数料250円税込)</span><br>
    <input type="radio" class="radio_pink" name="method" value="Paidy後払い">Paidy後払い<span class="charge_span">(手数料250円税込)</span><br>
    <input type="radio" class="radio_pink" name="method" value="バーコード決済">バーコード決済<br>
    <input type="radio" class="radio_pink" name="method" value="キャリア決済">キャリア決済<br>

    <a href="#!" class="send_btn send_btn_white" style="margin:20px auto;" onclick="history.back()">戻る</a>
    <a href="{{ route('item_buy_comp') }}" class="send_btn" style="margin:20px auto;">ご注文内容確認へ</a>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
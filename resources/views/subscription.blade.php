@extends('layouts.app')


@section('content')

<div class="top_slider2"></div>

<div class="subsc_title">お気に入りの商品を定期購入できます。</div>

<div class="subsc_flex">
    <img src="{{ asset('img/subsc_no1.png') }}" class="subsc_no">
    <div class="subsc_text">気になった商品の詳細画面へ<br>定期購入を選択する。</div>
    <img src="{{ asset('img/subsc1.png') }}" class="" style="width: 34vw;">
</div>
<div class="subsc_flex">
    <img src="{{ asset('img/subsc_no2.png') }}" class="subsc_no">
    <div class="subsc_text" style="width: 28vw;">選択したお届け期間で商品が届く<br><span>【毎月～6ヶ月毎】の間で期間をお選びできます。</span></div>
    <img src="{{ asset('img/subsc2.png') }}" class="subsc2">
</div>
<div class="subsc_flex">
    <img src="{{ asset('img/subsc_no3.png') }}" class="subsc_no">
    <div class="subsc_text" style="width: 61vw;">
        解約・定期便をお休みできるスキップ機能の手続きはWebから簡単に申請可能。<br>
        <span>※各種お申し込みは毎月締め切りがございます。下記の決算・配送サイクルご覧になってお申し込みください。</span>
    </div>
</div>
<img src="{{ asset('img/skipstop.png') }}" class="skipstop">

<div class="subsc_box">
    <div class="subsc_box_title">決算・配送サイクル</div>
    <div class="subsc_box_sub">毎月、下記のサイクルで配送いたします。</div>

    <div class="subsc_box_flex">
        <div class="subsc_box_blue">19日まで</div>
        <div class="subsc_box_text">■　申し込み締め切り・決算日<br>■　定期購入解約・スキップ申し込み締め切り・決算日</div>
    </div>

    <div class="subsc_box_flex">
        <div class="subsc_box_blue">24日</div>
        <div class="subsc_box_text">■　決算期限<br><span>※ここで未決算の場合、解約扱いとなりますのでご注意ください。</span></div>
    </div>

    <div class="subsc_box_flex">
        <div class="subsc_box_blue" style="font-size: 1.5vw; padding: 0.6vw;">最終金曜日<br>(目安)</div>
        <div class="subsc_box_text">
            ■　発送日<br>
            <span>※初回お届けは申し込みから3日～7日後にお届け。</span><br>
            <span>翌月から最終金曜日発送となります。</span>
        </div>
    </div>

    <div class="subsc_box_flex">
        <div class="subsc_box_blue">3日～7日後</div>
        <div class="subsc_box_text">■　お届け<br></div>
    </div>
</div>

<div class="subsc_title">よくあるご質問</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection
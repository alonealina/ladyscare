@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="category_div">
    <div class="category_title">CATEGORY<span class="category_ja">敏感肌用・オーガニック</span></div>

    <div class="category_flex">
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item4.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item5.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
    </div>

    <div class="category_flex">
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item4.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item5.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
    </div>

    <div class="category_flex">
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item4.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item5.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
    </div>

</div>



@endsection


@section('content_sp')

<div class="category_top">
    <h2>CATEGORY</h2>
    <select>
        <option>新着</option>
        <option>おすすめ</option>
        <option>価格の高い商品</option>
        <option>価格の低い商品</option>
        <option>お気に入り数</option>
    </select>
</div>

<div class="category_flex">
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
</div>

<div class="category_flex">
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
</div>

<div class="category_flex">
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
</div>

<div class="category_flex">
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
</div>

<div class="category_flex">
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
</div>

<div class="category_flex">
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="category_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/work.js') }}"></script>


@endsection
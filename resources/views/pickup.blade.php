@extends('layouts.app')

@section('content')
<div class="pickup_div">
    <div class="pickup_title">PICK UP</div>

    <div class="pickup_genre_title">#お気に入り登録多数の人気アイテム</div>
    <div class="category_flex category_slider">
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

    <div class="pickup_genre_title">#冬おすすめの保湿ケア</div>
    <div class="category_flex category_slider">
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


    <div class="pickup_genre_title">#気になるニオイや黒ずみを徹底ケアできる！美白効果プラスのデリケートケア</div>
    <div class="category_flex category_slider">
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


    <div class="pickup_genre_title">#今あるお悩みをきっと解決してくれる敏感肌やこだわりたい方にお勧めのオーガニック商品</div>
    <div class="category_flex category_slider">
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

@endsection


@section('content_sp')

<div class="pickup_div">
    <h2>PICK UP</h2>

    <div class="pickup_slider_wrapper">
        <h3>#お気に入り登録多数の人気アイテム</h3>
        <div class="pickup_slider">
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
        </div>
        <img src="{{ asset('img/scroll_icon.svg') }}" class="scroll_img">
    </div>
    <div class="pickup_slider_wrapper">
        <h3>#お気に入り登録多数の人気アイテム</h3>
        <div class="pickup_slider">
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
        </div>
        <img src="{{ asset('img/scroll_icon.svg') }}" class="scroll_img">
    </div>
    <div class="pickup_slider_wrapper">
        <h3>#冬おすすめの保湿ケア</h3>
        <div class="pickup_slider">
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
        </div>
        <img src="{{ asset('img/scroll_icon.svg') }}" class="scroll_img">
    </div>
    <div class="pickup_slider_wrapper">
        <h3>#気になるニオイや黒ずみを徹底ケアできる！<br>美白効果プラスのデリケートケア</h3>
        <div class="pickup_slider">
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
        </div>
        <img src="{{ asset('img/scroll_icon.svg') }}" class="scroll_img">
    </div>
    <div class="pickup_slider_wrapper">
        <h3>#今あるお悩みをきっと解決してくれる敏感肌や<br>こだわりたい方にお勧めのオーガニック商品</h3>
        <div class="pickup_slider">
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item1.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item2.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
            <a href="{{ route('item_detail') }}" class="pickup_item">
                <img src="{{ asset('img/item3.png') }}" class="pickup_item_img">
                <p>商品名</p>
                <p>￥1,000</p>
            </a>
        </div>
        <img src="{{ asset('img/scroll_icon.svg') }}" class="scroll_img">
    </div>


</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endsection
@extends('layouts.app')


@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_sphere.png') }}" class="" style="width:100px"></a>
</div>

<div class="top_slider">
    <div class="top_slider1"></div>
    <div class="top_slider2"><a href="{{ route('subscription') }}" class="top_subsc_a"><img src="{{ asset('img/top_subsc_btn.png') }}" class="top_subsc_btn"></a></div>
</div>

<div class="top_category_div">
    <img src="{{ asset('img/top_category_title.png') }}" class="top_category_title">
    <div class="top_category_flex">
        <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_img1.png') }}" class="top_category_img"></a>
        <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_img2.png') }}" class="top_category_img"></a>
        <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_img3.png') }}" class="top_category_img"></a>
        <div class="top_category_dummy"></div>
    </div>
    <div class="top_category_flex">
        <div class="top_category_dummy"></div>
        <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_img4.png') }}" class="top_category_img"></a>
        <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_img5.png') }}" class="top_category_img"></a>
        <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_img6.png') }}" class="top_category_img"></a>
    </div>
    <a href="{{ route('category') }}" class=""><img src="{{ asset('img/view_all_btn.png') }}" class="view_all_btn"></a>

    
</div>

<div class="top_bg2">
    <div class="top2_box">
        <a href="{{ route('trouble') }}" class=""><img src="{{ asset('img/trouble_img1.png') }}" class="trouble_img1"></a>
        <div class="top2_brown">
            <a href="{{ route('trouble_detail') }}" class="top2_a">気になる黒ずみや嫌なニオイ</a>
            <a href="{{ route('trouble_detail') }}" class="top2_a">おりもの量の増加</a>
            <a href="{{ route('trouble_detail') }}" class="top2_a">美肌効果を得たい</a>
            <a href="{{ route('trouble_detail') }}" class="top2_a">かぶれやかゆみ、乾燥による<br>お肌のトラブル</a>
            <a href="{{ route('trouble_detail') }}" class="top2_a">年齢や疲れによるたるみ</a>

        </div>
    </div>
</div>

<img src="{{ asset('img/top_pickup_title.png') }}" class="top_pickup_title">

<div class="top_bg3">
    <div class="top3_flex">
        <div class="top3_ex">
            <div class="top3_text">お気に入り登録多数の人気アイテム</div>
            <a href="{{ route('pickup') }}"><img src="{{ asset('img/detail_btn.png') }}" class="detail_btn"></a>
        </div>
        <div class="top3_list">
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
        </div>
    </div>

    <div class="top3_flex">
        <div class="top3_list">
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
        </div>
        <div class="top3_ex">
            <div class="top3_text">夏だからこそおすすめの保湿ケア</div>
            <a href="{{ route('pickup') }}"><img src="{{ asset('img/detail_btn.png') }}" class="detail_btn"></a>
        </div>
    </div>

    <div class="top3_flex">
        <div class="top3_ex">
            <div class="top3_text">気になるニオイや黒ずみを徹底ケアできる！<br>美白効果プラスのデリケートケア</div>
            <a href="{{ route('pickup') }}"><img src="{{ asset('img/detail_btn.png') }}" class="detail_btn"></a>
        </div>
        <div class="top3_list">
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
        </div>
    </div>

    <div class="top3_flex">
        <div class="top3_list">
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="{{ route('item_detail') }}" class="top3_item_a">
                <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
        </div>
        <div class="top3_ex">
            <div class="top3_text">今あるお悩みをきっと解決してくれる<br>敏感肌やこだわりたい方にお勧めの<br>オーガニック商品</div>
            <a href="{{ route('pickup') }}"><img src="{{ asset('img/detail_btn.png') }}" class="detail_btn"></a>
        </div>
    </div>
</div>

<img src="{{ asset('img/top_ranking_title.png') }}" class="top_ranking_title">
<a href="{{ route('ranking') }}" class="top_ranking_a">売上ランキングをもっと見る</a>

<div class="top_rank3">
    <a href="{{ route('item_detail') }}" class="top3_item_a">
        <img src="{{ asset('img/rank1.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top3_item_a">
        <img src="{{ asset('img/rank2.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top3_item_a">
        <img src="{{ asset('img/rank3.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
</div>

<div class="top_rank_other">
    <a href="{{ route('item_detail') }}" class="top_rank_other_a">
        <img src="{{ asset('img/rank4.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top_rank_other_a">
        <img src="{{ asset('img/rank5.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top_rank_other_a">
        <img src="{{ asset('img/rank6.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top_rank_other_a">
        <img src="{{ asset('img/rank7.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top_rank_other_a">
        <img src="{{ asset('img/rank8.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
</div>

<div class="top_news_bg">
    <div class="top_news_title">NEWS</div>
    <a href="{{ route('news') }}" class="top_news_a">ニュースをもっと見る ></a>

    <div class="top_news_flex">
        <a href="{{ route('news_detail') }}" class="top_news_box">
            <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
            <div class="top_news_content">
                ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
                <div class="top_news_date">2023.08.18</div>
            </div>
        </a>
        <a href="{{ route('news_detail') }}" class="top_news_box">
            <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
            <div class="top_news_content">
                ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
                <div class="top_news_date">2023.08.18</div>
            </div>
        </a>
        <a href="{{ route('news_detail') }}" class="top_news_box">
            <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
            <div class="top_news_content">
                ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
                <div class="top_news_date">2023.08.18</div>
            </div>
        </a>
    </div>

    <div class="top_news_flex">
        <a href="{{ route('news_detail') }}" class="top_news_box">
            <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
            <div class="top_news_content">
                ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
                <div class="top_news_date">2023.08.18</div>
            </div>
        </a>
        <a href="{{ route('news_detail') }}" class="top_news_box">
            <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
            <div class="top_news_content">
                ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
                <div class="top_news_date">2023.08.18</div>
            </div>
        </a>
        <a href="{{ route('news_detail') }}" class="top_news_box">
            <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
            <div class="top_news_content">
                ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
                <div class="top_news_date">2023.08.18</div>
            </div>
        </a>
    </div>


</div>



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_sphere.png') }}" class="" style="width:80px"></a>
</div>

<div class="top_slider_sp">
    <div class="top_slider1_sp"></div>
    <div class="top_slider2_sp"><a href="{{ route('subscription') }}" class="top_subsc_a"><img src="{{ asset('img/top_subsc_btn_sp.png') }}" class="top_subsc_btn"></a></div>
</div>


<div class="top_title_sp">CATEGORY</div>
<div class="top_category_flex">
    <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_sp1.png') }}" class="top_category_img"></a>
    <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_sp2.png') }}" class="top_category_img"></a>
    <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_sp3.png') }}" class="top_category_img"></a>
    <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_sp4.png') }}" class="top_category_img"></a>
    <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_sp5.png') }}" class="top_category_img"></a>
    <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_sp6.png') }}" class="top_category_img"></a>
</div>
<a href="{{ route('category') }}" class=""><img src="{{ asset('img/view_all_btn_sp.png') }}" class="view_all_btn"></a>


<div class="top_bg2">
    <div class="top_bg2_flex">
        <img src="{{ asset('img/trouble_sp.png') }}" class="trouble_sp">
        <div class="">
            <a href="{{ route('trouble_detail') }}" class="top2_a">気になる黒ずみや嫌なニオイ</a>
            <a href="{{ route('trouble_detail') }}" class="top2_a">おりもの量の増加</a>
            <a href="{{ route('trouble_detail') }}" class="top2_a">美肌効果を得たい</a>
            <a href="{{ route('trouble_detail') }}" class="top2_a">かぶれやかゆみ、乾燥による<br>お肌のトラブル</a>
            <a href="{{ route('trouble_detail') }}" class="top2_a">年齢や疲れによるたるみ</a>
        </div>
    </div>
</div>

<img src="{{ asset('img/top_pickup_title_sp.png') }}" class="top_pickup_title">

<div class="top_bg3">
    <div class="top3_text">#お気に入り登録多数の人気アイテム</div>

    <div class="top3_list">
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
    </div>
    <a href="{{ route('pickup') }}"><img src="{{ asset('img/detail_btn_sp.png') }}" class="detail_btn"></a>

    <div class="top3_text">#夏だからこそおすすめの保湿ケア</div>

    <div class="top3_list">
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
    </div>
    <a href="{{ route('pickup') }}"><img src="{{ asset('img/detail_btn_sp.png') }}" class="detail_btn"></a>

    <div class="top3_text">#気になるニオイや黒ずみを徹底ケアできる！<br>美白効果プラスのデリケートケア</div>

    <div class="top3_list">
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
    </div>
    <a href="{{ route('pickup') }}"><img src="{{ asset('img/detail_btn_sp.png') }}" class="detail_btn"></a>

    <div class="top3_text">#今あるお悩みをきっと解決してくれる敏感肌や<br>こだわりたい方にお勧めのオーガニック商品</div>

    <div class="top3_list">
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
        <a href="{{ route('item_detail') }}" class="top3_item_a">
            <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
            <div class="top3_item_name">商品名</div>
            <div class="top3_item_name">￥1,000</div>
        </a>
    </div>
    <a href="{{ route('pickup') }}"><img src="{{ asset('img/detail_btn_sp.png') }}" class="detail_btn"></a>
</div>


<div class="top_title_sp">RANKING</div>
<a href="{{ route('ranking') }}" class="top_ranking_a">売上ランキングをもっと見る</a>

<div class="top_rank3">
    <a href="{{ route('item_detail') }}" class="top3_item_a">
        <img src="{{ asset('img/rank1.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top3_item_a">
        <img src="{{ asset('img/rank2.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="{{ route('item_detail') }}" class="top3_item_a">
        <img src="{{ asset('img/rank3.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
</div>

<div class="top_news_bg">
    <div class="top_news_title">NEWS</div>
    <a href="{{ route('news') }}" class="top_news_a">もっと見る</a>

    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            <span>2023.08.18</span><br><br>
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
        </div>
    </a>
    
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            <span>2023.08.18</span><br><br>
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
        </div>
    </a>
    
    <a href="{{ route('news_detail') }}" class="top_news_box">
        <img src="{{ asset('img/news_dummy.png') }}" class="top_news_img">
        <div class="top_news_content">
            <span>2023.08.18</span><br><br>
            ニュースタイトルニュースタイトルニュースタイトルニュースタイトル
        </div>
    </a>


</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection
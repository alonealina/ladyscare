@extends('layouts.app')


@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_sphere.png') }}" class="" style="width:100px"></a>
</div>

<div class="top_bg1"></div>

<div class="top_category_div">
    <img src="{{ asset('img/top_category_title.png') }}" class="top_category_title">
    <div class="top_category_flex">
        <a href="{{ route('category') }}" class="top_category_a"><img src="{{ asset('img/top_category_img1.png') }}" class="top_category_img"></a>
        <a href="" class="top_category_a"><img src="{{ asset('img/top_category_img2.png') }}" class="top_category_img"></a>
        <a href="" class="top_category_a"><img src="{{ asset('img/top_category_img3.png') }}" class="top_category_img"></a>
        <div class="top_category_dummy"></div>
    </div>
    <div class="top_category_flex">
        <div class="top_category_dummy"></div>
        <a href="" class="top_category_a"><img src="{{ asset('img/top_category_img4.png') }}" class="top_category_img"></a>
        <a href="" class="top_category_a"><img src="{{ asset('img/top_category_img5.png') }}" class="top_category_img"></a>
        <a href="" class="top_category_a"><img src="{{ asset('img/top_category_img6.png') }}" class="top_category_img"></a>
    </div>
    <a href="{{ route('category') }}" class=""><img src="{{ asset('img/view_all_btn.png') }}" class="view_all_btn"></a>

    
</div>

<div class="top_bg2">
    <div class="top2_box">
        <a href="{{ route('trouble') }}" class=""><img src="{{ asset('img/trouble_img1.png') }}" class="trouble_img1"></a>
        <div class="top2_brown">
            <a href="{{ route('trouble_detail') }}" class="top2_a">気になる黒ずみや嫌なニオイ</a>
            <a href="" class="top2_a">おりもの量の増加</a>
            <a href="" class="top2_a">美肌効果を得たい</a>
            <a href="" class="top2_a">かぶれやかゆみ、乾燥による<br>お肌のトラブル</a>
            <a href="" class="top2_a">年齢や疲れによるたるみ</a>

        </div>
    </div>
</div>

<img src="{{ asset('img/top_pickup_title.png') }}" class="top_pickup_title">

<div class="top_bg3">
    <div class="top3_flex">
        <div class="top3_ex">
            <div class="top3_text">お気に入り登録多数の人気アイテム</div>
            <a href=""><img src="{{ asset('img/detail_btn.png') }}" class="detail_btn"></a>
        </div>
        <div class="top3_list">
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
        </div>
    </div>

    <div class="top3_flex">
        <div class="top3_list">
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
        </div>
        <div class="top3_ex">
            <div class="top3_text">夏だからこそおすすめの保湿ケア</div>
            <a href=""><img src="{{ asset('img/detail_btn.png') }}" class="detail_btn"></a>
        </div>
    </div>

    <div class="top3_flex">
        <div class="top3_ex">
            <div class="top3_text">気になるニオイや黒ずみを徹底ケアできる！<br>美白効果プラスのデリケートケア</div>
            <a href=""><img src="{{ asset('img/detail_btn.png') }}" class="detail_btn"></a>
        </div>
        <div class="top3_list">
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
        </div>
    </div>

    <div class="top3_flex">
        <div class="top3_list">
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item1.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item2.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
            <a href="" class="top3_item_a">
                <img src="{{ asset('img/item3.png') }}" class="top3_item_img">
                <div class="top3_item_name">商品名</div>
                <div class="top3_item_name">￥1,000</div>
            </a>
        </div>
        <div class="top3_ex">
            <div class="top3_text">今あるお悩みをきっと解決してくれる<br>敏感肌やこだわりたい方にお勧めの<br>オーガニック商品</div>
            <a href=""><img src="{{ asset('img/detail_btn.png') }}" class="detail_btn"></a>
        </div>
    </div>
</div>

<img src="{{ asset('img/top_ranking_title.png') }}" class="top_ranking_title">
<a href="{{ route('ranking') }}" class="top_ranking_a">売上ランキングをもっと見る</a>

<div class="top_rank3">
    <a href="" class="top3_item_a">
        <img src="{{ asset('img/rank1.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top3_item_a">
        <img src="{{ asset('img/rank2.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top3_item_a">
        <img src="{{ asset('img/rank3.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
</div>

<div class="top_rank_other">
    <a href="" class="top_rank_other_a">
        <img src="{{ asset('img/rank4.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top_rank_other_a">
        <img src="{{ asset('img/rank5.png') }}" class="rank_img">
        <img src="{{ asset('img/item2.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top_rank_other_a">
        <img src="{{ asset('img/rank6.png') }}" class="rank_img">
        <img src="{{ asset('img/item3.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top_rank_other_a">
        <img src="{{ asset('img/rank7.png') }}" class="rank_img">
        <img src="{{ asset('img/item1.png') }}" class="ranking_item_img">
        <div class="top3_item_name">商品名</div>
        <div class="top3_item_name">￥1,000</div>
    </a>
    <a href="" class="top_rank_other_a">
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

<div class="top1_left">
    <div class="sp_fixed_left">
        お急ぎの方はお電話にて
        <a href="tel:0120846058" onclick="gtag_report_conversion()"><img src="{{ asset('img/tel_btn_sp.png') }}" class="" style="width:170px"></a>
    </div>
    <a href="#contact" class="top1_contact"><img src="{{ asset('img/contact_btn.png') }}" class="" style="width:170px; margin-top: 30px;"></a>
</div>
<div class="top1_left2">09:00～18:00(年末年始を除く)</div>

<div class="top_bg1">
    <div class="top1_text">
        弘 法 大 師 空 海 が 見 守 る 高 野 山 　<br>
        価 値 あ る 人 生 に 、 永 遠 の 誉 れ を
    </div>

</div>

<div class="top_bg2">
    <div class="top2_title">
        世界遺産高野山で唯一の<br>
        本堂内納骨堂
    </div>

    <iframe width="350" height="200" src="https://www.youtube.com/embed/YqH0erLAkh4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="top2_youtube_text">
        “墓じまい”増加… 高野山の寺院に初の納骨堂新設<br>変わる高野山と、書道家・露巌が描く変わらない<br>空海の“こころ”
        <div style="text-align: right;">引用：読売テレビニュース</div>
    </div>

    <div class="top2_text">
        かつての天下人や歴史に名を残す偉人、また、有名企業経営者や実業家たちがこぞって墓を建立した日本最大の霊場であり、世界遺産の高野山。
        弘法大師空海が開創し、一二〇〇年以上の歴史を刻んだこの地において、初めて寺院本堂内の室内型本格納骨堂が完成します。<br>
        奥之院に並ぶ聖地「壇上伽藍」の目の前に位置し、征夷大将軍坂上田村麻呂の命により、開創された由緒正しき寺院である「遍照尊院」。<br>
        その本堂地下に展開される絢爛な納骨堂。弘法大師空海手彫りと伝わる大日如来像が故人様を温かく見守り続けます。
    </div>

</div>


<div class="top_bg5">
    <div class="top5_title">高野山に眠る歴史上の偉人たち</div>
    <div class="top5_text">
        曽我兄弟、平清盛、法明上人、大岡越前、上杉謙信<br>
        武田信玄、加賀・前田家、陸奥宗光、明智光秀<br>
        柴田勝家、親鶯上人、豊臣家、豊臣秀吉、織田信長<br>
        春日局、尾張徳川家、筒井順慶、安芸・浅野家<br>
        伊達政宗、石田光成、赤穂浪士四十七士、初代團十郎<br>
        霊元天皇～孝明天皇
    </div>
</div>

<div class="top_bg_black2">
    <div class="top_black_title">第一期完売御礼！<br><br>第二期販売開始を記念して今なら<br>資料請求で年間管理費全額無料で<br>ご案内！！</div>

    <img src="{{ asset('img/ma1.png') }}" class="ma_img">
    <div class="ma_text">
        <img src="{{ asset('img/ma_title1_sp.png') }}" class="ma_title" style="width: 180px; margin: 20px auto 10px 30%;">
        <div class="ma_text_flex">
            <div class="">一定期間遍照尊院で<br>供養したのち奥之院へ合祀</div>
            <div class="" style="padding-top: 15px;"><span style="font-size: 40px;">8</span>万円</div>
        </div>
    </div>

    <img src="{{ asset('img/ma2.png') }}" class="ma_img">
    <div class="ma_text">
        <img src="{{ asset('img/ma_title2_sp.png') }}" class="ma_title" style="margin:20px auto 10px 33%;">
        <div class="ma_text_flex">
            <div class="" style="margin-top: 15px;">個人向け納骨壇</div>
            <div class="" style="padding-top: 15px;"><span style="font-size: 40px;">20</span>万円~</div>
        </div>
    </div>

    <img src="{{ asset('img/ma3.png') }}" class="ma_img">
    <div class="ma_text">
        <img src="{{ asset('img/ma_title3_sp.png') }}" class="ma_title" style="margin:20px auto 10px 36%;">
        中型納骨壇<br>
        <a href="{{ route('index') }}/#contact"><img src="{{ asset('img/ma_btn.png') }}" class="ma_btn"></a>
    </div>

    <img src="{{ asset('img/ma4.png') }}" class="ma_img">
    <div class="ma_text">
        <img src="{{ asset('img/ma_title4_sp.png') }}" class="ma_title">
        大型納骨壇<br>
        <a href="{{ route('index') }}/#contact"><img src="{{ asset('img/ma_btn.png') }}" class="ma_btn"></a>
    </div>

    <img src="{{ asset('img/ma5.png') }}" class="ma_img">
    <div class="ma_text">
        <img src="{{ asset('img/ma_title5_sp.png') }}" class="ma_title">
        特別納骨壇<br>
        <a href="{{ route('index') }}/#contact"><img src="{{ asset('img/ma_btn.png') }}" class="ma_btn"></a>
    </div>

</div>

<div class="top_bg6">
    <img src="{{ asset('img/top6_title_sp.png') }}" class="top6_title">
    <div class="top6_text1">Q1. 信仰している宗教が高野山真言宗ではないのですが納骨できますか？</div>
    <div class="top6_text2">A1. 当院納骨堂での納骨並びに永代供養につきましては宗教宗派問わず承ることが可能でございます。</div>
    <div class="top6_text1">Q2. 納骨壇の場所を選ぶことはできますか？</div>
    <div class="top6_text2">A2. お申込み時点で空きがございましたらご希望を承ることが可能でございます。</div>
    <div class="top6_text1">Q3. 既にお墓があるのですが、遍照閣にも入ることはできますか？</div>
    <div class="top6_text2">A3. 既にあるお墓から、一部のお骨を遍照閣に分けてご供養させていただく「分骨」という方法がございます。<br>
        何らかの事情で分骨ができない場合はお位牌を納めさせていただくことも可能です。</div>
    <div class="top6_text1">Q4. 今お墓より納骨堂が選ばれている理由はなんですか？</div>
    <div class="top6_text2">
        A4. 納骨堂もお墓も故人様が安らかに眠る場所という点では同じですが、納骨堂は、お墓のように墓石の掃除や<br>
        敷地内の草取りといった維持管理が必要なく、更に当院では僧侶が365日毎日ご供養いたします。<br>
        室内納骨堂なので雨風も気にせず、いつでも安心してお参りしていただけます。また後世に負担を残さない<br>
        ように、お墓ではなく納骨堂が選ばれる方が多いです。<br>
        当院では所定の期限を過ぎたのちは合同供養墓にて永代供養させていただきます。<br>
    </div>
</div>

<div class="top_bg7">
    <img src="{{ asset('img/top7_title_sp.png') }}" class="top7_title">
</div>
<div class="top_bg8">
    <img src="{{ asset('img/top8_title_sp.png') }}" class="top8_title">

    <div class="top8_box">
        <div class="">
        実家の近くには先祖のお墓がありますが、誰も管理していない状態です。<br>
        そろそろお墓を撤去することを考えていました。高野山の遍照閣は設備や管理がしっかり整っているため、子供たちに迷惑をかけずに済むと感じました。
        </div>
        <div class="top8_age">70代女性</div>
    </div>
    <div class="top8_box">
        <div class="">
        現地の見学会に参加してから、遍照閣を購入することを決めました。遍照尊院の本堂は予想以上に広々としており、納骨堂も写真で見る以上に立派な印象を受けました。
        </div>
        <div class="top8_age">70代男性</div>
    </div>
    <div class="top8_box">
        <div class="">
        自分のために買いました。遍照閣は所定の期間（私の場合は23回忌）の供養が終わると、高野山の奥之院に移され、そこで永遠に供養が続くとのこと。安心してお任せしようと思いました。
        </div>
        <div class="top8_age">80代女性</div>
    </div>
    <div class="top8_box">
        <div class="">
        次男でお墓がないため、夫婦で入れる納骨堂遍照閣を購入しました。<br>子供達に負担をかけないためにもお墓ではなく納骨堂を選んでよかったと思っております。
        </div>
        <div class="top8_age">60代男性</div>
    </div>
    <div class="top8_box">
        <div class="">
        既にお墓はありましたが生前、母が大好きだった高野山に納骨をしてあげたかったので分骨をして納骨させていただきました。<br>きっと天国で母がよろこんでくれていると思います。
        </div>
        <div class="top8_age">80代女性</div>
    </div>
    <div id="contact"></div>
</div>
<div class="top_bg9">
    <form name="mail_form" action="{{ route('mail_send') }}" method="post" enctype="multipart/form-data">
        @csrf
        <img src="{{ asset('img/top9_title_sp.png') }}" class="top8_title">
        <div class="contact_div">
            <div class="contact_name">お名前</div>
            <input class="contact_text" placeholder="" name="name" type="text" id="name">
        </div>
        <div class="contact_div">
            <div class="contact_name">フリガナ</div>
            <input class="contact_text" placeholder="" name="kana" type="text" id="kana">
        </div>
        <div class="contact_div">
            <div class="contact_name">メールアドレス</div>
            <input class="contact_text" placeholder="" name="mail" type="text" id="mail">
        </div>
        <div class="contact_div">
            <div class="contact_name">郵便番号</div>
            <input class="contact_text" placeholder="" name="zip" type="text" id="zip" style="width:200px">
        </div>
        <div class="contact_div">
            <div class="contact_name">住所</div>
            <input class="contact_text" placeholder="" name="address" type="text" id="address">
        </div>
        <div class="contact_div">
            <div class="contact_name">建物名・部屋番号</div>
            <input class="contact_text" placeholder="" name="building" type="text" id="building">
        </div>
        <div class="contact_div">
            <div class="contact_name">お電話番号</div>
            <input class="contact_text" placeholder="" name="tel" type="text" id="tel">
        </div>
        <div class="contact_div">
            <div class="contact_name">お問い合わせ内容</div>
            <textarea class="contact_textarea" placeholder="" name="content" id="content"></textarea>
        </div>
        <input type="hidden" name="recaptchaToken" id="recaptchaToken">
        <div class="g-recaptcha mt-3" data-sitekey="6Lc8TFonAAAAAKJqDjHHXEF-E9R-ODofyBtg6GMj" data-callback="callback_recaptcha"></div>
        <div class="error_message" id="error_message"></div>
        <a href="#!" onclick="clickMailButton()" class="send_btn">送信する</a>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection
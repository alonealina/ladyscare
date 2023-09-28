@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="item_detail_div">
    <div class="item_detail_flex">
        <div class="item_detail_img_list">
            <img src="{{ asset('img/item_detail_img1.png') }}" class="item_detail_img_s">
            <img src="{{ asset('img/item_detail_img2.png') }}" class="item_detail_img_s">
            <img src="{{ asset('img/item_detail_img3.png') }}" class="item_detail_img_s">
            <img src="{{ asset('img/item_detail_img4.png') }}" class="item_detail_img_s">
        </div>
        <div class="item_detail_img_div">
            <img src="{{ asset('img/item_detail_sphere.png') }}" class="item_detail_sphere">
            <img src="{{ asset('img/item_detail_img5.png') }}" class="item_detail_img_main">
        </div>
        <div class="item_detail_content">
            <div class="item_detail_ex">
                Care Female デリケート専用美容液
                <div class="item_detail_text">
                    業界初！潤う粘膜ケア+ふっくら膣ケアWケア美容液<br>
                    膣でのエビデンス取得成分(INROSE)<br>
                    最先端美容液で透明感(ヒト幹細胞)
                </div>
                <a href="#!" class="item_detail_tag">#初心者</a>
                <a href="#!" class="item_detail_tag">#オーガニック</a>
                <a href="#!" class="item_detail_tag">#ナチュラル</a>
                <a href="#!" class="item_detail_tag">#無農薬</a>
                <a href="#!" class="item_detail_tag">#自然由来</a>
                <a href="#!" class="item_detail_tag">#自然成分</a>
                <a href="#!" class="item_detail_tag">#天然成分</a>
                <a href="#!" class="item_detail_tag">#天然由来</a>
                <a href="#!" class="item_detail_tag">#植物性</a>
                <a href="#!" class="item_detail_tag">#エイジングケア</a>
                <a href="#!" class="item_detail_tag">#美容</a>
            </div>

            <a href="#!"><img src="{{ asset('img/fav_btn.png') }}" class="item_detail_fav"></a>

            <div class="black_line"></div>

            <div class="item_detail_price_flex">
                <div class="">
                    <input type="radio" class="radio_orange" name="type" value="通常購入">通常購入
                    <div class="item_detail_price_div">
                        1,800円<span style="font-size:1.5vw;">(税別)</span>　<span class="item_detail_price_gray">+ 送料500円</span>
                    </div>
                </div>
                <div class="">
                    数量　<input type="number" class="input_number" name="example1" value="1">
                </div>
            </div>

            <div class="black_line"></div>

            <div class="item_detail_price_flex">
                <div class="">
                    <input type="radio" class="radio_orange" name="type" value="定期購入">定期購入
                    <div class="item_detail_price_list">
                        <div class="item_detail_item">
                            <div class="item_detail_reg">3ヶ月<br><span style="font-size: 0.8vw;">5,100円</span><span style="font-size: 0.6vw;">(税別)</span></div>
                            <div class="orange_sphere">00%<br><span style="font-size:0.7vw;">お得</span></div>
                        </div>
                        <div class="item_detail_item">
                            <div class="item_detail_reg">6ヶ月<br><span style="font-size: 0.8vw;">5,100円</span><span style="font-size: 0.6vw;">(税別)</span></div>
                            <div class="orange_sphere">00%<br><span style="font-size:0.7vw;">お得</span></div>
                        </div>
                        <div class="item_detail_item">
                            <div class="item_detail_reg">12ヶ月<br><span style="font-size: 0.8vw;">5,100円</span><span style="font-size: 0.6vw;">(税別)</span></div>
                            <div class="orange_sphere">00%<br><span style="font-size:0.7vw;">お得</span></div>
                        </div>
                    </div>
                </div>
                <div class="">
                    数量　<input type="number" class="input_number" name="example1" value="1">
                </div>
            </div>

            <div class="item_detail_btn_flex">
                <a href="#!" class="item_detail_btn">カートに入れる</a>
                <a href="#!" class="item_detail_btn">購入手続きへ</a>
            </div>

        </div>
    </div>


    <div class="danka_other_div">
        <div class="tab_flex">
            <a href="#!" id="detail" onclick="clickDetail()" class="item_detail_tab item_current">商品情報</a>
            <a href="#!" id="review" onclick="clickReview()" class="item_detail_tab">レビュー <span style="color: #FF8BAF;">8件</span></a>
            <a href="#!" id="qa" onclick="clickQa()" class="item_detail_tab">商品Q＆A <span style="color: #FF8BAF;">3件</span></a>
        </div>
        <div class="detail_content">
            防腐剤フリーで、使う直前まで作りたての新鮮さを保つための個包装フィルム。<br>
            一回使い切りで空気に触れさせないのも、Care Femaleのこだわりです。<br>
            代表の20年に渡る施術者としての中で、お客様の声を聞き、本当に必要な成分、処方、使い方にこだわりました。<br>
            ヒト幹細胞培養液の中でも最高峰と言われる 「Remy Stem」「ビタミンC誘導体」「コラーゲンペプチド」の複合成分でリ バースエイジングを叶えます。<br>
            INROSEは、「膣の乾燥」「硬さ」「かゆみ」「くすみ」「常在菌調整」「ｐＨ調整」などに有効。<br>
            ※フランス、ベルサイユ＋グラースバラの胎座細胞を自然発酵させた、膣内でのエビデンスを持つ希少な成分です。<br>
            塗る＋ほぐすで骨盤内への血流と骨盤底を柔らかくし、良いホルモン＋良い粘液「ちゃんと自分を知り、愛しむためのケア」

            <div class="detail_content_flex">
                <div class="detail_content_title">ご使用方法</div>
                <div class="detail_content_text">デリケートゾーンの気になる箇所に塗って使用します。</div>
            </div>
            <div class="detail_content_flex">
                <div class="detail_content_title">原材料</div>
                <div class="detail_content_text">植物性プラセンタエキス、ヒト幹細胞培養液、オリーブ果実油、ヒマワリ種子油、アルガニアスピノサ核油、ホホバ種子油、 マカデミア種子油、ダイズ油、ニンジン根エキス、ベルガモット果実油</div>
            </div>
            <div class="detail_content_flex">
                <div class="detail_content_title">保存方法</div>
                <div class="detail_content_text">高温多湿・直射日光を避けて保管してください。</div>
            </div>
            <div class="detail_content_flex">
                <div class="detail_content_title">ご使用上の注意点</div>
                <div class="detail_content_text">肌に異常が生じていないかよく注意して使用してください。お肌に合わないときはご使用をおやめください。 目に入らないようにしてください。</div>
            </div>
            <div class="detail_content_flex">
                <div class="detail_content_title" style="width: 5vw;">ブランド</div>
                <div class="" style="width: 10vw;">Care Female</div>
                <div class="detail_content_title" style="width: 4vw;">販売元</div>
                <div class="" style="width: 22vw;">株式会社Leep<br>〒107-0062 東京都港区南青山3-8-40</div>
                <div class="detail_content_title" style="width: 4vw;">製造国</div>
                <div class="">日本</div>
            </div>
        </div>
        <div class="review_content" style="display:none;">

        </div>

        <div class="qa_content" style="display:none;">
            <div class="qa_flex">
                <div class="qa_flex_s">状況</div>
                <div class="qa_flex_l">お問い合わせ/回答</div>
                <div class="qa_flex_s">日付</div>
                <div class="qa_flex_s">投稿者</div>
            </div>
            <div class="qa_flex">
                <div class="qa_states qa_gray">回答待ち</div>
                <div class="qa_flex_text">とても良い商品で大変気にいってます！<br>効果的な使用頻度を教えていただきたいです。現在毎日使用していますが、毎日使用すると肌に負担がありますか?</div>
                <div class="qa_flex_s_gray">2023.00.00</div>
                <div class="qa_flex_s_gray">acountname</div>
            </div>
            <div class="qa_gray_line"></div>

            <div class="qa_flex">
                <div class="qa_states qa_orange">回答済み</div>
                <div class="qa_flex_text">とても良い商品で大変気にいってます！<br>効果的な使用頻度を教えていただきたいです。現在毎日使用していますが、毎日使用すると肌に負担がありますか?</div>
                <div class="qa_flex_s_gray">2023.00.00</div>
                <div class="qa_flex_s_gray">acountname</div>
            </div>

            <div class="qa_flex">
                <div class="qa_flex_s"></div>
                <div class="qa_answer">
                    愛するお客様、<br>
                    健康な膣ケアのためにこの商品をお選びいただき、誠にありがとうございます。<br>
                    毎朝夕方使えるように作りました。毎日使っていただいて結構です！<br><br>
                    1. 全成分自然由来成分で作りました (bha 0.5%を除く)<br>
                    2. 弱酸性pH5.5製品なので肌のバリアを崩しません<br>
                    3. まろやかな成分で作ったにもかかわらず、効果が良い理由は製品に水一滴も入れずに有効成分で満たされているからです。<br>
                    4. 角質ケアに効果的なエンザイムパウダーウォッシュにフランス産クレイを100,000ppm入れて、毎日洗顔するたびにクレイパックできる効果があります。<br><br>
                    気になることに対する回答になればと思います。 また会いましょう。
                </div>
            </div>

            <div class="qa_gray_line"></div>

            <div class="qa_flex">
                <div class="qa_states qa_orange">回答済み</div>
                <div class="qa_flex_text">とても良い商品で大変気にいってます！<br>効果的な使用頻度を教えていただきたいです。現在毎日使用していますが、毎日使用すると肌に負担がありますか?</div>
                <div class="qa_flex_s_gray">2023.00.00</div>
                <div class="qa_flex_s_gray">acountname</div>
            </div>

            <div class="qa_flex">
                <div class="qa_flex_s"></div>
                <div class="qa_answer">
                    愛するお客様、<br>
                    健康な膣ケアのためにこの商品をお選びいただき、誠にありがとうございます。<br>
                    毎朝夕方使えるように作りました。毎日使っていただいて結構です！<br><br>
                    1. 全成分自然由来成分で作りました (bha 0.5%を除く)<br>
                    2. 弱酸性pH5.5製品なので肌のバリアを崩しません<br>
                    3. まろやかな成分で作ったにもかかわらず、効果が良い理由は製品に水一滴も入れずに有効成分で満たされているからです。<br>
                    4. 角質ケアに効果的なエンザイムパウダーウォッシュにフランス産クレイを100,000ppm入れて、毎日洗顔するたびにクレイパックできる効果があります。<br><br>
                    気になることに対する回答になればと思います。 また会いましょう。
                </div>
            </div>


        </div>


    </div>



</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/item_detail.js') }}"></script>


@endsection


@section('content_sp')





<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/work.js') }}"></script>


@endsection
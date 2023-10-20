@extends('layouts.app')

@section('content')
<div class="fix_line">
    <a href="#" class=""><img src="{{ asset('img/line_small.png') }}" class="" style="width:50px"></a>
</div>

<div class="item_detail_div">
    <div class="item_detail_flex">
        <div class="item_detail_img_list">
            <a onclick="clickImg(1)" class=""><img src="{{ asset('img/item_detail_img1.png') }}" class="item_detail_img_s"></a>
            <a onclick="clickImg(2)" class=""><img src="{{ asset('img/item_detail_img2.png') }}" class="item_detail_img_s"></a>
            <a onclick="clickImg(3)" class=""><img src="{{ asset('img/item_detail_img3.png') }}" class="item_detail_img_s"></a>
            <a onclick="clickImg(4)" class=""><img src="{{ asset('img/item_detail_img4.png') }}" class="item_detail_img_s"></a>
        </div>
        <div class="item_detail_img_div">
            <img src="{{ asset('img/item_detail_sphere.png') }}" class="item_detail_sphere">
            <img id="view_img1" src="{{ asset('img/item_detail_img1.png') }}" class="item_img item_detail_img_main" alt="" hidden>
            <img id="view_img2" src="{{ asset('img/item_detail_img2.png') }}" class="item_img item_detail_img_main" alt="" hidden>
            <img id="view_img3" src="{{ asset('img/item_detail_img3.png') }}" class="item_img item_detail_img_main" alt="" hidden>
            <img id="view_img4" src="{{ asset('img/item_detail_img4.png') }}" class="item_img item_detail_img_main" alt="" hidden>
            <img id="view_img5" src="{{ asset('img/item_detail_img5.png') }}" class="item_img item_detail_img_main" alt="">
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
                    <input type="radio" class="radio_orange" name="type" value="定期購入">定期購入 <span class="price_off_span">00%off</span>
                    <a href="{{ route('subscription') }}" class="price_detail_a" target="_blank">定期購入について詳しく見る</a>
                    <div class="item_detail_price_div">
                        1,800円<span style="font-size:1.5vw;">(税別)</span>　<span class="item_detail_price_gray">+ 送料500円</span>
                    </div>
                </div>
                <div class="">
                    <div>　数量　<input type="number" class="input_number" name="example1" value="1" style="margin-top: -0.5vw; margin-left: 0.26vw;"></div>
                    <div>
                        お届け　
                        <select name="month" class="select_month" style="" id="month">
                            <option value="1ヶ月">1ヶ月</option>
                            <option value="2ヶ月">2ヶ月</option>
                            <option value="3ヶ月">3ヶ月</option>
                            <option value="4ヶ月">4ヶ月</option>
                            <option value="5ヶ月">5ヶ月</option>
                            <option value="6ヶ月">6ヶ月</option>
                        </select>

                    </div>
                </div>
                
            </div>

            <div class="item_detail_btn_flex">
                <a href="#!" class="item_detail_btn" onclick="clickCart()">カートに入れる</a>
                <a href="{{ route('item_buy_normal') }}" class="item_detail_btn">購入手続きへ</a>
            </div>

        </div>
    </div>


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

        <div class="review_flex">
            <div class="review_box">
                <div class="review_box_title">商品満足度</div>
                <div class="review_5star">★★★★☆</div>
                <div class="review_5">4/5</div>
            </div>
            <div class="review_box">
                <div class="review_box_title">採点分析</div>
                <div class="review_bar_flex">
                    <div class="review_bar_star">★5</div>
                    <div class="review_bar">
                        <div class="review_bar_orange" style="width: 60%;"></div>
                    </div>
                    <div class="review_bar_per">60%</div>
                </div>
                <div class="review_bar_flex">
                    <div class="review_bar_star">★4</div>
                    <div class="review_bar">
                        <div class="review_bar_orange" style="width: 28%;"></div>
                    </div>
                    <div class="review_bar_per">28%</div>
                </div>
                <div class="review_bar_flex">
                    <div class="review_bar_star">★3</div>
                    <div class="review_bar">
                        <div class="review_bar_orange" style="width: 11%;"></div>
                    </div>
                    <div class="review_bar_per">11%</div>
                </div>
                <div class="review_bar_flex">
                    <div class="review_bar_star">★2</div>
                    <div class="review_bar">
                        <div class="review_bar_orange" style="width: 1%;"></div>
                    </div>
                    <div class="review_bar_per">1%</div>
                </div>
                <div class="review_bar_flex">
                    <div class="review_bar_star">★1</div>
                    <div class="review_bar">
                        <div class="review_bar_orange" style="width: 0%;"></div>
                    </div>
                    <div class="review_bar_per">0%</div>
                </div>
            </div>
        </div>
        <div class="qa_gray_line"></div>

        <div class="review_star">★★★★★ 5/5</div>
        <div class="review_name">acountname｜2023.00.00</div>
        <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
        <div class="qa_gray_line"></div>

        <div class="review_star">★★★★★ 5/5</div>
        <div class="review_name">acountname｜2023.00.00</div>
        <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
        <div class="qa_gray_line"></div>

        <div class="review_star">★★★★★ 5/5</div>
        <div class="review_name">acountname｜2023.00.00</div>
        <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
        <div class="qa_gray_line"></div>

        <div class="review_star">★★★★★ 5/5</div>
        <div class="review_name">acountname｜2023.00.00</div>
        <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
        <div class="qa_gray_line"></div>

        <div class="review_star">★★★★★ 5/5</div>
        <div class="review_name">acountname｜2023.00.00</div>
        <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
        <div class="qa_gray_line"></div>

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

<div class="cart_count" id="cart_count" hidden>1</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/item_detail.js') }}"></script>


@endsection


@section('content_sp')

<div class="item_detail_flex">
    <div class="item_detail_img_list">
        <a onclick="clickImg(1)" class=""><img src="{{ asset('img/item_detail_img1.png') }}" class="item_detail_img_s"></a>
        <a onclick="clickImg(2)" class=""><img src="{{ asset('img/item_detail_img2.png') }}" class="item_detail_img_s"></a>
        <a onclick="clickImg(3)" class=""><img src="{{ asset('img/item_detail_img3.png') }}" class="item_detail_img_s"></a>
        <a onclick="clickImg(4)" class=""><img src="{{ asset('img/item_detail_img4.png') }}" class="item_detail_img_s"></a>
    </div>
    <div class="item_detail_img_div">
        <img src="{{ asset('img/item_detail_sphere.png') }}" class="item_detail_sphere">
        <img id="view_img1" src="{{ asset('img/item_detail_img1.png') }}" class="item_img item_detail_img_main" alt="" hidden>
        <img id="view_img2" src="{{ asset('img/item_detail_img2.png') }}" class="item_img item_detail_img_main" alt="" hidden>
        <img id="view_img3" src="{{ asset('img/item_detail_img3.png') }}" class="item_img item_detail_img_main" alt="" hidden>
        <img id="view_img4" src="{{ asset('img/item_detail_img4.png') }}" class="item_img item_detail_img_main" alt="" hidden>
        <img id="view_img5" src="{{ asset('img/item_detail_img5.png') }}" class="item_img item_detail_img_main" alt="">
    </div>
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
                1,800円(税別)<span class="item_detail_price_gray">+送料500円</span>
            </div>
        </div>
        <div class="">
            数量<input type="number" class="input_number" name="example1" value="1" style="margin-left: 3px;">
        </div>
    </div>

    <div class="black_line"></div>

    <div class="item_detail_price_flex">
        <div class="">
            <input type="radio" class="radio_orange" name="type" value="定期購入">定期購入 <span class="price_off_span">00%off</span>
            <div class="item_detail_price_div">
                1,800円(税別)<span class="item_detail_price_gray">+送料500円</span>
            </div>
            <a href="{{ route('subscription') }}" class="price_detail_a" target="_blank">定期購入について詳しく見る</a>
        </div>
        <div class="">
            <div>　数量<input type="number" class="input_number" name="example1" value="1" style="margin-top: -0.5vw; margin-left: 3px;"></div>
            <div>
                お届け
                <select name="month" class="select_month" style="" id="month">
                    <option value="1ヶ月">1ヶ月</option>
                    <option value="2ヶ月">2ヶ月</option>
                    <option value="3ヶ月">3ヶ月</option>
                    <option value="4ヶ月">4ヶ月</option>
                    <option value="5ヶ月">5ヶ月</option>
                    <option value="6ヶ月">6ヶ月</option>
                </select>

            </div>
        </div>
    </div>

    <a href="{{ route('item_buy_normal') }}" class="send_btn send_btn_white" style="margin:20px auto;">購入手続きへ</a>
    <a href="#!" class="send_btn" style="margin:20px auto;" onclick="clickCart()">カートに入れる</a>

</div>

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

    <div class="detail_content_title">ご使用方法</div>
    <div class="detail_content_text">デリケートゾーンの気になる箇所に塗って使用します。</div>
    <div class="detail_content_title">原材料</div>
    <div class="detail_content_text">植物性プラセンタエキス、ヒト幹細胞培養液、オリーブ果実油、ヒマワリ種子油、アルガニアスピノサ核油、ホホバ種子油、 マカデミア種子油、ダイズ油、ニンジン根エキス、ベルガモット果実油</div>
    <div class="detail_content_title">保存方法</div>
    <div class="detail_content_text">高温多湿・直射日光を避けて保管してください。</div>
    <div class="detail_content_title">ご使用上の注意点</div>
    <div class="detail_content_text">肌に異常が生じていないかよく注意して使用してください。お肌に合わないときはご使用をおやめください。 目に入らないようにしてください。</div>
    <div class="detail_content_title">ブランド</div>
    <div class="detail_content_text" >Care Female</div>
    <div class="detail_content_title">販売元</div>
    <div class="detail_content_text" >株式会社Leep<br>〒107-0062 東京都港区南青山3-8-40</div>
    <div class="detail_content_title">製造国</div>
    <div class="detail_content_text">日本</div>
</div>

<div class="review_content" style="display:none;">
    <div class="review_box">
        <div class="review_box_title">商品満足度</div>
        <div class="review_5star">★★★★☆</div>
        <div class="review_5">4/5</div>
    </div>
    <div class="review_box">
        <div class="review_box_title">採点分析</div>
        <div class="review_bar_flex">
            <div class="review_bar_star">★5</div>
            <div class="review_bar">
                <div class="review_bar_orange" style="width: 60%;"></div>
            </div>
            <div class="review_bar_per">60%</div>
        </div>
        <div class="review_bar_flex">
            <div class="review_bar_star">★4</div>
            <div class="review_bar">
                <div class="review_bar_orange" style="width: 28%;"></div>
            </div>
            <div class="review_bar_per">28%</div>
        </div>
        <div class="review_bar_flex">
            <div class="review_bar_star">★3</div>
            <div class="review_bar">
                <div class="review_bar_orange" style="width: 11%;"></div>
            </div>
            <div class="review_bar_per">11%</div>
        </div>
        <div class="review_bar_flex">
            <div class="review_bar_star">★2</div>
            <div class="review_bar">
                <div class="review_bar_orange" style="width: 1%;"></div>
            </div>
            <div class="review_bar_per">1%</div>
        </div>
        <div class="review_bar_flex">
            <div class="review_bar_star">★1</div>
            <div class="review_bar">
                <div class="review_bar_orange" style="width: 0%;"></div>
            </div>
            <div class="review_bar_per">0%</div>
        </div>
    </div>
    <div class="qa_gray_line"></div>

    <div class="review_star">★★★★★ 5/5</div>
    <div class="review_name">acountname｜2023.00.00</div>
    <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
    <div class="qa_gray_line"></div>

    <div class="review_star">★★★★★ 5/5</div>
    <div class="review_name">acountname｜2023.00.00</div>
    <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
    <div class="qa_gray_line"></div>

    <div class="review_star">★★★★★ 5/5</div>
    <div class="review_name">acountname｜2023.00.00</div>
    <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
    <div class="qa_gray_line"></div>

    <div class="review_star">★★★★★ 5/5</div>
    <div class="review_name">acountname｜2023.00.00</div>
    <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
    <div class="qa_gray_line"></div>

    <div class="review_star">★★★★★ 5/5</div>
    <div class="review_name">acountname｜2023.00.00</div>
    <div class="review_text">気に入っていてこればかり何度もリピートしてます。無香で洗いやすく刺激もないです。</div>
    <div class="qa_gray_line"></div>
</div>

<div class="qa_content" style="display:none;">
    <div class="qa_flex">
        <div class="qa_flex_s">状況</div>
        <div class="qa_flex_l">お問い合わせ/回答</div>
        <div class="qa_flex_s">日付</div>
    </div>
    <div class="qa_flex">
        <div class="qa_states qa_gray">回答待ち</div>
        <div class="qa_flex_text">とても良い商品で大変気にいってます！<br>効果的な使用頻度を教えていただきたいです。現在毎日使用していますが、毎日使用すると肌に負担がありますか?</div>
        <div class="qa_flex_s_gray">2023.<br>00.00</div>
    </div>
    <div class="qa_flex">
        <div class="qa_flex_s"></div>
        <div class="qa_flex_l">投稿者<br><span style="color:#5D43438C;">acountname</span></div>
        <div class="qa_flex_s"></div>
    </div>

    <div class="qa_gray_line"></div>

    <div class="qa_flex">
        <div class="qa_states qa_orange">回答済み</div>
        <div class="qa_flex_text">とても良い商品で大変気にいってます！<br>効果的な使用頻度を教えていただきたいです。現在毎日使用していますが、毎日使用すると肌に負担がありますか?</div>
        <div class="qa_flex_s_gray">2023.<br>00.00</div>
    </div>
    <div class="qa_flex">
        <div class="qa_flex_s"></div>
        <div class="qa_flex_l">投稿者<br><span style="color:#5D43438C;">acountname</span></div>
        <div class="qa_flex_s"></div>
    </div>

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


    <div class="qa_gray_line"></div>

    <div class="qa_flex">
        <div class="qa_states qa_orange">回答済み</div>
        <div class="qa_flex_text">とても良い商品で大変気にいってます！<br>効果的な使用頻度を教えていただきたいです。現在毎日使用していますが、毎日使用すると肌に負担がありますか?</div>
        <div class="qa_flex_s_gray">2023.<br>00.00</div>
    </div>
    <div class="qa_flex">
        <div class="qa_flex_s"></div>
        <div class="qa_flex_l">投稿者<br><span style="color:#5D43438C;">acountname</span></div>
        <div class="qa_flex_s"></div>
    </div>

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

<div class="cart_count" id="cart_count" hidden>1</div>

<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/item_detail.js') }}"></script>


@endsection
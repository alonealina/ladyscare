<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ladys care product</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">

    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            <header>
                <div class="header_menu">
                    <a href="{{ route('index') }}" class="header_a">TOP</a>
                    <a href="{{ route('category') }}" class="header_a">CATEGORY</a>
                    <a href="{{ route('trouble') }}" class="header_a">TROUBLE</a>
                    <a href="{{ route('pickup') }}" class="header_a">PICK UP</a>
                    <a href="{{ route('ranking') }}" class="header_a">RANKING</a>
                    <a href="{{ route('news') }}" class="header_a">NEWS</a>
                </div>
                <img src="{{ asset('img/header_logo.png') }}" class="header_logo_img">

                <div class="header_menu" style="width: 34vw;">
                    <div class="">
                        <input class="header_input" placeholder="お探しの商品に関するワードを入力してください" name="search" type="text" id="search">
                        <a href="{{ route('index') }}"><img src="{{ asset('img/search_btn.png') }}" style="width: 1.7vw; margin-left:0.4vw;"></a>
                    </div>
                    <a href="{{ route('mypage') }}"><img src="{{ asset('img/human_btn.png') }}" style="width: 1.3vw; margin-top: 1vw;"></a>
                    <a href="{{ route('fav') }}"><img src="{{ asset('img/fav_btn.png') }}" style="width: 1.8vw; margin-top: 0.9vw;"></a>
                    <a href="{{ route('item_buy_normal') }}"><img src="{{ asset('img/cart_btn.png') }}" style="width: 2.4vw; margin-top: 1.3vw;"></a>
                </div>
            </header>
            <div class="header_margin"></div>

            @yield('content')

            <footer>
                <div><a href="{{ route('category') }}" class="footer_link1">CATEGORY</a></div>
                <div class="footer_flex">
                    <a href="{{ route('category') }}" class="footer_link2">ミルク・ローション・ソープ</a>
                    <a href="{{ route('category') }}" class="footer_link2">トリートメント・保湿パック</a>
                    <a href="{{ route('category') }}" class="footer_link2">敏感肌用・オーガニック</a>
                    <a href="{{ route('category') }}" class="footer_link2">クリーム・バター</a>
                    <a href="{{ route('category') }}" class="footer_link2">スクラブ・スムーサー</a>
                    <a href="{{ route('category') }}" class="footer_link2">オイル</a>
                </div>

                <div><a href="{{ route('trouble') }}" class="footer_link1">TROUBLE</a></div>
                <div class="footer_flex">
                    <a href="{{ route('trouble_detail') }}" class="footer_link3">気になる黒ずみや嫌なニオイ</a>
                    <a href="" class="footer_link3">年齢とともにハリがなくなって起こるたるみ</a>
                    <a href="" class="footer_link3">被れによるかゆみや乾燥によるお肌のトラブル</a>
                    <a href="" class="footer_link3">膣内環境の悪化によるおりもの量の増加</a>
                    <a href="" class="footer_link3">デリケートケアによって美肌効果を得たい</a>
                    <a class="footer_link3"></a>
                </div>

                <div>
                    <a href="{{ route('pickup') }}" class="footer_link1">PICK UP</a>
                    <a href="{{ route('ranking') }}" class="footer_link1">RANKING</a>
                    <a href="{{ route('news') }}" class="footer_link1">NEWS</a>
                </div>

                <img src="{{ asset('img/footer_logo.png') }}" class="footer_logo">

                <div class="footer_sns_flex">
                    <a href="#!"><img src="{{ asset('img/facebook_white.png') }}" class="footer_sns_img"></a>
                    <a href="#!"><img src="{{ asset('img/twitter_white.png') }}" class="footer_sns_img" style="width: 9vw;"></a>
                    <a href="#!"><img src="{{ asset('img/insta_white.png') }}" class="footer_sns_img"></a>
                </div>

                <div class="footer_flex_white">
                    <a href="#!" class="footer_link_white">カスタマーサポート</a>
                    <a href="{{ route('contact') }}" class="footer_link_white">お問い合わせ</a>
                    <a href="#!" class="footer_link_white">利用規約</a>
                    <a href="#!" class="footer_link_white">個人情報保護方針</a>
                    <a href="#!" class="footer_link_white">特定商取引法に基づく表示</a>
                    <a href="#!" class="footer_link_white">企業サイト</a>
                    <a href="#!" class="footer_link_white">採用情報</a>

                </div>

                <div class="copyright">@copy.light</div>
            </footer>

        </body>
    </div>

    @else
    <div id="registration_sp">
        <body>
            <header>
                <a href="{{ route('index') }}" class=""><img src="{{ asset('img/logo.png') }}" class="header_logo"></a>
                <div class="header_menu" style="width: 68px;">
                    <a href="{{ route('item_buy_normal') }}"><img src="{{ asset('img/cart_btn.png') }}" style="width: 35px; margin-top: 10px;"></a>
                    <a href="{{ route('mypage') }}"><img src="{{ asset('img/human_btn.png') }}" style="width: 20px; margin-top: 5px;"></a>
                </div>
            </header>
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check" name="menu_btn">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content_work">
                    <div class="">
                        <input class="header_input" placeholder="" name="search" type="text" id="search">
                        <a href="{{ route('index') }}"><img src="{{ asset('img/search_btn_sp.png') }}" style="width: 14px; margin-left:-30px;"></a>
                    </div>
                    <a href="{{ route('category') }}" class="header_a">CATEGORY</a>
                    <a href="{{ route('trouble') }}" class="header_a">TROUBLE</a>
                    <a href="{{ route('pickup') }}" class="header_a">PICK UP</a>
                    <a href="{{ route('ranking') }}" class="header_a">RANKING</a>
                    <a href="{{ route('news') }}" class="header_a">NEWS</a>

                    <a href="{{ route('mypage') }}"><img src="{{ asset('img/mypage_bar.png') }}" class="mypage_bar"></a>

                    <div class="menu_btn_flex">
                        <a href="#!"><img src="{{ asset('img/face_sp.png') }}" class="footer_sns_img"></a>
                        <a href="#!"><img src="{{ asset('img/x_sp.png') }}" class="footer_sns_img"></a>
                        <a href="#!"><img src="{{ asset('img/insta_sp.png') }}" class="footer_sns_img"></a>
                    </div>

                    <div class="header_flex_sp">
                        <div>
                            <a href="#!" class="header_link">カスタマーサポート</a>
                            <a href="{{ route('contact') }}" class="header_link">お問い合わせ</a>
                            <a href="#!" class="header_link">利用規約</a>
                            <a href="#!" class="header_link">個人情報保護方針</a>
                            <a href="#!" class="header_link">特定商取引法に基づく表示</a>
                        </div>
                        <img src="{{ asset('img/header_logo_sp.png') }}" class="header_logo_sp">
                    </div>
                    <div class="copyright_header">@copy.light</div>
                </div>
            </div>
            <div class="header_margin"></div>


            @yield('content_sp')
            <footer>
                <img src="{{ asset('img/logo.png') }}" style="width: 130px; margin-bottom:50px;">
                <a href="{{ route('category') }}" class="footer_link1">CATEGORY</a>
                <a href="{{ route('trouble') }}" class="footer_link1">TROUBLE</a>
                <a href="{{ route('pickup') }}" class="footer_link1">PICK UP</a>
                <a href="{{ route('ranking') }}" class="footer_link1">RANKING</a>
                <a href="{{ route('news') }}" class="footer_link1">NEWS</a>



                <div class="footer_sns_flex">
                    <a href="#!"><img src="{{ asset('img/face_sp.png') }}" class="footer_sns_img"></a>
                    <a href="#!"><img src="{{ asset('img/x_sp.png') }}" class="footer_sns_img"></a>
                    <a href="#!"><img src="{{ asset('img/insta_sp.png') }}" class="footer_sns_img"></a>
                </div>

                <div class="footer_flex_white">
                    <a href="#!" class="footer_link_white">カスタマーサポート</a>
                    <a href="{{ route('contact') }}" class="footer_link_white">お問い合わせ</a>
                    <a href="#!" class="footer_link_white">利用規約</a>
                    <a href="#!" class="footer_link_white">個人情報保護方針</a>
                    <a href="#!" class="footer_link_white">特定商取引法に基づく表示</a>
                </div>

                <div class="copyright">@copy.light</div>
            </footer>

        </body>
    </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>
@extends('layouts.app')

@section('content')
<div class="category_div">
    <div class="category_title">レビューを作成</div>
    <div class="item_flex">
        <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img">
        <div>
            <div class="item_detail_name">Care Female デリケート専用美容液</div>
            <div class="item_detail_price">
                数量：1<br>
                小計：1,800円<br>
                送料：500円<br>
                合計：2480円
            </div>
        </div>
    </div>

    <div class="gray_line" style="margin: 4vw 0;"></div>
    
    <div class="rate_form rate_form_pc">
        <input id="star5" type="radio" name="fivestar" value="5">
        <label for="star5">★</label>
        <input id="star4" type="radio" name="fivestar" value="4">
        <label for="star4">★</label>
        <input id="star3" type="radio" name="fivestar" value="3">
        <label for="star3">★</label>
        <input id="star2" type="radio" name="fivestar" value="2">
        <label for="star2">★</label>
        <input id="star1" type="radio" name="fivestar" value="1">
        <label for="star1">★</label>
    </div>

    <textarea class="contact_textarea" placeholder="" name="content" id="content"></textarea>

    <div class="file_flex">
        <div id="previewBox">
            <div id="previewArea">
                <img src="{{ asset('img/no_image.png') }}" id="previewImage">
            </div>
        </div>
        <div id="dragDropArea">
            <div class="drag-drop-inside">
                <img src="{{ asset('img/drop_img.png') }}" class="drop_img">

                <p class="drag-drop-info">ここに画像をドラッグ＆ドロップするか </p>
                <p>アップロードする画像を選択してください。</p>
                <p class="drag-drop-buttons">
                    <input id="fileInput" type="file" accept="image/*" value="ファイルを選択" name="img_file" onclick="clickFile()" onChange="photoPreview(event)">
                </p>
                
            </div>
        </div>

    </div>

    <a href="{{ route('history') }}" class="buy_btn_black" style="padding: 1.25vw; margin: 5vw auto;">登録</a>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/review.js') }}"></script>


@endsection


@section('content_sp')
<div class="page_title_sp">レビューを作成</div>

<div class="item_flex">
    <img src="{{ asset('img/item_sample.png') }}" class="item_detail_img">
    <div>
        <div class="item_detail_name">Care Female デリケート専用美容液</div>
        <div class="item_detail_price">
            数量：1<br>
            小計：1,800円<br>
            送料：500円<br>
            合計：2480円
        </div>
    </div>
</div>

<div class="gray_line" style="margin: 4vw auto; width: 92vw;"></div>
    
<div class="rate_form rate_form_pc">
    <input id="star5" type="radio" name="fivestar" value="5">
    <label for="star5">★</label>
    <input id="star4" type="radio" name="fivestar" value="4">
    <label for="star4">★</label>
    <input id="star3" type="radio" name="fivestar" value="3">
    <label for="star3">★</label>
    <input id="star2" type="radio" name="fivestar" value="2">
    <label for="star2">★</label>
    <input id="star1" type="radio" name="fivestar" value="1">
    <label for="star1">★</label>
</div>

<textarea class="contact_textarea" placeholder="" name="content" id="content" style="margin: 4vw auto; width: 92vw; display: block;"></textarea>

<div class="file_flex">
    <div id="previewBox">
        <div id="previewArea">
            <img src="{{ asset('img/no_image.png') }}" id="previewImage">
        </div>
    </div>
    <div id="dragDropArea">
        <div class="drag-drop-inside">
            <img src="{{ asset('img/drop_img.png') }}" class="drop_img">

            <p class="drag-drop-info">ここに画像をドラッグ＆ドロップするか </p>
            <p>アップロードする画像を選択してください。</p>
            <p class="drag-drop-buttons">
                <input id="fileInput" type="file" accept="image/*" value="ファイルを選択" name="img_file" onclick="clickFile()" onChange="photoPreview(event)">
            </p>
            
        </div>
    </div>

</div>

<a href="{{ route('history') }}" class="buy_btn_black" style="padding: 2vw; margin: 5vw auto;">登録</a>



<div class="contact_bottom_padding"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/review.js') }}"></script>

@endsection
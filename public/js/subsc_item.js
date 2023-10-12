function clickSkipBtn() {
    document.getElementById('popup_bg').hidden = false;
}

function clickCloseBtn() {
    document.getElementById('popup_bg').hidden = true;
}

function clickYesBtn() {
    $('#popup_text').html('お届けをスキップを承りました。');
    document.getElementById('popup_back_btn').hidden = false;
    document.getElementById('popup_btn_flex').hidden = true;
}

function clickCancelBtn() {
    document.getElementById('popup_bg_cancel').hidden = false;
}

function clickCancelCloseBtn() {
    document.getElementById('popup_bg_cancel').hidden = true;
}

function clickCancelYesBtn() {
    $('#popup_text_cancel').html('商品の定期購入を解約いたしました。');
    document.getElementById('popup_back_btn_cancel').hidden = false;
    document.getElementById('popup_btn_flex_cancel').hidden = true;
}





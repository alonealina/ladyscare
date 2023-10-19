var cart_count = document.getElementById('cart_count');

function clickDetail() {
    $('#detail').addClass('item_current');
    $('#review').removeClass('item_current');
    $('#qa').removeClass('item_current');
    $('.detail_content').show();
    $('.review_content').hide();
    $('.qa_content').hide();
}

function clickReview() {
    $('#detail').removeClass('item_current');
    $('#review').addClass('item_current');
    $('#qa').removeClass('item_current');
    $('.detail_content').hide();
    $('.review_content').show();
    $('.qa_content').hide();
}

function clickQa() {
    $('#detail').removeClass('item_current');
    $('#review').removeClass('item_current');
    $('#qa').addClass('item_current');
    $('.detail_content').hide();
    $('.review_content').hide();
    $('.qa_content').show();
}

// カート関連
function clickCart() {
    cart_count.hidden = false;
}
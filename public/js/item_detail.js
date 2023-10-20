var cart_count = document.getElementById('cart_count');
var select_imgs = document.getElementsByClassName('cast_select_img');
var view_imgs = document.getElementsByClassName('item_img');

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

function clickImg(id) {
    for (var i = 0; i < select_imgs.length; i++) {
        var e = select_imgs[i];
        if (e) {
          e.classList.remove("current_img");
        }
    }
    $('#select_img'+id).addClass('current_img');

    for (var i = 0; i < view_imgs.length; i++) {
        var e = view_imgs[i];
        if (e) {
          e.hidden = true;
        }
    }

    document.getElementById('view_img'+id).hidden = false;


};


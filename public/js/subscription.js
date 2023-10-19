var menu = document.getElementsByClassName('menu_content_sp');

for (i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", function() {
        document.getElementById('menu-btn-check').checked = false;
  });
}

$(document).ready(function() {
    $('.accordion-header').click(function() {
        // クリックされたアコーディオン項目を取得
        var item = $(this).parent();

        // 他のアクティブなアコーディオンを閉じる
        $('.accordion-item.active').not(item).removeClass('active').find('.accordion-content').slideUp();

        // クリックされたアコーディオンを開く/閉じる
        item.toggleClass('active');
        item.find('.accordion-content').slideToggle();
    });
});
function clickRegistButton() {
    error_flg = 0;
    var error_message = document.getElementById('error_message');

    if (regist_form.name.value == ""){
        $('#name').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#name').css( 'background', '#fff' );
    }

    if (regist_form.kana.value == ""){
        $('#kana').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#kana').css( 'background', '#fff' );
    }

    if (regist_form.zip.value == ""){
        $('#zip').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#zip').css( 'background', '#fff' );
    }

    if (regist_form.pref.value == ""){
        $('#pref').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#pref').css( 'background', '#fff' );
    }

    if (regist_form.city.value == ""){
        $('#city').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#city').css( 'background', '#fff' );
    }

    if (regist_form.address.value == ""){
        $('#address').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#address').css( 'background', '#fff' );
    }

    if (regist_form.tel.value == ""){
        $('#tel').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#tel').css( 'background', '#fff' );
    }

    if (regist_form.mail.value == "" || !(regist_form.mail.value.match(/.+@.+\..+/)) ){
        $('#mail').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#mail').css( 'background', '#fff' );
    }

    if (error_flg) {
        error_message.innerHTML = '*は必須項目です';
    } else {
        // document.forms.regist_form.submit();
        window.location.href = 'paymethod_select'; // 通常の遷移
    }
}


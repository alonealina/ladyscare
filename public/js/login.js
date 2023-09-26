function clickLoginButton() {
    error_flg = 0;
    var error_message = document.getElementById('error_message');


    if (login_form.mail.value == ""){
        $('#mail').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#mail').css( 'background', '#fff' );
    }
    if (login_form.pass.value == ""){
        $('#pass').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#pass').css( 'background', '#fff' );
    }

    error_message.innerHTML = '※パスワードが一致しません';

    // if (error_flg) {
    //     error_message.innerHTML = '※不足している項目があります。';
    // } else {
    //     document.forms.login_form.submit();
    // }
}


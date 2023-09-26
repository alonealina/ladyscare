function clickLoginButton() {
    error_flg = 0;
    var error_message = document.getElementById('error_message');

    pass = login_form.pass.value;
    pass_confirm = login_form.pass_confirm.value;


    if (pass == ""){
        $('#pass').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#pass').css( 'background', '#fff' );
    }

    if (pass_confirm == ""){
        $('#pass_confirm').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#pass_confirm').css( 'background', '#fff' );
    }

    if (error_flg) {
        error_message.innerHTML = '※不足している項目があります。';
    } else {
        document.forms.login_form.submit();
    }
}


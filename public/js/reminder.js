function clickReminderButton() {
    error_flg = 0;

    if (login_form.mail.value == ""){
        $('#mail').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#mail').css( 'background', '#fff' );
    }

    if (!error_flg) {
        document.forms.login_form.submit();
    }
}


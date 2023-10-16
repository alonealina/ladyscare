let targets = document.querySelectorAll(`input[type='checkbox'][name='menu_btn']`);

for (let target of targets) {
	target.addEventListener('change', function () {
        checked = target.checked
        if (checked) {
            $('.menu-content_work').css( 'display', 'block' );
            setTimeout( ()=>{    $('.menu-content_work').css( 'opacity', '1' );} ,10);

        } else {
            $('.menu-btn').css( 'pointer-events', 'none' );
            $('.menu-content_work').css( 'opacity', '0' );
            setTimeout( ()=>{    $('.menu-content_work').css( 'display', 'none' );} ,500);
            setTimeout( ()=>{    $('.menu-btn').css( 'pointer-events', 'auto' );} ,500);

        }
    });
}

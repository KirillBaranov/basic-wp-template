$(document).ready(() => {
    const line = $('.cake__line');
    const cake = $('.cake');
    const bg   = $('.background-menu');

    let isOpen = false;
    cake.click(() => {

        if ( isOpen ) {
            line.removeClass('active-menu');
            bg.removeClass('active-menu-bg');
        }

        else {
            line.addClass('active-menu');
            bg.addClass('active-menu-bg');
        }

        isOpen = !isOpen;

    });
});
$(document).ready(() => {
    const cake = $('.cake');
    window.isOpen = false;

    cake.click(() => {
        window.hideOrOpenMenu();
    });
});

window.hideOrOpenMenu = () => {
    const line = $('.cake__line');
    const bg   = $('.background-menu');
    const menu = $('.mobile-menu');

    if ( window.isOpen ) {
        line.removeClass('active-menu');
        menu.removeClass('active-mobile-menu');
        bg.removeClass('active-menu-bg');
    }

    else {
        line.addClass('active-menu');
        menu.addClass('active-mobile-menu');
        bg.addClass('active-menu-bg');
    }

    window.isOpen = !window.isOpen;
};
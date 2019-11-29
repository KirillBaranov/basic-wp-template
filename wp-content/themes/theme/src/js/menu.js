$(document).ready(() => {
    const cake = $('.cake');
    window.isOpen = false;

    cake.click(() => {
        window.hideOrOpenMenu();
    });
});

/**
 * Global function for showing and hiding menu.
 * If u wanna get info about status menu then use window.isOpen
 * window.isOpen have a bool type.
 * Default - false ( Open is hidden ).
 */
window.hideOrOpenMenu = () => {
    const line = $('.cake__line');
    const bg   = $('.background-menu');
    const menu = $('.mobile-menu');
    const logo = $('#logo');

    if ( window.isOpen ) {
        line.removeClass('active-menu');
        menu.removeClass('active-mobile-menu');
        bg.removeClass('active-menu-bg');
        logo.attr( 'src', '/wp-content/themes/theme/dist/img/logo.png' );
    }

    else {
        line.addClass('active-menu');
        menu.addClass('active-mobile-menu');
        bg.addClass('active-menu-bg');
        logo.attr( 'src', '/wp-content/themes/theme/dist/img/logo-white.png' );
    }

    window.isOpen = !window.isOpen;
};
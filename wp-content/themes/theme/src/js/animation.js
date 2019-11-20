$(document).ready(() => {
    const line = $('.cake__line');
    const cake = $('.cake');

    let isOpen = false;
    cake.click(() => {

        if ( isOpen ) {
            line.removeClass('active-menu');
        }

        else {
            line.addClass('active-menu');
        }

        isOpen = !isOpen;

    });
});
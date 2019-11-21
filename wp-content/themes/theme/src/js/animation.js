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






    // Animation that launching while user is loading page
    const nav                   = $('nav, .header__logo');
    const header__btn           = $('.header__btn');
    const homepage__title       = $('.homepage__title');
    const homepage__description = $('.homepage__description');
    const mock_up               = $('.mock-up');
    const whyUs__block          = $('.why-us__block--animated');

    //setTimeout( () => {
    //     nav.css({
    //         transform: 'translateY(0)',
    //         opacity: 1
    //     });
    //
    //     header__btn.css({
    //         transform: 'translateX(0)',
    //         opacity: 1
    //     });
    //
    //     homepage__title.css({
    //         transform: 'translateY(0)',
    //         opacity: 1
    //     });
    //
    //     homepage__description.css({
    //         transform: 'translate(0, 0)',
    //         opacity: 1
    //     });
    //
    //     mock_up.css({
    //         transform: 'scale(1)',
    //         opacity: 1
    //     });
    //
    //     whyUs__block.css({
    //         transform: 'translateY(0)',
    //         opacity: 1
    //     });
    //}, 500 );
});
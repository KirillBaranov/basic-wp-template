$(document).ready(() => {

    /**
     * This file only for scroll animation.
     * @type {jQuery.fn.init|jQuery|HTMLElement}
     */

    const animateItems    = $('.animate');
    const instanseAnimate = $('.animate-instanse');

    /**
     * When document will be loading this function will check items and offset to item, and animate
     */
    $.each( instanseAnimate, function () {
        const item         = $(this);
        const delay    = item.attr('data-delay') || 1 + 's';
        const duration = item.attr('data-duration') || 1 + 's';

        setTimeout( () => {
            item.css({
                transition: `all ${duration} ease-in-out`,
                transform: 'scale(1) translate(0) skew(0) rotate(0)',
                opacity: 1
            })
        }, delay);

    });

    /**
     * Check user scroll / item's offset and animate item's
     */
    checkAndAnimateIt();

    $(window).scroll( () => {
        checkAndAnimateIt();
    });

    function checkAndAnimateIt() {
        const scroll       = $(window).scrollTop() + $(window).height() - 200;
        const penScroller  = $('.pen-animate');
        const scrollToPen  = penScroller.offset().top;

        if (  scroll >= scrollToPen ) {
            penScroller.addClass('pen-animated');
        }

        $.each( animateItems, function () {
            const item         = $(this);
            const scrollToItem = item.offset().top;

            if ( scroll >= scrollToItem ) {
                const delay    = item.attr('data-delay') || 0;
                const duration = item.attr('data-duration') || 1 + 's';

                setTimeout( () => {
                    item.css({
                        transition: `all ${duration} ease-in-out`,
                        transform: 'scale(1) translate(0) skew(0) rotate(0)',
                        opacity: 1
                    })
                }, delay);
            }

        });
    }
});
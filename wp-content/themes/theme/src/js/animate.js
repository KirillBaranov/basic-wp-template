$(document).ready(() => {
    const animateItems    = $('.animate');
    const instanseAnimate = $('.animate-instanse');

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
    
    checkAndAnimateIt();

    $(window).scroll( () => {
        checkAndAnimateIt();
    });
    
    function checkAndAnimateIt() {
        $.each( animateItems, function () {
            const item         = $(this);
            const scrollToItem = item.offset().top;
            const scroll       = $(window).scrollTop() + $(window).height() - 200;

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
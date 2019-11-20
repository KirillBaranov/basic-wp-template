$(document).ready(() => {

    $('.lazy-scroll').click(function() {

        let _href = $(this).attr("href");

        $('html, body').animate({
            scrollTop: ($(_href).offset().top - 300 ) +'px'
        }, 1000);

        return false;

    });

    $('nav').find('a').click(function() {
        let _href = $(this).attr("href");

        $('html, body').animate({
            scrollTop: ($(_href).offset().top + -100) +'px'
        }, 2000);

        return false;
    });


    const offsetToItem = $('.parallax').offset().top - $(window).height() / 2;

    $(window).scroll(() => {
        const elems = $('.parallax');
        lettersAnimation( elems );
    });

    function lettersAnimation( elems, direction = 'top' ) {
        const scrollToTop  = $(window).scrollTop();
        const maxScroll    = 300;

        $( elems ).each(function () {
            const elem = $(this);
            const direction = elem.attr('data-direction') || direction;

            if ( scrollToTop >= offsetToItem ) {

                let translateY = scrollToTop - offsetToItem;
                let opacity    = 1 - (translateY / maxScroll) * 0.8;

                if ( translateY > maxScroll ) {
                    translateY = maxScroll;
                }

                if ( direction === 'top' ) {
                    elem.css({
                        transform: `translateY(-${translateY * 0.5}px)`,
                    })
                }

                else {
                    elem.css({
                        transform: `translateY(${translateY * 0.5}px)`,
                    })
                }


            }
        });
    }
});
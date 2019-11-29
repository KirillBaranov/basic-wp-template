$(document).ready(() => {

    /**
     * Use lazy-scroll class, if u wanna moving user to next section.
     */
    $('.lazy-scroll').click(function() {

        let _href = $(this).attr("href");

        $('html, body').animate({
            scrollTop: ($(_href).offset().top - 300 ) +'px'
        }, 1000);

        return false;

    });

    /**
     * Lazy scroll for navigation link's
     */
    $('nav').find('a').click(function() {
        let _href = $(this).attr("href");

        if ( window.isOpen ) {
            window.hideOrOpenMenu();
        }

        $('html, body').animate({
            scrollTop: ($(_href).offset().top + -100) +'px'
        }, 2000);

        return false;
    });


    const offsetToItem = $('.parallax').offset().top - $(window).height() / 2;

    $(window).scroll(() => {
        const elems = $('.parallax');
        lettersAnimation( elems );

        changeHeaderColor();
    });


    /**
     * Darken screen - darken screen section ( Class ) in html.
     * While u'll in breakpoints darken screen your header will be changed to light scheme.
     * @type {jQuery.fn.init|jQuery|HTMLElement}
     */
    const darkenScreen = $('.darken-screen');
    const header       = $('header');

    const changeHeaderBreakpoint = [
        {
            from: $(darkenScreen[0]).offset().top,
            to: $(darkenScreen[0]).offset().top + $(darkenScreen[0]).height() + header.height()
        },
        {
            from: $(darkenScreen[1]).offset().top,
            to: $(darkenScreen[1]).offset().top + $(darkenScreen[1]).height() + header.height()
        }
    ];

    function changeHeaderColor() {
        const scrollToTop  = $(window).scrollTop();
        const logo         = $('#logo');

        if ( (scrollToTop >= changeHeaderBreakpoint[0].from && scrollToTop <= changeHeaderBreakpoint[0].to) || (scrollToTop >= changeHeaderBreakpoint[1].from && scrollToTop <= changeHeaderBreakpoint[1].to) ) {
            header.addClass('header-lighten');
            logo.attr('src', '/wp-content/themes/theme/dist/img/logo-white.png');
        }

        else {
            header.removeClass('header-lighten');
            logo.attr('src', '/wp-content/themes/theme/dist/img/logo.png');
        }

    }


    /**
     * This function using for creating parallax effect for target element
     * @param elems - item's list, that will parallaxing
     * @param direction - direction for moving parallax effect
     */
    function lettersAnimation( elems, direction = 'top' ) {
        const scrollToTop  = $(window).scrollTop();
        const maxScroll    = 1000;

        $( elems ).each(function () {
            const elem = $(this);
            const direction = elem.attr('data-direction') || direction;

            if ( scrollToTop >= offsetToItem ) {

                let translateY = (scrollToTop - offsetToItem) * 0.3;
                let opacity    = 1 - (translateY / maxScroll) * 0.8;

                if ( translateY > maxScroll ) {
                    translateY = maxScroll;
                }

                setTimeout( () => {
                    if ( direction === 'top' ) {
                        elem.css({
                            transition: '.1s linear',
                            transform: `translateY(-${translateY}px)`,
                        })
                    }

                    else {
                        elem.css({
                            transition: '.1s linear',
                            transform: `translateY(${translateY}px)`,
                        })
                    }
                }, 200 );


            }
        });
    }
});
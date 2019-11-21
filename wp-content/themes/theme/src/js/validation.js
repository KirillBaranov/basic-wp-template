$(document).ready(() => {

    /**
     * Validation handlering form
     */
    let send = $('.form__button, .input__form-try, .questions__button');

    send.click(function () {
        let items = $(this).parent().parent().find('input');
        let textarea = $(this).parent().parent().find('textarea');

        items.push(textarea);

        validate(items);
    });

    function validate( array ) {
        $.each( array, function () {
            let value = $(this).val();
            let input = $(this);

            if ( input.attr('type') == 'tel' && input.val().length < 16 ) {
                input.addClass('is-not-valide');
                input.addClass('bounce');
                setTimeout(() => input.removeClass('bounce'), 200 );
            }

            else if ( value == '' ) {
                input.addClass('is-not-valide');
                input.addClass('bounce');
                setTimeout(() => input.removeClass('bounce'), 200 );
            }

            else {
                input.removeClass('is-not-valide');
            }

        })
    }
});
$(document).ready(() => {

    /**
     * Validation handlering form
     */
    let send = $('.form__button, #do-validate, .questions__button');

    send.click(function () {
        let items = $(this).parent().parent().find('input');
        let textarea = $(this).parent().parent().find('textarea');

        if ( textarea.length > 0 ) {
            items.push(textarea);
        }

        if ( validate(items) ) {

            let mail_data = [];

            $.each( items, function () {
                mail_data.push( {
                    name: $(this).attr('name'),
                    val: $(this).val() || $(this).text()
                });
            });

            $.ajax({
                url: '/wp-content/themes/theme/handlers/sending-mail.php',
                method: 'post',
                data: {
                    subject: 'Заявка с norma-a3.ru',
                    body: mail_data
                },
                success: () => cleanForm(),
                error: ( response ) => console.error( JSON.parse( response ) )
            });
        }

    });

    function cleanForm() {
        const items = $('input');
        const textarea = $('textarea');

        items.push(textarea);

        $.each( items, function () {
            $(this).val('');
        });
    }

    function validate( array ) {
        let valide = true;

        $.each( array, function () {
            const value = $(this).val();
            const input = $(this);


            if ( value == '' ) {
                input.addClass('is-not-valide');
                input.addClass('bounce');
                valide = false;
                setTimeout(() => input.removeClass('bounce'), 200 );
            }

            else {

                if ( input.attr('type') == 'tel' && input.val().length < 16 ) {
                    input.addClass('is-not-valide');
                    input.addClass('bounce');
                    valide = false;
                    setTimeout(() => input.removeClass('bounce'), 200 );
                }

                else if ( input.attr('type') == 'email' && !validateEmail( value ) ) {
                    input.addClass('is-not-valide');
                    input.addClass('bounce');
                    valide = false;
                    setTimeout(() => input.removeClass('bounce'), 200 );
                }

                else {
                    input.removeClass('is-not-valide');
                }

            }

        });

        return valide;

    }

    function validateEmail(email) {
        return email.length >= 6
            && email.includes('@')
            && email.includes('.');
    }

});
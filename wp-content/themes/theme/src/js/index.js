import './input'
import './scroll'
import './animation'
import './animate'
import './validation'
//import './timer'

$(document).ready(() => {
    const input = $('input[type="tel"]');
    const mask  = '+7-999-999-99-99';

    input.focus( function () {
        $(this).mask( mask );
    });

    input.blur( function () {
        //$(this).unmask();
        console.log( $(this).val().length );

        if ( $(this).val().length < 16 ) {
            $(this).val( '' );
        }
    })
});
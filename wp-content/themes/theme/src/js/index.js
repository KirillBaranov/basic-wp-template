import './input'
import './scroll'
import './menu'
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
        if ( $(this).val().length < 16 ) {
            $(this).val( '' );
        }
    });


    /**
     * Block for showing full question list.
     * @type {jQuery.fn.init|jQuery|HTMLElement}
     */
    const showMoreQuestions = $('.show-more-questions');

    showMoreQuestions.click( () => {
        const questionsContainer = $('.questions__container');
        const blocks             = questionsContainer.find('.block-question');
        $('.show-more-questions').fadeOut();

        blocks.addClass('visible-question');
    });

});
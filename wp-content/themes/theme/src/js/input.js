$(document).ready(() => {
    $('input, textarea').focus(function(e){
        const $self = $(this);
        $self.data('placeholder-tmp', $self.attr('placeholder'));
        $self.attr('placeholder', '');

    });

    $('input, textarea').blur(function(e){
        const $self = $(this);

        $self.attr('placeholder', $self.data('placeholder-tmp'));
    });
});
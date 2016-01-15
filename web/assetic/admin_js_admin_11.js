$(function() {
    $('body').on('click', '.switchs', function() {
        var
            container = $(this).closest('.switchs-container'),
            target    = $(this).data('switchs-target');

        container.addClass('hidden');
        $(target).removeClass('hidden');
    });

    $('body').on('click', '.f-password', function (event) {
        event.preventDefault();

        $.ajax({
            url:  $(this).closest('form').attr('action'),
            type: 'POST',
            data: $('[role=forgot-email]')
        }).done(function (data) {
            $('[role=forgot-message]').html(data.message).removeClass('hidden');
        });
    });
});

$('.ui .menu').on('click', 'a', function() {
    $('.active')
        .removeClass('active');
    
    $(this).addClass('active');

});

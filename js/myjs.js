
$('.navas').on('click', function(event) {
    $('.navas').removeClass('active');
    $(this).addClass('active');
});

$(window).on('scroll', function() {
    $('.target').each(function() {
        if($(window).scrollTop() >= $(this).position().top-120) {
            var id = $(this).attr('id');
            $('.navas').removeClass('active');
            $('#nav nav a[href=#'+ id +']').addClass('active');
        }
    });
});

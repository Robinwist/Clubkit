$(document).ready(function() {
    $('#slider-container ul').bxSlider({
        buildPager: function(slideIndex) {
            switch(slideIndex){
                case 0:
                    return 'Sponsorballen';
                case 1:
                    return 'Vrienden van';
                case 2:
                    return 'Bouw mee';
                case 3:
                    return 'Eendjesrace';
                case 4:
                    return 'Adopteer een speler';
            }
        },
        controls: false
    });

    $('#quotes-container ul').bxSlider({
        controls: false
    });

    $('.newsletter a.button').click(function() {
        if($('.newsletter input').val() != '') {
            $.post('/home/newsletter', { 'email': $('#email').val() }, function(data, status) {
                $('.newsletter').slideUp();
                $('.confirmation').slideDown();
            });
        } else {
            $('.newsletter input').addClass('error');
        }
    });
});

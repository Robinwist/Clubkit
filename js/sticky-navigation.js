$(function(){
    $(document).scroll(function(){
        var scrollTop = $(this).scrollTop();
        var headerHeight = $('#main-header').outerHeight();

        if(scrollTop > headerHeight && !$(".menu-wrapper").hasClass("sticky")){
            $(".menu-wrapper").addClass("sticky");
            $("body").addClass("sticky");
        }

        if(scrollTop < headerHeight && $(".menu-wrapper").hasClass("sticky")){
            $(".menu-wrapper").removeClass("sticky");
            $("body").removeClass("sticky");
        }
    });



    var jPM = $.jPanelMenu({
        menu: '#main-menu',
        trigger: '.menu-button'
    });
    jPM.on();
});
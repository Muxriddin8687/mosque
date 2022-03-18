$(document).ready(function(){

    // header scroll animation
    var $window = $(window);
    var $header = $("header");
    function sticky(){
        var $window_top = $window.scrollTop();

        $.each($header, function(){
            if($window_top >= 180){
                $(this).addClass('sticky_navigation');
            }
            else{
                $(this).removeClass('sticky_navigation');
            }
        });
    }
    $window.on('scroll resize', sticky);
    $window.trigger('scroll');

    // header btn effect
    $(".navbar-toggler").on('click', function(){
        $header.addClass('sticky_navigation pb-2');
        this.classList.toggle("change");
    });


    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: false,
        nav: false,
        items: 1,
        loop: true,
        autoplay: 2000,
        autoplaySpeed: 3000,
    });

    //banner owl carousel
    $("#galery .owl-carousel").owlCarousel({
        dots: false,
        nav: true,
        items: 1,
        loop: true,
        autoplay: 2000,
        autoplaySpeed: 2000,
    });

    let today = new HijriDate();
    $("#hijriy").text(today.getDay()+":"+today.getMonth()+":"+today.getFullYear());


});
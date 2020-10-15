$(document).ready(function() {

    // inicializar efectos
    new WOW().init();

    // Boton subir 
    $('.subir').click(function() {
        $('body, html').animate({
            scrollTop: '0px'
        }, 500);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.subir').fadeIn(500);
            
        } else {
            $('.subir').fadeOut(500);
            
        }
    });
    // fin de boton subir

    // ************************************* iniciaizar aliados *************************
    $('#owl-aliados_slide').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
    //************************* */ fin de inicializar Aliados******************************************

    
    
});
// fin de boton subir

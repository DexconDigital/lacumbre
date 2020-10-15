const mediumBp = matchMedia('(min-width: 1199px)');
const changesize = mql => {
    if (mql.matches) {
        if(isTransparent){
            $('.espacio-menu').hide();
            direccion = 'images/Logo_Blanco.png';
            $("#imagen_menu").attr("src", direccion);
            var altura = 100;
            $(window).scroll(function() {
                if ($(this).scrollTop() > altura) {
                    direccion = 'images/Logo.png';
                    $("#imagen_menu").attr("src",direccion);
                    $('#menu').removeClass('bg-transparent');
                    $('#menu_contacto').removeClass('bg-transparent');
                    $('#menu').addClass('bg-light');
                    $('#menu_contacto').addClass('bg-light');
                } else {
                    direccion = 'images/Logo_Blanco.png';
                    $("#imagen_menu").attr("src",direccion);
                    $('#menu').addClass('bg-transparent');
                    $('#menu_contacto').addClass('bg-transparent');
                    $('#menu').removeClass('bg-light');
                    $('#menu_contactp').removeClass('bg-light');
                }
            });
        }else{
            var espacio_menu = $('.total-menu').height();
            $('.espacio-menu').height(espacio_menu);
            direccion ='images/Logo.png';
            $("#imagen_menu").attr("src",direccion);
            $('#menu').removeClass('bg-transparent');
            $('#menu').removeClass('bg-transparent');
            $('#menu_contacto').addClass('bg-light');
            $('#menu_contacto').removeClass('bg-transparent');
            
        }
    }else{
        if(isTransparent){
            var espacio_menu = $('.total-menu').height();
            $('.espacio-menu').height(espacio_menu);
            direccion ='images/Logo.png';
            $("#imagen_menu").attr("src",direccion);
            $('#menu').removeClass('bg-transparent');
            $('#menu_contacto').removeClass('bg-transparent');
        }else{
            var espacio_menu = $('.total-menu').height();
            $('.espacio-menu').height(espacio_menu);
            direccion ='images/Logo.png';
            $("#imagen_menu").attr("src",direccion);
            $('#menu_contacto').removeClass('bg-transparent');
            $('#menu').removeClass('bg-transparent');
        }
    }
}
mediumBp.addListener(changesize);
changesize(mediumBp);
$(document).ready(function(){

  // Rellenar Contadores

  // **************************años**********************
  var fecha = new Date();
  var ano = fecha.getFullYear();
  //  Colocar el año de creacion de la empresa
  const CREATECOMPANY = 2009;
  var total = ano - CREATECOMPANY;
  
  $('.counter-experence').attr('data-count', total);

  // ******************************* Total de inmuebles disponibles **************
  $.ajax({
    url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/1/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
    type: 'GET',
    beforeSend: function (xhr) {
       xhr.setRequestHeader(
          'Authorization',
          'Basic ' + btoa('Authorization:' + TOKEN));
    },
    'dataType': "json",
    success: function (response) {
      $('.counter-propertys').attr('data-count', response);
    }
 });


  // Inicializar contadores
setTimeout(() => {
  $('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
  
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },
  
    {
  
      duration: 3000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }
    });
  });
}, 1000);
});

$(document).on('ready',function(){
	$('.muestra').on('click', function(e){
		// e.preventDefault();
		$(this).parent().parent().parent().parent().parent().find('.shows').toggle( "slow", function() {
  				  // Animation complete.
  		});
		

	})

	$('.cur').click(
      function(e)
      {
      	e.preventDefault();
            $('html,body').animate({scrollTop:'805px'}, 500);return false;
      }
	);


	$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});



  $('.prog').on('click', function(e){
    e.preventDefault();
    var name = "Pedir programa completo de " + $(this).attr('data-nombre');
    $('#myModalLabel2').html(name);
        var uni = $(this).attr('data-nombre');
    $('.consul').attr('data-nombre', uni);
        $('.consul').attr('data-modal', 'offline');

        $('#onlines').trigger('click');

  })



    $('.online').on('click', function(e){
    e.preventDefault();

    var name = "Cunsultar Modalidad online de " + $(this).attr('data-nombre');
    $('#myModalLabel2').html(name);
    var uni = $(this).attr('data-nombre');
    $('.consul').attr('data-nombre', uni);
    $('.consul').attr('data-modal', 'online');
        $('#onlines').trigger('click');

  })


      $('.consul').on('click', function(e){
    e.preventDefault();
    enviar($(this).attr('data-nombre'), $(this).attr('data-modal'));
  })


})



  function enviar(cursos,modal){
    if (validarEmail($("#inputEmail").val()) &&  $("#inputTelefono").val() !='' && $("#inputNombre").val() !=''){
      $.post( "http://escueladevrock.com/wp-content/themes/twentyfifteen--/cursos.php", { email : $("#inputEmail").val(), nn : cursos, modalidad : modal, curso : $('#myModalLabel2').html(), telefono : $("#inputTelefono").val() , nombre : $("#inputNombre").val()  }, function( data ) {
          if (data){
            $('.cierra').trigger('click');

          }
          else{
            alert("Ocurrio un error intenta por el chat o mas tarde");
          }
      });
    } else{
      console.log("Completa los datos antes de enviar los datos");
    }

  }
  function enviarInformacion(){
    if (validarEmail($("#emailInfo").val()) && $("#nombreInfo").val() != ""){
      $.post( "http://escueladevrock.com/wp-content/themes/twentyfifteen--/cursos.php", { email : $("#emailInfo").val(), nombre : $("#nombreInfo").val() }, function( data ) {
        if (data == "funciono"){
            alert( "GRACIAS, nos pondremos en contacto.");
          }
          else{
            alert("Ocurrio un error intenta por el chat o mas tarde");
          }
      });
    }
    else{
      alert("Completa los datos antes de enviar los datos");
    }
  }

  function validarEmail( email ) {
      expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if ( !expr.test(email) ){
        return false;
      }
      else{
        return true;
      }
          
  }


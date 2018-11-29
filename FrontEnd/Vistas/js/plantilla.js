
/*=================================
=            PLANTILLA            =
=================================*/

$.ajax(
	{
		url:"Ajax/PlantillaAjax.php",
		success: function( respuesta ){
			
			var colorFondo = JSON.parse(respuesta).colorFondo;
			var colorTexto = JSON.parse(respuesta).colorTexto;
			var barraSuperior = JSON.parse(respuesta).barraSuperior;
			var textoSuperior = JSON.parse(respuesta).textoSuperior;

			console.log(colorFondo);
			console.log(colorTexto);
			console.log(barraSuperior);
			console.log(textoSuperior);

			$(".backColor, .backColor a").css({"background": colorFondo, "color": colorTexto});
			$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior, "color": textoSuperior});
		}
	});

/*=====  End of PLANTILLA  ======*/

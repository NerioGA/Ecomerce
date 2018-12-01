
/*=======================================
SLIDE DE PRODUCTOS
=======================================*/
var item = 0, interruptirCiclo = false, detenerIntervalo = false, imgProducto = $(".imgProducto");
var textoSlide = $(".textosSlide");//, textoSlideh2 = $("#slide h2"), textoSlideh3 = $("#slide h3");
var toogle = false, numeroItem = $("#paginacion li");


(function ready() {

	/*----------  PARA LAS IMAGENES DINAMICOS SLIDE  ----------*/
	var paraLi = 100/numeroItem.length, paraUl = 100*numeroItem.length;
	$("#slide ul li").css({"width":paraLi+"%"});
	$("#slide ul").css({"width":paraUl+"%"});


	/*----------  PAGINACION  ----------*/
	
	 $("#paginacion li").on("click", function(){

			item = $(this).attr("item")-1;
			movimientoSlide(item);
		} 
	);

	/*----------  AVANZAR  ----------*/
	$("#slide #avanzar").on("click", function(){
		//opcion avanzar 1
		retrocederAvanzar(1);
	});

	/*----------  RETROCEDER  ----------*/
	$("#slide #retroceder").on("click", function(){
		//opcion retroceder -1
		retrocederAvanzar(-1);
	});

	/*----------  ANIMACION DE INTERVALO DE TIEMPOS  ----------*/
	setInterval(function(){
		if (interruptirCiclo) {
			interruptirCiclo= false;
		}
		else { 
			if (!detenerIntervalo) {
				retrocederAvanzar(+1);
			}
		}
	},4000);

	/*----------  ANIMACION INICAL PRODUCTOS  ----------*/
	animacionObetosSlide($(imgProducto[item]));

	/*----------  ANIMACION INICIAL DE TEXTOS  ----------*/
	animacionObetosSlide($(textoSlide[item]));

	/*----------  APARECER FLECHAS  ----------*/
	$("#slide").mouseover(function(){
		$("#slide #retroceder").css({"opacity":1});
		$("#slide #avanzar").css({"opacity":1});

		detenerIntervalo = true;
	});
	
	$("#slide").mouseout(function(){
		$("#slide #retroceder").css({"opacity":0});
		$("#slide #avanzar").css({"opacity":0});

		detenerIntervalo = false;
	});

	/*----------  ESCONDER SLIDE  ----------*/
	$("#btnSlide").on("click", function(){
		if(!toogle){
			toogle = true;
			$("#slide").slideUp("fast");
			$("#btnSlide").html('<i class="fa fa-angle-down"></i>');
		}
		else{
			toogle=false;
			$("#slide").slideDown("fast");
			$("#btnSlide").html('<i class="fa fa-angle-up"></i>');
		}
	});
	

})();



/*----------  AINIMACION DE OBJETOS  ----------*/
function animacionObetosSlide(objetoAnimacion){
	objetoAnimacion.animate({"top":-10+"%", "ocpacity":0.5},800);
	objetoAnimacion.animate({"top":30+"px", "ocpacity":1},1500);
}


/*----------  FUNCION RETROCEDER Y AVANZAR  ----------*/
function retrocederAvanzar(opcion){
	var nuevoItem = item + opcion;
 
		console.log("item"+item);
		console.log("opcion"+opcion);

	if(nuevoItem >= numeroItem.length){
		item = 0;
		interruptirCiclo = true;
	}
	else if(nuevoItem <= 0){
		item = numeroItem.length-1;
	}
	else{
		item = nuevoItem;
	}
	movimientoSlide(item);
}

/*----------  FUNCION MOVIMIENTOS SLIDE  ----------*/
function movimientoSlide(item){
	$("#slide ul").animate({"left":(item*-100)+"%"}, 1000);

	var itemPaginacion = $("#paginacion li");
	itemPaginacion.css({"opacity":.5}); 
	itemPaginacion.eq(item).css({"opacity":1});

	interruptirCiclo = true;

	animacionObetosSlide($(imgProducto[item]));
	animacionObetosSlide($(textoSlide[item]));
}





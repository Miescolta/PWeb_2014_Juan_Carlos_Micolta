var nombres=[];
var latitudes=[];
var longitudes=[];

function initialize(r){
	var mapOptions = {
		center: new google.maps.LatLng(3.456230, -76.535485),
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map_canvas"),
		mapOptions);

	var infowindow = new google.maps.InfoWindow();

       for(i = 0;i<nombres.length;i++){
       	var marcador=new google.maps.Marker({
       		position: new google.maps.LatLng(latitudes[i],longitudes[i]),
       		map:map
       	});

       	var infowindow = new google.maps.InfoWindow();

       	google.maps.event.addListener(marcador, 'click', (function(marcador, i) {
            return function() {
              infowindow.setContent(nombres[i]);
              infowindow.open(map, marcador);
            }
          })(marcador, i));

       }
   }

//--------------Funciones de accion--------------

   function ingresar(e){
    e.preventDefault();
   
    var texto=document.getElementById('texto');
    texto.style.visibility='hidden';
   }

   function out(e){
    e.preventDefault();
    soltar.style.background='#FFFFFF';
   }

   function end(e){
    elemento=e.target;
    elemento.style.visibility='hidden';
   }

   function drag(e){
    elemento=e.target;
    e.dataTransfer.setData('Text',elemento.getAttribute('id'));
    e.dataTransfer.setDragImage(e.target,62,62);
   }

//-----------------------------------------------


//----------------------------------------------
   function iniciar(){

   	var imagenes=document.querySelectorAll('#cajaImagenes > img');
   	for(var i=0; i<imagenes.length;i++){
   		imagenes[i].addEventListener('dragstart',drag,false);
   		imagenes[i].addEventListener('dragend',end,false)
   	}
   	soltar=document.getElementById('lienzo');
   	lienzo=soltar.getContext('2d');
   	soltar.addEventListener('dragenter',ingresar,false);
   	soltar.addEventListener('dragleave',out,false);
   	soltar.addEventListener('dragover',function(e){
   		e.preventDefault();},false);

   	soltar.addEventListener('drop', drop, false);
   }

//----------------------------------------------------
  


	
//--------------------------------------------------
	function drop(e){
		e.preventDefault();
		var id=e.dataTransfer.getData('Text');
		var elemento=document.getElementById(id);
		console.log(id);
		var posX=e.pageX-soltar.offsetLeft;
		var posY=e.pageY-soltar.offsetTop;
		lienzo.drawImage(elemento,posX-100,posY-100);

		//Por medio de la funcion post se revisa en el data.php

    //---------------------------------------------
		$.ajax({
			type: "POST",
			url: "data.php",
			data: { marcador: id }
		}).done(function(){
			console.log("Solicitud enviada al API");

		}).success(function(result){
			console.log("Resultado: "+result);
			var conca=JSON.parse(result);
			console.log("ARREGLO: "+conca.temps.length);
			for(i=0;i<conca.temps.length;i++){
				nombres[i]=conca.temps[i].nom;
				latitudes[i]=conca.temps[i].lat;
				longitudes[i]=conca.temps[i].lon;
			}
			initialize();
		}).error(function(error){
			console.log("Error: "+ error);
		})
		
	}

	window.addEventListener('load',iniciar,false);




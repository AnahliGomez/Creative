$(document).ready(function(){
	var imagenes_botellas=new Array(
		'images/carr/012.png',
		'images/carr/023.png',
		'images/carr/024.png',
		'images/carr/025.png',
		'images/carr/026.png',
		'images/carr/027.png'
		);

		function cambiar_imagen(){
			var index=Math.floor((Math.random()*imagenes_botellas.length));
			document.getElementById("imagenes_botellas").src=imagenes_botellas[index];
		}

		onload=function(){
			cambiar_imagen();
			setInterval(cambiar_imagen,800)
		}
})
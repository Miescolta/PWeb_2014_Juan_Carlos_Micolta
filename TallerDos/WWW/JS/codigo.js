$(document).ready(inicio)
function inicio() {
 $(".botonCompra").click(anade)
 $("#carro").load("INCLUDES/carrito.php");
}

function anade () {
 $("#carro").load("INCLUDES/carrito.php?p="+$(this).val());
}
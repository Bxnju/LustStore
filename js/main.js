//LOADER

//Esta en el archivo /recursos/loader.php

//OBSERVER

const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) =>{
		console.log(entry)
		if (entry.isIntersecting) {
			entry.target.classList.add('show');
		}else{
			entry.target.classList.remove('show');
		}
	});
});


const hiddenElements = document.querySelectorAll('.hidden');
const hiddenLeftElements = document.querySelectorAll('.hidden_left');
hiddenElements.forEach((el) => observer.observe(el));
hiddenLeftElements.forEach((el) => observer.observe(el));

	

	function eliminarCliente(idCliente){
		if (window.confirm("Esta seguro que desea eliminar al usuario seleccionado?")) {
  			window.location = ("../query/eliminar_cliente.php?id=" + idCliente);
		}
	}

	function eliminarProducto(idProducto){

		if (window.confirm("Esta seguro de eliminar la prenda seleccionada?")) {
  			window.location = ("../query/eliminar_producto.php?id=" + idProducto);
		}
	}

	function marcarEntregado(idPedido){

		if (window.confirm("Desea marcar al pedido como entregado?")) {
  			window.location = ("../query/marcar_entregado.php?id=" + idPedido);
		}
	}
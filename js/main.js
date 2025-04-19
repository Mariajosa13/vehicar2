$(document).ready(function(){
	/*  Exit system buttom */
	$('.btn-exit-system').on('click', function(e){
		e.preventDefault();
		Swal.fire({
			title: 'Estás Seguro(a) de cerrar la sesión?',
			text: "Está a punto de cerrar la sesión y salir del sistema.",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, Salir!',
			cancelButtonText: 'No, cancelar'
		}).then((result) => {
			if (result.value) {
				window.location="../cerrar_session.php";
			}
		});
	});
});

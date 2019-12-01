
$(document).on('click, funNuevoAlumno');


function funNuevoAlineamiento()
{
$("#tablaAlinamientos")
.append
(
	$('<tr>')
	.append
	(
		$('<tr>')
		.append
		(
			$('<input>').attr('type').addClass('form-control')
			)
		)
	.append
	(
		$('<td>')
		.append
		(
			$('<input>'.attr('type','text').addClass('form-control')
		)
	)
		.append
		(
			$('<td>').addClass('text-center')  
			
	.append
	(
		$('<div>').addClass('btn btn-primary').text('Guardar')
      
		)
	.append(
          $('<div>').addClass('btn btn-danger').text('Eliminar')
		)
	)
);
}
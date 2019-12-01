jQuery(document).on('','#',function(event){
	event.preventDefault();
	
	jQuery.ajax({
		url:''
		type: 'POST'
		dateType: json',
		data:
		beforeSend: function(){
		}
	})
	.done(function(respuesta){
		consolo.log("success");
	})
	.fail(function(resp){
		console.log("error");
	})
	.always(function(){
		console.log("completado");
	});
});
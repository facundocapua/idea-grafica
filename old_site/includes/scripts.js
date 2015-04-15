$(document).ready(function(){
	//Inputs con valor default
	$('input.default, textarea.default').each(function(){
		$(this).val($(this).attr('title'));
	});
	$('input.default, textarea.default').focus(function(){
		if($(this).val()==$(this).attr('title')){
			$(this).val('');
		}
	});
	$('input.default, textarea.default').blur(function(){
		if($(this).val()==''){
			$(this).val($(this).attr('title'));									
		}
	});
	
	//Imagenes con hover
	$('img.hover').each(function(){
		/*$(this).val($(this).attr('title'));*/
		$(this).css('background-image','url('+$(this).attr('src')+')');
		$(this).attr('src','images/1x1.gif');
	});
	$('img.hover').hover(function(){
		$(this).css('background-position','right');
	},function(){
		$(this).css('background-position','left');
	});
	
	//Imagenes transparencia
	$('img.opacity').css('opacity',0.3);
	$('img.opacity').hover(function(){
		$(this).css('opacity',1);								
	},function(){
		$(this).css('opacity',0.3);
	});
});


//Validacion de Formularios
function validarFormulario( form ){
	var completo = true;
	$('#'+form+' .requerido').each(function(){ 
		if($.trim($(this).val())==''){ //Si esta vacion el campo
			completo = false;
			$(this).addClass('input_error');
		}else if($(this).hasClass('default') && $.trim($(this).val())==$(this).attr('title')){ //Si no esta vacio pero tiene el valor default, osea q no se ingreso texto
			completo = false;
			$(this).addClass('input_error');
		}else{
			$(this).removeClass('input_error');
		}
	});
}
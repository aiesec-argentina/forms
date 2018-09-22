$(document).ready(function() {
	$('#webform').validate({
		rules:{
			"fields[titulo]": { required: true },
			"fields[apellido]": { required: true },
			"fields[clave]": { required: true, password: true },
			"fields[mail][][value]": { required: true, email: true },
			"fields[telefono][][value]": { required: true, digits: true },
			"fields[fecha-de-nacimiento][start_date]": { required: true },
			"fields[ciudad]": { required: true, ciudadSeleccionada: true },
			"fields[universidad]": { required: true, universidadSeleccionada: true },
			"fields[campo-de-estudio]": { required: true },
			"fields[como-te-enteraste-de-esta-oportunidad]": { required: true },
			"fields[duracion-preferida-del-intercambio]": { required: true },
		},
		messages:{
			"fields[titulo]": { required: "Se requiere ingresar el nombre." },
			"fields[apellido]": { required: "Se requiere ingresar el apellido." },
			"fields[clave]": { required: "Se requiere ingresar una clave valida.", password: mensajeClaveInvalida },
			"fields[mail][][value]": { required: "Se requiere ingresar un Email.", email: "formato de Email invalido." },
			"fields[telefono][][value]": { required: "Se requiere el telefono.", digits: "Ingresar solo numeros." },
			"fields[fecha-de-nacimiento][start_date]": { required: "Se requiere fecha de nacimiento." },
			"fields[ciudad]": { required: "Se requiere la ciudad.", ciudadSeleccionada: "Se requiere seleccionar una ciudad." },
			"fields[universidad]": { required: "Se requiere seleccionar una universidad", universidadSeleccionada: "Se requiere seleccionar una universidad" },
			"fields[campo-de-estudio]": { required: "Se requiere el campo de estudio." },
			"fields[como-te-enteraste-de-esta-oportunidad]": { required: "Se requiere Como te enteraste de la oportunidad." },
			"fields[duracion-preferida-del-intercambio]": { required: "Se requiere duración preferida del intercambio." },
		},
		submitHandler: function(form){
			if(!$("#webform").valid() || !handlePodioSubmitWithToken())
			{
				return;
			}
			insertExpa();
			form.submit();
		}
	})

	$.validator.addMethod('password', function(value, element){
		return this.optional(element) || /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/.test(value);
	});

	$.validator.addMethod('email', function(value, element){
		return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
	});

	$.validator.addMethod('universidadSeleccionada', function(value, element){
		return $('#field_universidad').val() != null && $('#field_universidad').val() != 0;
	});

	$.validator.addMethod('ciudadSeleccionada', function(value, element){
		return $('#field_ciudad').val() != null && $('#field_ciudad').val() != 0;
	});

	function mensajeClaveInvalida(){
		var text = "A la clave que ingreso aún le falta: ";
		pswd = $('#field_clave').val();
		if ( pswd.length < 8 ) {
			text += "mínimo 8 digitos. ";
		}
		if (!( pswd.match(/[A-Z]/)) ) {
			text += "mínimo una mayúscula. ";
		}
		if (!( pswd.match(/[a-z]/)) ) {
			text += "mínimo una minúscula. ";
		}
		if (!( pswd.match(/\d/) )) {
			text += "mínimo una número. ";
		}
		return text;
	};
})

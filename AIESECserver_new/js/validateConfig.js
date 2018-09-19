$('#webform').validate({
	rules:{
		"fields[titulo]": { required: true },
		"fields[apellido]": { required: true },
		"fields[clave]": { required: true, password: true },
		"fields[mail][][value]": { required: true, email: true },
		"fields[telefono][][value]": { required: true, digits: true },
		"fields[fecha-de-nacimiento][start_date]": { required: true },		
		"fields[ciudad]": { required: true },
		"fields[universidad]": { required: true },
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
		"fields[ciudad]": { required: "Se requiere la ciudad." },
		"fields[universidad]": { required: "Se requiere la universidad." },
		"fields[campo-de-estudio]": { required: "Se requiere el campo de estudio." },
		"fields[como-te-enteraste-de-esta-oportunidad]": { required: "Se requiere Como te enteraste de la oportunidad." },
		"fields[duracion-preferida-del-intercambio]": { required: "Se requiere duración preferida del intercambio." },
	}	
})

$.validator.addMethod('password', function(value, element){
	return this.optional(element) || /^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i.test(value);
});

$.validator.addMethod('email', function(value, element){
	return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
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
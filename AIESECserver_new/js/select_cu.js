var universidades;
var ciudades;
var comites;
var carreras;

var searchIntoJson = function (obj, column, value) {
	var results = [];
	var valueField;
	var searchField = column;
	for (var i = 0 ; i < obj.length ; i++) {
		valueField = obj[i][searchField].toString();
		if (valueField === value) {
			results.push(obj[i]);
		}
	}
	return results;
};

var searchIntoJsonForComites = function (obj, column, value) {
	var results = [];
	var valueField;
	var searchField = column;
	for (var i = 0 ; i < obj.length ; i++) {
		valueField = obj[i][searchField].toString();
		if (valueField == value) {
			results.push(obj[i]);
		}
	}
	return results;
};

var loadCiudades = function () {
	$("#field_ciudad").empty();
	$("#field_ciudad").append('<option value="0" selected="selected">Seleccione</option>');
	$.each(ciudades, function (i, valor) {
		$("#field_ciudad").append("<option value='" + valor.id_ciudad + "'>" + valor.nombre_ciudad + "</option>");
	});
};

var loadUniversidades = function (id_ciudad) {
	var universidad_ciudad = searchIntoJson(universidades, "id_ciudad", id_ciudad);
	$("#field_universidad").empty();
	$("#field_universidad").append('<option value="0" selected="selected">Seleccione Universidad</option>');
	$.each(universidad_ciudad, function (i, valor) {
		$("#field_universidad").append('<option value="' + valor.id_universidad + '">' + valor.nombre_universidad + '</option>');
	});
};

var loadComite = function (id_universidad) {
	var comite = searchIntoJson(universidades, "id_universidad", id_universidad);
	var comiteWsp = searchIntoJsonForComites(comites, "id_podio", comite[0].c_id_podio);
	$('select[wsp-business]').attr('wsp-business', comiteWsp[0].wspbusiness);
	$("#field_comite-num").value = comiteWsp[0].wspbusiness;
	$.each(comite, function (i, valor) {
		$("#field_local-committee").empty();
		var id_comite = valor.c_id_podio;
		$("#field_local-committee").append("<option value='" + valor.c_id_podio + "'>" + valor.c_id_podio + "</option>");
		$("#field_local-committee").value = id_comite;
	});
};

$(document).ready(function () 
	{
		jQuery.getJSON("./data/ciudades.json",function (data) {
			ciudades = data;
		});
		jQuery.getJSON("./data/comites.json",function (data) {
			comites = data;
		}); 
	
		jQuery.getJSON("./data/universidades.json", function (data) {
			universidades = data;
		}).done(function() {
			if (universidades !== undefined) {
				loadCiudades();
			}
		});

	$("#field_ciudad").change(function () {
		var id_ciudad = $("#field_ciudad").val();
		loadUniversidades(id_ciudad);
	});
	
	$("#field_universidad").change(function () {
		var id_universidad = $("#field_universidad").val();
		setTimeout(function () {loadComite(id_universidad);}, -2000);		
	});
});

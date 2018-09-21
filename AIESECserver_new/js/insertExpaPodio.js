/****************************************************
*	AJAX to EXPA.									*
****************************************************/

function insertExpa(){
	var parameters = getExpaParameters();		
	var urlslack = "https://hooks.slack.com/services/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";		
	
	$.ajax({        
		data : parameters,
		url: urlInsertExpa,
		type: "post",
		beforeSend:function(objeto){
			showLoadingScreen();
		},
		success: function(data){
			sendSuccessToSlack(urlslack, parameters);
		},
		error: function (Error, textStatus, xhr) {
			showErrorWarning();
			sendErrorToSlack(urlslack, parameters);
		}
	});
};

/****************************************************
*	Podio submit.									*
****************************************************/

function handlePodioSubmit(){					
	$('#podio_form')[0].scrollIntoView();			
	var podioFormToken = $('#podioFormToken').attr('value');
	$.ajax({
		type: 'POST',
		data: { podioFormToken: podioFormToken },
		url: urlTokenCheck,
		success: function(data) {
			(data == 0)? 
				evt.preventDefault() 
				: showLoadingScreen();				
		}
	});
}	

/****************************************************
*	Helpers functions.								*
****************************************************/	
						
function getExpaParameters(){
	lstC = document.getElementById("field_como-te-enteraste-de-esta-oportunidad");
	return {                 
		"first_name"        : $("#field_titulo").val(),
		"last_name"         : $("#field_apellido").val(),
		"email"             : $("#field_e-mail").val(),
		"clave"             : $("#field_clave").val(),
		"phone"             : $("#field_telefono").val(),  
		"valUniversidad"    : $("#field_universidad").val(),
		"referencia"        : lstC.options[lstC.selectedIndex].innerHTML
	};
}	

function parametersToString(parameters){
	var strResul = "";
	JSON.stringify(parameters, null, "\t")
				.replace(new RegExp("\t","g"),"")
				.replace("{","")
				.replace("}","")
				.split("\n")
				.forEach(function(value, index){
					if(value.length > 0){
						strResul += value + "\n";
					}
				});
	return strResul;
}

function showLoadingScreen(){
	$('#carga').css('display','block');
	var elmnt = document.getElementById("podio_form");
	elmnt.scrollIntoView();
	$('#webform').css('display','none');
}

function showErrorWarning(){  
	$('#webform').css('display','none');
	$('#error-expa').css('display','block');
}	

function sendSuccessToSlack(urlslack, parametros){
	var contentslack = parametersToString(parametros);
	$.post(urlslack, contentslack);
}

function sendErrorToSlack(urlslack, parametros){
	var contentslack = "Error: " + textStatus + "\n"
					+ parametersToString(parametros);				
	$.post(urlslack, contentslack);
}
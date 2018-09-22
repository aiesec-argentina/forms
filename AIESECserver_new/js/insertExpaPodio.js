/****************************************************
*	AJAX to EXPA.									*
****************************************************/

// Send data to EXPA to create user.
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

// Submit Podio form after a token check.
function handlePodioSubmitWithToken(){				
	$('#podio_form')[0].scrollIntoView();			
	var podioFormToken = $('#podioFormToken').attr('value');
	var tokenCheck;
	$.ajax({
		type: 'POST',
		data: { podioFormToken: podioFormToken },
		url: urlTokenCheck,
		async: false,
		success: function(data) {
			tokenCheck = (data != 0);
			if(tokenCheck)
				showLoadingScreen();				
		}
	});
	return tokenCheck;
}	

/****************************************************
*	Helpers functions.								*
****************************************************/	

// Get data to send to EXPA.
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

// Return JSON value/pairs as string.
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

// When submit starts, shows loading screen.
function showLoadingScreen(){
	$('#carga').css('display','block');
	var elmnt = document.getElementById("podio_form");
	elmnt.scrollIntoView();
	$('#webform').css('display','none');
}

// After a error on submit, shows an error message.
function showErrorWarning(){  
	$('#webform').css('display','none');
	$('#error-expa').css('display','block');
}	

// Send data of succes lead generation to Slack.
function sendSuccessToSlack(urlslack, parametros){
	var contentslack = parametersToString(parametros);
	$.post(urlslack, contentslack);
}

// Send data which produced an error on lead generation to Slack.
function sendErrorToSlack(urlslack, parametros){
	var contentslack = "Error: " + textStatus + "\n"
					+ parametersToString(parametros);				
	$.post(urlslack, contentslack);
}

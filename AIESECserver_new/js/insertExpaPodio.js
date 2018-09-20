$(document).ready(function(){							
						
	/****************************************************
	*	Funcion ajax a EXPA.									*
	****************************************************/
	
	function insertExpa(){			
		lstC = document.getElementById("field_como-te-enteraste-de-esta-oportunidad");
		var comoConocio = lstC.options[lstC.selectedIndex].innerHTML;
		var parametros = {                 
			"first_name"        : $("#field_titulo").val(),
			"last_name"         : $("#field_apellido").val(),
			"email"             : $("#field_e-mail").val(),
			"clave"             : $("#field_clave").val(),
			"phone"             : $("#field_telefono").val(),  
			"valUniversidad"    : $("#field_universidad").val(),
			"referencia"        : comoConocio
		};
		var debug_first_name        = $("#field_titulo").val();
		var debug_last_name        = $("#field_apellido").val();
		var debug_email           = $("#field_e-mail").val();
		var debug_clave             = $("#field_clave").val();
		var debug_phone             = $("#field_telefono").val(); 
		var debug_valUniversidad    = $("#field_universidad").val();
		var debug_referencia        = comoConocio;
		
		
		$.ajax({                      
			data : parametros,                      
			url: urlInsertExpa, 
			type: "post",
			beforeSend:function(objeto){ 
					$('#carga').css('display','block');
					var elmnt = document.getElementById("podio_form");
					elmnt.scrollIntoView();
					$('#webform').css('display','none');
			},        
			error: function (Error, textStatus, xhr) {
				console.log("error" + xhr.status());    
				$('#webform').css('display','none');
				$('#error-expa').css('display','block');
			},
			complete: function(xhr, status){
				var urlslack = "https://hooks.slack.com/services/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";
				if(status!="success")
				{
					var contentslack = {"text": "Um novo Lead! E o status é: " + status + "\n" + 
						debug_first_name + "\n" +
						debug_last_name + "\n" +
						debug_email + "\n" +
						debug_clave + "\n" +
						debug_phone + "\n" +
						debug_valUniversidad + "\n" +
						debug_referencia };
				} 
				else 
				{
					var contentslack = {"text": "Um novo Lead! E o status é: " + status}; 
				}
				$.post(urlslack,JSON.stringify(contentslack)); 
			}
		});
	};

	/****************************************************
	*	Submit a Podio.									*
	****************************************************/

	$("#webform").submit(function(evt) {
		if (!$('#webform').valid()){
			evt.preventDefault();
			return false;
		}
		
		debugger;
		insertExpa();
		$('#podio_form')[0].scrollIntoView();			
		var podioFormToken = $('#podioFormToken').attr('value');
		$.ajax({
			type: 'POST',
			data: { podioFormToken: podioFormToken },
			url: urlTokenCheck,
			success: function(data) {
				if(data == 0){
					evt.preventDefault();
				}
				else{
					$('#webforms__fields-container').css('display', 'none');
					$('#btnEnviar').css('display', 'none');
					$('#carga').css('display', 'block');
				}
			},
			failure: function(){
				console.log("failure");
			},
			error: function(){
				console.log("error");
			}
		});			
	});
});
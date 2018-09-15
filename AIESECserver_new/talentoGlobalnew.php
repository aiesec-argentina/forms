<?php 
$dir =  "HTTPS://".$_SERVER["HTTP_HOST"]."/AIESECserver_new/" ;
include_once('./classes/token.php');?>
<html>
  <head>  
    <title>Talento Global</title>
    <meta name="description" content="AIESEC formulario" charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" media="all" href="<?php echo $dir;?>css/webform.css" class="section-webforms" />
    <link rel="stylesheet" media="all" href="<?php echo $dir;?>css/customWebformResponsive.css"/>
    <link rel="stylesheet" media="all" href="https://d2cmuesa4snpwn.cloudfront.net/webforms/stylesheets/_ec049774/flatly.css" class="section-flatly" />
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="QBQkVnsXFwdo8Zppn+C/bWZ/EhbY4khxA3yJJzjMh+OMZgkPAUnAZ1XAUyKn5tSP/ncV2xVMWAJIHz5aMhbdCQ==" />

    <script src="<?php echo $dir;?>js/jquery-3.3.1.js"></script>
    <!--[if lt IE 9]>
      <meta http-equiv="X-UA-Compatible" content="IE=7" />      
    <![endif]-->
    <style type="text/css">
          label.webforms__label {
      color: #0a8e9f;
      font-family: Lato;
      }
      h1 {
        color: #0a8e9f;
        font-family: Lato;
      }
      form-control {
        font-family: Lato;
      }
      button {
        font-family: Lato;
      }
    </style>
  </head>
  <body> <!-- https://podio.com/webforms/21445642/1489974 -->
    <div class="container">
        <form class="webforms" id="webform" data-locale="es_ES" enctype="multipart/form-data" action="https://podio.com/webforms/21445642/1489974" accept-charset="UTF-8" method="post">
          <input name="utf8" type="hidden" value="&#x2713;" />
          <input type="hidden" name="authenticity_token" value="85Z966RaOksvNhsjxYgeIxBAkaCGJWXoLA635TB4GDE/5FCy3gTtKxIH0mj9jnXBiEiWbUuLdZtnbQCYOqJC2w=="/>
          <h1 class="webforms__heading">
            Talento Global
          </h1>
          <div class="webforms__description"> <!-- Descripcion del form -->
            <p>Completá tus datos debajo para generar un perfil gratuito en nuestra plataforma global y confirmar que sos un perfil aplicable para nuestras pasantías. Adjuntar tu CV al final del formulario.</p>
          </div>
          <div id="webforms__fields-container"> 
            <div class="form-group hidden"> <!-- Nombre completo -->
                        <label class="webforms__label" for="field_nombre-completo">Nombre Completo:</label>
                        <div class="webforms__field text-field">
                             <input type="text" name="fields[nombre-completo]" id="field_nombre-completo" value="" class="form-control" />
                        </div>
            </div>
            <div class="form-group"> <!-- Nombre -->
                        <label class="webforms__label" for="field_titulo">Nombre: *</label>
                        <div class="webforms__field text-field">
                             <input type="text" name="fields[titulo]" id="field_titulo" value="" class="form-control" required="required" />
                        </div>
            </div>
            <div class="form-group"> <!-- Apellido -->
                        <label class="webforms__label" for="field_apellido">Apellido *</label>
                        <div class="webforms__field text-field">
                            <input type="text" name="fields[apellido]" id="field_apellido" value="" class="form-control" required="required" />
                        </div>
            </div>
            <div class="form-group"> <!-- Email -->
                        <label class="webforms__label" for="field_mail">Email: *</label>
                        <div class="webforms__field email-field">
                            <div class="webform__multiple-wrapper">
                                <div class="webforms__multiple-field">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <select name="fields[mail][][type]" class="webforms__select"> 
                                                <option value="other">Otro</option>
                                                <option value="home">Casa</option>
                                                <option value="work">Trabajo</option>
                                            </select>
                                        </span>
                                            <input type="text" name="fields[mail][][value]" class="form-control  webform__text-input--email" required="required" maxlength="50" id="field_e-mail" />
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="form-group"> <!-- Celular -->
                        <label class="webforms__label" for="field_telefono">Celular: *</label>
                        <div class="webforms__field phone-field">
                            <div class="webform__multiple-wrapper">
                                <div class="webforms__multiple-field">
                                    <div class="webform__multiple-field">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <select name="fields[telefono][][type]">
                                                    <option value="mobile">Mobil</option>
                                                    <option value="work">Trabajo</option>
                                                    <option value="home">Casa</option>
                                                    <option value="main">Principal</option>
                                                    <option value="work_fax">Fax Trabajo</option>
                                                    <option value="private_fax">Fax Privado</option>
                                                    <option value="other">Otro</option>
                                                </select>
                                            </span>
                                                <input type="text" name="fields[telefono][][value]" class="form-control  webform__text-input--phone" required="required" maxlength="50" id="field_telefono" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="form-group"> <!-- Fecha de Nacimiento -->
                        <label class="webforms__label" for="field_fecha-de-nacimiento">Fecha de Nacimiento: *</label>
                        <div class="webforms__field date-field">
                            <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-addon">Fecha</div>
                                              <input type="date" name="fields[fecha-de-nacimiento][start_date]" id="fields_fecha-de-nacimiento_start_date" value="2000-01-01" class="form-control webforms__input_date" placeholder="YYYY-MM-DD" required="required" />
                                        </div>
                                    </div>  
                        </div>
            </div>
            <div class="form-group hidden"> <!-- LC -->
                        <label class="webforms__label" for="field_local-committee">Comité Local:</label>
                        <div class="webforms__field category-field">
                            <select name="fields[local-committee]" id="field_local-committee" class="form-control">
                            </select>
                        </div>
            </div>
            <div class="form-group"> <!-- Ciudad -->
                        <label class="webforms__label" for="field_ciudad">Ciudad donde estudias: *</label>
                        <div class="webforms__field-description small">
                              <p>Selecciona tu ciudad</p>
                        </div>
                        <div class="webforms__field app-field">
                                <select name="fields[ciudad]" id="field_ciudad" class="form-control" required="required">
                                </select>
                        </div>
            </div>
            <div class="form-group"> <!-- Universidad -->
                        <label class="webforms__label" for="field_universidad">Universidad: *</label>
                        <div class="webforms__field-description small">
                              <p>Elegir solo la universidad en la que estudiás actualmente o la última en la que estudiaste. Si estudiaste en otras universidades antes, agregar en "Otra"</p>
                        </div>
                        <div class="webforms__field app-field">
                                <select name="fields[universidad]" id="field_universidad" class="form-control" required="required">
                                </select>
                        </div>
                    </div>
                    <div class="form-group hidden"> <!-- LC -->
                        <label class="webforms__label" for="field_local-committee">Comité Local:</label>
                        <div class="webforms__field category-field">
                            <select name="fields[local-committee]" id="field_local-committee" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group"> <!-- Otra Universidad -->
                        <label class="webforms__label" for="field_otra-universidad">Otra universidad:</label>
                        <div class="webforms__field text-field">
                            <input type="text" name="fields[otra-universidad]" id="field_otra-universidad" value="" class="form-control" />
                        </div>
            </div>  
            <div class="form-group"> <!-- Nivel de Ingles-->
                <label class="webforms__label" for="field_nivel-de-ingles">Nivel de inglés: *</label>
                <div class="webforms__field category-field">
                    <select name="fields[nivel-de-ingles]" id="field_nivel-de-ingles" class="form-control" required="required">
                        <option value="1">Básico</option>
                        <option value="2">Intermédio</option>
                        <option value="3">Avanzado</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group"> <!-- Campos de Estudio -->
                <label class="webforms__label" for="field_campo-de-estudio-2">Campo de Estudio *</label>
                <div class="webforms__field category-field">
                      <select name="fields[campo-de-estudio-2]" id="field_campo-de-estudio-2" class="form-control" required="required">
                             <option value="219">Marketing</option>
                             <option value="220">Contabilidad</option>
                             <option value="221">Finanzas</option>
                             <option value="222">Administración</option>
                             <option value="223">Diseño</option>
                             <option value="224">RRHH</option>
                             <option value="225">Comunicación/RRPP</option>
                             <option value="226">Ingeniería</option>
                             <option value="227">Otras</option>
                      </select>
                </div>
            </div>
            <div class="form-group"> <!-- Otros -->
                <label class="webforms__label" for="field_si-otras-cual">Si otro, cual?</label>
                <div class="webforms__field text-field">
                    <input type="text" name="fields[otros]" id="field_si-otras-cual"  value="" class="form-control" />
                </div>
            </div>
            <div class="form-group"> <!-- Como te enteraste de esta oportunidad -->
                <label class="webforms__label" for="field_como-te-enteraste-de-esta-oportunidad">¿Cómo te enteraste de esta oportunidad?  *</label>
                <div class="webforms__field category-field">
                    <select name="fields[como-te-enteraste-de-esta-oportunidad]" id="field_como-te-enteraste-de-esta-oportunidad" class="form-control" required="required">
                          <option value="" disabled selected>Por favor, elige una opcion</option>
                          <option value="1">Me contó un amigo</option>
                          <option value="2">Un amigo lo compartió en Facebook</option>
                          <option value="3">Lo encontré en un portal de empleo online</option>
                          <option value="4">Lo encontré en Linkedin</option>
                          <option value="5">Lo encontré en Google</option>
                          <option value="6">Lo encontré en un portal de empleo de la universidad</option>
                          <option value="7">Vi una publicidad en Facebook</option>
                          <option value="8">Ví una publicidad en Instagram</option>
                          <option value="9">Recibí un correo electrónico de mi universidad</option>
                          <option value="10">Me enteré a traves de una organización aliada</option>
                          <option value="11">Me enteré en un evento o feria</option>
                          <option value="12">Medios / influencers</option>
                          <option value="13">Otro</option>
                          <!-- <option value="31">Me enteré a traves de una organización aliada 2</option> 
                          <option value="32">Me enteré a traves de una organización aliada 3 </option>
                          <option value="33">Me enteré a traves de una organización aliada 4</option>
                          <option value="34">Me enteré a traves de una organización aliada 5</option>
                          <option value="6">Me contó un amigo 2</option> -->
                    </select>
                </div>
            </div>
            
            <div class="form-group"> <!-- Cuando podes viajar -->
                          <label class="webforms__label" for="field_destino-de-preferencia">¿Cual tu destino de preferencia? *</label>
                          <div class="webforms__field category-field">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[destino-de-preferencia][]" id="fields_destino-de-preferencia_" value="1" /> Brasil
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[destino-de-preferencia][]" id="fields_destino-de-preferencia_" value="2" /> Mexico
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[destino-de-preferencia][]" id="fields_destino-de-preferencia_" value="3" /> India
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[destino-de-preferencia][]" id="fields_destino-de-preferencia_" value="4" /> Rumania
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[destino-de-preferencia][]" id="fields_destino-de-preferencia_" value="5" /> Colombia
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[destino-de-preferencia][]" id="fields_destino-de-preferencia_" value="6" /> Panama
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[destino-de-preferencia][]" id="fields_destino-de-preferencia_" value="7" /> Costa Rica
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[destino-de-preferencia][]" id="fields_destino-de-preferencia_" value="8" /> Hungria
                                  </label>
                              </div>
                          </div>
                    </div>
            <div class="form-group"> <!-- Adjuntaste tu Cv -->
                <label class="webforms__label" for="field_adjuntaste-tu-cv-preferible-en-ingles-formato-de-enhanc">Adjuntáste tu CV (Preferible en inglés, formato de enhancv.com ):</label>
                <div class="webforms__field category-field">
                      <select name="fields[adjuntaste-tu-cv-preferible-en-ingles-formato-de-enhanc]" id="field_adjuntaste-tu-cv-preferible-en-ingles-formato-de-enhanc" class="form-control">
                            <option value="" disabled selected>Por favor, elige una opcion</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                      </select>
                </div>
            </div>
            <div class="form-group"> <!-- Datos Adjuntos -->
                <label class="webforms__label">Datos adjuntos</label>
                <div class="form-group webforms__multiple-wrapper">
                    <div class="webforms__multiple-field">
                        <input type="file" name="attachments[]" id="attachments_" class="webforms__upload webforms__multiple" />
                    </div>
                </div>
            </div>
          </div>
          <input name="utf8" id="mongo" type="hidden" value="" />
          <input id="podioFormToken" type="text" hidden value="<?php echo Token::generate(); ?>" name="podioFormToken">
          <!--<div class="g-recaptcha" data-sitekey="6LcKtT0UAAAAACAPnvzDj3t6JbHjLdQCZD7KhAWP"></div>-->
          <div class="webforms__submit-box form-group">
            <button name="button" type="submit" class="btn btn-primary" id="btnEnviar" >Enviar </button>
          </div>
        </form>   
        <div id="carga" align="center" style="display:none">
                <img src="<?php echo $dir;?>css/cargando.gif" />
        </div>
        
    </div>

    <div id="webforms__footer"></div>
    <script>window['webformParams'] = {"form_id":"21445642"}</script>       
    <script src="<?php echo $dir;?>js/webforms.js" async="async"></script>
    <script src="<?php echo $dir;?>js/select_cu.js" async="async"></script>
    
    
    <!--script type="text/javascript">

        $(document).ready(function(){      
            $("#webform").submit(function() {
                  var x = $("#mongo").val();
                  if (x != "") {
                    return false;
                  }
                });            ;
            $('#btnEnviar').click(function(){                
                if(ValidarClave($("#field_clave").val())){
                  var url = "C:/xampp/htdocs/insertExpa.php";                  
                  lstC = document.getElementById("field_como-te-enteraste-de-esta-oportunidad");   
                  var comoConocio = lstC.options[lstC.selectedIndex].innerHTML;
                  var parametros = {                 
                    "first_name"        : $("#field_titulo").val(),
                    "last_name"         : "-",
                    "email"             : $("#field_e-mail").val(),
                    "clave"             : $("#field_clave").val(),
                    "phone"             : $("#field_telefono").val(), 
                    "valUniversidad"    : $("#field_universidad").val(),  
                    "referencia"        : comoConocio                 
                  };                                       
                  $.ajax({                      
                      data : parametros,
                      url: url, 
                      type: "post",        
                      success: function(data)             
                      {
                        console.log(data);               
                      }
                 });
                 
                }                                                          
            });

            function ValidarClave (text){
            var pswd = text;
                if ( pswd.length < 8 ) {
                  $("#idMalClave").html("<p style='color:red'>La contraseña deben tener minimo 8 digitos.</p>");
                   return false;
                }else if (!( pswd.match(/[A-Z]/)) ) {
                  $("#idMalClave").html("<p style='color:red'>La contraseña debe tener mayusculas.</p>");                                        
                    return false;
                }else if (!( pswd.match(/[a-z]/)) ) {
                  $("#idMalClave").html("<p style='color:red'>La contraseña debe tener minusculas.</p>");                    
                    return false;
                }else if (!( pswd.match(/\d/) )) {
                  $("#idMalClave").html("<p style='color:red'>La contraseña deben tener numeros.</p>");                    
                    return false;
                }else{                    
                    return true;
                }
            };
            
        });
        
    </script-->
    <script type="text/javascript">
                var mapping;
                function mapLC(uni) {
                    return mapping[uni];
                }
                
                function getLeads(path_leads_json) {
                    var jqxhr = jQuery.getJSON(path_leads_json, function() {
                            mapping = jQuery.parseJSON(jqxhr.responseText);
                        })
                        .done(function() {
                            console.log( "getLeads success" );
                        })
                        .fail(function() {
                            // console.log( "getLeads error" );
                        })
                        .always(function() {
                            // console.log( "getLeads complete" );
                        });
                }
        </script>
        <!--<script type="text/javascript">

            $(document).ready(function(){
                var usuarioExistente = false;
                var estadoRequest = false;
                var result;

                // < Generate LC >
                // AAP - Asociación Argentina de Publicidad -- Buenos Aires USAL
                /*$("#field_local-committee").val('4');

                var myJsonString = getLeads('leads.json')
                $("#field_universidad").change(function($) {
                    jQuery("#field_local-committee").val(mapLC(jQuery("#field_universidad").val()));
                });

                if($('#field_local-committee').val() == ""){
                    $('#field_local-committee').val('19');
                }*/
                // </-- Generate LC --

                // Control del submit del form
                $("#webform").submit(function(evt) {
                    // Add
                    window.document.getElementById("field_nombre-completo").value = window.document.getElementById("field_titulo").value + " " + window.document.getElementById("field_apellido").value;
                    // Verifica si existe usuario y el estado de respuesta del servidor
                
                    var lOk = verificarParaSubmit();                
                    if ( lOk == false){
                        evt.preventDefault();
                        return false;
                    }

                });

                $('#btnEnviar').click(function(){
                    if(ValidarClave($("#field_clave").val())){
                      var url = "http://localhost/AIESEC_server/insertExpa.php";
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

                        $.ajax({                      
                          data : parametros,                      
                          url: url, 
                          type: "post",
                          beforeSend:function(objeto){ 
                                $('#carga').css('display','block');
                                var elmnt = document.getElementById("podio_form");
                                elmnt.scrollIntoView();
                                $('#webform').css('display','none');
                            },                             
                          success: function(respuesta)             
                          {                        
                            var result = respuesta;                        

                            $('#webform').attr('action', 'https://podio.com/webforms/15417841/1047073');
                            evaluaResponse( respuesta.trim() );                        
                            setTimeout(function(){ $('#carga').css('display','none');
                            $("#webform").trigger('submit');}, 3000);                            
                          },                      
                          error: function (Error, textStatus, xhr) {
                            console.log("Error");
                          }
                        });
                    }
                });

                function verificarParaSubmit(){                
                    if (usuarioExistente && estadoRequest == false ){                                               
                        mostrarMensaje();                   
                        return false;           

                    } else if (estadoRequest == false){
                        mostrarMensaje();               
                        return false;

                    }else{
                        return true;
                    }

                }

                function evaluaResponse(_response){                                
                    switch(_response){                            
                        case "422":                                        
                            usuarioExistente = true;
                            estadoRequest = false;                            
                            break;
                        case "200":                    
                            usuarioExistente = false;
                            estadoRequest = true;
                            break;
                        default :                        
                            estadoRequest = false;
                    } 

                }

                function mostrarMensaje(){                               
                    if( usuarioExistente ) {
                        $('#resultado').css('display','block');                    
                    }
                }

                function ValidarClave (text){
                    var pswd = text;
                    if ( pswd.length < 8 ) {

                        $("#idMalClave").html("<p style='color:red'><strong>La contraseña deben tener minimo 8 digitos.</strong></p>");
                        var elmnt = document.getElementById("field_clave");
                        elmnt.scrollIntoView();
                        setTimeout(function(){ $("#idMalClave").html(""); }, 5000);                       
                        return false;

                    } else if (!( pswd.match(/[A-Z]/)) ) {

                        $("#idMalClave").html("<p style='color:red'><strong>La contraseña debe tener mayusculas.</strong></p>");
                        var elmnt = document.getElementById("field_clave");
                        elmnt.scrollIntoView();
                        setTimeout(function(){ $("#idMalClave").html(""); }, 5000);                              
                        return false;

                    } else if (!( pswd.match(/[a-z]/)) ) {

                        $("#idMalClave").html("<p style='color:red'><strong>La contraseña debe tener minusculas.</strong></p>");
                        var elmnt = document.getElementById("field_clave");
                        elmnt.scrollIntoView();
                        setTimeout(function(){ $("#idMalClave").html(""); }, 5000);                               
                        return false;

                    } else if (!( pswd.match(/\d/) )) {
                        $("#idMalClave").html("<p style='color:red'><strong>La contraseña deben tener numeros.</strong></p>");
                        var elmnt = document.getElementById("field_clave");
                        elmnt.scrollIntoView();
                        setTimeout(function(){ $("#idMalClave").html(""); }, 5000);                                  
                        return false;
                    } else{              

                        return true;
                    }
                };
        });
    </script> -->
        <script type="text/javascript">
                $(document).ready(function(){

                $("#webform").submit(function(evt) {
					
                    if($('#webform')[0].checkValidity() || $('#webform')[0].checkValidity){
						$('#podio_form')[0].scrollIntoView();
                        window.document.getElementById("field_nombre-completo").value = window.document.getElementById("field_titulo").value + " " + window.document.getElementById("field_apellido").value;						
						var podioFormToken = $('#podioFormToken').attr('value');
						
						$.ajax({
							type: 'POST',
							data: { podioFormToken: podioFormToken },
							url: "<?php echo $dir;?>classes/tokenCheck.php",
							//async: false,
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
						
                    }
                    else{
						evt.preventDefault();
                        $("#btnEnviar")[0].disabled = false;
                    }
                });

            });

    </script>
  </body>
</html>

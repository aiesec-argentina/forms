<!DOCTYPE html>
<?php $dir =  "HTTPS://".$_SERVER["HTTP_HOST"]."/AIESECserver_new/" ;
        include_once('./classes/token.php');
?>
<?php //$dir =  "HTTP://".$_SERVER["HTTP_HOST"]."/" ;
        //include_once('./classes/token.php');
?>
<html>
    <head>
        <title>AIESEC Argentina - Voluntario Global</title>
            <meta name="description" content="Voluntario Global" charset="UTF-8">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" media="all" href="<?php echo $dir ?>css/webform.css" class="section-webforms" />
            <link rel="stylesheet" media="all" href="<?php echo $dir ?>css/customWebformResponsive.css"/>
            <link rel="stylesheet" media="all" href="https://d2cmuesa4snpwn.cloudfront.net/webforms/stylesheets/_ec049774/flatly.css" class="section-flatly" />
            <meta name="csrf-param" content="authenticity_token" />
            <meta name="csrf-token" content="ipaLfbipM7hrrPaNz8xqO0IpPADjtg/LHTRUi29ACBA1SxnS3fuSRhPb+3kYENI1fobtBVOZqAGfPpk0FdegMA==" />
            <script src="<?php echo $dir ?>js/jquery-3.3.1.js"></script>
            <!--[if lt IE 9]>
              <meta http-equiv="X-UA-Compatible" content="IE=7" />
            <![endif]-->
            <style type="text/css">
                label.webforms__label {
            color: #f85a40;
            font-family: lato;
            font-size: 16px;
            }
                h1 {
                  color: #f85a40;
                  font-family: lato;
                }
                button[type="submit"] {
                  background: #f85a40;
                  color: #fff;
                }
            </style>
    </head>
    <body>
        
        <div id="podio_form" class="container">
            <!-- https://podio.com/webforms/15417841/1047073 -->
            <form class="webforms" id="webform" data-locale="es_ES" enctype="multipart/form-data" action="#" accept-charset="UTF-8" method="post">
                <input name="utf8" type="hidden" value="&#x2713;" />
                <input type="hidden" name="authenticity_token" value="Y+SDydTPHkXYiIfCmCGdVdOL0x6xgiPrEstUgg8lT1ncORFmsZ2/u6D/ijZP/SVb7yQCGwGthCGQwZk9dbLneQ=="/>
                <h1 class="webforms__heading">Voluntario Global</h1>
                <div class="webforms__description">
                    <p>Completá tus datos debajo para generar tu perfil gratuito en nuestra plataforma global y descubrir los proyectos disponibles.
                    En menos de 24hs serás contactado de una de nuestras oficinas más cercanas.</p>
                </div>
                <div id="webforms__fields-container"> <!-- Contenedor del form -->
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
                    <div class="form-group"> <!-- Clave -->
                        <strong><div id ="idMalClave"></div></strong>
                        <label class="webforms__label" for="field_titulo">Contraseña: Esta será tu clave para ingresar a tu perfil y aplicar a las pasantías *</label>
                        <div class="webforms__field-description small">
                              <p>La contraseña debe contener al menos: <strong>Una mayúscula, una minúscula, un número y ser mínimo de 8 caracteres.</strong></p>
                        </div>
                        <div class="webforms__field text-field">
                            <input type="password" name="fields[clave]" id="field_clave" class="form-control" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"/>
                        </div>
                        
                    </div>
                    <div class="form-group"> <!-- Email -->
                        <strong><div id ="idMalMail"></div></strong>
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
                    <div class="form-group"> <!-- Fecha de Naciemiento -->
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
                    <div class="form-group"> <!-- Ciudad -->
                        <label class="webforms__label" for="field_ciudad">Ciudad donde estudias: *</label>
                        <div class="webforms__field-description small">
                              <p>Selecciona tu ciudad donde estudias</p>
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
                    <div class="form-group"> <!-- Campo de estudio -->
                        <label class="webforms__label" for="field_campo-de-estudio">Campo de estudio: *</label>
                        <div class="webforms__field category-field">
                            <select name="fields[campo-de-estudio]" id="field_campo-de-estudio" class="form-control" required="required">
                                <option value="70">Humanidades (Educación, Comunicación, Lenguas, Profesorados)</option>
                                <option value="69">Arquitectura</option>
                                <option value="74">Trabajo Social</option>
                                <option value="72">Ciencias Políticas y Relaciones Internacionales</option>
                                <option value="27">Ciencias Económicas y afines (Administración, Marketing, Comercialización)</option>
                                <option value="165">Recursos Humanos (Relaciones Laborales, Licenciatura en RRHH)</option>
                                <option value="71">Ciencias de la Salud (Medicina, Enfermería, Nutrición, Odontología)</option>
                                <option value="73">Psicología</option>
                                <option value="68">Ciencias Naturales (Biología, Agronomía, Veterinaria)</option>
                                <option value="77">Ciencias Exactas/Ingeniería</option>
                                <option value="75">Deportes</option>
                                <option value="32">Otro</option>
                                <option value="139">Derecho</option>
                                <option value="164">Turismo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"> <!-- Como te enteraste de esta oportunidad -->
                        <label class="webforms__label" for="field_como-te-enteraste-de-esta-oportunidad">¿Cómo te enteraste de esta oportunidad? *</label>
                        <div class="webforms__field category-field">
                            <select name="fields[como-te-enteraste-de-esta-oportunidad]" id="field_como-te-enteraste-de-esta-oportunidad" class="form-control" required="required">
                            <option value="29">Selecciona una opción</option>
                                <option value="14">Me contó un amigo</option>
                                <option value="6" >Un amigo lo compartió en Facebook</option>
                                <option value="18">Un amigo lo compartió en InstaStories</option>
                                <option value="27">Un amigo lo compartió en otra red social</option>
                                <option value="2">Lo encontré en Google</option>
                                <option value="35">Vi una publicación en un grupo de Facebook</option>
                                <option value="36">Vi una publicidad en Facebook</option>
                                <option value="37">Vi una publicidad en Instagram</option>
                                <option value="26">Lo escuché en una presentación en mi universidad</option>
                                <option value="13">Recibí un correo de mi universidad</option>
                                <option value="12">Lo escuché en un stand informativo en mi universidad</option>
                                <option value="30">Lo ví en una red social / pagina web de mi universidad</option>
                                <option value="5">Me enteré por un evento o feria</option>
                                <!-- <option value="3">Me contó un amigo 2</option> -->
                                <option value="16">Me enteré a traves de una organización aliada</option>
                                <!-- todo se pasa a el 16
                                <option value="23">Me enteré a traves de una organización aliada 2</option>
                                <option value="24">Me enteré a traves de una organización aliada 3</option>
                                <option value="25">Me enteré a traves de una organización aliada 4</option>
                                -->
                                <option value="22">Fuí a un evento de Spanglish</option>
                                <option value="31">Ví un anuncio de Potenciate</option>
                                <!-- desactivado tbn
                                <option value="8">Otro</option>
                                -->
                                <option value="28">Medios / Influencers</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"> <!-- Duracion preferida del intercambio -->
                        <label class="webforms__label" for="field_duracion-preferida-del-intercambio">Duración preferida del intercambio: *</label>
                        <div class="webforms__field category-field">
                            <select name="fields[duracion-preferida-del-intercambio]" id="field_duracion-preferida-del-intercambio" class="form-control" required="required">
                                <option value="1">6 semanas</option>
                                <option value="2">12 semanas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"> <!-- Cuando podes viajar -->
                          <label class="webforms__label" for="field_mes-preferido-para-viajar">¿Cuándo podés viajar? *</label>
                          <div class="webforms__field category-field">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[mes-preferido-para-viajar][]" id="fields_mes-preferido-para-viajar_LoAntesPosible" value="13" /> Lo antes posible
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[mes-preferido-para-viajar][]" id="fields_mes-preferido-para-viajar_Prox3Meses" value="14" /> Próximos 3 meses
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[mes-preferido-para-viajar][]" id="fields_mes-preferido-para-viajar_Prox6Meses" value="15" /> Próximos 6 meses
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="fields[mes-preferido-para-viajar][]" id="fields_mes-preferido-para-viajar_EnUnAnio" value="16" /> En un año
                                  </label>
                              </div>
                          </div>
                    </div>
                </div> <!-- Fin contenedor form  -->
                <input name="utf8" type="hidden" id="mongo" value="" />
                <input id="podioFormToken" type="text" hidden value="<?php echo Token::generate(); ?>" name="podioFormToken">
                <div class="webforms__submit-box form-group"> <!-- Boton Enviar -->
                    <button name="button" type="submit" class="btn btn-primary" id="btnEnviar">Enviar</button>
                </div>
            </form>
            <div id="carga" align="center" style="display:none">
                <img src="<?php echo $dir ?>css/cargando.gif" />
            </div>
            <div class="alert alert-danger" id="error-expa" align="center" style="display:none">
                   <strong>Ocurrió un error.</strong>  Por favor actualiza la página e intenta de nuevo. Sí persiste el error, contáctanos en <a href="https://wa.me/5491139431959?text=Hola!%20estoy%20teniendo%20problemas%20en%20mi%20inscripci%C3%B3n!" > este link </a> 
            </div>    
            <div class="alert alert-info" id="resultado" style = "display: none;" align="center">
                "Vimos que ya tenés una cuenta en nuestro Portal de Oportunidades. 
              <a href="https://auth.aiesec.org/users/password/new" class="alert-link">
                  ¿Olvidaste tu contraseña?
              </a>
              Si tenés problemas podés contactar al chat de ayuda en
              <a href="https://www.aiesec.org/" class="alert-link">
                   aiesec.org"
              </a>
              
            </div>
        </div> <!-- Fin contenedor  -->
        <div id="webforms__footer"></div>
        <script>window['webformParams'] = {"form_id":"1047073"}</script>       
        <script src="<?php echo $dir ?>js/webforms.js" async="async"></script>
        <script src="<?php echo $dir ?>js/select_cu.js" async="async"></script>
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
        <script type="text/javascript">

			var validacionVista = false;
            $(document).ready(function(){
                var usuarioExistente = false;
                var estadoRequest = false;
                var result;

                // < Generate LC >
                // AAP - Asociación Argentina de Publicidad --> Buenos Aires USAL
                /*$("#field_local-committee").val('4');

                var myJsonString = getLeads('leads.json')
                $("#field_universidad").change(function($) {
                    jQuery("#field_local-committee").val(mapLC(jQuery("#field_universidad").val()));
                });

                if($('#field_local-committee').val() == ""){
                    $('#field_local-committee').val('19');
                }*/
                // </-- Generate LC -->

                // Control del submit del form
                $("#webform").submit(function(evt) {
                    //debugger;
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
                    debugger;
					validacionVista = ValidarClave($("#field_clave").val()) 
                                        && ValidarMail($("#field_e-mail").val())
                                        && ($('#webform')[0].checkValidity() || $('#webform')[0].checkValidity);
                    if(validacionVista){
                        var url = "<?php echo $dir ?>insertExpa.php";
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
                            setTimeout(function(){ 
                                $('#carga').css('display','none');
                                $("#webform").trigger('submit');
                                }, 3000);
                                                       
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
                function isEmail(email) {
                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    return regex.test(email);
                }
                function ValidarMail (text){
                    var mailv = text;

                    if (!(isEmail(mailv))) {
                        $("#idMalMail").html("<p style='color:red;border: 2px solid red;text-align:center'><strong>Insira un e-mail valido</strong></p>");
                        var elmnt = document.getElementById("field_e-mail");
                        elmnt.scrollIntoView();
                        setTimeout(function(){ $("#idMalMail").html(""); }, 5000);
                        return false;
                    }
                    else {
                        return true;
                    }
                }
                function ValidarClave (text){
                    var pswd = text;
                    if ( pswd.length < 8 ) {

                        $("#idMalClave").html("<p style='color:red;border: 2px solid red;text-align:center'><strong>La contraseña deben tener minimo 8 digitos.</strong></p>");
                        var elmnt = document.getElementById("field_clave");
                        elmnt.scrollIntoView();
                        setTimeout(function(){ $("#idMalClave").html(""); }, 5000);                       
                        return false;

                    } else if (!( pswd.match(/[A-Z]/)) ) {

                        $("#idMalClave").html("<p style='color:red;border: 2px solid red;text-align:center'><strong>La contraseña debe tener mayusculas.</strong></p>");
                        var elmnt = document.getElementById("field_clave");
                        elmnt.scrollIntoView();
                        setTimeout(function(){ $("#idMalClave").html(""); }, 5000);                              
                        return false;

                    } else if (!( pswd.match(/[a-z]/)) ) {

                        $("#idMalClave").html("<p style='color:red;border: 2px solid red;text-align:center'><strong>La contraseña debe tener minusculas.</strong></p>");
                        var elmnt = document.getElementById("field_clave");
                        elmnt.scrollIntoView();
                        setTimeout(function(){ $("#idMalClave").html(""); }, 5000);                               
                        return false;

                    } else if (!( pswd.match(/\d/) )) {
                        $("#idMalClave").html("<p style='color:red;border: 2px solid red;text-align:center'><strong>La contraseña deben tener numeros.</strong></p>");
                        var elmnt = document.getElementById("field_clave");
                        elmnt.scrollIntoView();
                        setTimeout(function(){ $("#idMalClave").html(""); }, 5000);                                  
                        return false;
                    } else{              

                        return true;
                    }
                };
        });
    </script>
    <script type="text/javascript">
                
        $(document).ready(function(){

            $("#webform").submit(function(evt) {
                //debugger;
                if(!validacionVista){
                    evt.preventDefault();
                    return;
                }
                if($('#webform')[0].checkValidity() || $('#webform')[0].checkValidity){
                    $('#podio_form')[0].scrollIntoView();
                    window.document.getElementById("field_nombre-completo").value = window.document.getElementById("field_titulo").value + " " + window.document.getElementById("field_apellido").value;						
                    var podioFormToken = $('#podioFormToken').attr('value');
                    
                    $.ajax({
                        type: 'POST',
                        data: { podioFormToken: podioFormToken },
                        url: "<?php echo $dir ?>classes/tokenCheck.php",
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

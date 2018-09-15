<?php $dir =  "HTTPS://".$_SERVER["HTTP_HOST"]."/AIESEC_server/" ;?>
<html>
  <head>  
    <title>AIESEC Argentina</title>
    <meta name="description" content="AIESEC formulario" charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" media="all" href="<?php echo $dir;?>css/webform.css" class="section-webforms" />
    <link rel="stylesheet" media="all" href="https://d2cmuesa4snpwn.cloudfront.net/webforms/stylesheets/_ec049774/flatly.css" class="section-flatly" />
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="QBQkVnsXFwdo8Zppn+C/bWZ/EhbY4khxA3yJJzjMh+OMZgkPAUnAZ1XAUyKn5tSP/ncV2xVMWAJIHz5aMhbdCQ==" />

    <script src="<?php echo $dir;?>js/jquery-3.2.1.min.js"></script>
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
  <body> <!-- https://podio.com/webforms/19143195/1288689 -->
    <div class="container">
        <form class="webforms" id="webform" data-locale="es_ES" enctype="multipart/form-data" action="https://podio.com/webforms/19143195/1288689" accept-charset="UTF-8" method="post">
          <input name="utf8" type="hidden" value="&#x2713;" />
          <input type="hidden" name="authenticity_token" value="85Z966RaOksvNhsjxYgeIxBAkaCGJWXoLA635TB4GDE/5FCy3gTtKxIH0mj9jnXBiEiWbUuLdZtnbQCYOqJC2w=="/>
          <h1 class="webforms__heading">
            Talento Global
          </h1>
          <div class="webforms__description"> <!-- Descripcion del form -->
            <p>Completá tus datos debajo para generar un perfil gratuito en nuestra plataforma global y confirmar que sos un perfil aplicable para nuestras pasantías. Adjuntar tu CV al final del formulario.</p>
          </div>
          <div id="webforms__fields-container"> 
            <div class="form-group"> <!--Nombre y apellido-->
                <label class="webforms__label" for="field_titulo">Nombre y Apellido *</label>
                <div class="webforms__field text-field">
                    <input type="text" name="fields[titulo]" id="field_titulo" value="" class="form-control" required="required" />
                </div>
            </div>
            <div class="form-group"> <!-- Clave -->
                <label class="webforms__label" for="field_titulo">Contraseña: Esta será tu clave para ingresar a tu perfil y aplicar a las pasantías *</label>
                <div class="webforms__field-description small">
                    <p>La contraseña debe contener al menos: Una mayúscula, una minúscula, un número y ser mínimo de 8 caracteres.</p>
                </div>
                <div class="webforms__field text-field">
                    <input type="password" name="fields[clave]" id="field_clave" class="form-control" required="required" />
                </div>
                <div id ="idMalClave"></div>
            </div>
            <div class="form-group"> <!-- Edad -->
                <label class="webforms__label" for="field_edad-2">Edad (Por el momento, nuestros intercambios solo son para personas entre 18 y 30 años) *</label>
                <div class="webforms__field category-field">
                  <select name="fields[edad-2]" id="field_edad-2" class="form-control" required="required">
                      <option value="" disabled selected>Por favor, elige una opcion</option>
                      <option value="1">18</option>
                      <option value="2">19</option>
                      <option value="3">20</option>
                      <option value="4">21</option>
                      <option value="5">22</option>
                      <option value="6">23</option>
                      <option value="7">24</option>
                      <option value="8">25</option>
                      <option value="9">26</option>
                      <option value="10">27</option>
                      <option value="11">28</option>
                      <option value="12">29</option>
                      <option value="13">30</option>
                  </select>
                </div>
            </div>
            <div class="form-group"> <!--Email -->
                <label class="webforms__label" for="field_e-mail">E-mail *</label>
                <div class="webforms__field text-field">
                    <input type="text" name="fields[e-mail]" id="field_e-mail" value="" class="form-control" required="required" />
                </div>
            </div>
            <div class="form-group"> <!--Telefono -->
                <label class="webforms__label" for="field_telefono">Teléfono *</label>
                <div class="webforms__field text-field">
                    <input type="text" name="fields[telefono]" id="field_telefono" value="" class="form-control" required="required" />
                </div>
            </div>
            <div class="form-group"> <!--Nivel de Ingles-->
                <label class="webforms__label" for="field_nivel-de-ingles">Nivel de inglés: *</label>
                <div class="webforms__field category-field">
                    <select name="fields[nivel-de-ingles]" id="field_nivel-de-ingles" class="form-control" required="required">
                        <option value="1">Básico</option>
                        <option value="2">Intermédio</option>
                        <option value="3">Avanzado</option>
                    </select>
                </div>
            </div>
            <div class="form-group"><!--Universidades-->
                <label class="webforms__label" for="field_universidad">Universidad *</label>
                <div class="webforms__field app-field">
                    <select name="fields[universidad]" id="field_universidad" class="form-control" required="required">
                                <option value="217439857">Asociación Argentina de Publicidad (AAP)</option>
                                <option value="217439914">CAECE</option>
                                <option value="217439801">Centro de Estudios Organizacionales (CEO)</option>
                                <option value="217439807">Centro de Investigación Cinematográfica (CIC)</option>
                                <option value="217439679">Colegio Universitario de Periodismo CUP | Sede Córdoba</option>
                                <option value="217439783">Colegio Universitario IES - Córdoba</option>
                                <option value="217439906">Da Vinci</option>
                                <option value="217439790">ESBA</option>
                                <option value="217439859">Fundación Barceló</option>
                                <option value="217439901">Fundación Standard Bank</option>
                                <option value="217439733">Fundación Universitas - La Plata</option>
                                <option value="217439746">Fundación Universitas - Mendoza</option>
                                <option value="217439855">IES en Lenguas Vivas “Juan Ramón Fernández”</option>
                                <option value="217439923">IESOC (Instituto de Enseñanza Superior N°28 Olga Cossettini)</option>
                                <option value="217439684">IFES | Sede Neuquén</option>
                                <option value="303387137">Instituto de Educación Física - Mendoza</option>
                                <option value="217439697">Instituto de Formación Docente &quot;José Manuel Estrada&quot; - Corrientes</option>
                                <option value="217439877">Instituto del Profesorado de las Artes tandil</option>
                                <option value="313278201">Instituto Nacional de Formación Docente - San Juan</option>
                                <option value="217439891">Instituto Ribera</option>
                                <option value="217439682">Instituto Séneca</option>
                                <option value="313278257">Instituto Superior Anna Pavlova - San Juan</option>
                                <option value="313278154">Instituto Superior Cervantes - San Juan</option>
                                <option value="313278392">Instituto Superior de Educación Física - San Juan</option>
                                <option value="218565947">Instituto superior de Educacion Física (ISEF) | Santa Fe</option>
                                <option value="217439700">Instituto Superior de Educación Física (ISEF) | Sede Corrientes</option>
                                <option value="217439874">Instituto Superior de Formación Docente y Técnica Nº10 - Tandil</option>
                                <option value="217439841">Instituto Superior del Profesorado &quot;Dr. Joaquín V. González&quot;</option>
                                <option value="419297604">Instituto Superior Josefina Contte - Nordeste</option>
                                <option value="217439881">Instituto Superior Juan XXIII</option>
                                <option value="217439678">Instituto Superior Mariano Moreno | Sede Córdoba</option>
                                <option value="217439884">Instituto Superior Pedro Goyena</option>
                                <option value="313278176">Instituto Superior San Nicolás de Bari - San Juan</option>
                                <option value="217439777">Instituto Superior Santo Domingo</option>
                                <option value="217439829">Instituto Tecnológico de Buenos Aires (ITBA)</option>
                                <option value="217439925">Instituto Terrero</option>
                                <option value="217439780">Instituto Universitario Aeronáutico (IUA) | Córdoba</option>
                                <option value="217439813">Instituto Universitario del Hospital Italiano</option>
                                <option value="217439908">Instituto Universitario Escuela Argentina de Negocios (IUEAN)</option>
                                <option value="217439734">ITU Mendoza</option>
                                <option value="217439774">La Metro, Escuela de Diseño y Comunicación Audiovisual</option>
                                <option value="217439799">La Suisse CEPEC</option>
                                <option value="304250776">Manuel Belgrano - Córdoba</option>
                                <option value="217439810">Nueva Escuela de Diseño y Comunicación</option>
                                <option value="217439902">OTRA</option>
                                <option value="217439892">Ott College</option>
                                <option value="217439695">TEC - Corrientes</option>
                                <option value="217439837">UADE</option>
                                <option value="217439913">UBA Agronomía</option>
                                <option value="217439823">UBA Arquitectura, Diseño y Urbanismo (FADU)</option>
                                <option value="312282903">UBA CBC</option>
                                <option value="217439851">UBA Derecho</option>
                                <option value="217439916">UBA Económicas (FCE)</option>
                                <option value="217439854">UBA Exactas y Naturales</option>
                                <option value="217439821">UBA Farmacia y Bioquímica</option>
                                <option value="217439825">UBA Filosofía y Letras</option>
                                <option value="217439910">UBA Ingeniería</option>
                                <option value="217439912">UBA Medicina</option>
                                <option value="217439849">UBA Odontología</option>
                                <option value="217439909">UBA Psicología</option>
                                <option value="217439793">UBA Sociales (FSOC)</option>
                                <option value="217439847">UBA Veterinaria</option>
                                <option value="217439839">UCEL</option>
                                <option value="217439835">UCEMA</option>
                                <option value="217439865">UCES - Buenos Aires</option>
                                <option value="217439770">UCES - Rosario</option>
                                <option value="217439693">UFASTA - Mar del Plata</option>
                                <option value="217439828">Universidad Abierta Interamericana (UAI) - Buenos Aires</option>
                                <option value="217447412">Universidad Abierta Interamericana (UAI) - Rosario</option>
                                <option value="217439924">Universidad Alas Peruanas</option>
                                <option value="217439694">Universidad Atlántida - Mar del Plata</option>
                                <option value="217439863">Universidad Austral - Buenos Aires</option>
                                <option value="217439671">Universidad Austral - Rosario</option>
                                <option value="217439779">Universidad Blas Pascal</option>
                                <option value="217439869">Universidad Católica Argentina (UCA) - Buenos Aires</option>
                                <option value="217439749">Universidad Católica Argentina (UCA) - Mendoza</option>
                                <option value="217439784">Universidad Católica de Córdoba</option>
                                <option value="313278135">Universidad Católica de Cuyo. San Juan</option>
                                <option value="217439889">Universidad Católica de La Plata</option>
                                <option value="217439667">Universidad Católica de Salta (UCASAL)</option>
                                <option value="218718847">Universidad Católica de Santa Fe (UCSF)</option>
                                <option value="562137553">Universidad Católica de Santiago del Estero (UCSE)</option>
                                <option value="562134844">Universidad Catolica Santiago del Estero DASS</option>
                                <option value="217439752">Universidad Champagnat</option>
                                <option value="302457027">Universidad de Belgrano (UB)</option>
                                <option value="217439744">Universidad de Congreso</option>
                                <option value="217439897">Universidad de Flores (UFLO) - Buenos Aires</option>
                                <option value="217439681">Universidad de Flores (UFLO) - Comahue</option>
                                <option value="217439826">Universidad de la Marina Mercante (UdeMM)</option>
                                <option value="217439757">Universidad de Mendoza</option>
                                <option value="217439896">Universidad de Morón</option>
                                <option value="217439831">Universidad de Palermo (UP)</option>
                                <option value="217439867">Universidad de San Andrés (UDESA)</option>
                                <option value="217439669">Universidad de San Isidro (USI)</option>
                                <option value="217439690">Universidad de San Pablo Tucuman</option>
                                <option value="217439759">Universidad del Aconcagua</option>
                                <option value="217439887">Universidad del Este (UDE)</option>
                                <option value="217439905">Universidad del Museo Social Argentino (UMSA)</option>
                                <option value="217439687">Universidad del Norte Santo Tomás de Aquino | Sede Tucumán</option>
                                <option value="217439871">Universidad del Salvador (USAL) - Buenos Aires</option>
                                <option value="217439860">Universidad Favaloro</option>
                                <option value="217439753">Universidad Juan Agustín Maza</option>
                                <option value="312282886">Universidad Kennedy</option>
                                <option value="217439900">Universidad Maimónides</option>
                                <option value="217439803">Universidad Nacional de Avellaneda (UNDAV)</option>
                                <option value="217439788">Universidad Nacional de Córdoba</option>
                                <option value="304251000">Universidad Nacional de Córdoba FACULTAD DE ARQUITECTURA</option>
                                <option value="304251063">Universidad Nacional de Córdoba FACULTAD DE ARTES</option>
                                <option value="304251137">Universidad Nacional de Córdoba FACULTAD DE CS AGROPECUARIAS</option>
                                <option value="304251221">Universidad Nacional de Córdoba FACULTAD DE CS ECONÓMICAS</option>
                                <option value="304250905">Universidad Nacional de Córdoba FACULTAD DE CS QUIMICAS</option>
                                <option value="304250863">Universidad Nacional de Córdoba FACULTAD DE DERECHO</option>
                                <option value="304251293">Universidad Nacional de Córdoba FACULTAD DE LENGUAS</option>
                                <option value="304251350">Universidad Nacional de Córdoba FACULTAD DE MAT, ASTRONOMIA Y FISICA</option>
                                <option value="304250952">Universidad Nacional de Córdoba FACULTAD DE MEDICINA</option>
                                <option value="304251408">Universidad Nacional de Córdoba FACULTAD DE ODONTOLOGIA</option>
                                <option value="304251477">Universidad Nacional de Córdoba FACULTAD DE PSICOLOGIA</option>
                                <option value="304251538">Universidad Nacional de Córdoba FILOSOFIA Y HUMANIDADES</option>
                                <option value="217439764">Universidad Nacional de Cuyo</option>
                                <option value="217439762">Universidad Nacional de Cuyo - Sede San Rafael</option>
                                <option value="685333108">Universidad Nacional de Entre Ríos</option>
                                <option value="627572557">Universidad Nacional de Jujuy (UNJu)</option>
                                <option value="681478034">Universidad Nacional de la Cuenca del Plata sede Misiones</option>
                                <option value="217439894">Universidad Nacional de La Matanza (UNLaM)</option>
                                <option value="465560930">Universidad Nacional de la Patagonia San Juan Bosco</option>
                                <option value="217439888">Universidad Nacional de La Plata</option>
                                <option value="217439816">Universidad Nacional de Lanús (UNLa)</option>
                                <option value="217439814">Universidad Nacional de las Artes (UNA)</option>
                                <option value="217439818">Universidad Nacional de Lomas de Zamora (UNLZ)</option>
                                <option value="217439846">Universidad Nacional de Luján</option>
                                <option value="217439872">Universidad Nacional de Mar del Plata</option>
                                <option value="562137018">Universidad Nacional de Misiones</option>
                                <option value="217439794">Universidad Nacional de Quilmes (UNQUI)</option>
                                <option value="217439702">Universidad Nacional de Rosario</option>
                                <option value="217439724">Universidad Nacional de Rosario - Abogacía</option>
                                <option value="217439712">Universidad Nacional de Rosario - Agronomía</option>
                                <option value="217439773">Universidad Nacional de Rosario - Arquitectura</option>
                                <option value="217439711">Universidad Nacional de Rosario - Bioquímica y Farmacia</option>
                                <option value="217439729">Universidad Nacional de Rosario - Ciencia Política y Relaciones Internacionales</option>
                                <option value="217439717">Universidad Nacional de Rosario - Ciencias Económicas y Estadísticas</option>
                                <option value="217439707">Universidad Nacional de Rosario - Fonoaudiología</option>
                                <option value="217439723">Universidad Nacional de Rosario - Humanidades</option>
                                <option value="217439715">Universidad Nacional de Rosario - Ingeniería y Agrimensura</option>
                                <option value="217439708">Universidad Nacional de Rosario - Medicina y Enfermería</option>
                                <option value="217439727">Universidad Nacional de Rosario - Música</option>
                                <option value="217439706">Universidad Nacional de Rosario - Odontología</option>
                                <option value="217439718">Universidad Nacional de Rosario - Psicología</option>
                                <option value="217439710">Universidad Nacional de Rosario - Veterinaria</option>
                                <option value="217439917">Universidad Nacional de Salta</option>
                                <option value="217439739">Universidad Nacional de San Juan</option>
                                <option value="313278032">Universidad Nacional de San Juan - Facultad de Arquitectura, Urbanismo y Diseño</option>
                                <option value="313278003">Universidad Nacional de San Juan - Facultad de Ciencias Sociales</option>
                                <option value="313278097">Universidad Nacional de San Juan - Facultad de Exactas, Físicas y Naturales</option>
                                <option value="313278069">Universidad Nacional de San Juan - Facultad de Filosofía, Humanidades y Arte</option>
                                <option value="313277976">Universidad Nacional de San Juan - Facultad de Ingeniería</option>
                                <option value="685325083">Universidad Nacional de San Luis</option>
                                <option value="562137363">Universidad Nacional de Santiago del Estero (UNSE)</option>
                                <option value="615379451">UNIVERSIDAD NACIONAL DE SANTIAGO DEL ESTERO</option>
                                <option value="217439844">Universidad Nacional de Tres de Febrero (UNTREF)</option>
                                <option value="217439692">Universidad Nacional de Tucumán</option>
                                <option value="217439652">Universidad Nacional de Tucumán (UNT) | Tucumán</option>
                                <option value="217439922">Universidad Nacional del Comahue</option>
                                <option value="217439767">Universidad Nacional del Litoral (UNL) - Rosario</option>
                                <option value="217439651">Universidad Nacional del Litoral (UNL) - Santa Fe</option>
                                <option value="217439705">Universidad Nacional del Nordeste</option>
                                <option value="217439885">Universidad Nacional del Sur</option>
                                <option value="217439741">Universidad Nacional Provincia de San Luis</option>
                                <option value="217439796">Universidad Siglo 21 - Buenos Aires</option>
                                <option value="217439786">Universidad Siglo 21 - Córdoba</option>
                                <option value="217439696">Universidad Siglo 21 - Corrientes</option>
                                <option value="217439919">Universidad Siglo 21 - Neuquén</option>
                                <option value="217439699">Universidad Siglo 21 - Salta</option>
                                <option value="217439685">Universidad Siglo 21 - Tucumán</option>
                                <option value="313278524">Universidad Siglo 21 | Sede San Juan</option>
                                <option value="217439883">Universidad Tecnológica Nacional (UTN) - Bahía Blanca</option>
                                <option value="217439805">Universidad Tecnológica Nacional (UTN) - Buenos Aires</option>
                                <option value="304251626">Universidad Tecnológica Nacional (UTN) - Córdoba</option>
                                <option value="217439738">Universidad Tecnológica Nacional (UTN) - Mendoza</option>
                                <option value="217439686">Universidad Tecnológica Nacional (UTN) - Neuquén</option>
                                <option value="217439701">Universidad Tecnológica Nacional (UTN) - Resistencia</option>
                                <option value="217439656">Universidad Tecnológica Nacional (UTN) - Santa Fe</option>
                                <option value="217439691">Universidad Tecnológica Nacional (UTN) - Tucumán</option>
                                <option value="217439834">Universidad Torcuato Di Tella (UTDT)</option>
                                <option value="217439683">Univesidad Cátolica de Salta | Sede Neuquén</option>
                                <option value="217439895">UNSAM (Universidad Nacional de San Martín)</option>
                                <option value="217439673">UPC | Escuela Superior de Artes Aplicadas Lino Enea Spillimbergo</option>
                                <option value="217439677">UPC | Escuela Superior de Turismo y Hoteleria Marcelo Montes Pacheco</option>
                                <option value="217439674">UPC | Instituto de Educación Superior Dr. Domingo Cabred</option>
                                <option value="217439676">UPC | IPEF</option>
                                <option value="217439672">UPC | Universidad Provincial de Córdoba</option>
                                <option value="217439842">Vatel | Sede Buenos Aires</option>
                                <option value="217439670">Vatel | Sede Salta</option>
                    </select>
                 </div>
            </div>
            <div class="form-group"> <!-- Campor de Estudio -->
                <label class="webforms__label" for="field_campo-de-estudio-2">Campo de Estudio *</label>
                <div class="webforms__field category-field">
                      <select name="fields[campo-de-estudio-2]" id="field_campo-de-estudio-2" class="form-control" required="required">
                            <option value="" disabled selected>Por favor, elige una opcion</option>
                            <option value="1">Administración de Empresas (o carreras afines) </option>
                            <option value="36">Diseño Gráfico</option>
                            <option value="43">Ingeniería Industrial</option>
                            <option value="38">Marketing</option>
                            <option value="32">Recursos Humanos</option>
                            <option value="33">Traductorado/ Educación</option>
                            <option value="40">Otros</option>
                      </select>
                </div>
            </div>
            <div class="form-group"> <!-- Otros -->
                <label class="webforms__label" for="field_otros">Otros:</label>
                <div class="webforms__field text-field">
                    <textarea name="fields[otros]" id="field_otros" rows="7" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group"> <!--Como te enteraste de esta oportunidad -->
                <label class="webforms__label" for="field_como-te-enteraste-de-esta-oportunidad">¿Cómo te enteraste de esta oportunidad?  *</label>
                <div class="webforms__field category-field">
                    <select name="fields[como-te-enteraste-de-esta-oportunidad]" id="field_como-te-enteraste-de-esta-oportunidad" class="form-control" required="required">
                          <option value="" disabled selected>Por favor, elige una opcion</option>
                          <option value="7">Conozco una persona que trabaja/ó en AIESEC</option>
                          <option value="6">Conozco una persona que viajó con AIESEC</option>
                          <option value="2">E-mail o intervención en la Universidad</option>
                          <option value="9">Portal de Empleo de la Universidad</option>
                          <option value="26">Redes sociales</option>
                          <option value="28">Google</option>
                          <option value="29">Publicidad Online</option>
                          <option value="30">Soy parte de AArEII (o referido de ellos)</option>
                          <option value="31">Soy parte de AArEIQ (o referido de ellos)</option>
                          <option value="32">Soy parte de Rotaract (o referido de ellos)</option>
                          <option value="33">Soy parte de JCI (o referido de ellos)</option>
                          <option value="34">Soy Scout (o referido de ellos)</option>
                    </select>
                </div>
            </div>
            <div class="form-group"> <!-- Que practica se alinea a tu perfil -->
                <label class="webforms__label" for="field_que-tipo-de-practica-se-alinea-a-tu-perfil-si-la-respue">¿Qué tipo de práctica se alinea a tu perfil? (Si la respuesta es &quot;ninguna&quot;, por el momento no contamos con oportunidades para tu perfil) *</label>
                <div class="webforms__field category-field">
                      <select name="fields[que-tipo-de-practica-se-alinea-a-tu-perfil-si-la-respue]" id="field_que-tipo-de-practica-se-alinea-a-tu-perfil-si-la-respue" class="form-control" required="required">
                          <option value="1">Business (Solo perfiles de Cs. Económicas, Marketing o Diseño Gráfico)</option>
                          <option value="2">Teaching (No es necesario ser profesor o traductor)</option>
                      </select>
                </div>
            </div>
            <div class="form-group"> <!-- Duracion preferida del intercambio -->
                <label class="webforms__label" for="field_duracion-preferida-del-intercambio">Duración preferida del intercambio *</label>
                <div class="webforms__field category-field">
                    <select name="fields[duracion-preferida-del-intercambio]" id="field_duracion-preferida-del-intercambio" class="form-control" required="required">
                        <option value="" disabled selected>Por favor, elige una opcion</option>
                        <option value="1">6 meses</option>
                        <option value="2">1 año</option>
                    </select>
                </div>
            </div>
            <div class="form-group"> <!-- Destino de preferencia -->
                <label class="webforms__label" for="field_destino-de-preferncia">Destino de preferencia *</label>
                <div class="webforms__field category-field">
                    <select name="fields[destino-de-preferncia]" id="field_destino-de-preferncia" class="form-control" required="required">
                        <option value="1">Brasil</option>
                        <option value="3">Mexico</option>
                        <option value="6">India</option>
                        <option value="7">Egipto</option>
                    </select>
                </div>
            </div>
            <div class="form-group"> <!-- Porque te gustaria trabajar en el extranjero --> 
                <label class="webforms__label" for="field_por-que-te-gustaria-trabajar-en-el-extranjero">¿Por que te gustaría trabajar en el extranjero?</label>
                <div class="webforms__field text-field">
                    <textarea name="fields[por-que-te-gustaria-trabajar-en-el-extranjero]" id="field_por-que-te-gustaria-trabajar-en-el-extranjero" rows="7" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group"> <!-- Que buscas desarrollar con el intercambio -->
                <label class="webforms__label" for="field_que-buscas-desarrollar-con-el-intercambio">¿Qué buscas desarrollar con el intercambio?</label>
                <div class="webforms__field text-field">
                    <textarea name="fields[que-buscas-desarrollar-con-el-intercambio]" id="field_que-buscas-desarrollar-con-el-intercambio" rows="7" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group"> <!-- Adjuntaste tu Cv -->
                <label class="webforms__label" for="field_cv">Adjuntáste tu CV (Preferible en inglés, formato de enhancv.com ):</label>
                <div class="webforms__field category-field">
                      <select name="fields[cv]" id="field_cv" class="form-control">
                            <option value=""></option>
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
          <!--<div class="g-recaptcha" data-sitekey="6LcKtT0UAAAAACAPnvzDj3t6JbHjLdQCZD7KhAWP"></div>-->
          <div class="webforms__submit-box form-group">
            <button name="button" type="submit" class="btn btn-primary" id="btnEnviar" >Enviar </button>
          </div>
        </form>   
      
    </div>
    <div id="webforms__footer"></div>         
    <script>window['webformParams'] = {"form_id":"1288689"}</script>
    <script src="<?php echo $dir;?>js/webforms.js" async="async"></script>
    <script type="text/javascript">

        $(document).ready(function(){      
            $("#webform").submit(function() {
                  var x = $("#mongo").val();
                  if (x != "") {
                    return false;
                  }
                });            ;
            $('#btnEnviar').click(function(){                
                if(ValidarClave($("#field_clave").val())){
                  var url = "<?php echo $dir;?>insertExpa.php";                  
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
        
    </script>
  </body>
</html>

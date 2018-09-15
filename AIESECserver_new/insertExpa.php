<?php		
 	require_once 'comite.php';


 	$idArgentina=1535;
	$nameArgentina="ARGENTINA";


	//Checkeo de user
	
	$ValorCheck = array(
		'email' => htmlspecialchars($_POST['email'])
	);
	$ValoresCadena = "";
	foreach($ValorCheck as $key=>$value) { $ValoresCadena .= $key.'='.urlencode($value).'&'; }
	rtrim($ValoresCadena, '&');
	$innerHTML = "";
	$urlCheck = "https://auth.aiesec.org/registrations/check_user";	
	$ch = curl_init();	
	curl_setopt($ch, CURLOPT_URL, $urlCheck);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $ValoresCadena);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	// give cURL the SSL Cert for Salesforce
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);		
	$result = curl_exec($ch);

	$err = curl_error($ch);
	$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Devuelve 422 si el usuarios ya existe
	curl_close($ch);

	//print_r("Error: ". $err);
	//print_r("Estado: ". $httpcode);	
	
	//print_r("Q paso: " . $httpcode);	
	

	// Solo registra si el estado de la respuesta es OK	
	

	if ( $httpcode == 200){
		
		$curl = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => 'https://auth.aiesec.org/users/sign_in',			    
		    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
		    ));		
		$result = curl_exec($curl);		
		curl_close($curl);		
		preg_match('/<meta content="(.*)" name="csrf-token" \/>/', $result, $matches);
		$gis_token = $matches[1];
		$Comite=new Comite();	
		$valUni = $Comite->getValorExpa((int)$_POST['valUniversidad']);	
		$fields = array(
					    'authenticity_token' => htmlspecialchars($gis_token),
					    'user[email]' => htmlspecialchars($_POST['email']), 
					    'user[first_name]' => htmlspecialchars($_POST['first_name']),
					    'user[last_name]' => htmlspecialchars($_POST['last_name']),		      
					    'user[password]' => htmlspecialchars($_POST['clave']),
					    'user[phone]' => htmlspecialchars($_POST['phone']),
					    'user[country]' => $nameArgentina,   
					    'user[mc]' => $idArgentina, 
	    				'user[lc_input]' => htmlspecialchars($valUni),
	    				'user[lc]' => htmlspecialchars($valUni),			   
	    				'user[referral_type]' => htmlspecialchars($_POST['referencia']),
					    'commit' => 'REGISTER'
					    );
		$fields_string = "";
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.urlencode($value).'&'; }

		rtrim($fields_string, '&');
		$innerHTML = "";
		$url = "https://auth.aiesec.org/users";

		$ch2 = curl_init();
		curl_setopt($ch2, CURLOPT_URL, $url);
		curl_setopt($ch2, CURLOPT_POST, count($fields));
		curl_setopt($ch2, CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, TRUE);

		// give cURL the SSL Cert for Salesforce
		curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false); 			
		$result = curl_exec($ch2);				
		curl_close($ch2);
			
		};

	echo $httpcode;
		
    /*
    $recaptcha = $_POST["g-recaptcha-response"];
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LcKtT0UAAAAADRd0h_ho1xLpK2xGeoIubR2bOcH',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	
	if ($captcha_success->success) {
		// No eres un robot, continuamos con el envío del email
		echo "Entro ok.";
		return ;
        
	} else {
		// Eres un robot!
		 print_r(json_encode(array('status' => 'error', 'message' => 'No valid Captcha')));
	}*/
 	
	
?>
				


<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Token {
	public static function generate(){
			return $_SESSION['podioFormToken'] = md5(uniqid(rand(), true));
	}	
	
	public static function check($token){
		if(isset($_SESSION['podioFormToken']) && $token === $_SESSION['podioFormToken']){
			unset($_SESSION['podioFormToken']);
			return true;
		}
		return false;
	}
}
?>
<?php
include_once('./token.php');

if(Token::check($_POST['podioFormToken'])){
	echo 1;
}
else{
	echo 0;
}
?>
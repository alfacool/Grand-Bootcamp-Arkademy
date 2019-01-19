<?php

function is_username_valid($a){
	$uppercase = preg_match('@[A-Z]@', $a);
	$underscore = preg_match('@[_]@' , $a);
	if ($uppercase || !$underscore || strlen($a)!=8){
		echo "username tidak valid";
	}
	else {
		return true;
	}
		
}

function is_password_valid($b){
	$uppercase = preg_match('@[A-Z]@', $b);
	$lowercase = preg_match('@[a-z]@', $b);
	$number    = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $b);
	if (!$uppercase || !$lowercase || !$number ||strlen($b)!=8){
		echo "password tidak valid";
	}
	else {
		return true;
	}
		
}

echo is_username_valid("_jakarta");
echo is_password_valid("wsxE99##");


?>

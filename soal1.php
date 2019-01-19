<?php 
	$name		='alfa';
	$address	= 'palembang';
	$hobbies 	= ['membaca', 'game', 'musik'];
	$array = json_encode($hobbies);
	$is_married = false;
	$school = new StdClass();
	$school->highSchool="sma n 22 palembang";
	$school->university="universitas sriwijaya";
	$obj = json_encode($school);
	
	$skills = array();
	$skills [0] ['skill'] = 'algoritma dan pemrograman';
	$skills [1] ['skill'] = 'java';
	$skills [2] ['skill'] = 'python';
	$arrobj = json_encode($skills);
	
	$jsonobj = array(	'name'  		=>	"$name",
						'address'  		=>	"$address",
						'hobbies'		=>	"$array",
						'school'		=>	"$obj",
						'is_married'	=>	"$is_married",
						'skills'		=>	"$arrobj");
						
	print_r (json_encode($jsonobj,true));
 

	

?>
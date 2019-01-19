<?php

function print_abc($kolom,$baris){
	$alphas = range('A', 'Z');
	$ialphas =0;
	for($i = 0;$i<$baris;$i++){
		for($j = 0;$j<$kolom;$j++){
			echo $alphas[$ialphas];
			$ialphas++;
		}
	echo '<br/>';
	}
		
}

print_abc(3,4);


?>
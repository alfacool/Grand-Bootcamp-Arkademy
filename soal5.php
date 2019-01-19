<?php

function count_handshake($a){
	$total=0;
	for($i=0;$i<$a;$i++){
		$total+=$i;
	}
	echo $total;
}
count_handshake(6);

?>
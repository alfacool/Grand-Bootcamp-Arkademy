<?php

function draw_kotak($a){
	for($i=1; $i<=$a; $i++){
		if ($i%2!=0){
			for($j=1; $j<=$a; $j++){
				if ($j%2==0){
					echo "-" ;
				}
				else{
					echo"*";
				}	
			}
			echo '<br/>';
		}
        
		else{
			for($k=1; $k<=$a; $k++){
				if ($k%2!=0){
					echo "-" ;
				}
				else{
					echo"*";
				}	
			}
			echo '<br/>';
		}		
    }
}

draw_kotak(5);


?>
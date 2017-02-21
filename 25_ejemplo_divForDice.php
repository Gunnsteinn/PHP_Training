<?php
/*	calcular y mostrar la suma de los diez primeros números entre 1 y 1000 que sean divisibles por uno dado. */
	$j = 0;
	for ($i=0; $i < 1000; $i++) { 
		$dice = rand(1, 10);

		if ($i%$dice == 0 && $j < 10) {
			$j++;
			echo "inPar=>".$i."<br/>";
		}
	}
	
?>

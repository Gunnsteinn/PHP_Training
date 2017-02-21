<?php
/*	Supongamos un algoritmo que lea las coordenadas de tres puntos y los mueva tres puntos en la coordenada x y escriba el resultado en algún dispositivo de salida. */

	$array = array(	$dot1 = array('x'=>1,'y'=>4),  
					$dot2 = array('x'=>2,'y'=>5),  
					$dot3 = array('x'=>3,'y'=>6),
					); 
	// $str = " => $int1 <= <br/> => $int2 <= <br/> => $int3 <= <br/>";
	var_dump ($array);
	foreach ($array as &$valor) {
	    $valor['x'] = $valor['x'] + 3;
	}
	echo  "<br/>";
	var_dump ($array);
?>
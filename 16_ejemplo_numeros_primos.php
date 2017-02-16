<?php
	for ($i = 2; $i <= 100; $i++) {
		$cont=0;
		for ($j = 2; $j <= $i; $j++) {
			if(($i%$j) == 0 ){
	            $bandera = (++$cont>1) ? false : true;
	        }
		}

		if ($bandera) {
			echo  "=>".$i."<br/>";
		}
	}
?> 
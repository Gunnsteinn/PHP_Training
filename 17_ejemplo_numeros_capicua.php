<?php
	for ($i = 100; $i <= 200; $i++) {
		$matriz1 = str_split($i); 

		$length = strlen($i);
		$x = 10;
		$z = 1;

		for ($j=0; $j < $length; $j++) {
			$dx[$j] = $i % $x / $z;
			$x .= 0;
			$z .= 0;
		}

		if(intval($dx[0]) == intval($dx[2])){
			echo  "=>".$i."<br/>";
		}
	}
?> 
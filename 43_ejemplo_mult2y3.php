<!-- 13.-Imprimir y contar los numeros que son multiplos de 2 y de 3 que hay entre 1 y 100. -->

<!DOCTYPE HTML>  
<html> 
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
  <body> 
        <div class="row" style="margin-top: 15%">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-success">
                <!-- Default panel contents -->
                    <div class="panel-heading text-center">Imprimir y contar los numeros que son multiplos de 2 y de 3 que hay entre 1 y 100.</div>
					<div class="panel-body"></div>
                    <div class="panel-heading text-center">
						<?php
							$mult2 = 2;
							$cantMult2=0;
							$mult3 = 3;
							$cantMult3=0;
							echo "Multiplos de 2-----Multiplos de 3"."<br/>";
							for ($i=1; $i <= 100; $i++) { 
								$mult2 = 2 * $i;
								$mult3 = 3 * $i;
								if ($mult2 < 100) {
									echo "2 x".$i.": $mult2"."-----"; 
									$cantMult2++;
								}else{echo "-----";}

								if ($mult3 < 100) {
									echo "3 x".$i.": $mult3"."<br/>"; 
									$cantMult3++;
								}else{echo "------------"."<br/>";}

								if ($mult2 >= 100 && $mult3 >= 100) {
									break;
								}
							}
							echo "<br/>"."La cantidad de multiplos de 2 son= ".$cantMult2;
							echo "<br/>"."La cantidad de multiplos de 3 son= ".$cantMult3;
						?>  
                    </div>
                </div>  
            </div>      
        </div>
    </body>
</html>
 <!-- 12.-Hacer un pseudocodigo que imprima los numeros del 1 al 100. Que calcule la suma de todos los numeros pares por un lado, y por otro, la de todos los impares. -->

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
                    <div class="panel-heading text-center">Números del 1 al 100 que calcula la suma de todos los numeros pares por un lado, y por otro, la de todos los impares.</div>
					<div class="panel-body"></div>
                    <div class="panel-heading text-center">
						<?php
							$par=0;
							$impar=0;
								for ($i=1; $i <= 100; $i++) { 
									if ($i%2 == 0) {
										$par++;
									} else {
										$impar++;
									}
								}
								echo "La cantidad de numeros pares son= ".$par;
								echo "<br/>"."La cantidad de numeros impares son= ".$impar;
						?> 
                    </div>
                </div>  
            </div>      
        </div>
    </body>
</html>
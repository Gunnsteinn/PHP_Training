<!-- 1.-Hacer un pseudocodigo que imprima los numeros del 1 al 100. -->

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
				  	<div class="panel-heading text-center">1 to 100 with foreach - To increase</div>
				  	<div class="panel-body">
						<?php
							// creo array
							$array = array();
							for ($i=1; $i < 101; $i++) { 
								array_push($array, $i);
							}
							// recorro e imprimo el array
							echo "Valores: ";
							foreach ($array as $valor) {
								if ($valor != 100) {
									echo $valor." - ";
								}else{
									echo $valor;	
								}
							}
						?>
				  	</div>
				</div>	
			</div>		
		</div>
	</body>
</html>



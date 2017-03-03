<!-- 2.-Hacer un pseudocodigo que imprima los numeros del 100 al 0, en ordendecreciente. -->

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
				  	<div class="panel-heading text-center">100 to 0 with foreach - To decrease</div>
				  	<div class="panel-body">
						<?php
							// creo array
							$array = array();
							for ($i=100; $i >= 0; $i--) { 
								array_push($array, $i);
							}
							// recorro e imprimo el array
							echo "Valores: ";
							foreach ($array as $valor) {
								if ($valor != 0) {
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


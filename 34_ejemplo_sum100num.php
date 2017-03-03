<!-- 4.-Hacer un programa que imprima la suma de los 100 primeros numeros.  -->

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
				  	<div class="panel-heading text-center">Sum of the first 100 numbers</div>
				  	<div class="panel-body">
						<?php
							echo "Valores: ";
							$valor =0;
							for ($i=1; $i < 101; $i++) {
								$valor += $i;
								echo $i;
								if ($i != 100) {
									echo " + ";
								}else{
									echo " = ";	
								}
							}
							echo $valor;
						?>
				  	</div>
				</div>	
			</div>		
		</div>
	</body>
</html>



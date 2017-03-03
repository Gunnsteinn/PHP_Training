<!-- 6.-Hacer un pseudocodigo que imprima todos los numeros naturales que hay desde la unidad hasta un numero que introducimos por teclado. -->

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
					<?php
						$numEnd = ($_POST) ? $_POST["numEnd"] : 0;
					?>
				  	<div class="panel-heading text-center">Números naturales</div>
				  	<div class="panel-body">
					  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >  
						  	<div class="input-group">
							    <span class="input-group-btn">
							        <button class="btn btn-default" type="submit" name="submit" value="Submit">Go!</button>
							    </span>
							    <input type="text" class="form-control" name="numEnd" placeholder="numEnd:" value="<?php echo $numEnd;?>">
							</div><!-- /input-group -->
						  	<!-- <button type="submit" name="submit" value="Submit">Calculate</button> -->
						</form>
						<?php
							// creo array
							$array = array();
							for ($i=1; $i <= $numEnd; $i++) { 
								array_push($array, $i);
							}
							// recorro e imprimo el array
							echo "</br>"."   Valores: ";
							foreach ($array as $valor) {
								if ($valor != $numEnd) {
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
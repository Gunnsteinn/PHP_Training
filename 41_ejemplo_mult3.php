<!-- 11.-Imprimir y contar los multiplos de 3 desde la unidad hasta un numero que introducimos por teclado. -->

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
						// define variables and set to empty values
						$cantMult = ($_POST) ? $_POST["cantMult"] : 0;// numero
					?>
                    <div class="panel-heading text-center">Imprimir y contar los Multiplos de 3 desde la unidad hasta un numero que introducimos por teclado.</div>
                    <div class="panel-body">
                        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" value="Submit">Go!</button>
                                </span>
                                <input type="text" class="form-control" name="cantMult"  placeholder="Ingrese la cantidad de multiplos">
                            </div><!-- /input-group -->
                        </form>
                    </div>
                    <div class="panel-heading text-center">
						<?php
							$numero = 3;
							echo "La multiplos de 3 son = ";
							if ($cantMult > 0) {
								for ($i=1; $i <= $cantMult; $i++) { 
									$numero *= $i;
									if ($i < $cantMult) {
										echo "$numero"." , "; 
									} else {
										echo "$numero"."<br/>";
									}
								}
								echo "<br/>"."La cantidad de multiplos de 3 son= ".($i-1);
							}
						?> 
                    </div>
                </div>  
            </div>      
        </div>
    </body>
</html>
								

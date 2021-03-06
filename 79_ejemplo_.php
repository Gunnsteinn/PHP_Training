 <!-- 49.-Hacer un pseudocodigo que nos permita dar altas en el fichero DATOS.DAT deorganizaci¢n directa, controlando las altas duplicadas. Los campos son:DNI, NOMBRE, APELLIDOS Y PUNTERO para ambos archivos.Algoritmo( dn ) =- Blanco: grabamos el registro en esa posici¢n y ponemos el puntero acero.- Cero: comprobamos cu l es el valor del campo puntero. Si es cero,grabamos el registro en esa posici¢n (no hay sinonimos) y si es distintode cero, comparamos el valor con el campo DNI, si son iguales, altaduplicada y dejamos de leer, y si no son iguales, introducimos el restode la informacion.- Distinto de cero: hay un registro grabado en esa posicion. Si es igualal dato introducido, alta duplicada, y si no son iguales, comprobamos elvalor del puntero, si es cero grabamos el registro, y si no es cero, sies igual al campo DNI, alta duplicada y sino se graba la informacion enel archivo SINONIMOS.DAT. -->

<!DOCTYPE HTML>  
<html>
	<head>
		<style>
			body{
			  padding:0;
			  margin:0;
			}
			.vid-container{
			  position:relative;
			  height:100vh;
			  overflow:hidden;
			}
			.bgvid{
			  position:absolute;
			  left:0;
			  top:0;
			  width:100vw;
			}
			.inner-container{
			  width:400px;
			  height:500px;
			  position:absolute;
			  top:calc(50vh - 200px);
			  left:calc(50vw - 200px);
			  overflow:hidden;
			}
			.bgvid.inner{
			  top:calc(-50vh + 200px);
			  left:calc(-50vw + 200px);
			  -webkit-filter:blur(10px);
			  -ms-filter: blur(10px);
			  -o-filter: blur(10px);
			  filter:blur(10px);
			}
			.box{
			  position:absolute;
			  height:100%;
			  width:100%;
			  font-family:Helvetica;
			  color:#fff;
			  background:rgba(0,0,0,0.13);
			  padding:30px 0px;
			}
			.box h1{
			  text-align:center;
			  margin:30px 0;
			  font-size:30px;
			}
			.box input{
			  display:block;
			  width:300px;
			  margin:20px auto;
			  padding:15px;
			  background:rgba(0,0,0,0.2);
			  color:#fff;
			  border:0;
			  font-size: xx-large;
			}
			.box input:focus,.box input:active,.box button:focus,.box button:active{
			  outline:none;
			}
			.box button{
			  background:#2ecc71;
			  border:0;
			  color:#fff;
			  padding:10px;
			  font-size:20px;
			  width:330px;
			  margin:20px auto;
			  display:block;
			  cursor:pointer;
			}
			.box button:active{
			  background:#27ae60;
			}
			.box p{
			  font-size:25px;
			  text-align:center;
			}
			.box p span{
			  cursor:pointer;
			  color:#666;
			}
		</style>
	</head>
	<body>  
		<div class="vid-container">
		  <div class="inner-container">
		    <div class="box">
		    	<h1>PHP Form factorial</h1>
		     	 <p>
					<?php
						$tabla5 = 1;
						$i = 1;
						do {
						 	$tabla5 = $i * 5;
							echo "5 x".$i.": ".$tabla5."</br>";
							$i++;
						 } while ($tabla5 < 50);
					?>
				</p>
		    </div>
		  </div>
		</div>
	</body>
</html>



 <!-- 40.-Crear una tabla de 3 paginas, 4 filas y 5 columnas donde el primerelemento valga 1, el segundo 2, el tercero 3 y as¡ sucesivamente, eimprimirla. -->
// 41.-Se dispone de una tabla de 5 p ginas, 10 filas y 20 columnas, que serefieren al centro, al curso y al numero de alumnos de un colegiorespectivamente. Imprimir la nota media por curso y la nota media maxima ysu centro de pertenencia.
// 42.-Una empresa guarda en una tabla de 3x12x4 las ventas realizadas por sustres representantes a lo largo de doce meses de sus cuatro productos,VENTAS[ representante, mes, producto ]. Queremos proyectar el arraytridimensional sobre uno de dos dimensiones que represente el total deventas, TOTAL[ mes, producto ], para lo cual sumamos las ventas de cadaproducto de cada mes de todos los representantes. Imprimir ambos arrays.
// 43.-Hacer un programa que nos permita dar altas en el fichero secuencialDATOS.DAT, cuyos campos son: DNI, NOMBRE, APELLIDOS, DIRECCION yPROVINCIA.
// 44.-Hacer un programa que nos permita dar bajas en el fichero DATOS.DAT.
// 45.-Dado el fichero secuencial DATOS.DAT, realizar un programa que nos permitarealizar modificaciones cuantas veces deseemos.
// 46.-Tenemos el fichero secuencial DATOS.DAT cuyos campos son: DNI, NOMBRE,APELLIDOS, DIRECCION y PROVINCIA. Listar por impresora todos los registroscuya provincia sea una determinada que introduciremos por teclado.
// 47.-En el fichero secuencial VENTAS.DAT, est n almacenadas las ventas de losproductos durante el d¡a, cuyos campos son: NART y VENTAS. Se desea hacerun programa que liste por impresora todas las ventas realizadas durante el dia.
// 48.-Dado el fichero secuencial ARTICULOS.DAT, cuyos campos son: NART,ARTICULO, PVP, STOCK y MINIMO. En otro fichero VENTAS.DAT, est nalmacenadas las modificaciones de los productos durante el dia, cuyoscampos son: NART2, VENTAS y TIPO. El campo TIPO puede tomar los valores 0(venta) y 1 (compra). Se desea hacer un programa que realice unaactualizacion del fichero de ARTICULOS y un listado por impresora de lasentradas y salidas de los art¡culos.
// 49.-Hacer un pseudocodigo que nos permita dar altas en el fichero DATOS.DAT deorganizaci¢n directa, controlando las altas duplicadas. Los campos son:DNI, NOMBRE, APELLIDOS Y PUNTERO para ambos archivos.Algoritmo( dn ) =- Blanco: grabamos el registro en esa posici¢n y ponemos el puntero acero.- Cero: comprobamos cu l es el valor del campo puntero. Si es cero,grabamos el registro en esa posici¢n (no hay sinonimos) y si es distintode cero, comparamos el valor con el campo DNI, si son iguales, altaduplicada y dejamos de leer, y si no son iguales, introducimos el restode la informacion.- Distinto de cero: hay un registro grabado en esa posicion. Si es igualal dato introducido, alta duplicada, y si no son iguales, comprobamos elvalor del puntero, si es cero grabamos el registro, y si no es cero, sies igual al campo DNI, alta duplicada y sino se graba la informacion enel archivo SINONIMOS.DAT.
// 50.-Tenemos el fichero DATOS.DAT, que est indexado por el campo APELLIDOS,cuyos campos son: DNI, NOMBRE, APELLIDOS, DIRECCION y PROVINCIA. Hacer unprograma que nos permita listar por pantalla todos los registros delfichero, controlando el salto de p gina cuando llegue a la linea veinte.
// 52.-Tenemos el fichero DATOS.DAT con la misma estructura anterior, que estaindexado por el campo DNI. Crear un programa que nos permita consultar unregistro siempre que queramos.
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



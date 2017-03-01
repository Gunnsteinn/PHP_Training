<?php
/*	calcular y mostrar la suma de los diez primeros números entre 1 y 1000 que sean divisibles por uno dado. */
	$j = 0;
	for ($i=0; $i < 1000; $i++) { 
		$dice = rand(1, 10);

		if ($i%$dice == 0 && $j < 10) {
			$j++;
			echo "inPar=>".$i."<br/>";
		}
	}
	

// 1.-Hacer un pseudocodigo que imprima los numeros del 1 al 100.
// 2.-Hacer un pseudocodigo que imprima los numeros del 100 al 0, en ordendecreciente.
// 3.-Hacer un pseudocodigo que imprima los numeros pares entre 0 y 100.
// 4.-Hacer un programa que imprima la suma de los 100 primeros numeros. 
// 5.-Hacer un pseudocódigo que imprima los numeros impares hasta el 100 y queimprima cuantos impares hay.
// 6.-Hacer un pseudocodigo que imprima todos los numeros naturales que haydesde la unidad hasta un numero que introducimos por teclado.
// 7.-Introducir tantas frases como queramos y contarlas.
// 8.-Hacer un pseudocodigo que solo nos permita introducir S o N. 
// 9.-Introducir un numero por teclado. Que nos diga si es positivo o negativo.
// 10.-Introducir un numero por teclado. Que nos diga si es par o impar. 
// 11.-Imprimir y contar los multiplos de 3 desde la unidad hasta un numero queintroducimos por teclado.
// 12.-Hacer un pseudocodigo que imprima los numeros del 1 al 100. Que calcule lasuma de todos los numeros pares por un lado, y por otro, la de todos losimpares.
// 13.-Imprimir y contar los numeros que son multiplos de 2 o de 3 que hay entre1 y 100.
// 14.-Hacer un pseudocodigo que imprima el mayor y el menor de una serie decinco numeros que vamos introduciendo por teclado.
// 15.-Introducir dos numeros por teclado. Imprimir los numeros naturales quehay entre ambos numeros empezando por el m s pequeño, contar cuantos hay ycuantos de ellos son pares. Calcular la suma de los impares.
// 16.-Imprimir diez veces la serie de numeros del 1 al 10.
// 17.-Imprimir, contar y sumar los multiplos de 2 que hay entre una serie denumeros, tal que el segundo sea mayor o igual que el primero.
// 18.-Hacer un pseudocodigo que cuente las veces que aparece una determinadaletra en una frase que introduciremos por teclado.
// 19.-Hacer un pseudocodigo que simule el funcionamiento de un reloj digital yque permita ponerlo en hora.
// 20.-Calcular el factorial de un numero, mediante subprogramas.
// 21.-Hacer un programa que calcule independientemente la suma de los pares ylos impares de los numeros entre 1 y 1000, utilizando un switch.
// 22.-Introducir una frase por teclado. Imprimirla cinco veces en filasconsecutivas, pero cada impresion ir desplazada cuatro columnas hacia laderecha.
// 23.-Hacer un pseudocodigo que imprima los n£meros del 0 al 100, controlandolas filas y las columnas.
// 24.-Comprobar si un numero mayor o igual que la unidad es primo.
// 25.-Introducir un numero menor de 5000 y pasarlo a numero romano.
// 26.-Introducir una frase por teclado. Imprimirla en el centro de la pantalla.
// 27.-Realizar la tabla de multiplicar de un numero entre 0 y 10.
// 28.-Simular el lanzamiento de una moneda al aire e imprimir si ha salido carao cruz.
// 29.-Simular cien tiradas de dos dados y contar las veces que entre los dos suman 10.
// 30.-Simular una carrera de dos caballos si cada uno tiene igual probabilidadde ganar.
// 31.-Introducir dos nymeros por teclado y mediante un menu, calcule su suma, suresta, su multiplicacion o su division.
// 32.-Hacer un programa que nos permita introducir un numero por teclado y sobreel se realicen las siguientes operaciones: comprobar si es primo, hallarsu factorial o imprimir su tabla de multiplicar.
// 33.-Crear un array unidimensional de 20 elementos con nombres de personas.Visualizar los elementos de la lista debiendo ir cada uno en una filadistinta.
// 34.-Hacer un programa que lea las calificaciones de un alumno en 10asignaturas, las almacene en un vector y calcule e imprima su media.
// 35.-Usando el segundo ejemplo, hacer un programa que busque una nota en elvector.
// 36.-Generar una matriz de 4 filas y 5 columnas con numeros aleatorios entre 1y 100, e imprimirla.
// 37.-Generar una matriz de 4 filas y 5 columnas con n£meros aleatorios entre 1y 100, y hacer su matriz transpuesta.
// 38.-Cargar en una matriz las notas de los alumnos de un colegio en funcion delnumero de cursos (filas) y del n£mero de alumnos por curso (columnas).
// 39.-Ordenar una matriz de M filas y N columnas por la primera columnautilizando el m‚todo SHELL (por insercion).
// 40.-Crear una tabla de 3 paginas, 4 filas y 5 columnas donde el primerelemento valga 1, el segundo 2, el tercero 3 y as¡ sucesivamente, eimprimirla.
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
?>

 <!-- 39.-Ordenar una matriz de M filas y N columnas por la primera columna utilizando el metodo SHELL (por insercion). -->

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
					 //Ordenamiento por Shell
					    function ordenamientoShell($A,$n)
					      	{
					          	for($inc = 1 ; $inc<$n;$inc=$inc*3+1); 
					        		while ($inc > 0)
					        		{
					            		for ($i=$inc; $i < $n; $i++)
					            		{
					                  		$j = $i;
					                  		$temp = $A[$i];
					                  		while (($j >= $inc) && ($A[$j-$inc] > $temp))
					                  		{
					                      		$A[$j] = $A[$j - $inc];
					                      		$j = $j - $inc;
					                  		}
					                  		$A[$j] = $temp;
					            		}
					           			$inc/= 2;
					        		}
					            return $A;
					      	}
					      function main()
					      {
					          $VectorA=array(5,4,3,2,1);
					          $VectorB=ordenamientoShell($VectorA,sizeof($VectorA));
					          for($i=0;$i<sizeof($VectorB);$i++)
					              echo $VectorB[$i]."\n";
					      }
					      main();
					  ?>
				</p>
		    </div>
		  </div>
		</div>
	</body>
</html>



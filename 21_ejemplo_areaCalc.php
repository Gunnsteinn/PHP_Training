
<!-- Realizar el pseudocódigo de un programa que permita calcular el área de un rectángulo. Se debe introducir la base y la altura para poder realizar el cálculo.  -->
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
			  height:400px;
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
		<?php
			// define variables and set to empty values
			$height = ($_POST) ? $_POST["height"] : 0;// altura
			$width = ($_POST) ? $_POST["width"] : 0;// anchura
		?> 
		<div class="vid-container">
		  <div class="inner-container">
		    <div class="box">
		    <h1>PHP Form area calc</h1>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >  
				  	<input type="text" name="height" placeholder="height:" value="<?php echo $height;?>">
				   	<input type="text" name="width" placeholder="width:" value="<?php echo $width;?>">
				  	<button type="submit" name="submit" value="Submit">Calculate</button>
				</form>
		      <p><?php echo "Your Result:".$height * $width; ?></p>
		    </div>

		  </div>
		</div>
	</body>
</html>
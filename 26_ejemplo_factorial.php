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
			$fact = ($_POST) ? $_POST["fact"] : 0;// numero
		?>
		<div class="vid-container">
		  <div class="inner-container">
		    <div class="box">
		    <h1>PHP Form factorial</h1>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >  
				   	<input type="text" name="fact" placeholder="fact:" value="<?php echo $fact;?>">
				  	<button type="submit" name="submit" value="Submit">Calculate</button>
				</form>
		      <p>
					<?php
						$numero = $fact;
						$factorial = 1;
						if ($numero > 0) {
							for ($i=1; $i <= $numero; $i++) { 
								$factorial = $factorial * $i;
							}
						}
					?>
		      		<?php echo "Your Result:".$factorial; ?></p>
		    </div>

		  </div>
		</div>
	</body>
</html>



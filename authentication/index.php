<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError=true;
		}
		else{
			$uname=htmlspecialchars($_POST["uname"]);
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError=true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		if(!$hasError){
			
		}
	}
	
	
?>
<html>
	<head>
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
		<div class="header"></div>
		<!--<div class="left-menu">
			<ul>
				<li class="plain-bullet"><a href="">CSS HOME</li>
				<li class="plain-bullet"><a href="">CSS Intro</li>
				<li class="plain-bullet"><a href="">CSS Tutorials</li>
			</ul>
		</div>-->
		<div class="login-div">
		<?php echo "<pre>";var_dump($users);echo "</pre>";?>
			<table align="center">
				<tr>
					<td><img src="resources/user.jpg" width="150px" height="150px"></td>
					<td><h1 align="center" style="font-family:cambria">Login Form</h1></td>
				</tr>
			</table>
			
			<form action="" method="post">
				<table align="center">
					<tr>
						<td><span class="my-font">Username:</span></td>
						<td><input class="my-font my-text-field" name="uname" value="<?php echo $uname;?>" type="text">
							<br><span class="err-msg"><?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
						<td><span class="my-font">Password:</span></td>
						<td><input class="my-text-field my-font" name="pass" value="<?php echo $pass;?>" type="password">
						    <br><span class="err-msg"><?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td colspan="2"><input class="my-font btn-mine" type="submit" value="Login"></td>
					</tr>
				</table>
			</form>
		</div>
		
		
		<div class="footer"></div>
	</body>
</html>
<?php
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	$date="";
	$err_date="";
	$hasError=false;
	function validateEmail($email){
		
		$pos_at = strpos($email,"@"); //12
		$pos_dot = strpos($email,".",$pos_at+1); //17
		if($pos_at < $pos_dot){
			return true;
		}
		return false;
	}
	function validatePassword($password){
		
		 $hasUpper=false;
		 $hasLower=false;
		 for($i=0;$i<strlen($password);$i++){
			if(ctype_upper($password[$i])){
				$hasUpper = true;
			}
			if(ctype_lower($password[$i])){
				$hasLower = true;
			}
		 }
		if($hasLower==false || $hasUpper==false){
			return false;
		}
		else{
			return true;
		}
	}
	/*function validatePassword($password){
		
		 $hasUpper=false;
		 $hasLower=false;
		 for($i=0;$i<strlen($password);$i++){
			if(ctype_upper($password[$i])){
				$hasUpper = true;
			}
			if(ctype_lower($password[$i])){
				$hasLower = true;
			}
		 }
		if(!$hasUpper){
			return "Need at least 1 upper case";
		}
		else if(!$hasLower){
			return "Need at least 1 lower case";
		}
		else{
			return "true";
		}
	}*/
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["email"])){
			$err_email= "Email Required";
			$hasError=true;
		}
		elseif(!validateEmail($_POST["email"])){
			$err_email= "Not a valid email";
			$hasError=true;
		}else{
			$email=htmlspecialchars($_POST["email"]);
		}
		if(empty($_POST["password"])){
			$err_pass="Password required";
		}
		elseif(!validatePassword($_POST["password"])){
			$err_pass="Password must contain at least 1 upper case and 1 lower case";
		}
		
	if(!isset($_POST["day"]) || !isset($_POST["month"]) || !isset($_POST["year"])){
			$err_date="Date Required";
		}else{
			$date=$_POST["day"]."-".$_POST["month"]."-".$_POST["year"];
		}
	}
		
		
?>

<html>

	<body>
		<form action="" method="post">
			Email: <input type="text" name="email"><?php echo $err_email;?></br>
			password:<input type="password" name="password"><?php echo $err_pass;?><br>
			gender: <input type="radio" name="gender"  >Male <input type="radio" name="gender" checked>Female<br>
			Date: 
			<select name="day">
				<option selected disabled>Day</option>
				<?php
					for($i=1;$i<=31;$i++){
						echo "<option>$i</option>";
						
					}
				?>
			</select>
			<select name="month">
				<option selected disabled>Month</option>
				<?php
					$months = array("Jan","Feb","Mar");
					for($i=0;$i<count($months);$i++){
						echo "<option>$months[$i]</option>";
					}
				?>
			</select>
			<select name="year">
				<option selected disabled>Year</option>
				<?php
					for($i=1990;$i<=2001;$i++){
						echo "<option>$i</option>";
					}
				?>
			</select><?php echo $err_date;?><br>
			<input type="submit" value="Register">
		</form>
	</body>
</html>
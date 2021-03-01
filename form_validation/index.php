<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$bio="";
	$err_bio="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
		}
		elseif(strlen($_POST["uname"]) < 6){
			$err_uname="Username Must be 6 Characters Long";
		}
		elseif(strpos($_POST["uname"]," ")){
			$err_uname="Username should not contain white space";
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
		}
		else{
			$pass=$_POST["pass"];
		}
		if(empty($_POST["bio"])){
			$err_bio="Bio Required";
		}else{
			$bio=$_POST["bio"];
		}
		/*echo "Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
		echo "Gender: ".$_POST["gender"]."<br>";
		echo "Profession: ".$_POST["profession"]."<br>";
		echo "Bio: ".$_POST["bio"]."<br>";
		$var = $_POST["hobbies"];
		for($i=0;$i<count($var);$i++){
			echo $var[$i]."<br>";
		}*/
	}
		
?>

<html>
	<head></head>
	<body>
		<h1>User Registration</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span> 
					<input type="radio" name="gender" value="Female">Female<br></td>
				</tr>
				<tr>
					<td><span>Hobbies</span></td>
					<td>: 
					<input type="checkbox" value="Movies" name="hobbies[]"> Movies 
					<input type="checkbox" value="Music" name="hobbies[]"> Music 
					<input type="checkbox" value="Games" name="hobbies[]"> Games 
					<input type="checkbox" value="Garden" name="hobbies[]"> Garden</br></td>
				</tr>
				
				<tr>
					<td><span>Profession</span></td>
					<td>
						:<select name="profession">
							<option disabled selected>Chose One</option>
							<option>Teaching</option>
							<option>Service</option>
							<option>Business</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><span>Bio</span></td>
					<td>:<textarea name="bio"><?php echo $bio;?></textarea>
					<span><?php echo $err_bio;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>
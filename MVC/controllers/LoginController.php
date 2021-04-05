<?php
	require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$err_name="<br>Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="<br>Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["uname"];
		}
		if(!$hasError){
			insertUser($name,$uname,$_POST["email"],$_POST["password"]);
		}
	}
	if(isset($_POST["login"])){
		//no error
		if(authenticateUser($_POST["username"],$_POST['password'])){
			header("Location: dashboard.php");
		}
		else{
			echo "Invalid username or password";
		}
		
	}
	
	function insertUser($name,$username,$email,$password){
		$query = "INSERT INTO users VALUES (NULL,'$name','$username','$email','$password')";
		execute($query);
		
	}
	function authenticateUser($username,$password){
		$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
		$result = get($query);
		if(count($result)>0){
			return true;
		}
		return false;
	}

?>
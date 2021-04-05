<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="wt_sp21_f";
	$conn = mysqli_connect($server,$user,$password,$db);
	if($conn){
		echo "Connected";
	}
	else{
		echo mysqli_connect_error();
	}
	
	$query="insert into users values (NULL,'rakib','456789','admin')";
	if(mysqli_query($conn,$query)){
		echo "Value inserted";
	}
	else{
		echo "Problem";
	}
	
?>
<h1>This is after error</h1>
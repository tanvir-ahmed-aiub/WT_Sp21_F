<?php
	require 'controllers/LoginController.php';
	$username = $_GET["uname"];
	$rs = checkUsername($username);
	if($rs){
		echo "true";
	}
	else echo "false";
?>
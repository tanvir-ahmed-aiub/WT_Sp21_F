<?php
	require_once 'models/db_config.php';
	if(isset($_POST["add_category"])){
		//validation
		insertCategory($_POST["name"]);
	}
	function insertCategory($name){
		$query = "INSERT INTO categories VALUES (NULL,'$name')";
		execute($query);
	}
	function getAllCategories(){
		$query = "SELECT * FROM categories";
		$result = get($query);
		return $result;
	}
	function getCategory($id){
		$query = "SELECT * FROM categories WHERE id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}

?>
<?php
	require_once 'models/db_config.php';
	//validtion variables
	if(isset($_POST["add_product"])){
		//do validation
		insertProduct($_POST["name"],$_POST["category_id"],$_POST["price"],$_POST["qty"],$_POST["desc"],"");
		
	}
	function insertProduct($name,$category_id,$price,$qty,$decsr,$image){
		$query="INSERT INTO products VALUES (NULL,'$name',$category_id,$price,$qty,'$decsr','$image')";
		execute($query);
		header("Location: allproducts.php");
	}
	function getAllProducts(){
		//$query = "SELECT * FROM products";
		$query = "SELECT p.*,c.name as 'c_name' FROM products p left join categories c on p.category_id = c.id";
		$result = get($query);
		return $result;
	}
	function getProduct($id){
		$query = "SELECT * FROM products WHERE id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function updateProduct(){}
?>
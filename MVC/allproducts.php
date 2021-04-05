<?php include 'admin_header.php';
	  require_once 'controllers/ProductController.php';
	  $products = getAllProducts();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th> Desc</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($products as $product){
					echo "<tr>";
					echo "<td>".$product["id"]."</td>";
					echo "<td>".$product["name"]."</td>";
					echo "<td>".$product["c_name"]."</td>";
					echo "<td>".$product["price"]."</td>";
					echo "<td>".$product["qty"]."</td>";
					echo "<td>".$product["description"]."</td>";
					echo '<td><a href="editproduct.php" class="btn btn-success">Edit</a></td>';
					echo '<td><a class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
				}
			?>
		
			
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>
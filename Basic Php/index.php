<?php
	echo "Hello from php";
	print "Hello section F<br>";
	$i;
	
	for($i=0;$i<10;$i++)
	{
		echo $i.'<br>';
		//echo "$i </br>";
	}
	$age = 25;
	if($age >= 18){
		
		echo "You can cast vote<br>";
	}else{
		echo "You can not cast vote<br>";
	}
?>
<html>
	<head></head>
	<body>
		<h1>Welcome to PHp class</h1>
		<?php 
			$num1 = 10;
			$num2 = 12;
			$sum = $num1 + $num2;
			echo $sum;
			echo "<b>The summation is $sum</b> <br>";
			echo "<b>The summation is".$sum."</b>";
			echo '<br> This is another string<br>';
			var_dump($num1);
			$name = "Tanvir Ahmed";
			var_dump($name);
		?>
	</body>
</html>
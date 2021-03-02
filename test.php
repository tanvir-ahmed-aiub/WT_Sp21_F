<?php 
	if(isset($_GET["submit"])){
		echo htmlspecialchars($_GET["username"]);
		echo ctype_lower("A");
	}
?>
<fieldset>
	<legend>Registration</legend>
	<form>
		<input type="text" size="7" name="username">
		<input type="submit" name="submit" value="Submit">
	</form>
</fieldset>
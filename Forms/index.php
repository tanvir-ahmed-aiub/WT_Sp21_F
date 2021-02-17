<html>
	<head></head>
	<body>
<!-- <table border="1" >
			<tr>
				<td><b>Grp Id</b></td>
				<th>Name</th>
				<th>Cgpa</th>
			</tr>
			<tr>
				<td rowspan="3" align="center">12</td>
				<td>Tanvir</td>
				<td>2.5</td>
			</tr>
			<tr>
				<td>Sabbir</td>
				<td>3.85</td>
			</tr>
			<tr>				
				<td>Rahim</td>
				<td>3.95</td>
			</tr>
			<tr>
				<td colspan="3" align="center">Group <br> Specifier</td>
			</tr>
		</table>
-->
		<h1>User Registration</h1>
		<form action="submitted.php" method="post">
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="uname"></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" name="pass"></td>
				</tr>
				
				<span>Gender</span>: <input type="radio" name="gender" value="Male"><span>Male</span> 
									<input type="radio" name="gender" value="Female">Female<br>
				<span>Hobbies</span>: 
					<input type="checkbox"> Movies 
					<input type="checkbox"> Music 
					<input type="checkbox"> Games 
					<input type="checkbox"> Garden</br>
				<span>Profession:</span>
				<select name="profession">
					<option disabled selected>Chose One</option>
					<option>Teaching</option>
					<option>Service</option>
					<option>Business</option>
				</select><br>
				<span>Bio:</span><textarea name="bio"></textarea><br>
			
				<input type="submit" value="Submit">
			</table>
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>
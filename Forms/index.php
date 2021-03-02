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
					<td>:<textarea name="bio"></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>
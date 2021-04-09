<html>
	<body>
		<form action="" onsubmit="return validate()" method="post">
			Username: <input type="text" name="" id="username"><span id="err_username"></span><br>
			Password: <input type="password" name="" id="password"><span id="err_password"></span><br>
			Email: <input type="text" name="" id="email"> <span id="err_email"></span><br>
			<input type="submit" name="Submit" value="Register">
		</form>
	</body>
	<script>
		function get(id){
			return document.getElementById(id);
		}
		function validate(){
			refresh();
			var hasError=false;
			var uname= get("username");
			if(uname.value == ""){
				get("err_username").innerHTML = "*Username Required";
				get("err_username").style.color = "red";
				hasError = true;
			}
			if(get("password").value == ""){
				get("err_password").innerHTML = "*Password Required";
				hasError = true;
			}
			if(get("email").value == ""){
				get("err_email").innerHTML = "*Email Required";
				hasError = true;
			}
			return !hasError;
				
		}
		function refresh(){
			get("err_username").innerHTML = "";
			get("err_password").innerHTML = "";
			get("err_email").innerHTML = "";
			
		}
	</script>
</html>
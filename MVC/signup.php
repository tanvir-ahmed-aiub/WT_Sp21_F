<?php include 'main_header.php';
	  require_once 'controllers/LoginController.php';
?>
<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
			<span><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="uname" onfocusout="checkUsername(this)" value="<?php echo $uname;?>" class="form-control">
			<span id="err_uname"><?php echo $err_uname;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="sign_up" value="Sign Up" class="form-control">
		</div>
</div>
<script>
	function checkUsername(uname){
		//alert(uname.value);
		var name = uname.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				var rs = this.responseText;
				if(rs == "true"){
					document.getElementById("err_uname").innerHTML = "";
				}
				else document.getElementById("err_uname").innerHTML = "Not a valid username";
			}
		};
		xhttp.open("GET","checkusername.php?uname="+name,true);
		xhttp.send();
	}
</script>
<!--sign up ends -->
<?php include 'main_footer.php';?>
<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "grayart";

	$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");
	
 //mysql_select_db($db); 

	if(isset($_POST['username'])){
		$uname=$_POST['username'];
		$password=$_POST['password'];

		$sql="select * from loginform where user='".$uname."' AND password='".$password."' limit 1";

		$result = mysqli_query($connection,$sql);

		echo mysqli_num_rows($result);

		if(mysqli_num_rows($result)==1){
			mysqli_close($connection);
			header("Location: AdminHome.php");
			//exit();
		}
		else{
			mysqli_close($connection);
			header("Location: login.php");
			//exit();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
	<div class="box">
		<center><img src="../image/logo with no background.png"></center>
		<form method="POST" action="#">
			<div class="inputBox">
				<label>User name or Email</label>
				<input type="text" name="username" placeholder="username" required>
			</div>
			<div class="inputBox">
				<label>password</label>
				<input type="password" name="password" placeholder="password" required id="myInput" >		
				<span class="eye" onclick="myFunction()">
					<i id="hide1" class="fa fa-eye"></i>
					<i id="hide2" class="fa fa-eye-slash"></i>
				</span>
			</div>
			<!-- <div class="forgot"><a href="#">Forgot Password?</a></div> -->
		</br>
			<center><input type="submit" name="submit" value="Sign in"></center>
			<div><h5><span></span></h5></div>
		</form>
	</div>

	<script>
		function myFunction(){
			var x = document.getElementById("myInput");
			var y = document.getElementById("hide1");
			var z = document.getElementById("hide2");

			if(x.type == 'password'){
				x.type = "text";
				y.style.display = "block";
				z.style.display = "none";
			}
			else{
				x.type = "password";
				y.style.display = "none";
				z.style.display = "block";
			}
		}
	</script>
	
</body>
</html>
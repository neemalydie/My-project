<!DOCTYPE html>
<html>
<head>
	<style>
		height: 200px;
		
		.form{
			text-align: center;
		}

	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
</head>
<body><div class="form">
	<h1>Login Form</h1>
	<form method="POST" action="#">
		Username:<input type="text" name="user"><br><br>
		Password:<input type="password" name="pass"><br><br>
		<input type="submit" name="Send" value="Send">
		<a href="signup.php">Create Account</a>

	</form>
</div>
<?php
include("connection.php");
if(isset($_POST['Send'])){

	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$query="SELECT * FROM login  WHERE Username='$user' AND Password='$pass'";
	$data=mysqli_query($conn,$query);
	if(mysqli_fetch_array($data)){
		$_SESSION['Username']='$user';
		header("location:home.php");
	}else{

		echo "Invalid Username And Password please create New Account";
	}
}


?>
</body>
</html>
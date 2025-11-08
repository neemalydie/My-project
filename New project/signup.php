<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign In</title>
</head>
<body>
	<h1>Create Account</h1>
	<form method="POST" action="#">
		Username:<input type="text" name="user"><br><br>
		Password:<input type="password" name="pass"><br><br>
		<input type="submit" name="Send" value="Send">


	</form>
	<?php
include("connection.php");
if(isset($_POST['Send'])){

	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$query="INSERT INTO login(id,Username,Password)VALUES('','$user','$pass')";
	$data=mysqli_query($conn,$query);
	if ($data) {
		header("location:login.php");
	}else{
		echo "No data Inserted";
	}
}

	?>

</body>
</html>
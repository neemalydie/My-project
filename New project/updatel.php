<<!DOCTYPE html>
<html>
<head>
	<style>
		.header{
			text-align: center;
			background-color: skyblue;
			padding-left: 90px;

		}

.header a{
			font-size: 30px;
			padding-left: 60px;
			padding-right: 60px;

			text-align: center;
			text-decoration: none;

		}



		.main{
			display: flex;
		}
.left{
	background-color: whitesmoke;
	width: 30%;
	height: 500px%;
}

.middle{
	background-color: whitesmoke;
	width: 40%;
	height: 500px;
}

.right{
	background-color: whitesmoke;
	width: 30%;
	height: 500px;
}

.footer{
	background-color: grey;
	height: 50px;
	
}

.footer h2{
	text-align: center;
	
	
}
form{
	text-align: center;
}
h1{
	text-align: center;
}



	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Information</title>
</head>
<body>
	<div class="header">
		<a href="home.php">Home</a>
	<a href="student.php">Student</a>
	
	<a href="module.php">Module</a>
	<a href="lecture.php">Lecturer</a>
	<a href="logout.php">Logout</a>


</div>
	<div class="main">
		<div class="left">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			
		</div>
		<div class="middle">
			<h1>IUpdate Records</h1>
	<form method="POST" action="#">
		Id:<input type="number" name="id" value="<?php echo $_GET['a']?>"><br><br>
		First Name:<input type="text" name="fname" value="<?php echo $_GET['b']?>"><br><br>
		Last Name:<input type="text" name="lname" value="<?php echo $_GET['c']?>"><br><br>
		Sex:<input type="text" name="sex" value="<?php echo $_GET['d']?>" ><br><br>
		<input type="submit" name="update" value="Update">


	</form>
	<?php
include("connection.php");
if(isset($_POST['update'])){
    $id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$update="UPDATE lecturer SET First_Name='$fname',Last_Name='$lname',sex='$sex' WHERE Id='$id'";
	$data=mysqli_query($conn,$update);
	if ($data) {
		header("location:displayl.php");
	}else{
		echo "No data Updated";
	}
}

	?>
		</div>
		<div class="right">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>

		




	</div>
	<div class="footer">
			<h2>&COPY; Alright reserved</h2>
		</div>

</body>
</html>
<!DOCTYPE html>
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
			<h1>Insert New Modules</h1>
	<form method="POST" action="#">
		Module Code:<input type="text" name="mcode"><br><br>
		Module Name:<input type="text" name="mname"><br><br>
		Student_Id:<input type="number" name="cid"><br><br>
		Lecturer_Id:<input type="number" name="Id"><br><br>
		<input type="submit" name="Insert" value="Insert">


	</form>
	<?php
include("connection.php");
if(isset($_POST['Insert'])){

	$code=$_POST['mcode'];
	$name=$_POST['mname'];
	$cid=$_POST['cid'];
	$id=$_POST['Id'];
	$insert="INSERT INTO modules(Module_code,Module_Name,cid,Id) VALUES ('$code','$name','$cid','$id')";
	$data=mysqli_query($conn,$insert);
	if ($data) {
		header("location:displaym.php");
	}else{
		echo "No data Inserted";
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
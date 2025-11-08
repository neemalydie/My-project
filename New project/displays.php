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
	<?php
include("connection.php");
$query="SELECT * FROM  students";
$data=mysqli_query($conn,$query);
if(mysqli_num_rows($data)){
	echo"<center>";
	echo"<table border=1>";
		echo"<tr><th>Students Id</th><th>First Name</th><th>Laast Name</th><th>Sex</th><th>Modify</th><th>Delete</th></tr>";
		while($row=mysqli_fetch_array($data)) {
	echo "<tr>";
	echo "<td>".$row['cid']."</td>";
	echo "<td>".$row['First_Name']."</td>";
	echo "<td>".$row['Last_Name']."</td>";
	echo "<td>".$row['Sex']."</td>";
	echo "<td><a href='updates.php? a=".$row['cid']." &b=".$row['First_Name']." &c=".$row['Last_Name']." &d=".$row['Sex']."'>Modify</a></td>";
	echo "<td><a href='deletes.php? a=".$row['cid']."'>Delete</a></td>";
	
}
echo "</tr>";

echo "</table>";


echo "<a href='student.php'>Add new record</a>";

	echo "</center>";
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
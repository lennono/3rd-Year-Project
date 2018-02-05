<?php
include('db.php');


		$Name1 = $_POST['Name'];
		$email1 = $_POST['email'];
		$yearNo1 = $_POST['Year'];
		$course =$_POST['CourseCode'];
		$password1=$_POST['Password'];
		
		$password=md5($password1);
		$sql="SELECT * FROM Student WHERE password='$password' and email='$email1'";
		$result=$connection->query($sql);
		$count=mysqli_num_rows($result);
		$row = $result->fetch_assoc(); 
		if($count==1){
			echo "Account already exists, Maybe sign in? ";
			exit();
		}
		

			$query1 = "INSERT INTO Student (name,email,year,course,password) VALUES ('$Name1','$email1','$yearNo1','$course','$password')";

		if ($connection->query($query1) === TRUE) {
			//echo "New record created successfully";
			session_start();
			$_SESSION['email'] = $email1;
			header("Location:http://student.computing.dcu.ie/~lennono4/logone_in.php?'.SID.'");
			exit();
		} 
		else 
		{
			echo "Error: " . $query1 . "<br>" . $connection->error;
		}
		$connection->close();
?>

<?php
include('db.php');
$password=$_POST['Password'];
$email1 = $_POST['email'];
$password=md5($password);

$sql="SELECT * FROM Student WHERE password='$password' and email='$email1'";
$sqlT="SELECT * FROM teachers WHERE password='$password' and emailT='$email1'";

$resultT=$connection->query($sqlT);
$countT=mysqli_num_rows($resultT);

$result=$connection->query($sql);
$count=mysqli_num_rows($result);


if($count==1){
	 //header("Location:http://student.computing.dcu.ie/~lennono4/logged_in.html");
	 //exit();
	$sqlR="SELECT name FROM Student WHERE password='$password' and email='$email1'";
	$resultR=$connection->query($sqlR);
	
	$row = $resultR->fetch_assoc();
	session_start();
	$_SESSION['name1'] = $row['name'];
	//$_SESSION['name']   = 'cat';
	header("Location:http://student.computing.dcu.ie/~lennono4/logged_in.php?'.SID.'");
	//echo '<br /><a href="http://student.computing.dcu.ie/~lennono4/logged_in.php?' . SID . '">page 2</a>';
}

else if($countT==1)
{
	//header("Location:http://student.computing.dcu.ie/~lennono4/logged_in.html");
}

else{
	echo"Are you really a member?";
	exit();
}
?>
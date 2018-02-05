<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>

<?php
include('db.php');
$q = $_GET["q"];
//echo "anything";
if (!$connection) {
    die('Could not connect: ' . mysqli_error($connection));
}

$sql = "SELECT * FROM teachers WHERE emailT=  '$q'";

$result=$connection->query($sql);
//$link_address='profile.php?';

//session_start();
$row = $result->fetch_assoc(); 
echo '<h3>Name</h3>';
echo $row['name'];
echo '<br>';
echo '<h3>E-mail</h3>';
echo $row['emailT'];
echo '<br>';
echo '<h3>About</h3>';
echo $row['profile'];
echo '<br>';

$qw=$row['courseId'];
$sqlC = "SELECT * FROM Modules WHERE courseId=  '$qw'";
$resultC=$connection->query($sqlC);

echo '<h3>Modules</h3>';
echo "<table>";
while($rowC = $resultC->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $rowC['Name'] . "</td>";
  echo "<td>" . $rowC['moduleId'] . "</td>";
  echo "</tr>";
}
echo "</table>";

$connection->close();
?>

</body>
</html>
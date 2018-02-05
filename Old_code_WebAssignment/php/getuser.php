<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
th {
    background-color: #000000;;
    color: white;
}
</style>
</head>
<body>


<?php
include('db.php');
$q = $_GET["q"];

if (!$connection) {
    die('Could not connect: ' . mysqli_error($connection));
}

$sql = "SELECT * FROM teachers WHERE courseId =  '$q'";

$result=$connection->query($sql);
$link_address='profile.php?';

echo "<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Profile</th>
</tr>";
session_start();
while($row = $result->fetch_assoc()) {
  $_SESSION['email1'] = $row['emailT'];
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['emailT'] . "</td>";
  echo "<td>" . "<a href='$link_address'>View Profile</a>" .SID. "</td>";
  echo "</tr>";
}
echo "</table>";

$connection->close();
?>
</body>
</html>
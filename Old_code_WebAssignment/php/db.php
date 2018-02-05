<?php
$connection = new mysqli('localhost','user2423','pw2412','project127');
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 



?>

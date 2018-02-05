<?php
$connection = new mysqli('localhost','','','');
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 



?>

<?php
$servername = "localhost";
$username = "userdb";
$password = "databaza";
$dbname = "northwind"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Spojenie zlyhalo: " . $conn->connect_error);
}
?>

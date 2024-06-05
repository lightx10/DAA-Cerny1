<?php
$servername = "localhost";
$username = "userdbaa";
$password = "Databaza1";
$dbname = "northwind"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Spojenie zlyhalo: " . $conn->connect_error);
}
?>

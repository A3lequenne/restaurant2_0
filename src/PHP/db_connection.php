<?php
$servername = "localhost:3306";
$username = "atrois";
$password = "root";
$dbname = "resto_messages";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
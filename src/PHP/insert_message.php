<?php
include("db_connection.php");

$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$sql = "INSERT INTO resto_messages (first_name, last_name, email, subject, message) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../../contact.html");
exit();
?>
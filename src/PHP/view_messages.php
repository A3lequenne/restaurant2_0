<?php
include("db_connection.php");

$sql = "SELECT * FROM resto_messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Date: " . $row["date"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Subject: " . $row["subject"] . "<br>";
        echo "Message: " . $row["message"] . "<br>";
        echo "---------------------------<br>";
    }
} else {
    echo "No messages found";
}

$conn->close();
?>
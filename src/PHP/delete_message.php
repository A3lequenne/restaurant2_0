<?php
include("./db_connection.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $message_id = $_GET['id'];

    $sql = "DELETE FROM `resto_messages` WHERE id = $message_id";

    if ($conn->query($sql) === TRUE) {
        echo "Message with ID $message_id has been deleted successfully.";
        header("Location: ../../backoffice.php");
    } else {
        echo "Error deleting message: " . $conn->error;
    }
} else {
    echo "Invalid or missing message ID.";
}

$conn->close();
?>
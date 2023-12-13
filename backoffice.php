<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Office - Messages</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #111827;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #ea580c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #c2410c;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #c2410c;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #ea580c;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <h2>Messages</h2>

    <?php
    include("./src/PHP/db_connection.php");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `resto_messages`;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="message_table"><table border="1">';
        echo '<tr>';
        echo "<th>ID</th>";
        echo '<th>First Name</th>';
        echo '<th>Last Name</th>';
        echo '<th>Email</th>';
        echo '<th>Subject</th>';
        echo '<th>Message</th>';
        echo '<th>Action</th>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id"] . '</td>';
            echo '<td>' . $row["first_name"] . '</td>';
            echo '<td>' . $row["last_name"] . '</td>';
            echo '<td>' . $row["email"] . '</td>';
            echo '<td>' . $row["subject"] . '</td>';
            echo '<td>' . $row["message"] . '</td>';
            echo '<td><a href="./src/PHP/delete_message.php?id=' . $row["id"] . '">Supprimer</a></td>';
            echo '</tr>';
        }

        echo '</table></div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<p>No messages found</p>";
    }

    $conn->close();
    ?>

</body>
</html>

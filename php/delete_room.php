<?php

include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM rooms WHERE id = '$id'";
    if ($conn->query($query) === TRUE) {
        header('Location: ../roomList.html');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();

?>
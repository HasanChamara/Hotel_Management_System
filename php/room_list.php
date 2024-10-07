<?php

include 'db_connect.php';

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rooms = array();
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }
    echo json_encode($rooms);
} else {
    echo "0 results";
}

$conn->close();


?>
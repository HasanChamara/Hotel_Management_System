<?php
include 'db_connect.php';

$sql_create_table = "CREATE TABLE IF NOT EXISTS rooms (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    room_number VARCHAR(30) NOT NULL,
    room_type VARCHAR(50) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    room_status VARCHAR(30) DEFAULT 'Available'
)";

if ($conn->query($sql_create_table) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_number = $conn->real_escape_string($_POST['room_number']);
    $room_type = $conn->real_escape_string($_POST['room_type']);
    $price = $conn->real_escape_string($_POST['price']);

    $query = "INSERT INTO rooms (room_number, room_type, price) VALUES ('$room_number', '$room_type', '$price')";
    if ($conn->query($query) === TRUE) {
        header('Location: ../roomList.html');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

?>
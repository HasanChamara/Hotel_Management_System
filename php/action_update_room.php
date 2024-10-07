<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $room_number = $_POST['room_number'];
    $room_type = $_POST['room_type'];
    $price = $_POST['price'];

    $query = "UPDATE rooms SET room_number='$room_number', room_type='$room_type', price='$price' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header('Location: ../roomList.html');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

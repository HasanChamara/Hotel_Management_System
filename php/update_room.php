<?php
include 'db_connect.php';
$id = $_GET['id'];
$query = "SELECT * FROM rooms WHERE id = $id";
$result = mysqli_query($conn, $query);
$room = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Update Room</title>
    <link rel="icon" href="images/G.png" type="image/x-icon">

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            color: #495057;
            text-align: center;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Hotel Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../roomList.html">Room List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../addRoom.html">Add Room</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="space"><br><br></div>

<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Room</h4>
                    </div>
                    <div class="card-body">
                        <form action="action_update_room.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                            
                            <div class="form-group">
                                <label for="roomNumber">Room Number</label>
                                <input type="text" name="room_number" id="roomNumber" class="form-control" value="<?php echo $room['room_number']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="roomType">Room Type</label>
                                <select name="room_type" id="roomType" class="form-control">
                                    <option value="Single" <?php if($room['room_type'] == 'Single') echo 'selected'; ?>>Single</option>
                                    <option value="Double" <?php if($room['room_type'] == 'Double') echo 'selected'; ?>>Double</option>
                                    <option value="Triple" <?php if($room['room_type'] == 'Triple') echo 'selected'; ?>>Triple</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control" value="<?php echo $room['price']; ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Room</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2024 Hasan Chamara. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>


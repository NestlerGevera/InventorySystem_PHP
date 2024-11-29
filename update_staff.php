<?php
include 'db_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$position = $_POST['position'];

$sql = "UPDATE staff SET name='$name', email='$email', phone='$phone', position='$position' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Staff updated successfully!";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

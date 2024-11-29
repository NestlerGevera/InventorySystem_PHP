<?php
include 'db_connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$position = $_POST['position'];

$sql = "INSERT INTO staff (name, email, phone, position) VALUES ('$name', '$email', '$phone', '$position')";
if ($conn->query($sql) === TRUE) {
    echo "Staff added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

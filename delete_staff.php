<?php
include 'db_connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM staff WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Staff deleted successfully!";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

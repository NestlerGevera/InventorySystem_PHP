<?php
include 'db_connection.php';

$sql = "SELECT * FROM staff";
$result = $conn->query($sql);

$staffList = [];
while ($row = $result->fetch_assoc()) {
    $staffList[] = $row;
}

echo json_encode($staffList);
$conn->close();
?>

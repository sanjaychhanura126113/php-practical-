<?php
include 'config/db.php';
$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";
if($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
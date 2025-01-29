<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "todoapp");
if (!$conn) {
    $_SESSION['errors'][] = "Connection failed: " . mysqli_connect_error();
    header("Location: ../index.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tasks WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Task deleted successfully!";
    } else {
        $_SESSION['errors'][] = "Error: " . mysqli_error($conn);
    }
}

header("Location: ../index.php");
exit;
?>
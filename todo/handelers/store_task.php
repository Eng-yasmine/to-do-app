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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = trim($_POST['title']);

    if (empty($title)) {
        $_SESSION['errors'][] = "Task title is required!";
    } else {
        $sql = "INSERT INTO tasks (title) VALUES ('$title')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['success'] = "Task added successfully!";
        } else {
            $_SESSION['errors'][] = "Error: " . mysqli_error($conn);
        }
    }
}

header("Location: ../index.php");
exit;
?>
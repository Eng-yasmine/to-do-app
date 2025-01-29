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
    $sql = "SELECT * FROM tasks WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $task = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Edit Task</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="../handelers/update_task.php" method="POST" class="form border p-2 my-5">
                    <input type="hidden" name="id" value="<?= $task['id']; ?>">
                    <input type="text" name="title" class="form-control my-3 border border-success" value="<?= $task['title']; ?>">
                    <input type="submit" value="Update" class="form-control btn btn-primary my-3">
                </form>
            </div>
        </div>
    </div>
</body>
</html>














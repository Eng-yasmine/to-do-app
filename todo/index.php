<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (session_status() === PHP_SESSION_NONE) session_start();

$conn = mysqli_connect("localhost", "root", "", "todoapp");
if (!$conn) {
    $_SESSION['errors'][] = "Connection failed: " . mysqli_connect_error();
} else {
    $sql = "SELECT * FROM tasks ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);

    // Check if the query failed
    if (!$query) {
        $_SESSION['errors'][] = "Query failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>TO DO APP</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="handelers/store_task.php" method="POST" class="form border p-2 my-5">
                    <!-- Display success message -->
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="alert alert-success text-center">
                            <?= $_SESSION['success']; ?>
                            <?php unset($_SESSION['success']); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Display errors -->
                    <?php if (isset($_SESSION['errors'])) : ?>
                        <div class="alert alert-danger text-center">
                            <?php foreach ($_SESSION['errors'] as $error) : ?>
                                <?= $error; ?><br>
                            <?php endforeach; ?>
                            <?php unset($_SESSION['errors']); ?>
                        </div>
                    <?php endif; ?>

                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo">
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3">
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($query) && $query) : ?>
                            <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['title']; ?></td>
                                    <td>
                                        <a href="handelers/edit_task.php?id=<?= $row['id']; ?>" class="btn btn-success"><i class="fa-solid fa-edit"></i> EDIT </a>
                                        <a href="handelers/update_task.php?id=<?= $row['id']; ?>" class="btn btn-info"><i class="fa-solid fa-trash-can"></i> UPDATE </a>
                                        <a href="handelers/delete-task.php?id=<?= $row['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-edit"></i> DELETE </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3" class="text-center">No tasks found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
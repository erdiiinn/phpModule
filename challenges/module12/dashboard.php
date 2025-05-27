<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container mt-5">
    <h1>Welcome, <?= htmlspecialchars($_SESSION['user_email']) ?>!</h1>
    <p>You are logged in.</p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

</body>
</html>

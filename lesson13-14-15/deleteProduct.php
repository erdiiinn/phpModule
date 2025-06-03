<?php
include_once('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: productsDashboard.php");
        exit;
    } else {
        echo "Error deleting product.";
    }
} else {
    echo "Invalid product ID.";
}
?>

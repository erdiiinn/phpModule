<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $quantity = $_POST['quantity'] ?? 0;
    $price = $_POST['price'] ?? 0;

    // Basic validation
    if (empty($title) || empty($description) || $quantity <= 0 || $price <= 0) {
        echo "Please fill all fields correctly.";
        exit;
    }

    try {
        $stmt = $conn->prepare("INSERT INTO products (title, description, quantity, price) VALUES (:title, :description, :quantity, :price)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindParam(':price', $price);
        $stmt->execute();

        header("Location: productsDashboard.php");
        exit;
    } catch (PDOException $e) {
        echo "Error adding product: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>

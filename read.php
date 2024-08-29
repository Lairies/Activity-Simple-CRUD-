<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $prize = $_POST['prize'];
    $quantity = $_POST['quantity'];
    $barcode = $_POST['barcode'];

    $stmt = $conn->prepare('INSERT INTO products (Name, Description, Prize, Quantity, Barcode) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param('ssdss', $name, $description, $prize, $quantity, $barcode);
    $stmt->execute();
    $stmt->close();

    header('Location: create.php');
}
$conn->close();
?>

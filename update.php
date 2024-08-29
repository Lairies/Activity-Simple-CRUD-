<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare('SELECT * FROM products WHERE Id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $prize = $_POST['prize'];
    $quantity = $_POST['quantity'];
    $barcode = $_POST['barcode'];

    $stmt = $conn->prepare('UPDATE products SET Name = ?, Description = ?, Prize = ?, Quantity = ?, Barcode = ?, updated_at = CURRENT_TIMESTAMP WHERE Id = ?');
    $stmt->bind_param('ssdssi', $name, $description, $prize, $quantity, $barcode, $id);
    $stmt->execute();
    $stmt->close();

    header('Location: create.php');
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Product</h2>
        <form action="update.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($product['Name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control"><?php echo htmlspecialchars($product['Description']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="prize">Prize</label>
                <input type="number" id="prize" name="prize" class="form-control" step="0.01" value="<?php echo htmlspecialchars($product['Prize']); ?>" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" class="form-control" value="<?php echo htmlspecialchars($product['Quantity']); ?>" required>
            </div>
            <div class="form-group">
                <label for="barcode">Barcode</label>
                <input type="text" id="barcode" name="barcode" class="form-control" value="<?php echo htmlspecialchars($product['Barcode']); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</body>
</html>

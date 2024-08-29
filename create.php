<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Product </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 style="text-align: center;" >LIST OF PRODUCTS</h2>

        <form action="read.php" method="post" class="mb-4">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="prize">Prize</label>
                <input type="number" id="prize" name="prize" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="barcode">Barcode</label>
                <input type="text" id="barcode" name="barcode" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>

        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-striped">';
            echo '<thead><tr><th>ID</th><th>Name</th><th>Description</th><th>Prize</th><th>Quantity</th><th>Barcode</th><th>Created At</th><th>Updated At</th><th>Actions</th></tr></thead><tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['Id']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Name']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Description']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Prize']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Quantity']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Barcode']) . '</td>';
                echo '<td>' . htmlspecialchars($row['created_at']) . '</td>';
                echo '<td>' . htmlspecialchars($row['updated_at']) . '</td>';
                echo '<td><a href="update.php?id=' . $row['Id'] . '" class="btn btn-warning btn-sm">Edit</a> <a href="delete.php?id=' . $row['Id'] . '" class="btn btn-danger btn-sm">Delete</a></td>';
                echo '</tr>';
            }
            echo '</tbody></table>';
        } else {
            echo '<p>No products found.</p>';
        }
        $conn->close();
        ?>
    </div>
</body>
</html>

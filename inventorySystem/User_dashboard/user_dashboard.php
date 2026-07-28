<?php
    require "user.php"; // gives us getProductsByCategory() and $conn
    $products = getProductsByCategory($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>

<div class="parent">
    <div class="title">
        <h1>Inventory Management System</h1>
    </div>

    <div class="menu">
        <h3>Menu</h3>
    </div>

    <div class="cat1">
        <h3>Frozen</h3>
        <?php foreach ($products["Frozen"] as $item): ?>
            <div class="product-item">
                <strong><?php echo htmlspecialchars($item['product_name']); ?></strong><br>
                Qty: <?php echo htmlspecialchars($item['quantity']); ?><br>
                ₱<?php echo htmlspecialchars($item['price']); ?>
                <button class="deleteProduct" data-id="<?php echo $item['id']; ?>">Delete product</button>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="cat2">
        <h3>Pork</h3>
        <?php foreach ($products["Pork"] as $item): ?>
            <div class="product-item">
                <strong><?php echo htmlspecialchars($item['product_name']); ?></strong><br>
                Qty: <?php echo htmlspecialchars($item['quantity']); ?><br>
                ₱<?php echo htmlspecialchars($item['price']); ?>
                <button class="deleteProduct" data-id="<?php echo $item['id']; ?>">Delete product</button>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="cat3">
        <h3>Beef</h3>
        <?php foreach ($products["Beef"] as $item): ?>
            <div class="product-item">
                <strong><?php echo htmlspecialchars($item['product_name']); ?></strong><br>
                Qty: <?php echo htmlspecialchars($item['quantity']); ?><br>
                ₱<?php echo htmlspecialchars($item['price']); ?>
                <button class="deleteProduct" data-id="<?php echo $item['id']; ?>">Delete product</button>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="addProduct">
        <h3>Add Product</h3>
        <button id="addProduct">Add product</button>
        
    </div>

    <div id="categoryTitle">
        <h2>Category</h2>
    </div>

    <div class="pending">
        <h3>Pending Products</h3>
    </div>
</div>

<script src="addproduct.js"></script>
</body>
</html>

<?php $conn->close(); ?>

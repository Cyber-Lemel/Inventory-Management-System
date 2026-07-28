<?php

require_once "../Sign-in/config.php";

function getProductsByCategory($conn) {
    $sql = "SELECT id, product_name, category, price, quantity FROM products_tbl ORDER BY category, product_name";
    $result = $conn->query($sql);

    $products = [
        "Frozen" => [],
        "Pork"   => [],
        "Beef"   => []
    ];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cat = $row['category'];
            if (isset($products[$cat])) {
                $products[$cat][] = $row;
            }
        }
    }

    return $products;
}
?>

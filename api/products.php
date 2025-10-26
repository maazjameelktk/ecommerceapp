<?php
// ecommerce/api/products.php
header('Content-Type: application/json');
include_once("db.php");

try {
    $stmt = $conn->prepare("SELECT id, name, description, price, image FROM products ORDER BY id DESC");
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // If some products have empty image, give a placeholder
    foreach($products as &$p){
        if(empty($p['image'])){
            $p['image'] = "https://via.placeholder.com/250x180?text=".urlencode($p['name']);
        }
    }

    echo json_encode([
        "success" => true,
        "products" => $products
    ]);

} catch(PDOException $e){
    echo json_encode([
        "success" => false,
        "message" => "Failed to load products: " . $e->getMessage()
    ]);
}
?>

<?php
// ecommerce/api/test.php
include_once("db.php");

try {
    // Use a tiny, safe query and a simple alias 't' so MariaDB doesn't choke
    $sql = "SELECT NOW() AS t";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode([
        "success" => true,
        "message" => "Database connected successfully!",
        "server_time" => isset($row['t']) ? $row['t'] : null
    ]);
} catch (PDOException $e) {
    echo json_encode([
        "success" => false,
        "message" => "Query failed: " . $e->getMessage()
    ]);
}
?>

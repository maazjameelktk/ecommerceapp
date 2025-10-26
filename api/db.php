<?php
$host = "localhost";
$db_name = "ecommerce2";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(["success"=>false,"message"=>"Connection failed: ".$e->getMessage()]);
    exit;
}
?>

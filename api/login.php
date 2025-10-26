<?php
include_once("db.php");
$data = json_decode(file_get_contents("php://input"), true);

if(!empty($data['email']) && !empty($data['password'])){
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$data['email']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user && password_verify($data['password'], $user['password'])){
        echo json_encode(["success"=>true,"message"=>"Login successful!","full_name"=>$user['full_name']]);
    } else {
        echo json_encode(["success"=>false,"message"=>"Invalid email or password."]);
    }
} else {
    echo json_encode(["success"=>false,"message"=>"All fields are required."]);
}
?>

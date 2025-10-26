<?php
include_once("db.php");
$data = json_decode(file_get_contents("php://input"), true);

if(!empty($data['full_name']) && !empty($data['email']) && !empty($data['password'])){
    $hashed = password_hash($data['password'], PASSWORD_DEFAULT);
    try {
        $stmt = $conn->prepare("INSERT INTO users (full_name,email,password) VALUES (?,?,?)");
        $stmt->execute([$data['full_name'],$data['email'],$hashed]);
        echo json_encode(["success"=>true,"message"=>"Signup successful!","full_name"=>$data['full_name']]);
    } catch(PDOException $e){
        echo json_encode(["success"=>false,"message"=>"Signup failed: ".$e->getMessage()]);
    }
} else {
    echo json_encode(["success"=>false,"message"=>"All fields are required."]);
}
?>

<?php
include_once("db.php");
$data = json_decode(file_get_contents("php://input"), true);

if(!empty($data['email'])){
    $token = bin2hex(random_bytes(4));
    try {
        $stmt = $conn->prepare("UPDATE users SET reset_token=? WHERE email=?");
        $stmt->execute([$token, $data['email']]);
        if($stmt->rowCount()>0){
            echo json_encode(["success"=>true,"message"=>"Reset token generated!","reset_token"=>$token]);
        } else {
            echo json_encode(["success"=>false,"message"=>"Email not found."]);
        }
    } catch(PDOException $e){
        echo json_encode(["success"=>false,"message"=>$e->getMessage()]);
    }
} else {
    echo json_encode(["success"=>false,"message"=>"Email is required."]);
}
?>

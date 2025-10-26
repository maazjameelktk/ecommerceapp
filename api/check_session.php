<?php
session_start();
if(isset($_SESSION['user_email'])) {
    echo json_encode(["logged_in"=>true, "full_name"=>$_SESSION['full_name']]);
} else {
    echo json_encode(["logged_in"=>false]);
}
?>

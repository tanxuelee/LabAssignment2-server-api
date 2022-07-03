<?php
if (!isset($_POST)) {
    $response = array('status' => 'failed', 'data' => null);
    sendJsonResponse($response);
    die();
}

include_once("dbconnect.php");
$id = $_POST['id'];

if (isset($_POST['image'])){
    $base64image = $_POST['image'];
    $decoded_string = base64_decode($base64image);
    $path = '../../assets/users/' . $id . '.jpg';
    $is_written = file_put_contents($path, $decoded_string);
    if ($is_written){
        $response = array('status' => 'success', 'data' => null);
    }else{
        $response = array('status' => 'failed', 'data' => null);
    }
    sendJsonResponse($response);
}

if (isset($_POST['newname'])){
    $newname = $_POST['newname'];
    $sqlupdatename = "UPDATE `tbl_users` SET `user_name`='$newname' WHERE user_email = '$email'";
    if ($conn->query($sqlupdatename) === TRUE) {
        $response = array('status' => 'success', 'data' => null);
    }else{
        $response = array('status' => 'failed', 'data' => null);    
    }
    sendJsonResponse($response);
}

if (isset($_POST['newphone'])){
    $newphone = $_POST['newphone'];
    $sqlupdatephone = "UPDATE `tbl_users` SET `user_phone`='$newphone' WHERE user_email = '$email'";
    if ($conn->query($sqlupdatephone) === TRUE) {
        $response = array('status' => 'success', 'data' => null);
    }else{
        $response = array('status' => 'failed', 'data' => null);    
    }
    sendJsonResponse($response);
}

if (isset($_POST['newaddress'])){
    $newaddress = $_POST['newaddress'];
    $sqlupdateaddress = "UPDATE `tbl_users` SET `user_address`='$newaddress' WHERE user_email = '$email'";
    if ($conn->query($sqlupdateaddress) === TRUE) {
        $response = array('status' => 'success', 'data' => null);
    }else{
        $response = array('status' => 'failed', 'data' => null);    
    }
    sendJsonResponse($response);
}

if (isset($_POST['newpassword'])){
    $newpassword = $_POST['newpassword'];
    $sqlupdatepassword = "UPDATE `tbl_users` SET `user_password`='$newpassword' WHERE user_email = '$email'";
    if ($conn->query($sqlupdatepassword) === TRUE) {
        $response = array('status' => 'success', 'data' => null);
    }else{
        $response = array('status' => 'failed', 'data' => null);    
    }
    sendJsonResponse($response);
}

function sendJsonResponse($sentArray)
{
    header('Content-Type: application/json');
    echo json_encode($sentArray);
}
?>
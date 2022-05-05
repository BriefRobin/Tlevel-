<?php
    require_once 'conn.php';
    $data = json_decode(file_get_contents("php://input"));
 
    $firstname = $data->firstname;
    $lastname = $data->lastname;
    $address = $data->address;
 
 
    mysqli_query($conn, "INSERT INTO `member` VALUES('', '$firstname', '$lastname', '$address')") or die(mysqli_error());
?>
<?php
require('./connect.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $post_data_raw = trim(file_get_contents("php://input"));
    $post_data = json_decode($post_data_raw, true);

    $name = $post_data["name"];
    $email = $post_data["email"];
    $mobile = $post_data["mobile"];
    $message = $post_data["message"];

    $sql = "INSERT INTO messages SET name='" . $name . "', email='" . $email . "', mobile='" . $mobile . "', message='" . $message . "'";
    mysqli_query($conn, $sql);
    echo "Success";
}

// API Endpoint: "http://localhost/php-simple-be/addMessage.php"

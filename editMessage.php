<?php
require('./connect.php');
if ($_SERVER['REQUEST_METHOD'] == "PUT") {
    $post_data_raw = trim(file_get_contents("php://input"));
    $post_data = json_decode($post_data_raw, true);

    $id = $post_data["id"];
    $name = $post_data["name"];
    $email = $post_data["email"];
    $mobile = $post_data["mobile"];
    $message = $post_data["message"];

    $sql = "UPDATE messages SET name='" . $name . "', email='" . $email . "', mobile='" . $mobile . "', message='" . $message . "' WHERE id='" . $id . "'";
    mysqli_query($conn, $sql);
    echo "Success";
}

// API Endpoint: "http://localhost/php-simple-be/editMessage.php"

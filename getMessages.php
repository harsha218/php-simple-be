<?php
require('./connect.php');
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $sql = "SELECT * FROM messages";
    $res = mysqli_query($conn, $sql);

    $result = array();
    while ($row = mysqli_fetch_array($res, 1)) {
        $result[] = $row;
    }

    echo json_encode($result);
}

// API Endpoint: "http://localhost/php-simple-be/getMessages.php"

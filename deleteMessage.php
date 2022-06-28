<?php
require('./connect.php');
if ($_SERVER['REQUEST_METHOD'] == "DELETE") {

    $sql = "DELETE from messages WHERE id='" . $_GET["id"] . "'";
    mysqli_query($conn, $sql);

    echo "Success";
}

// API Endpoint: "http://localhost/php-simple-be/deleteMessage.php"

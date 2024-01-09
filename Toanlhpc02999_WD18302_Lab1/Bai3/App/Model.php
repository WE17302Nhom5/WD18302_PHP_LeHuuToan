<?php

$connection = new mysqli('localhost', 'root', '', 'lab1_php2');
if ($connection == false) {
    die("Error: " . $connection->connect_error);
}

function get_user($connection, $email){
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }
    $connection->close();
}
?>
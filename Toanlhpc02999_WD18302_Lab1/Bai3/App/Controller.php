<?php
include "model.php";
$email= $_POST['email']??"";
$users = get_user($connection,$email);
include 'view.php'
?>
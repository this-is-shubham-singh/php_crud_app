<?php
include 'config.php';

$new_name = $_POST['sname'];
$new_address = $_POST['saddress'];
$new_class = $_POST['class'];
$new_phone = $_POST['sphone'];


$sql = "INSERT INTO student (sname, saddress, sclass, sphone) VALUES ('$new_name', '$new_address', '$new_class', '$new_phone')";

$response = mysqli_query($conn, $sql) or die("query failed");

header("Location: http://localhost/PHP_CRUD_APP/index.php");

mysqli_close($conn);

<?php

if (isset($_POST['save'])) {

    $id = $_POST['sid'];
    $sname = $_POST['sname'];
    $saddress = $_POST['saddress'];
    $sclass = $_POST['sclass'];
    $sphone = $_POST['sphone'];

    include "config.php";

    $sql = "UPDATE student 
            SET sname = '$sname', saddress = '$saddress', sclass = '$sclass', sphone = '$sphone' 
            WHERE sid = $id";

    mysqli_query($conn, $sql) or die("query failed");

    mysqli_close($conn);

    header("Location: http://localhost/PHP_CRUD_APP/index.php");
}

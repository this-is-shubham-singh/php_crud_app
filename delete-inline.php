<?php

$id = $_GET['id'];

include "config.php";

$sql = "DELETE FROM student WHERE sid = $id";

mysqli_query($conn, $sql) or die("connection failed");

mysqli_close($conn);

header("Location: http://localhost/PHP_CRUD_APP/index.php");

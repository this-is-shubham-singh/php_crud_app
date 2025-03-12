<?php include 'header.php'; ?>


<?php

if (isset($_POST['deletebtn'])) {

    include "config.php";

    $id = $_POST['sid'];

    $sql = "DELETE FROM student WHERE sid = $id";

    mysqli_query($conn, $sql) or die("sql connection failed");

    mysqli_close($conn);

    header("Location: http://localhost/PHP_CRUD_APP/index.php");
}


?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" required />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>
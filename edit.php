<?php include 'header.php'; ?>

<?php

$id = $_GET['id'];

include "config.php";

$sql = "SELECT * FROM student WHERE sid = $id";

$response = mysqli_query($conn, $sql);

if (mysqli_num_rows($response) > 0) {
?>

    <div id="main-content">
        <h2>Update Record</h2>

        <?php
        while ($row = mysqli_fetch_assoc($response)) {
        ?>
            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>" />
                    <input type="text" name="sname" value="<?php echo $row['sname'] ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress'] ?>" />
                </div>

                <!-- getting all classnames and show on select tag -->
                <div class="form-group">
                    <label>Class</label>

                    <?php
                    $sql1 = "SELECT * FROM CLASS";

                    $response1 = mysqli_query($conn, $sql1);

                    if (mysqli_num_rows($response1) > 0) {
                    ?>
                        <select name="sclass">
                            <?php
                            while ($row1 = mysqli_fetch_assoc($response1)) {

                                $selected = ($row['sclass'] == $row1['cid']) ? "selected" : "";
                            ?>

                                <option <?php echo $selected ?> value="<?php echo $row1['cid'] ?>"><?php echo $row1['classname'] ?></option>

                            <?php
                            }
                            ?>
                        </select>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone'] ?>" />
                </div>
                <input class="submit" type="submit" value="Update" name="save"/>
            </form>

        <?php } ?>
    </div>

<?php
}

mysqli_close($conn);
?>
</div>
</body>

</html>
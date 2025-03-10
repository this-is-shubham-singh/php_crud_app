<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>

            <?php
            include 'config.php';

            $sql = "SELECT * FROM class";

            $response = mysqli_query($conn, $sql) or die("query failed");

            if (mysqli_num_rows($response) > 0) {
            ?>

                <select name="class">
                    <option value="" selected disabled>Select Class</option>
                    <?php while ($row = mysqli_fetch_assoc($response)) { ?>

                        <option value="<?php echo $row['cid'] ?>"><?php echo $row['classname'] ?></option>

                    <?php } ?>
                </select>

            <?php
            }

            mysqli_close($conn);
            ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>
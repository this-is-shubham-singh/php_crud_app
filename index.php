<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>

        <?php
        include 'config.php';

        $sql = "SELECT * FROM student JOIN CLASS ON student.sclass = class.cid";

        $response = mysqli_query($conn, $sql) or die("sql query failed");

        if (mysqli_num_rows($response) > 0) {
        ?>

            <tbody>

                <?php
                while ($row = mysqli_fetch_assoc($response)) {
                ?>

                    <tr>
                        <td><?php echo $row['sid'];  ?></td>
                        <td><?php echo $row['sname'];  ?></td>
                        <td><?php echo $row['saddress'];  ?></td>
                        <td><?php echo $row['classname'];  ?></td>
                        <td><?php echo $row['sphone'];  ?></td>
                        <td>
                            <a href='edit.php?id=<?php echo $row['sid'] ?>'>Edit</a>
                            <a href='delete-inline.php?id=<?php echo $row['sid'] ?>'>Delete</a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>

        <?php
        } else {
            echo "<h2>No data</h2>";
        }

        mysqli_close($conn);
        ?>
    </table>
</div>
</div>
</body>

</html>
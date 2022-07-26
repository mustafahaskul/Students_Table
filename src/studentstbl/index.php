<html>

<body>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=students', 'root', '');
    $student = $db->query("select * from stdtable");
    ?>
    <table border="1px">

        <tr>
            <th colspan="4">Students Table</th>
        </tr>
        <tr>

            <td>Name</td>
            <td>Number</td>
            <td>Delete</td>
            <td>Update</td>
        </tr>
        <?php
        foreach ($student as $std) {
            printf('
                    <tr>
                        <td>%s</td>
                        <td>%d</td>
                        <td>
                        <a href="delete.php?stdnumber=%d">Sil</a>
                        </td>
                        <td>
                        <a href="update.php?stdnumber=%d">Update</a>
                        </td>
                    </tr>', $std["stdname"], $std["stdnumber"], $std['stdnumber'], $std['stdnumber']);
        }
        ?>

    </table>
    <hr />
    <h3>Add New Record</h3>
    <form action="save.php" method="POST">
        Name: <input type="text" name="stdname" required placeholder="For example: Halit Doğan"><br />
        Number : <input type="text" name="stdnumber" required><br />
        <input type="submit" value="Save">

    </form>
</body>

</html>
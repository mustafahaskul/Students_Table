<html>
    <body>

<?php 
    if($_POST){
        $new_name = $_POST["stdname"];
        $update_student_number = $_POST["hdnnumber"];
        $db=new PDO('mysql:host=localhost;dbname=students','root','');
        $query = $db->prepare("update stdtable set stdname = ? where stdnumber = ?");
        $update = $query->execute(array($new_name,$update_student_number));
        header("Location: index.php");
    }

    if($_GET){
        $stdnumber = $_GET['stdnumber'];
        $db=new PDO('mysql:host=localhost;dbname=students','root','');
        $query = $db->query("select * from stdtable where stdnumber = '{$stdnumber}'")->fetch(PDO::FETCH_ASSOC);
        if($query){
            $name = $query['stdname'];
        }
    }
?>

<h3>Update Information</h3>
    <form action="update.php" method="POST">
        <input type="hidden" name="hdnnumber" value="<?php echo $stdnumber ?>"><br>
        Name: <input type="text" name="stdname" value="<?php echo $name ?>" required placeholder="For example: Halit Doğan"><br />
        <input type="submit" value="Save">

    </form>
    </body>
</html>
<?php
if($_GET){
    $number = $_GET['stdnumber'];
    $db=new PDO('mysql:host=localhost;dbname=students','root','');
    $query = $db->prepare("delete from stdtable where stdnumber = ?");
    $del = $query->execute(array($number));
    header("Location: index.php");
}
?>
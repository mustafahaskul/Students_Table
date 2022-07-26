<?php 
try{
    $db=new PDO('mysql:host=localhost;dbname=students','root','');
    $name=$_POST["stdname"];
    $number=$_POST["stdnumber"];
    
    $sql = $db->prepare("insert into stdtable set stdname=:stdname,stdnumber=:stdnumber");
    $add = $sql->execute(array(
        "stdname" => $name,
        "stdnumber" => $number,
    ));
    if ($add)
        header("Location: index.php");
    else
        echo "Kayıt eklenemedi";
}
catch (PDOException $exception)
{
    print $exception->getMessage();
}
$db=null;


?>
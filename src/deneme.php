<?php

try {
    $db = new PDO('sqlite:Student_tabdatabase_folder.sqlite3');
    $sql = 'insert into students (name, number) values ("10005", "Hami Cak")';
    if($db->exec($sql) === false){
        print ('query error:<pre> ');
        print_r($db->errorInfo());
    }else{
        print('new record added!');
    }
}catch (PDOException $e){
    die('Connection error: '. $e->getMessage());
}catch (Exception $e){
    die('Unknown error');
}
